<x-layout heading="Create new Post">
    <form method="POST" action="/posts/{{ $post->id }}/edit">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title" value="{{old('title') ? old('title') : $post->title}}">
            @error('title')
                <span class="text-warning">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea type="text" class="form-control" id="description" name="description">{{old('description') ? old('description') : $post->description }}</textarea>
            @error('description')
                <span class="text-warning">{{ $message }}</span>
            @enderror
        </div>

        <a class="btn btn-error" href="/posts">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
