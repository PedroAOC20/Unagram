<x-app>
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<section class="pt-16  min-h-screen h-full">
    <div class="w-full lg:w-4/12 px-4 mx-auto">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16">
            <a href="/feed" class="absolute top-0 left-0 m-4">
                <i class="fa fa-arrow-left"></i>
            </a>
            <div class="px-6">
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4 flex justify-center">
                    <img alt="..." src="{{$profile->profile_picture}}" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">
                </div>
                <div class="w-full px-4 text-center mt-20">
                    <div class="text-center mt-12">
                    <h3 class="text-xl font-semibold leading-normaltext-blueGray-700">
                    {{$profile->name}}
                    </h3>
                    <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400">
                    {{$profile->username}}
                    </div>
                    <div class="mb-2 text-sm text-blueGray-600">
                        <i class="fas fa-university mr-2 text-sm text-blueGray-400"></i>
                        Engenharia de software
                    </div>
                </div>
                <div class="flex justify-center py-4 lg:pt-4 pt-8 gap-4">
                    <div class="p-3 text-center w-20">
                        <!-- <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                            22
                        </span>
                        <span class="text-sm text-blueGray-400">Amigos</span>
                    </div>
                    <div class="p-3 text-center  w-20">
                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                            10
                        </span>
                        <span class="text-sm text-blueGray-400">Fotos</span>
                    </div>
                    <div class="p-3 text-center  w-20">
                        <span class="text-xl font-bold block uppercase tracking-wide text-blueGray-600">
                            89
                        </span>
                        <span class="text-sm text-blueGray-400">Coment.</span>
                    </div> -->
                </div>
                </div>
            </div>
            <!-- <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                <div class="grid grid-cols-2 gap-1" style="justify-items: center; gap: 16px;">
                    <img alt="post" src="https://picsum.photos/200/200" alt="Imagem" class="hover:scale-150 rounded-lg object-cover">
                    <img alt="post" src="https://picsum.photos/200/200" alt="Imagem" class="hover:scale-150 rounded-lg object-cover">
                    <img alt="post" src="https://picsum.photos/200/200" alt="Imagem" class="hover:scale-150 rounded-lg object-cover">
                    <img alt="post" src="https://picsum.photos/200/200" alt="Imagem" class="hover:scale-150 rounded-lg object-cover">
                    <img alt="post" src="https://picsum.photos/200/200" alt="Imagem" class="hover:scale-150 rounded-lg object-cover">
                    <img alt="post" src="https://picsum.photos/200/200" alt="Imagem" class="hover:scale-150 rounded-lg object-cover">
                    <img alt="post" src="https://picsum.photos/200/200" alt="Imagem" class="hover:scale-150 rounded-lg object-cover">
                </div>
            </div> -->
        </div>
    </div>
</section>
</x-app>