<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class VOD extends Controller
{
    public function index()
    {
        $videoLists = $this->_videoAll('');
        return view('vod.index', compact('videoLists'));
    }
    public function results(Request $request)
    {
        session(['search_query' => $request->search_query]);
        $videoLists = $this->_videoResults($request->search_query);
        return view('vod.results', compact('videoLists'));
    }


    // <----------------- Bản tin GolfNews 360 ----------------->
    public function bantin_360()
    {
        $videoLists = $this->_videoPlayLists('PLhm94b0GptrpXRmYUstO-52xvFNX_O32i');
        return view('vod.bantin_360.index', compact('videoLists'));
    }
    public function watch_bantin_360(Request $request, $id)
    {
        $singleVideo = $this->_singleVideo($id);
        $videoLists = $this->_videoWatch('PLhm94b0GptrpXRmYUstO-52xvFNX_O32i');
        foreach ($videoLists->items as $key => $value) {
            if($value->snippet->resourceId->videoId === $id){
                unset($videoLists->items[$key]);
            }
        }
        $done = array_slice($videoLists->items, 0, 6);
        return view('vod.bantin_360.watch', compact('singleVideo', 'done'));
    }
    public function token_next_bantin_360(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0GptrpXRmYUstO-52xvFNX_O32i', $request->code);
        return view('vod.bantin_360.index', compact('videoLists'));
    }
    public function token_prev_bantin_360(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0GptrpXRmYUstO-52xvFNX_O32i', $request->code);
        return view('vod.bantin_360.index', compact('videoLists'));
    }
    // <----------------- Bản tin GolfNews 360 ----------------->


    // <----------------- Chuyện golf ----------------->
    public function chuyen_golf()
    {
        $videoLists = $this->_videoPlayLists('PLhm94b0GptrrwhkGWhSnFG-WGMMrqlhZd');
        return view('vod.chuyen_golf.index', compact('videoLists'));
    }
    public function watch_chuyen_golf(Request $request, $id)
    {
        $singleVideo = $this->_singleVideo($id);
        $videoLists = $this->_videoWatch('PLhm94b0GptrrwhkGWhSnFG-WGMMrqlhZd');
        foreach ($videoLists->items as $key => $value) {
            if($value->snippet->resourceId->videoId == $id){
                unset($videoLists->items[$key]);
            }
        }
        $done = array_slice($videoLists->items, 0, 6);
        return view('vod.chuyen_golf.watch', compact('singleVideo', 'done'));
    }
    public function token_next_chuyen_golf(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0GptrrwhkGWhSnFG-WGMMrqlhZd', $request->code);
        return view('vod.chuyen_golf.index', compact('videoLists'));
    }
    public function token_prev_chuyen_golf(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0GptrrwhkGWhSnFG-WGMMrqlhZd', $request->code);
        return view('vod.chuyen_golf.index', compact('videoLists'));
    }
    // <----------------- Chuyện golf ----------------->


    // <----------------- Góc nhìn & Nhân vật ----------------->
    public function gnnv()
    {
        $videoLists = $this->_videoPlayLists('PLhm94b0GptroSfQ5KQnsspeA5xqZ49fGd');
        return view('vod.gnnv.index', compact('videoLists'));
    }
    public function watch_gnnv(Request $request, $id)
    {
        $singleVideo = $this->_singleVideo($id);
        $videoLists = $this->_videoWatch('PLhm94b0GptroSfQ5KQnsspeA5xqZ49fGd');
        foreach ($videoLists->items as $key => $value) {
            if($value->snippet->resourceId->videoId == $id){
                unset($videoLists->items[$key]);
            }
        }
        $done = array_slice($videoLists->items, 0, 6);
        return view('vod.gnnv.watch', compact('singleVideo', 'done'));
    }
    public function token_next_gnnv(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0GptroSfQ5KQnsspeA5xqZ49fGd', $request->code);
        return view('vod.gnnv.index', compact('videoLists'));
    }
    public function token_prev_gnnv(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0GptroSfQ5KQnsspeA5xqZ49fGd', $request->code);
        return view('vod.gnnv.index', compact('videoLists'));
    }
    // <----------------- Góc nhìn & Nhân vật ----------------->


    // <----------------- Rules It Right ----------------->
    public function rules_it_right()
    {
        $videoLists = $this->_videoPlayLists('PLhm94b0Gptrq3OoFnrMOv8KPE3YnrWfHa');
        return view('vod.rules_it_right.index', compact('videoLists'));
    }
    public function watch_rules_it_right(Request $request, $id)
    {
        $singleVideo = $this->_singleVideo($id);
        $videoLists = $this->_videoWatch('PLhm94b0Gptrq3OoFnrMOv8KPE3YnrWfHa');
        foreach ($videoLists->items as $key => $value) {
            if($value->snippet->resourceId->videoId == $id){
                unset($videoLists->items[$key]);
            }
        }
        $done = array_slice($videoLists->items, 0, 6);
        return view('vod.rules_it_right.watch', compact('singleVideo', 'done'));
    }
    public function token_next_rules_it_right(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0Gptrq3OoFnrMOv8KPE3YnrWfHa', $request->code);
        return view('vod.rules_it_right.index', compact('videoLists'));
    }
    public function token_prev_rules_it_right(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0Gptrq3OoFnrMOv8KPE3YnrWfHa', $request->code);
        return view('vod.rules_it_right.index', compact('videoLists'));
    }
    // <----------------- Rules It Right ----------------->


    // <----------------- Riêng biệt với thế giới ----------------->
    public function oncourse()
    {
        $url = 'https://s3.kstorage.vn' . '/' . 'tets' . '/';
        $link_video = [];
        $link_thumb = [];
        $name_etags = [];
        $results = [];
        $ok_results = [];
        $files = Storage::disk('s3')->files('oncourse');
        $thumbs = Storage::disk('s3')->files('oncourse/thumb');

        foreach ($thumbs as $thumb) {
            $name_thumb = substr($thumb, 15);
            $link_thumb[] =
                [
                    'name_thumb' => strstr($name_thumb, '.', true),
                    'link_thumb' => $url . $thumb
                ];
        }

        foreach ($files as $file) {
            $name_video = substr($file, 9);
            $link_video[] =
                [
                    'name_video' => strstr($name_video, '.', true),
                    'link_video' => $url . $file
                ];
        }

        foreach ($link_video as $value1) {
            foreach ($link_thumb as $value2) {
                if ($value1['name_video'] == $value2['name_thumb']) {
                    $results[] = $value2 + $value1;
                }
            }
        }

        $storage = Storage::disk('s3');
        $client = $storage->getAdapter()->getClient();
        $command = $client->getCommand('ListObjects');
        $command['Bucket'] = $storage->getAdapter()->getBucket();
        $command['Prefix'] = '';
        $etags = $client->execute($command);

        foreach ($etags['Contents'] as $key => $etag) {
            if (!str_contains($etag['Key'], '.mp4')) {
                unset($etag['Contents'][$key]);
            }
            if (str_contains($etag['Key'], '.mp4')) {
                $name_etag = substr($etag['Key'], 9);
                $name_etags[] = [
                    'name_etag' => strstr($name_etag, '.', true),
                    'etag' => str_replace('"','',$etag['ETag'])
                ];
            }
        }

        foreach ($results as $result) {
            foreach ($name_etags as $name_etag) {
                if ($result['name_video'] == $name_etag['name_etag']) {
                    $ok_result[] = $result + $name_etag;
                }
            }
        }

        $reversed = array_reverse($ok_result);

        $data = $this->paginate($reversed)->setPath(route('vod.oncourse'));

        // dd($data);

        return view('vod.oncourse.index', compact('data'));
    }
    public function watch_oncourse(Request $request)
    {
        $url = 'https://s3.kstorage.vn' . '/' . 'tets' . '/';
        $link_video = [];
        $link_thumb = [];
        $name_etags = [];
        $results = [];
        $ok_results = [];
        $dones = [];
        $files = Storage::disk('s3')->files('oncourse');
        $thumbs = Storage::disk('s3')->files('oncourse/thumb');

        foreach ($thumbs as $thumb) {
            $name_thumb = substr($thumb, 15);
            $link_thumb[] =
                [
                    'name_thumb' => strstr($name_thumb, '.', true),
                    'link_thumb' => $url . $thumb
                ];
        }

        foreach ($files as $file) {
            $name_video = substr($file, 9);
            $link_video[] =
                [
                    'name_video' => strstr($name_video, '.', true),
                    'link_video' => $url . $file
                ];
        }

        foreach ($link_video as $value1) {
            foreach ($link_thumb as $value2) {
                if ($value1['name_video'] == $value2['name_thumb']) {
                    $results[] = $value2 + $value1;
                }
            }
        }

        $storage = Storage::disk('s3');
        $client = $storage->getAdapter()->getClient();
        $command = $client->getCommand('ListObjects');
        $command['Bucket'] = $storage->getAdapter()->getBucket();
        $command['Prefix'] = '';
        $etags = $client->execute($command);

        foreach ($etags['Contents'] as $key => $etag) {
            if (!str_contains($etag['Key'], '.mp4')) {
                unset($etag['Contents'][$key]);
            }
            if (str_contains($etag['Key'], '.mp4')) {
                $name_etag = substr($etag['Key'], 9);
                $name_etags[] = [
                    'name_etag' => strstr($name_etag, '.', true),
                    'etag' => str_replace('"','',$etag['ETag']),
                    'time' => $etag['LastModified']->format(\DateTime::ISO8601)
                ];
            }
        }

        foreach ($results as $result) {
            foreach ($name_etags as $name_etag) {
                if ($result['name_video'] == $name_etag['name_etag']) {
                    $ok_results[] = $result + $name_etag;
                }
            }
        }

        $id = $request->id;
        foreach ($ok_results as $key => $ok_result) {
            if($ok_result['etag'] == $id){
                $dones[] = $ok_result;
            }
        }

        $reversed = array_reverse($ok_results);
        $arr = array_slice($reversed, 0, 6);
        return view('vod.oncourse.watch', compact('dones','arr'));
    }

    public function paginate($items, $perPage = 12, $page = null, $options = [])

    {

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

    }
    // <----------------- Riêng biệt với thế giới ----------------->


    // <----------------- Highlight ----------------->
    public function highlight()
    {
        $videoLists = $this->_videoPlayLists('PLhm94b0GptrquX4imXKBo6rDyFrKfOYrB');
        return view('vod.highlight.index', compact('videoLists'));
    }
    public function watch_highlight(Request $request, $id)
    {
        $singleVideo = $this->_singleVideo($id);
        $videoLists = $this->_videoWatch('PLhm94b0GptrquX4imXKBo6rDyFrKfOYrB');
        foreach ($videoLists->items as $key => $value) {
            if($value->snippet->resourceId->videoId == $id){
                unset($videoLists->items[$key]);
            }
        }
        $done = array_slice($videoLists->items, 0, 6);
        return view('vod.highlight.watch', compact('singleVideo', 'done'));
    }
    public function token_next_highlight(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0GptrquX4imXKBo6rDyFrKfOYrB', $request->code);
        return view('vod.highlight.index', compact('videoLists'));
    }
    public function token_prev_highlight(Request $request)
    {
        $videoLists = $this->_token_next('PLhm94b0GptrquX4imXKBo6rDyFrKfOYrB', $request->code);
        return view('vod.highlight.index', compact('videoLists'));
    }
    // <----------------- Highlight ----------------->

    //Search keywords
    protected function _videoPlayLists($keywords)
    {
        $part = 'snippet';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 15;
        $channelID = 'UCOouW6L_oTeIriBp8qsHiPA';
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        // $type = 'video'; // You can select any one or all, we are getting only videos

        $url = "$youTubeEndPoint?part=$part&channelID=$channelID&maxResults=$maxResults&key=$apiKey&playlistId=$keywords";
        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/playlist.json', $response->body());
        return $results;
    }

    protected function _videoWatch($keywords)
    {
        $part = 'snippet';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 7;
        $channelID = 'UCOouW6L_oTeIriBp8qsHiPA';
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        // $type = 'video'; // You can select any one or all, we are getting only videos

        $url = "$youTubeEndPoint?part=$part&channelID=$channelID&maxResults=$maxResults&key=$apiKey&playlistId=$keywords";
        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/playlist.json', $response->body());
        return $results;
    }

    protected function _token_next($keywords, $token_next)
    {
        $part = 'snippet';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 15;
        $channelID = 'UCOouW6L_oTeIriBp8qsHiPA';
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        // $type = 'video'; // You can select any one or all, we are getting only videos

        $url = "$youTubeEndPoint?part=$part&channelID=$channelID&maxResults=$maxResults&key=$apiKey&playlistId=$keywords&pageToken=$token_next";
        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/nextpage.json', $response->body());
        return $results;
    }

    protected function _token_prev($keywords, $token_prev)
    {
        $part = 'snippet';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 15;
        $channelID = 'UCOouW6L_oTeIriBp8qsHiPA';
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        // $type = 'video'; // You can select any one or all, we are getting only videos

        $url = "$youTubeEndPoint?part=$part&channelID=$channelID&maxResults=$maxResults&key=$apiKey&playlistId=$keywords&pageToken=$token_prev";
        $response = Http::get($url);
        $results = json_decode($response);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/nextpage.json', $response->body());
        return $results;
    }

    protected function _singleVideo($id)
    {
        $apiKey = config('services.youtube.api_key');
        $part = 'snippet';
        $url = "https://www.googleapis.com/youtube/v3/videos?part=$part&id=$id&key=$apiKey";
        $response = Http::get($url);
        $results = json_decode($response);

        // Will create a json file to see our single video details
        File::put(storage_path() . '/app/public/single.json', $response->body());
        return $results;
    }

    protected function _videoAll($keywords)
    {
        $part = 'snippet';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 50;
        $channelID = 'UCOouW6L_oTeIriBp8qsHiPA';
        $order = 'date';
        $type = 'video';
        $youTubeEndPoint = 'https://www.googleapis.com/youtube/v3/search';
        // $type = 'video'; // You can select any one or all, we are getting only videos

        $url = "$youTubeEndPoint?key=$apiKey&channelId=$channelID&part=$part&maxResults=$maxResults&type=$type&order=$order&q=$keywords";
        $response = Http::get($url);
        $results = json_decode($response);

        dd($url);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/allvideo.json', $response->body());
        return $results;
    }

    protected function _videoResults($keywords)
    {
        $part = 'snippet';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 50;
        $channelID = 'UCOouW6L_oTeIriBp8qsHiPA';
        $order = 'date';
        $type = 'video';
        $youTubeEndPoint = 'https://www.googleapis.com/youtube/v3/search';
        // $type = 'video'; // You can select any one or all, we are getting only videos

        $url = "$youTubeEndPoint?key=$apiKey&channelId=$channelID&part=$part&maxResults=$maxResults&type=$type&q=$keywords";
        $response = Http::get($url);
        $results = json_decode($response);

        //dd($url);

        // We will create a json file to see our response
        File::put(storage_path() . '/app/public/results.json', $response->body());
        return $results;
    }
}
