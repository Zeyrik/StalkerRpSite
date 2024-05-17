<?php

namespace App\Http\Controllers\Lore;

use App\Http\Controllers\Controller;
use App\Models\Lore;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = Lore::all();
        return view('lore', compact('data'));
    }
}
