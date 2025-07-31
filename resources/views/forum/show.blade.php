<x-layout heading="{{ $post->title }}">
    <p>
        {{ $post->description }}
    </p>
    <div class="d-flex">
        <a class="btn btn-primary me-2" href="/forum/{{ $post->id }}/edit">Edit</a>
        <form method="POST" class="mb-0" action="/forum/{{ $post->id }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
    </div>
</x-layout>
