@props(['img', 'title', 'company', 'tags', 'address', 'list_ID'])

@php
  $array_tags = explode(',', $tags);
@endphp

<div class="col-sm-6 col-lg-4 col-xl-3">
  <div class="card h-100 p-1" style="width: 18rem;">
    <a href="/listings/{{ $list_ID }}" target="_blank">
      <img
        src="{{ $img ? asset('storage/' . $img) : 'https://t3.ftcdn.net/jpg/02/95/94/94/360_F_295949484_8BrlWkTrPXTYzgMn3UebDl1O13PcVNMU.jpg' }}"
        class="card-img-top" alt="..." height="250">
    </a>

    <div class="card-body">
      <a href="/listings/{{ $list_ID }}" class="link-dark" target="_blank">
        <h5 class="card-title">{{ $title }}</h5>
      </a>
      <p><b>{{ $company }}</b></p>

      <x-seperateTags :tags_string='$tags' />
      {{-- @foreach ($array_tags as $tag)
      <a href="#">
        <span class="badge text-bg-primary">{{ $tag }}</span>
      </a>
      @endforeach --}}
      <br>
      <br>
      <i class="bi bi-geo-alt-fill"> {{ $address }}</i>

    </div>
  </div>
</div>
