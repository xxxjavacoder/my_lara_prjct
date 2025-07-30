<x-layout heading="News">
    <div class="row">
        @foreach($posts as $post)
            <a class="text-decoration-none mb-3" href="/news/{{ $post->id }}">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
