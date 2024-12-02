<x-app>
    <div class="content">
        <section class="bg-blueGray-50">
            @foreach ($posts as $post)
                <x-post :post="$post" />
            @endforeach
        </section>
    </div>
    <footer class="footer bg-dark text-dark text-center p-4">
        <a href="post">Adicionar Post</a>
    </footer>
</x-app>

<style> 
    html, body {
      height: 100%;
    }
    body {
      display: flex;
      flex-direction: column;
    }
    .content {
      flex: 1 0 auto;
    }
    .footer {
      flex-shrink: 0;
    }
</style>