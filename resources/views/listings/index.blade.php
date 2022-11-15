<x-layout>
  <x-header />
  {{-- <div class="d-flex flex-wrap justify-content-center gap-3 p-2">
    <div class="card p-1" style="width: 18rem;">
      <a href="">
        <img src="https://uxwing.com/wp-content/themes/uxwing/download/business-professional-services/job-icon.png"
        class="card-img-top" alt="..." >
      </a>
      
      <div class="card-body">
        <a href="" class="link-dark">
          <h5 class="card-title" >Lorem ipsum dolor</h5>
        </a>
        <p><b>company name</b></p>
        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
        <br>
        <br>
        <i class="bi bi-geo-alt-fill"> Malaysia</i>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://media.moddb.com/images/members/5/4550/4549205/duck.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://cdn.pixabay.com/photo/2017/01/08/13/58/cube-1963036__480.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://cdn-icons-png.flaticon.com/512/942/942800.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://static.vecteezy.com/system/resources/previews/000/642/323/original/search-job-icon-vector.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://cdn-icons-png.flaticon.com/512/942/942800.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://cdn-icons-png.flaticon.com/512/942/942800.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://cdn-icons-png.flaticon.com/512/942/942800.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://cdn-icons-png.flaticon.com/512/942/942800.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://cdn-icons-png.flaticon.com/512/942/942800.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
    <div class="card p-1" style="width: 18rem;">
      <img src="https://cdn-icons-png.flaticon.com/512/942/942800.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>

        <a href="#">
          <span class="badge text-bg-primary">laravel</span>
        </a>
      </div>
    </div>
  </div> --}}

  {{-- <div class="fixed-top m-3 alert alert-primary alert-dismissible fade show" role="alert">
    A simple primary alert—check it out!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> --}}
  <x-flash-msg />

  <div class="row g-3 m-2">
    @foreach ($listings as $list )
    <x-cardForListing
    :img="$list->logo"
    :title="$list->title" :company="$list->company" :tags="$list->tags" :address="$list->location"  :list_ID="$list->id" />
    @endforeach   
  </div>
  <br>
  <div class="mx-5">
    {{ $listings->links() }}
  </div>
  
</x-layout>
