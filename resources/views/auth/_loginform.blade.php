<form action="{{ route('login') }}" method="POST">
    @csrf

    <label for="validationServer03" class="form-label ">Email</label>
    <input type="email" name="email" value="{{ old('email') }}"
        class="form-control @error('email') is-invalid @enderror" id="validationServer03" placeholder="email">
    <div class="invalid-feedback">
        @error('email')
            {{ $message }}
        @enderror
    </div>

    <label for="validationServer03" class="form-label mt-3">Password</label>
    <input type="password" name="password" value="{{ old('password') }}"
        class="form-control @error('password') is-invalid @enderror" id="validationServer03" placeholder="password">
    <div class="invalid-feedback">
        @error('password')
            {{ $message }}
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-3">Login</button>

</form>
