<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="<?php echo base_url() ?>assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Blog Homepage</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="<?php echo base_url() ?>/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      #greeting {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<header data-bs-theme="dark">
  <div class="collapse text-bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="alert alert-secondary">About</h4>
          <p class="text-body-secondary">Mini Blog Project adalah aplikasi web sederhana yang memungkinkan pengguna untuk membuat, mengelola, dan berbagi postingan blog. Proyek ini dirancang sebagai platform blogging dasar yang menawarkan fitur-fitur inti seperti pembuatan, pengeditan, dan penghapusan artikel, serta tampilan daftar postingan.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="alert alert-secondary">Anggota</h4>
          <ul class="list-unstyled">
            <li><span>Tony Vetra Sugita</span></li>
            <li><span>Harits Fadhlillah</span></li>
            <li><span>Tegar Joko Kurniawan</span></li>
            <li><span>Nugroho Adi Wibowo</span></li>
            <li><span>Fatta Rahmanufal</span></li>
            <li><a href="<?= base_url()?>/admin/login" class="btn btn-info my-3">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="<?= base_url(); ?>" class="navbar-brand d-flex align-items-center">
      <svg viewBox="0 0 1024 1024" class="icon" width="25" height="25" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M901.369 837.303c-0.47 7.123-0.377 8.108 0.276 2.958a92.259 92.259 0 0 1-2.984 11.333c2.209-4.456 1.778-3.673-1.295 2.352-7.122 13.739 5.552-4.566-4.637 6.951-8.399 9.496-4.862 5.493-16.07 11.301 4.554-2.047 3.603-1.942-2.852 0.321-15.152 4.513 7.519 0.516-8.695 1.038-7.121-0.47-8.107-0.377-2.958 0.279a91.511 91.511 0 0 1-11.331-2.985c4.453 2.211 3.671 1.778-2.35-1.294-13.741-7.124 4.563 5.552-6.954-4.637-9.493-8.399-5.489-4.865-11.299-16.072 2.048 4.556 1.94 3.604-0.319-2.851-4.516-15.154-0.519 7.521-1.042-8.694 0.468-7.123 0.378-8.109-0.277-2.959a92.427 92.427 0 0 1 2.985-11.332c-2.21 4.456-1.777 3.673 1.295-2.351 7.122-13.74-5.554 4.566 4.637-6.951 8.398-9.498 4.863-5.494 16.071-11.303-4.555 2.048-3.607 1.942 2.848-0.322 15.154-4.511-7.518-0.514 8.694-1.037 7.122 0.472 8.108 0.378 2.96-0.278a91.428 91.428 0 0 1 11.331 2.985c-4.451-2.211-3.669-1.779 2.353 1.295 13.74 7.122-4.563-5.553 6.953 4.635 9.493 8.401 5.49 4.866 11.299 16.075-2.046-4.558-1.94-3.607 0.32 2.847 4.514 15.154 0.516-7.521 1.041 8.696 2.345 72.488 115.059 72.718 112.706 0-2.683-82.919-66.045-146.282-148.963-148.962-82.867-2.681-146.407 70.103-148.96 148.962-2.681 82.866 70.101 146.408 148.96 148.961 82.868 2.682 146.411-70.101 148.963-148.961 2.353-72.72-110.361-72.489-112.706 0z" fill="#4A5699"></path><path d="M170.713 497.175a74.746 74.264 0 1 0 149.492 0 74.746 74.264 0 1 0-149.492 0Z" fill="#E5594F"></path><path d="M397.17 497.175a74.745 74.264 0 1 0 149.49 0 74.745 74.264 0 1 0-149.49 0Z" fill="#F0D043"></path><path d="M623.624 497.175a74.745 74.264 0 1 0 149.49 0 74.745 74.264 0 1 0-149.49 0Z" fill="#F39A2B"></path><path d="M817.646 508.811c-0.716 91.878-35.913 176.968-100.411 242.421-64.138 65.088-151.53 99.701-242.417 100.41-91.332 0.713-177.696-36.638-242.413-100.41-65.088-64.14-99.7-151.533-100.41-242.421-0.565-72.649-113.272-72.704-112.706 0C21.004 728.915 183.774 925.69 403.627 958.41 628.07 991.811 843.85 856.411 911.28 639.609c13.053-41.962 18.729-86.946 19.072-130.798 0.568-72.704-112.139-72.649-112.706 0z" fill="#4A5699"></path><path d="M131.997 487.045c0.715-91.875 35.91-176.967 100.41-242.42 64.138-65.088 151.527-99.705 242.413-100.415 91.334-0.711 177.7 36.64 242.417 100.415 65.087 64.142 99.702 151.534 100.411 242.42 0.566 72.646 113.273 72.705 112.707 0-1.717-220.106-164.493-416.879-384.346-449.602C321.566 4.038 105.791 139.449 38.363 356.249c-13.05 41.96-18.731 86.947-19.072 130.796-0.567 72.705 112.141 72.646 112.706 0z" fill="#C45FA0"></path></g></svg>
        <strong class="px-2">Mini Blog</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
      <h1 id="greeting" class="fw-light alert alert-primary"></h1>
        <p>
            <strong><?= sizeof($artikel)?> Total Artikel</strong>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach ($artikel as $key => $value) {
            ?> 
            <div class="col">
            <div class="card shadow-sm">
                <img src="<?= base_url().$value['blog_img']?>" class="img-fluid img-thumbnail" alt="...">
              <div class="card-body">
                <p class="card-text"><?= $value['blog_title'] ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="<?= base_url().'home/blog_detail/'.$value['blog_id'] ?>" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        }    
        ?>
        
      </div>
    </div>
  </div>
</main>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Ke Atas</a>
    </p>
    <p class="mb-1"><div id="datetime"></div></p>
    <p class="mb-0">Copyright &copy; <span id="currentYear"></span> Kelompok 1. All Right Reserved</p>
  </div>
</footer>
<script src="<?php echo base_url() ?>assets/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function updateCopyrightYear() {
            var currentYear = new Date().getFullYear();
            document.getElementById('currentYear').innerText = currentYear;
        }

        // Panggil fungsi untuk memperbarui tahun hak cipta saat halaman dimuat
        updateCopyrightYear();
     function getGreeting() {
            var now = new Date();
            var hours = now.getHours();
            var greeting;

            if (hours >= 6 && hours < 10) {
                greeting = "Selamat Pagi";
            } else if (hours >= 10 && hours < 14) {
                greeting = "Selamat Siang";
            } else if (hours >= 14 && hours < 18) {
                greeting = "Selamat Sore";
            } else {
                greeting = "Selamat Malam";
            }

            document.getElementById('greeting').innerText = greeting;
        }

        // Panggil fungsi untuk menampilkan ucapan selamat datang
        getGreeting();

        function updateDateTime() {
            var now = new Date();
            var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var day = days[now.getDay()];

            var date = now.getDate();
            var month = now.getMonth() + 1; // Januari adalah 0
            var year = now.getFullYear();

            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Menambahkan nol di depan angka satu digit
            if (minutes < 10) minutes = '0' + minutes;
            if (seconds < 10) seconds = '0' + seconds;

            var datetimeString = day + ', ' + date + '/' + month + '/' + year + ' - ' + hours + ':' + minutes + ':' + seconds;
            document.getElementById('datetime').innerText = datetimeString;
        }

        // Perbarui waktu setiap detik
        setInterval(updateDateTime, 1000);

        // Panggil fungsi untuk pertama kali saat halaman dimuat
        updateDateTime();
</script>
    </body>
</html>
