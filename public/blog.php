<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Hotel Blog</title>

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
            margin: 0 0 10px 0;
            color: #333;
        }

        .blog-post p {
            color: #555;
            line-height: 1.6;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>

@include('home.header')

<?php
    $blogs = [
        [
            'image' => 'css/forn.jpg',
            'title' => 'Welcome to Smart Hotel',
            'content' => 'Smart Hotel offers comfortable rooms, quality food, and professional service for all guests.'
        ],
        [
            'image' => 'css/forn.jpg',
            'title' => 'Our Luxury Rooms',
            'content' => 'We provide modern and clean rooms with free WiFi, TV, and 24 hour service.'
        ],
        [
            'image' => 'css/forn.jpg',
            'title' => 'Best Food Experience',
            'content' => 'Enjoy delicious breakfast, lunch, and dinner prepared by experienced chefs.'
        ]
    ];
?>

<section class="blog-container">
    @foreach ($blogs as $blog)
        <div class="blog-post">
            <img src="{{ asset($blog['image']) }}" alt="Blog Image">
            <h2>{{ $blog['title'] }}</h2>
            <p>{{ $blog['content'] }}</p>
        </div>
    @endforeach
</section>

<footer>
    © 2026 Smart Hotel
</footer>
</body>
</html>
