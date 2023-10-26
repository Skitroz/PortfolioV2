<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0d88df16c5.js" crossorigin="anonymous"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    @vite('resources/css/app.css')
    <title>{{$titrePage}}</title>
</head>

<body>
    @include('header')
    <main class="bg-black text-white">
        <div class="mx-24">
            <h2 class="text-2xl font-semibold">{{$titreMain}}</h2>
            <div class="py-10">
                <i class="fa-brands fa-php text-5xl"></i>
                <i class="fa-brands fa-react text-5xl"></i>
                <i class="fa-brands fa-css3 text-5xl"></i>
                <i class="fa-brands fa-html5 text-5xl"></i>
            </div>
        </div>
    </main>
</body>

</html>