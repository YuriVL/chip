<?php return array (
  'f0c10b7a2e678693dd3184ac1822acf7' => 
  array (
    'criteria' => 
    array (
      'name' => 'getyoutube',
    ),
    'object' => 
    array (
      'name' => 'getyoutube',
      'path' => '{core_path}components/getyoutube/',
      'assets_path' => '{assets_path}components/getyoutube/',
    ),
  ),
  'b5e5c1619c969b30584eb1adf60db195' => 
  array (
    'criteria' => 
    array (
      'key' => 'getyoutube.api_key',
    ),
    'object' => 
    array (
      'key' => 'getyoutube.api_key',
      'value' => 'AIzaSyD29Z3rl-xLc_jAeiB6nXjOewpgf6Lm2P0',
      'xtype' => 'textfield',
      'namespace' => 'getyoutube',
      'area' => 'api',
      'editedon' => '2019-01-22 09:14:46',
    ),
  ),
  'f80e9484720d59bb2941748d396849ca' => 
  array (
    'criteria' => 
    array (
      'category' => 'getYoutube',
    ),
    'object' => 
    array (
      'id' => 20,
      'parent' => 0,
      'category' => 'getYoutube',
      'rank' => 0,
    ),
  ),
  '1231890841f2dd4b634d91572be2cc27' => 
  array (
    'criteria' => 
    array (
      'name' => 'videoTpl',
    ),
    'object' => 
    array (
      'id' => 75,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'videoTpl',
      'description' => 'Example Chunk serving as a Template.',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'snippet' => '<div>
  <span>[[+idx]]<a href="[[+url]]" target="_blank">[[+title]]</a></span><br>
  <a href="[[+url]]" target="_blank"><img src="[[+thumbnail_small]]" alt="[[+title]]"></a><br>
  <span><i>[[+publish_date:ago]]</i><br></span>
</div>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<div>
  <span>[[+idx]]<a href="[[+url]]" target="_blank">[[+title]]</a></span><br>
  <a href="[[+url]]" target="_blank"><img src="[[+thumbnail_small]]" alt="[[+title]]"></a><br>
  <span><i>[[+publish_date:ago]]</i><br></span>
</div>',
    ),
  ),
  '34a49686daae9851b23ab99ad84478f2' => 
  array (
    'criteria' => 
    array (
      'name' => 'getYoutube',
    ),
    'object' => 
    array (
      'id' => 65,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'getYoutube',
      'description' => 'A video retrieval Snippet for MODX Revolution. This snippet uses the YouTube Data API (v3) to search for specified channels or videos and return the associated data.',
      'editor_type' => 0,
      'category' => 20,
      'cache_type' => 0,
      'snippet' => '/**
 * A simple video retrieval Snippet for MODX Revolution.
 *
 * @author David Pede <dev@tasian.media> <https://twitter.com/davepede>
 * @version 1.2.0-pl
 * @released November 16, 2017
 * @since February 25, 2014
 * @package getyoutube
 *
 * Copyright (C) 2017 David Pede. All rights reserved. <dev@tasian.media>
 *
 * getYoutube is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or any later version.

 * getYoutube is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License along with
 * getYoutube; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

$getyoutube = $modx->getService(\'getyoutube\',\'getYoutube\',$modx->getOption(\'getyoutube.core_path\',null,$modx->getOption(\'core_path\').\'components/getyoutube/\').\'model/getyoutube/\',$scriptProperties);
if (!($getyoutube instanceof getYoutube)) return \'\';

$modx->loadClass(\'Search\',$getyoutube->config[\'modelPath\'], true, true);
$search = new Search($modx, MODX_ASSETS_PATH .\'youtube.json\');

/* set default properties */
$apiKey = $modx->getOption(\'getyoutube.api_key\',$scriptProperties);
$mode = !empty($mode) ? $mode : \'\'; //Acceptable values are: channel, video
$channel = !empty($channel) ? $channel : \'\';
$playlist = !empty($playlist) ? $playlist : \'\';
$video = !empty($video) ? $video : \'\';
$tpl = !empty($tpl) ? $tpl : \'\';
$tplAlt = !empty($tplAlt) ? $tplAlt : \'\';
$toPlaceholder = !empty($toPlaceholder) ? $toPlaceholder : \'\'; //Blank default makes \'&toPlaceholder\' optional
$sortby = !empty($sortby) ? $sortby : \'\'; //Acceptable values are: date, rating, title, viewCount
$safeSearch = !empty($safeSearch) ? $safeSearch : \'\'; //Acceptable values are: none, moderate, strict
$json = !empty($json) ? $json : null;

$search->json = $json;

$limit = !empty($limit) ? $limit : \'\';
$pageToken = preg_replace(\'/[^-a-zA-Z0-9_]/\',\'\',$_GET[\'page\']); //For pagination
$totalVar = !empty($totalVar) ? $totalVar : \'\';

switch ($mode) {
  case "channel":
    if (!empty($channel)) {
      $channelUrl = "https://www.googleapis.com/youtube/v3/search?part=id,snippet&channelId=$channel&type=video&safeSearch=$safeSearch&maxResults=$limit&order=$sortby&pageToken=$pageToken&key=$apiKey";
      $output = $search->channel($channelUrl,$tpl,$tplAlt,$toPlaceholder,$pageToken,$totalVar);
    }else{
      $modx->log(modX::LOG_LEVEL_ERROR, \'getYoutube() - &channel is required\');
    }
    break;
  case "playlist":
    if (!empty($playlist)) {
      $playlistUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=id,snippet&playlistId=$playlist&type=video&safeSearch=$safeSearch&maxResults=$limit&order=$sortby&pageToken=$pageToken&key=$apiKey";
      $output = $search->playlist($playlistUrl,$tpl,$tplAlt,$toPlaceholder,$pageToken,$totalVar);
    }else{
      $modx->log(modX::LOG_LEVEL_ERROR, \'getYoutube() - &playlist is required\');
    }
    break;
  case "video":
    if (!empty($video)) {
      $videoUrl = "https://www.googleapis.com/youtube/v3/videos?part=id,snippet,contentDetails,statistics&id=$video&key=$apiKey";
      $output = $search->video($videoUrl,$tpl,$tplAlt,$toPlaceholder,$totalVar);
    }else{
      $modx->log(modX::LOG_LEVEL_ERROR, \'getYoutube() - &video is required\');
    }
    break;
  default: $modx->log(modX::LOG_LEVEL_ERROR, \'getYoutube() - &mode is required\'); break;
};

return $output;',
      'locked' => 0,
      'properties' => 'a:12:{s:7:"channel";a:7:{s:4:"name";s:7:"channel";s:4:"desc";s:94:"The numeric ID of a YouTube Channel to search. All videos within the channel will be returned.";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:4:"json";a:7:{s:4:"name";s:4:"json";s:4:"desc";s:0:"";s:4:"type";s:13:"combo-boolean";s:7:"options";a:0:{}s:5:"value";b:0;s:7:"lexicon";N;s:4:"area";s:0:"";}s:5:"limit";a:7:{s:4:"name";s:5:"limit";s:4:"desc";s:131:"Limits the number of Videos returned. [NOTE: Acceptable values are 0 to 50, inclusive. Please see pagination docs for more details]";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:2:"50";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:4:"mode";a:7:{s:4:"name";s:4:"mode";s:4:"desc";s:62:"Select the search mode. [OPTIONS: channel or video] [REQUIRED]";s:4:"type";s:4:"list";s:7:"options";a:3:{i:0;a:2:{s:4:"text";s:7:"channel";s:5:"value";s:7:"channel";}i:1;a:2:{s:4:"text";s:5:"video";s:5:"value";s:5:"video";}i:2;a:2:{s:4:"text";s:8:"playlist";s:5:"value";s:8:"playlist";}}s:5:"value";s:7:"channel";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:8:"playlist";a:7:{s:4:"name";s:8:"playlist";s:4:"desc";s:96:"The numeric ID of a YouTube Playlist to search. All videos within the playlist will be returned.";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:10:"safeSearch";a:7:{s:4:"name";s:10:"safeSearch";s:4:"desc";s:123:"Select whether the results should include restricted content as well as standard content. [OPTIONS: none, moderate, strict]";s:4:"type";s:4:"list";s:7:"options";a:3:{i:0;a:2:{s:4:"text";s:19:"Не указано";s:5:"value";s:4:"none";}i:1;a:2:{s:4:"text";s:8:"moderate";s:5:"value";s:8:"moderate";}i:2;a:2:{s:4:"text";s:6:"strict";s:5:"value";s:6:"strict";}}s:5:"value";s:4:"none";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:6:"sortby";a:7:{s:4:"name";s:6:"sortby";s:4:"desc";s:72:"A placeholder name to sort by. [OPTIONS: date, rating, title, viewCount]";s:4:"type";s:4:"list";s:7:"options";a:4:{i:0;a:2:{s:4:"text";s:8:"Дата";s:5:"value";s:4:"date";}i:1;a:2:{s:4:"text";s:6:"rating";s:5:"value";s:6:"rating";}i:2;a:2:{s:4:"text";s:18:"Заголовок";s:5:"value";s:5:"title";}i:3;a:2:{s:4:"text";s:9:"viewCount";s:5:"value";s:9:"viewCount";}}s:5:"value";s:4:"date";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:13:"toPlaceholder";a:7:{s:4:"name";s:13:"toPlaceholder";s:4:"desc";s:85:"If set, will assign the output to this placeholder instead of outputting it directly.";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:8:"totalVar";a:7:{s:4:"name";s:8:"totalVar";s:4:"desc";s:97:"Define the key of a placeholder set by getYoutube indicating the total number of Videos returned.";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:5:"total";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:3:"tpl";a:7:{s:4:"name";s:3:"tpl";s:4:"desc";s:49:"Name of a chunk serving as a template. [REQUIRED]";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:8:"videoTpl";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:6:"tplAlt";a:7:{s:4:"name";s:6:"tplAlt";s:4:"desc";s:60:"Name of a chunk serving as a template for every other Video.";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}s:5:"video";a:7:{s:4:"name";s:5:"video";s:4:"desc";s:54:"A comma-separated list of numeric video IDs to return.";s:4:"type";s:9:"textfield";s:7:"options";a:0:{}s:5:"value";s:0:"";s:7:"lexicon";s:21:"getyoutube:properties";s:4:"area";s:0:"";}}',
      'moduleguid' => '',
      'static' => 0,
      'static_file' => '',
      'content' => '/**
 * A simple video retrieval Snippet for MODX Revolution.
 *
 * @author David Pede <dev@tasian.media> <https://twitter.com/davepede>
 * @version 1.2.0-pl
 * @released November 16, 2017
 * @since February 25, 2014
 * @package getyoutube
 *
 * Copyright (C) 2017 David Pede. All rights reserved. <dev@tasian.media>
 *
 * getYoutube is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or any later version.

 * getYoutube is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License along with
 * getYoutube; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

$getyoutube = $modx->getService(\'getyoutube\',\'getYoutube\',$modx->getOption(\'getyoutube.core_path\',null,$modx->getOption(\'core_path\').\'components/getyoutube/\').\'model/getyoutube/\',$scriptProperties);
if (!($getyoutube instanceof getYoutube)) return \'\';

$modx->loadClass(\'Search\',$getyoutube->config[\'modelPath\'], true, true);
$search = new Search($modx, MODX_ASSETS_PATH .\'youtube.json\');

/* set default properties */
$apiKey = $modx->getOption(\'getyoutube.api_key\',$scriptProperties);
$mode = !empty($mode) ? $mode : \'\'; //Acceptable values are: channel, video
$channel = !empty($channel) ? $channel : \'\';
$playlist = !empty($playlist) ? $playlist : \'\';
$video = !empty($video) ? $video : \'\';
$tpl = !empty($tpl) ? $tpl : \'\';
$tplAlt = !empty($tplAlt) ? $tplAlt : \'\';
$toPlaceholder = !empty($toPlaceholder) ? $toPlaceholder : \'\'; //Blank default makes \'&toPlaceholder\' optional
$sortby = !empty($sortby) ? $sortby : \'\'; //Acceptable values are: date, rating, title, viewCount
$safeSearch = !empty($safeSearch) ? $safeSearch : \'\'; //Acceptable values are: none, moderate, strict
$json = !empty($json) ? $json : null;

$search->json = $json;

$limit = !empty($limit) ? $limit : \'\';
$pageToken = preg_replace(\'/[^-a-zA-Z0-9_]/\',\'\',$_GET[\'page\']); //For pagination
$totalVar = !empty($totalVar) ? $totalVar : \'\';

switch ($mode) {
  case "channel":
    if (!empty($channel)) {
      $channelUrl = "https://www.googleapis.com/youtube/v3/search?part=id,snippet&channelId=$channel&type=video&safeSearch=$safeSearch&maxResults=$limit&order=$sortby&pageToken=$pageToken&key=$apiKey";
      $output = $search->channel($channelUrl,$tpl,$tplAlt,$toPlaceholder,$pageToken,$totalVar);
    }else{
      $modx->log(modX::LOG_LEVEL_ERROR, \'getYoutube() - &channel is required\');
    }
    break;
  case "playlist":
    if (!empty($playlist)) {
      $playlistUrl = "https://www.googleapis.com/youtube/v3/playlistItems?part=id,snippet&playlistId=$playlist&type=video&safeSearch=$safeSearch&maxResults=$limit&order=$sortby&pageToken=$pageToken&key=$apiKey";
      $output = $search->playlist($playlistUrl,$tpl,$tplAlt,$toPlaceholder,$pageToken,$totalVar);
    }else{
      $modx->log(modX::LOG_LEVEL_ERROR, \'getYoutube() - &playlist is required\');
    }
    break;
  case "video":
    if (!empty($video)) {
      $videoUrl = "https://www.googleapis.com/youtube/v3/videos?part=id,snippet,contentDetails,statistics&id=$video&key=$apiKey";
      $output = $search->video($videoUrl,$tpl,$tplAlt,$toPlaceholder,$totalVar);
    }else{
      $modx->log(modX::LOG_LEVEL_ERROR, \'getYoutube() - &video is required\');
    }
    break;
  default: $modx->log(modX::LOG_LEVEL_ERROR, \'getYoutube() - &mode is required\'); break;
};

return $output;',
    ),
  ),
  '0e04e323f180efb0306888d72ac37c58' => 
  array (
    'criteria' => 
    array (
      'parent' => 20,
      'category' => 'getYoutube',
    ),
    'object' => 
    array (
      'id' => 21,
      'parent' => 20,
      'category' => 'getYoutube',
      'rank' => 0,
    ),
  ),
);