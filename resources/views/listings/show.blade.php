<x-layout>
  <div class="m-2 text-black">
    <a href="/listings" target="_self" class="link-dark"><i class="bi bi-arrow-left"> Back</i></a>
  </div>
  <x-shadowBox>
    <div class="p-2">
      <div class="d-flex flex-column  align-items-center">
        <img src="{{ $list->logo? asset('storage/' . $list->logo) : 'https://t3.ftcdn.net/jpg/02/95/94/94/360_F_295949484_8BrlWkTrPXTYzgMn3UebDl1O13PcVNMU.jpg'}}"
          alt="" width="300" height="300" class="m-1">
        <h3>{{ $list->title }}</h3>

        <p><b>{{ $list->company }}</b></p>
        <div class="mb-1">
          <x-seperateTags :tags_string='$list->tags' />
        </div>
        <i class="bi bi-geo-alt-fill"> {{ $list->location }}</i>
      </div>
    </div>
  </x-shadowBox>
  <br>
  <h2 class="text-center">Job Description</h2>
  <p class="text-center px-4">{{ $list->description }}</p>
  <div class="d-grid gap-3 px-5">
    <button class="btn btn-outline-dark" type="button"><i class="bi bi-envelope-fill"></i> Contact Employer : {{ $list->email }}</button>
    <button class="btn btn-outline-dark" type="button"><i class="bi bi-browser-chrome"></i> Visit Website : {{ $list->website }}</button>
  </div>
  <br>



</x-layout>
