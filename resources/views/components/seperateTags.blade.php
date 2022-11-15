@props(['tags_string'])

@php
  $array_tags = explode(',', $tags_string); // make it array
@endphp

@foreach ($array_tags as $tag)
  <a href="/listings/?tag={{ $tag }}">
    <span class="badge text-bg-primary">{{ $tag }}</span>
  </a>
@endforeach
