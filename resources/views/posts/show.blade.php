<x-layout heading="{{ $post->title }}">
    <p>
        {{ $post->description }}
    </p>
    <div class="d-flex">
        @can('edit', $post)
            <a class="btn btn-primary me-2" href="/posts/{{ $post->id }}/edit">Edit</a>
            <form method="POST" class="mb-0" action="/posts/{{ $post->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        @endcan
    </div>
</x-layout>
