<?php

namespace App\Services\WebConfig;

use App\Models\Icon;
use App\Models\WebConfig;

class  Service{
    static public function getWeb(){
        return WebConfig::orderBy('id', 'desc')->first();
    }

    static public function getIcons(){
        return Icon::all();
    }
}