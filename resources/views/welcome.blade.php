<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-pink-600 h-screen antialiased leading-none font-sans">

    <div class="container px-8 mx-auto mt-32 text-2xl md:text-3xl text-white">
        <h1 class="text-7xl text-indigo-400 font-bold mb-36">{{ config('app.name') }}</h1>

        <p class=" mt-16 text-white leading-normal max-w-4xl">Ever worked on a website and thought, hey, the client hasn't supplied all the images that I need and fed up of using kittens as placeholders? Have no fear. img.pizza is here. </p>

        <div class="bg-gray-300 text-gray-600 p-12 my-16 rounded-lg shadow-2xl break-words leading-normal">
            &lt;img src="//img.pizza/<span class="font-bold text-pink-700">{width}</span>/<span class="text-pink-700 font-bold">{height}</span>" alt="mmm pizza"&gt;
        </div>

        <p class="mb-16  text-white">Which would load some tasty image like this:</p>

        <div class="block-shadow">
            <img class="shadow-2xl" src="./900/400" alt="mmm pizza">
        </div>

        <p class="my-16">Enjoy!</p>

        <footer class="text-sm tracking-wider uppercase opacity-75 mb-16">
            Lovingly created by the chaps at <a href="https://codepotato.co.uk" target="_blank">Codepotato</a>. Image credits - <a href="https://unsplash.com">Unsplash.com</a>
        </footer>


    </div>

</body>
</html>
