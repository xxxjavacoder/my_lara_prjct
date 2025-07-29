<x-layout heading="Register an account">
    <form method="POST" action="/register">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" aria-describedby="first_name">
            @error('first_name')
                <span class="text-warning">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" aria-describedby="last_name">
            @error('last_name')
                <span class="text-warning">{{ $message }}</span>
            @enderror
        </div>

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

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password Confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
                <span class="text-warning">{{ $message }}</span>
            @enderror
        </div>

        <a class="btn btn-error" href="/">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
