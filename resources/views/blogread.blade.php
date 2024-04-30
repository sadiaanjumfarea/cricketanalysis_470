@extends('layout')

@section('title', 'User Blogs')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Blogs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px; /* Add some top margin */
        }

        h1 {
            text-align: center;
            color: #007bff; /* Blue color */
            margin-bottom: 30px; /* Add some bottom margin */
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 90%; /* Increase table width */
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff; /* White background */
        }

        th, td {
            padding: 15px;
            border: 1px solid #dee2e6; /* Light gray border */
            text-align: left;
        }

        th {
            background-color: #007bff; /* Blue header background */
            color: #fff; /* White text */
        }

        tr:hover {
            background-color: #f0f0f0; /* Light gray on hover */
        }

        tr:nth-child(even) {
            background-color: #f8f9fa; /* Alternate row color */
        }

        .name, .location, .blog {
            color: #007bff; /* Blue color for headings */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Blogs</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th><span class="name">Name</span></th>
                    <th><span class="location">Location</span></th>
                    <th><span class="blog">Blog</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userBlogs as $blog)
                <tr>
                    <td>{{ $blog->name }}</td>
                    <td>{{ $blog->location }}</td>
                    <td>{{ $blog->blog }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
