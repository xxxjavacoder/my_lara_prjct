<x-layout heading="Log In into account">
    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
            @error('email')
            <span class="text-warning">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
            <span class="text-warning">{{ $message }}</span>
            @enderror
        </div>

        <a class="btn btn-error" href="/">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
