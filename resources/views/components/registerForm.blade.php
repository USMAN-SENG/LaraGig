<form action="/users" method="POST" enctype="multipart/form-data">
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
  <label for="name" class="m-1 form-label">Name</label>
  <input type="text" name="name" class="form-control w-100" value="{{ old('name') }}">

  @error('name')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <label for="email" class="m-1 form-label">Email</label>
  <input type="email" name="email" class="form-control w-100" value="{{ old('email') }}">

  @error('email')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="password" class="m-1 form-label">Password</label>
  <input type="password" name='password' class="form-control w-100" >

  @error('password')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="password_confirmation" class="m-1 form-label">Confirm Password</label>
  <input type="text" name="password_confirmation" class="form-control w-100">

  @error('password_confirmation')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <button type="submit" class="btn btn-danger">Sign Up</button>
  <br>
  <br>
  <p>Already Have An Account? <span><a href="/login">Log in</a></span></p>
</form>
