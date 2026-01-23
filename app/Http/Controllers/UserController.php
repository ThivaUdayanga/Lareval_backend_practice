<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show($id)
    {
        return 'Hello User '.$id;
    }

    public function add()
    {
        return 'User Added Succesfully';
    }
}