<header class="bg-black text-white">
    <menu class="p-6 fixed top-0 left-0 right-0 bg-black">
        <ul class="absolute top-6 left-6 flex gap-4 font-light">
            <li><a href=""><img src="{{ asset('images/logo-m.png') }}" alt="Logo M de Mathéo BATELIER" class="w-10"></a></li>
            <span>|</span>
            <li>{{$emailHeader}}</li>
        </ul>
        <ul class="flex gap-4 justify-center">
            <li><a href="#" class="text-gray-300">{{$menuHeader1}}</a></li>
            <span>|</span>
            <li><a href="#">{{$menuHeader2}}</a></li>
            <span>|</span>
            <li><a href="#" class="text-gray-300">{{$menuHeader3}}</a></li>
        </ul>
        <ul class="absolute top-6 right-6 font-light">
            <button><a href="#" class="rounded-full py-2 px-4 bg-blue-600">{{$boutonHeader}}</a></button>
        </ul>
    </menu>
    <h1 class="text-center text-5xl pt-[140px]">{{$titreH1}}</h1>
    <h3 class="mt-4 text-xl text-center font-light">{!! $titreH3 !!}</h3>
    <div class="flex justify-center">
        <button class="mt-8"><a href="#" class="rounded-full py-2 px-4 bg-blue-600">{{$boutonContact}}</a></button>
    </div>
    <div class="flex justify-between mx-24 items-center mt-24 mb-10">
        <h2 class="text-2xl font-semibold">{{$titreH2}}</h2>
        <a href="#" class="text-lg underline">{{$lienProjet}}</a>
    </div>
    <div class="flex items-center justify-center pb-24">
        <div class="flex justify-between mx-24 items-center">
            <div class="border-[1px] w-[350px] p-6 rounded-lg">
                <div class="flex justify-between items-center">
                    <h4 class="text-[0.9em]">{{$langageProjet1}}</h4>
                    <h4 class="text-[0.9em]">{{$categorieProjet1}}</h4>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mt-4 mb-2">{{$titreProjet1}}</h3>
                    <p class="text-[0.9em]">{{$descriptionProjet1}}</p>
                    <a href="#" class="flex mt-8 items-center w-[120px]">{{$lienAccesProjet1}}<i class="fa-solid fa-arrow-right mt-1 ml-2"></i></a>
                </div>
            </div>
        </div>
        <div class="flex justify-between mx-24 items-cente">
            <div class="border-[1px] border-blue-600 w-[350px] p-6 rounded-lg bg-blue-600">
                <div class="flex justify-between items-center">
                    <h4 class="text-[0.9em]">{{$langageProjet2}}</h4>
                    <h4 class="text-[0.9em]">{{$categorieProjet2}}</h4>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mt-4 mb-2">{{$titreProjet2}}</h3>
                    <p class="text-[0.9em]">{{$descriptionProjet2}}</p>
                    <a href="#" class="flex mt-8 items-center w-[120px]">{{$lienAccesProjet2}}<i class="fa-solid fa-arrow-right mt-1 ml-2"></i></a>
                </div>
            </div>
        </div>
        <div class="flex justify-between mx-24 items-center">
            <div class="border-[1px] w-[350px] p-6 rounded-lg">
                <div class="flex justify-between items-center">
                    <h4 class="text-[0.9em]">{{$langageProjet3}}</h4>
                    <h4 class="text-[0.9em]">{{$categorieProjet3}}</h4>
                </div>
                <div>
                    <h3 class="text-2xl font-bold mt-4 mb-2">{{$titreProjet3}}</h3>
                    <p class="text-[0.9em]">{{$descriptionProjet3}}</p>
                    <a href="#" class="flex mt-8 items-center w-[120px]">{{$lienAccesProjet3}}<i class="fa-solid fa-arrow-right mt-1 ml-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>