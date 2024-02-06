<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TEBANK</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('Template')}}/img/favicon.png" rel="icon">
    <link href="{{asset('Template')}}/img/favicon-cop.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{asset('TemplateAdmin')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('TemplateAdmin')}}/assets/css/style.css" rel="stylesheet">

    <!-- trix -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Template') }}/css/trix.css">
    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">TEBANK</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        {{-- <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
                    </a><!-- End Profile Iamge Icon --> --}}

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            {{-- <h6>{{auth()->users()->name}}</h6> --}}
                            <span>Social Media Admin</span>
                        </li>

                        <!-- <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li> -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </button>
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="/admin">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/dashboard/kader">
                    <i class="bi bi-menu-button-wide"></i>
                    <span >Kader</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/dashboard/warga">
                    <i class="bi bi-journal-text"></i>
                    <span>Warga</span>
                </a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="/dashboard/pembelian">
                  <i class="bi bi-layout-text-window-reverse"></i>
                  <span>Pembelian</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="/dashboard/penjualan">
                  <i class="bi bi-bar-chart"></i>
                  <span>Penjualan</span>
              </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/dashboard/tabungan">
                <i class="bi bi-gem"></i>
                <span>Tabungan</span>
            </a>
           </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Kelola</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/dashboard/sampah">
                            <i class="bi bi-circle"></i><span>Sampah</span>
                        </a>
                    </li>
      
                    <li>
                        <a href="/dashboard/jenis_sampah">
                            <i class="bi bi-circle"></i><span>Jenis Sampah</span>
                        </a>
                    </li>
                </ul>
            </li>
           
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        @yield('content')

    </main>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>TEBANK</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by TEBANK<a href="https://bootstrapmade.com/">TEBANK</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

    <!-- Vendor JS Files -->
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/chart.js/chart.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/echarts/echarts.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/quill/quill.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{asset('TemplateAdmin')}}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('TemplateAdmin')}}/assets/js/main.js"></script>

    <!-- trix -->
    <script type="text/javascript" src="{{asset('Template') }}/js/trix.js"></script>

</body>

</html>