<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <style>
    * {
      /* border: 1px solid rgb(10, 0, 0); */
    }

    div {
      /* margin: 4px; */
    }

    a:link {text-decoration:none}

    img {
    /* width: 200px;  
    height: 200px; */
    object-fit: cover;
}

  </style>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>{{ $title ?? 'Home' }}</title>
</head>

<body class="">
  <div class="d-flex flex-wrap mb-2 mt-1">
    <div class="flex-fill ms-2"><a href="http://"><img
          src="https://uxwing.com/wp-content/themes/uxwing/download/business-professional-services/job-icon.png"
          alt="jobs" width="45" height="45"></a></div>
    <div>
      <a href="" class="btn btn-outline-secondary">
        <i class="bi bi-person-fill"></i> Regiter
      </a>
    </div>
    <div>
      <a href="" class="btn btn-outline-secondary">
        <i class="bi bi-box-arrow-right"></i> Login
      </a>
    </div>
  </div>
  
  <main>
    {{ $slot }}
  </main>

  <div class="bg-danger text-white w-100">
    <p class="text-center">copyright<i class="bi bi-c-circle"></i> 2022,All Rights Serve</p>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>