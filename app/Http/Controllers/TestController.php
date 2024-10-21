<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestController extends Controller
{
    public function foo(Request $request)
    {
        $response = Http::asForm()->post('http://127.0.0.1:8000/api/test/bar', [
            'foo' => 'bar'
        ]);
        return $response;
    }

    public function bar(Request $request) {
        return $request->all();
    }
}
