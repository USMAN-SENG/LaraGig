<form action="/listings" method="POST" enctype="multipart/form-data">
  @csrf
  <label for="company" class="m-1 form-label">Company Name</label>
  <input type="text" name="company" class="form-control w-100" value="{{ old('company') }}">

  @error('company')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="title" class="m-1 form-label">Job Title</label>
  <input type="text" name="title" class="form-control w-100" placeholder="Example: Senior Laravel Devoloper"
    value="{{ old('title') }}">

  @error('title')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="location" class="m-1 form-label">Job Location</label>
  <input type="text" name="location" class="form-control w-100" value="{{ old('location') }}">

  @error('location')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="email" class="m-1 form-label">Contact Email</label>
  <input type="email" name="email" class="form-control w-100" value="{{ old('email') }}">

  @error('email')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="website" class="m-1 form-label">Website/Application URL</label>
  <input type="text" name="website" class="form-control w-100" value="{{ old('website') }}">

  @error('website')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="tags" class="m-1 form-label">Tags(Comma separated)</label>
  <input type="text" name="tags" class="form-control w-100" placeholder="Example: Laravel, Backend, Postgres, etc"
    value="{{ old('tags') }}">

  @error('tags')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="logo" class="m-1 form-label">company Logo/image</label>
  <input type="file" name="logo" class="form-control w-100" value="{{ old('tags') }}">

  @error('tags')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <label for="description" class="m-1 form-label">Job Description</label>
  <textarea name="description" class="form-control w-100" rows="3"
    placeholder="Include tasks, requirements, salary, etc"> {{ old('description') }}
  </textarea>

  @error('description')
    <p class="text-danger m-1">{{ $message }}</p>
  @enderror

  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
