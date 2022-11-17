<x-layout>
  <div class="d-flex justify-content-center">
    <div class="card text-bg-light mb-3 w-50">
      <div class="card-header text-center">
        <h2>Edit A GIG</h2>
        <p>Edit the Info below</p>
      </div>
      <div class="card-body">
        <x-updateListingForm :list_ID="$list->id" :title="$list->title" :logo="$list->logo" :tags="$list->tags" :company="$list->company" :location="$list->location" :email="$list->email" :website="$list->website"  :description="$list->description"  />
      </div>
    </div>
  </div>
</x-layout>