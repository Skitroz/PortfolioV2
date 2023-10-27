<section class="flex justify-center gap-16 items-center bg-black pb-24">
    <form action="#">
        <h2 class="text-2xl font-semibold text-white text-center mb-10">{{$titreContact}}</h2>
        <div class="flex gap-6 mb-10">
            <input type="text" placeholder="Nom" name="nom" required class="p-4 outline-none focus:ring-0 border-[#d1d1d1] border-2 rounded bg-[#f3f3f3]">
            <input type="text" placeholder="Prénom" name="prenom" required class="p-4 outline-none focus:ring-0 border-[#d1d1d1] border-2 rounded bg-[#f3f3f3]">
        </div>
        <div class="flex gap-6 mb-10">
            <input type="email" placeholder="E-mail" name="email" required class="p-4 outline-none focus:ring-0 border-[#d1d1d1] border-2 rounded bg-[#f3f3f3]">
            <input type="tel" placeholder="Téléphone" name="telephone" required class="p-4 outline-none focus:ring-0 border-[#d1d1d1] border-2 rounded bg-[#f3f3f3]">
        </div>
        <div class="mb-10">
            <input type="text" placeholder="Objet" name="objet" required class="p-4 outline-none focus:ring-0 border-[#d1d1d1] border-2 rounded bg-[#f3f3f3] w-full">
        </div>
        <div class="mb-16">
            <textarea name="message" rows="5" placeholder="Message" required class="p-4 outline-none focus:ring-0 border-[#d1d1d1] border-2 rounded bg-[#f3f3f3] w-full"></textarea>
        </div>
        <div class="flex justify-center">
            <input type="submit" name="contact" class="py-4 px-10 rounded-lg bg-blue-600 text-white font-semibold cursor-pointer">
        </div>
    </form>
    <div class="flex-col flex gap-4">
        <a href="https://www.linkedin.com/in/matheobtl/" target="_blank"><i class="fa-brands fa-linkedin text-white text-4xl"></i>
        <a href="tel:+33638176964"><i class="fa-solid fa-phone text-white text-4xl"></i></a>
        <a href="mailto:contact@matheobatelier.fr"><i class="fa-solid fa-envelope text-white text-4xl"></i></a>
    </div>
</section>
