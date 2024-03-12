<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Controller extends BaseController
{
    public function index()
    {
        $today = now()->toDateString();
        $trains = DB::table('trains')
            ->whereDate('data_partenza', '>=', $today)
            ->get();

        return view('home', compact('trains'));
    }
}