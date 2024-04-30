<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBlog;


class BlogController extends Controller
{
    public function cricketBlogs()
    {
        return view('cricket_blogs'); // Update the view name here
    }
    public function saveBlog(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'blog' => 'required|string|max:200',
        ]);

        // Create a new user blog entry
        $userBlog = new UserBlog();
        $userBlog->name = $request->name;
        $userBlog->location = $request->location;
        $userBlog->blog = $request->blog;
        $userBlog->save();

        // Redirect back with success message or do whatever is needed
        return redirect()->back()->with('success', 'Blog saved successfully!');
    }
    public function blogRead()
    {
        // Fetch all entries from the user_blogs table
        $userBlogs = UserBlog::all();
        
        // Pass the data to the view
        return view('blogread', ['userBlogs' => $userBlogs]);
    }
}
