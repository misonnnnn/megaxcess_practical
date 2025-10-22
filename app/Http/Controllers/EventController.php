<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    public function eventDetails(){
        $contents = File::get(base_path('event.json'));
        $json = json_decode(json: $contents, associative: true);

        return $json;
    }
}
