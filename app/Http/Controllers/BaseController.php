<?php

namespace App\Http\Controllers;

use App\Services\WebConfig\Service;
use Illuminate\Routing\Controller;


class BaseController  extends Controller
{
    public $service;

    public function __construct(Service $service){
        $this->service=$service;
    }
}
