<?php

namespace Soluzi\LogiView\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller;

class LogController extends Controller
{
    public function index()
    {
        $logFile = storage_path('logs/laravel.log');
        $logs = File::exists($logFile) ? explode("\n", File::get($logFile)) : [];

        return view('logiview::index', compact('logs'));
    }

    public function download()
    {
        return response()->download(storage_path('logs/laravel.log'));
    }

    public function clear()
    {
        File::put(storage_path('logs/laravel.log'), '');
        return back()->with('success', 'Logs cleared successfully!');
    }
}
