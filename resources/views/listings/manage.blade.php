<x-layout>
  <div class="row g-3 m-2">
    @foreach ($listings as $list )
    <x-cardForListing
    :img="$list->logo"
    :title="$list->title" :company="$list->company" :tags="$list->tags" :address="$list->location"  :list_ID="$list->id" />
    @endforeach   
  </div>
</x-layout>