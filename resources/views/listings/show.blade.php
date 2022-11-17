<x-layout>
  <div class="m-2 text-black">
    <a href="/listings" target="_self" class="link-dark"><i class="bi bi-arrow-left"> Back</i></a>
  </div>
  <x-shadowBox>
    <div class="p-2">
      <div class="d-flex flex-column  align-items-center">
        @if ($list->logo)

          @if (str_contains($list->logo, 'logos'))
            <img src="{{ asset('storage/' . $list->logo) }}" class="w-50" alt="...">
          @else
            <img src="{{ $list->logo }}" class="w-50" alt="...">
          @endif
        @else
          <img src="https://t3.ftcdn.net/jpg/02/95/94/94/360_F_295949484_8BrlWkTrPXTYzgMn3UebDl1O13PcVNMU.jpg"
            class="w-50" alt="...">

        @endif
        {{-- <img src="{{ $list->logo? asset('storage/' . $list->logo) : 'https://t3.ftcdn.net/jpg/02/95/94/94/360_F_295949484_8BrlWkTrPXTYzgMn3UebDl1O13PcVNMU.jpg'}}"
          alt="" width="300" height="300" class="m-1"> --}}
        <h3>{{ $list->title }}</h3>

        <p><b>{{ $list->company }}</b></p>
        <div class="mb-1">
          <x-seperateTags :tags_string='$list->tags' />
        </div>
        <i class="bi bi-geo-alt-fill"> {{ $list->location }}</i>
      </div>
    </div>
    <br>
    <h2 class="text-center">Job Description</h2>
    <p class="text-center px-4">{{ $list->description }}</p>
    <div class="d-grid gap-3 px-5">
      <button class="btn btn-outline-dark" type="button"><i class="bi bi-envelope-fill"></i> Contact Employer :
        {{ $list->email }}</button>
      <button class="btn btn-outline-dark" type="button"><i class="bi bi-browser-chrome"></i> Visit Website :
        {{ $list->website }}</button>
    </div>
    <br>
  </x-shadowBox>
  <br>

  <div class="d-flex justify-content-between  mx-5 text-black">
    <a href="/listings/{{ $list->id }}/edit" target="_self" class="link-dark"><i class="bi bi-pencil-fill">
        Edit</i></a>

    <a href="/listings" target="_self" class="link-dark"><i class="bi bi-trash3-fill"> Delete</i></a>
  </div>


  <br>
</x-layout>
