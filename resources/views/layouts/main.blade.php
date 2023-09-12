<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/style.css">

  <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">

  {{-- Alphine js --}}
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
  <title>Staticfied Free Online Calculator : Mean, Median, Mode, Weighted Mean, Quartiles</title>
</head>
<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg bg-body-tertiary" aria-label="">
    <div class="container">
      <a href="/"><img class="img-fluid p-1 m-2" src="/img/logo.png" style="max-width: 100px" /></a>
      <a class="navbar-brand" href="/">Amoeba Staticfied Calculator</a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <img src=""/>
      </div> --}}
    </div>
  </nav>

  {{-- sidebar + content --}}
  <div class="container  mt-4 ">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 mb-3 d-md-block bg-light sidebar rounded-3">
          <p class="p-1 mt-2">Check Out All!</p>
          <hr/>
            <div class="position-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item ">
                    <a class="nav-link" href="/calculator/mean">
                        Mean Calculator
                    </a>
                </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/calculator/median">
                            Median Calculator
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/calculator/mode">
                            Mode Calculator
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/calculator/weighted-mean">
                            Weighted Mean Calculator
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/calculator/quartiles">
                          Quartiles Calculator
                      </a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="/calculator/interquartiles">
                        Interquartile Range (IQR) Calculator
                      </a>
                    </li> --}}
                    <li class="nav-item">
                      <a class="nav-link" href="/calculator/standard-deviation">
                        Standard Deviation Calculator
                      </a>
                  </li>
                </ul>
                <hr/>
                <p>All Features work for single data, cooming soon for group data ~</p>
            </div>
        </nav>
        <!-- /Sidebar -->

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="container">
              @yield('contents')
            </div>
        </main>
        
    </div>
  </div>

{{-- Footer --}}
<footer class="footer bg-light border border-1 p-4 pb-2">
  <div class="container-fluid">
   <div class="row d-flex justify-content-center">
      <div class="col-lg-8">
      <p>Visit us and experience the convenience of using "Amoeba Calculator" for your statistical needs. Also give us feedback and critics.</p>
      </div>
   </div>
   <div class="d-flex justify-content-center">   
      <div class="me-1">
        <a href="https://www.example.com" target="_blank" class="btn">
          <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Example Image" class="img-fluid" style="max-width: 50px">
      </a>
      </div>
      <div class="ms-1">
        <a href="https://www.example.com" target="_blank" class="btn">
          <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Example Image" class="img-fluid" style="max-width: 50px">
      </a>
      </div>
      <div class="ms-1">
        <a href="https://www.example.com" target="_blank" class="btn">
          <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Example Image" class="img-fluid" style="max-width: 50px">
      </a>
      </div>
   </div>
   <p class="text-muted text-center p-0 m-0" style="font-size: 14px;">© Copyright 2023 Yulius L</p>
  </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>