<form action="/users/authenticate" method="POST">
  @csrf
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <label for="email" class="m-1 form-label">Email</label>
  <input type="email" name="email" class="form-control w-100" value="{{ old('email') }}">

  @error('email')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="password" class="m-1 form-label">Password</label>
  <input type="password" name='password' class="form-control w-100" value="{{ old('password') }}">

  @error('password')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <button type="submit" class="btn btn-danger">Sign In</button>
  <br>
  <br>
  <p>Don't Have An Account? <span><a href="/register">Register</a></span></p>
</form>