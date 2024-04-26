<?php

// app/Http/Controllers/BlogController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Add logic to fetch and display Cricket Blogs
        return view('cricket_blogs');
    }
}
