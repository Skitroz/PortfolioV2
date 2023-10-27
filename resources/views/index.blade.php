<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0d88df16c5.js" crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}"></script> @vite('resources/css/app.css') <title>{{ $titrePage }}</title>
</head>

<body>
    @include('header')
    <div class="bg-gray-900 py-10">
        <p class="text-2xl text-white text-center">Finir 2ème c'est finir premier des perdants<br>~ Anonyme</p>
    </div>
    @include('mainIndex')
    @include('contact')
    @include('footer')
</body>

</html>
