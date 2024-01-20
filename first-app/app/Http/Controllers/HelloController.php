<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello() {
        return response()->json([
            'message' => 'Hello World!'
        ]);
    }

    public function helloName(Request $request) {
        $name = $request->query('name');
        return response()->json([
            'message' => "Hello $name!"
        ]);
    }
}
