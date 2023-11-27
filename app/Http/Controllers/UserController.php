<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index ()
    {
        return "ini adalah halaman user method index";
    }
    public function create()
    {
        return "ini adalah halman create method creat";
    }
    public function delete ()
    {
        return "ini adalah halaman Delete";
    }

}