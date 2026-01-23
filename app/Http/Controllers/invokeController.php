<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invokeController extends Controller
{
    public function __invoke(Request $request)
    {
        return 'This is an invokable controller';
    }
}
