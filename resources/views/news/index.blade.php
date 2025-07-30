<x-layout heading="News">
    <div class="row">
        @foreach($posts as $post)
            <a class="text-decoration-none" href="/news/{{ $post->id }}">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
