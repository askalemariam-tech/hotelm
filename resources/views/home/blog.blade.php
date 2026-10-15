<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Hotel Blog</title>

 <link rel="stylesheet" href="css/stylee.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        .blog-container {
            padding: 40px;
            max-width: 1000px;
            margin: auto;
        }

        .blog-post {
            background: #fff;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .blog-post:hover {
            transform: translateY(-5px);
        }

        .blog-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .blog-post h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .blog-post p {
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>

@include('home.header')

@php
    $blogs = [
        [
            'image' => 'css/room5.jpg',
            'title' => 'Welcome to Smart Hotel',
            'content' => 'Smart Hotel offers comfortable rooms, quality food, and professional service for all guests.'
        ],
        [
            'image' => 'css/forn.jpg',
            'title' => 'Our Luxury Rooms',
            'content' => 'We provide modern and clean rooms with free WiFi, TV, and 24 hour service.'
        ],
      
    ];
@endphp

<section class="blog-container">
    @foreach ($blogs as $blog)
        <div class="blog-post">
            <img src="{{ asset($blog['image']) }}" class="blog-img" alt="Blog Image">
            <h2>{{ $blog['title'] }}</h2>
            <p>{{ $blog['content'] }}</p>
        </div>
    @endforeach
</section>

@include('home.footer')

</body>
</html>
