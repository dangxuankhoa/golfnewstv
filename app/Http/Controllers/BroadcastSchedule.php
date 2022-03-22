<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use Pawlox\VideoThumbnail\Facade\VideoThumbnail;
use Thumbnail;

class BroadcastSchedule extends Controller
{
    public function index()
    {
        return view('broadcastschedule.index');
    }
}
