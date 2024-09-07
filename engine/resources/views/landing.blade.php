<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/landing/landingpage.css')}}">
    </head>
    <body class="antialiased">
    <div class="landing-page">
        <header>
          <div class="container">
            <a href="#" class="logo"><b>mysimplesoft</b></a>
            <ul class="links">
              <li>Home</li>
              <li>About Us</li>
              <li>Work</li>
              <li>Info</li>
              <li>Get Started</li>
            </ul>
          </div>
        </header>
        <div class="content">
          <div class="container">
            <div class="info">
              <h1>Looking For Inspiration</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus odit nihil ullam nesciunt quidem iste, Repellendus odit nihil</p>
              <button>Button name</button>
            </div>
            <div class="image">
              <img src="https://i.postimg.cc/65QxYYzh/001234.png">
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
