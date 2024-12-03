<x-app>
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<section class="pt-16  min-h-screen h-full">
    <div class="w-full mx-auto">
        <div class="mx-auto flex justify-start max-w-3xl md:mb-8rounded-lg items-center relative md:p-0">
            <a href="/feed">
                <i class="fa fa-arrow-left"></i>
            </a>
        </div>
        <x-post :post=$post/>
    </div>
</section>
</x-app>