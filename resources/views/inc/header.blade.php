<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <title>https://www.sothebysrealty.com/eng/rentals/int</title>--}}
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

<header>
    <div class="">
        <div class="header login">
            <span class="element">login</span>
        </div>
        <div class="header logo">
            <a href="{{ route ('alldatas') }}" class="element">logo</a>
        </div>
        <div class="header menu">
            <span class="element" id="filterOpen">filter</span>
            <a href="{{ route ('agents') }}" class="element">agents</a>
            <a href="{{ route ('aboutUs') }}" class="element">about us</a>
            <a href="{{ route ('addpost') }}" class="element">add</a>
        </div>

    </div>
</header>

