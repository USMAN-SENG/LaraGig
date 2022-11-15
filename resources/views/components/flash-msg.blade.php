@if (session('msg'))
  <div x-data="{ open: true }" 
  class="fixed-top m-3 alert alert-primary alert-dismissible fade show" role="alert"
  x-init="setTimeout(()=> open= false, 4000)"
  x-show="open">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
