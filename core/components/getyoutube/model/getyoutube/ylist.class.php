<?php
/**
 * @package getyoutube
 *
 */

class Ylist {

    /** @var modX $modx */
    private $modx;

    public $json;

    public function __construct(modX &$modx, $file)
    {
        $this->file = $file;
        $this->modx =& $modx;
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



    public function channel($channelUrl,$tpl,$tplAlt,$toPlaceholder,$pageToken=0,$totalVar, $limit){
        $json = $this->getList($channelUrl)
        or $this->modx->log(modX::LOG_LEVEL_ERROR, 'getYoutube() - Channel API request not recognised');

        $videos = json_decode($json, TRUE);

        $total = count($videos);
        if($pageToken >= 1){
            $pageToken = $pageToken * $limit;
        }

        $videos = array_slice($videos, $pageToken, $limit);

        /* SETUP PAGINATION */

        $this->modx->setPlaceholder($totalVar,$total);

        $idx = 0; //Starts index at 0
        $total = 0;

        $output =  $results = '';

        foreach($videos as $video) {
            /* SET PLACEHOLDERS */
            $this->modx->setPlaceholder('id',$video['id']);
            $this->modx->setPlaceholder('url',$video['url']);
            $this->modx->setPlaceholder('embed_url',$video['embed_url']);
            $this->modx->setPlaceholder('title',$video['title']);
            $this->modx->setPlaceholder('channel_title',$video['channel_title']);
            $this->modx->setPlaceholder('description',$video['description']);
            $this->modx->setPlaceholder('publish_date',$video['publish_date']);
            $this->modx->setPlaceholder('thumbnail_small',$video['thumbnail_small']); //120px wide and 90px tall
            $this->modx->setPlaceholder('thumbnail_medium',$video['thumbnail_medium']); //320px wide and 180px tall
            $this->modx->setPlaceholder('thumbnail_large',$video['thumbnail_large']); //480px wide and 360px tall
            /* SET TEMPLATES */
            if (!empty($tplAlt)) {
                if($idx % 2 == 0) { // Checks if index can be divided by 2 (alt)
                    $rowTpl = $tpl;
                }else{
                    $rowTpl = $tplAlt;
                }
            }else{
                $rowTpl = $tpl;
            }
            $idx++; //Increases index by +1

            $results .= $this->modx->getChunk($rowTpl,$video);
        }
        if(!empty($results)) {
            if (!empty($toPlaceholder)) {
                $output = $this->modx->setPlaceholder($toPlaceholder,$results); //Set '$toPlaceholder' placeholder
            }else{
                $output = $results;
            }
        }
        return $output;
    }


}
