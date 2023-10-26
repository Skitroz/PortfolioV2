<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/0d88df16c5.js" crossorigin="anonymous"></script>
    <script src="{{
        mix('js/app.js') }}"></script> @vite('resources/css/app.css') <title>{{ $titrePage }}</title>
</head>

<body>
    @include('header ')
    <main class="bg-black text-white">
        <div class="mx-24">
            <h2 class="text-2xl font-semibold">{{$titreMain}}</h2>
            <div class="flex jusitfy-between items-center">
                <div class="py-10 flex-col">
                    <div class="flex space-x-32 mb-10">
                        <div>
                            <h2 class="text-xl font-semibold text-center">{{$titreCompetence1}}</h2>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence1_1}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[75%] h-3"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence1_2}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[50%] h-3"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-center">{{$titreCompetence2}}</h2>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence2_1}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[95%] h-3"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence2_2}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[90%] h-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-32">
                        <div>
                            <h2 class="text-xl font-semibold text-center">{{$titreCompetence3}}</h2>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence3_1}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[60%] h-3"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence3_2}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[80%] h-3"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence3_3}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[50%] h-3"></div>
                                </div>
                            </div>
                            <div class="mb-8">
                                <h2 class="text-lg mb-2">{{$textCompetence3_4}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[20%] h-3"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-xl font-semibold text-center">{{$titreCompetence4}}</h2>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence4_1}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[100%] h-3"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence4_2}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[40%] h-3"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <h2 class="text-lg mb-2">{{$textCompetence4_3}}</h2>
                                <div class="bg-gray-300 rounded-full w-80 h-3">
                                    <div class="bg-blue-600 text-white rounded-full w-[90%] h-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="text-6xl">CV</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
