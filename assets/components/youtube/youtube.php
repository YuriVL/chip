<?php
const MODX_ASSETS_PATH = '';

class Youtube {

    private $file = 'youtube.json';

    public function __construct()
    {
        $this->file = MODX_ASSETS_PATH . $this->file;
    }
    /**
     * CURL request and return data.
     *
     * @param string $url The url to fetch.
     * @return mixed $data The data returned.
     */
    private function curlJson($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/x-www-form-urlencoded;charset=UTF-8"]);
        $string = curl_exec($ch);
        curl_close($ch);
        return $string;
    }

    private function recursionCurl(&$items, $url, $token)
    {
        $newurl = $url.'&pageToken='.$token;
        $string = $this->curlJson($newurl);
        $newjson = json_decode($string, true);
        foreach ($newjson['items'] as $item){
            $items[] = $item;
        }
        if(isset($newjson['nextPageToken'])){
            $this->recursionCurl($items, $url, $newjson['nextPageToken']);
        }
    }

    private function setPlacholders($items)
    {
        $newItems = [];
        foreach ($items as $item) {
            $item['id']['videoId'] = $item['id']['videoId'] ?? null;
            if($item['id']['videoId'] !== null){
                $newItems[] = [
                    'id' => $item['id']['videoId'],
                    'url' => "https://www.youtube.com/watch?v=" . $item['id']['videoId'],
                    'embed_url' => "https://www.youtube.com/embed/" . $item['id']['videoId'],
                    'title' => $item['snippet']['title'],
                    'channel_title' => $item['snippet']['channelTitle'],
                    'description' => $item['snippet']['description'],
                    'publish_date' => $item['snippet']['publishedAt'],
                    'thumbnail_small' => $item['snippet']['thumbnails']['default']['url'],
                    'thumbnail_medium' => $item['snippet']['thumbnails']['medium']['url'],
                    'thumbnail_large' => $item['snippet']['thumbnails']['high']['url'],
                    'thumbnail_standart' => str_replace('hqdefault', 'maxresdefault', $item['snippet']['thumbnails']['high']['url'])
                ];
            }
        }

        usort($newItems, function($a, $b) {
            $t1 = (new \DateTime($a['publish_date']))->getTimestamp();
            $t2 = (new \DateTime($b['publish_date']))->getTimestamp();
            return $t2 - $t1;
        });

        return $newItems;

    }

    public function getList($url)
    {
        if(!file_exists($this->file)){
            $fp = fopen($this->file, 'w+');
            $string = $this->curlJson($url);
            $json = (array)json_decode($string, true);
            $items = $json['items'] ?? [];
            if(isset($json['nextPageToken'])){
                $this->recursionCurl($items, $url, $json['nextPageToken']);
            }

            $json = json_encode($this->setPlacholders($items));
            fwrite($fp, $json);
            fclose($fp);
        } else {
            $json = file_get_contents($this->file);
        }
        return $json;
    }


}
$api_key='AIzaSyCgKKg51oViNEAsBJZdV-gspEXOqk889is';
$channelID = 'UCDJNfT1aWoMzNrLoqFYi_Fw';
$limit = 50;
$url='https://www.googleapis.com/youtube/v3/search?key='.$api_key.'&channelId='.$channelID.'&part=snippet,id&order=date&maxResults='.$limit;
$json = (new Youtube())->getList($url);

$items = json_decode($json);