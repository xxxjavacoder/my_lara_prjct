<x-layout heading="Services page">
    <div class="row">
        @foreach($posts as $post)
            <div class="card mx-3 mb-3 col-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
