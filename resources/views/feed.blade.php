<x-app>
    <section class="bg-blueGray-50">
        @foreach ($posts as $post)
            <x-post :post="$post" />
        @endforeach
    </section>
</x-app>