<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APERGU</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owlcarousel/dist/assets/owl.theme.default.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/careers.css">

</head>
<style>

    .theme-dark {
        background-color: #050606 !important;
        color: #fff !important;
    }

    .overlay-img-dark{
        background: linear-gradient(90deg, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 1) 100%), linear-gradient(180deg, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 1) 100%), linear-gradient(270deg, rgba(0, 0, 0, 0) 70%, rgba(0, 0, 0, 1) 100%), linear-gradient(360deg, rgba(0, 0, 0, 0) 80%, rgba(0, 0, 0, 1) 100%);
        z-index: 3;
        pointer-events: none;
    }

    .overlay-img-light{
        background: linear-gradient(90deg, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 1) 100%), linear-gradient(180deg, rgba(255, 255, 255, 0) 60%, rgba(255, 255, 255, 1) 100%), linear-gradient(270deg, rgba(255, 255, 255, 0) 40%, rgba(255, 255, 255, 1) 100%), linear-gradient(360deg, rgba(255, 255, 255, 0) 80%, rgba(255, 255, 255, 1) 100%);
        z-index: 3;
        pointer-events: none;
    }

    .theme-light {
        background-color: #fff !important;
        color: #000 !important;
    }

    .logo-light{
        filter: invert(1);
    }

    body {
        font-family: 'Poppins', sans-serif;
        color: #fff;
    }

    .navbar {
        background-color: #05060600 !important;
        backdrop-filter: blur(8px);
    }

    .clr-primary {
        color: #326358;
    }

    .bt-primary {
        background-color: #326358;
        border-color: #326358;
        color: #fff;
    }

    .bt-primary:hover {
        background-color: #fff;
        border-color: #326358;
        color: #326358;
    }

    .section {
        /* height: 100vh; */
        padding: 100px 0;
    }


    .carousel {
        width: 100%;
        height: 100%;
    }

    .navbar-toggler {
        background-color: #fff;
    }

    a {
        color: #fff;
        text-decoration: none;
        list-style: none;
    }

    .text-justify {
        text-align: justify;
    }

    .text-mobile {
        text-align: left;
    }

    .section-body{
        height: 100vh;
    }

    @media (max-width: 768px) {
        .text-mobile {
            text-align: center;
        }

        .section-body{
            height: auto;
        }
    }

    .blogs-thumb {
        width: 600px;
        height: 300px;
        object-fit: cover;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        padding: 25px 25px 25px 25px;
        max-width: 550px;
        width: 100%;
        background-color: #326358;
    }

    .formbold-input-flex {
        display: flex;
        gap: 20px;
        margin-bottom: 22px;
    }

    .formbold-input-flex>div {
        width: 100%;
        display: flex;
        flex-direction: column-reverse;
    }

    .formbold-textarea {
        display: flex;
        flex-direction: column-reverse;
    }

    .formbold-form-input {
        width: 100%;
        padding-top: 5px;
        padding-bottom: 5px;
        border: none;
        border-bottom: 1px solid #DDE3EC;
        border-radius: 5px;
        background: #FFFFFF;
        font-weight: 500;
        font-size: 16px;
        color: #07074D;
        outline: none;
        resize: none;
    }

    .formbold-form-input::placeholder {
        color: #7784a4;
    }

    .formbold-form-label {
        color: white;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        display: block;
        margin-bottom: 18px;
    }

    .formbold-input-file {
        margin-top: 30px;
    }

    .formbold-input-file input[type="file"] {
        position: absolute;
        top: 6px;
        left: 0;
        z-index: -1;
    }

    .formbold-input-file .formbold-input-label {
        display: flex;
        align-items: center;
        gap: 10px;
        position: relative;
    }

    .formbold-filename-wrapper {
        display: flex;
        flex-direction: column;
        gap: 6px;
        margin-bottom: 22px;
    }

    .formbold-filename {
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 14px;
        line-height: 24px;
        color: #536387;
    }

    .formbold-filename svg {
        cursor: pointer;
    }

    .formbold-btn {
        align-items: center;
        font-size: 16px;
        border-radius: 5px;
        border-color: white;
        padding: 12px 25px;
        font-weight: 500;
        background-color: #326358;
        color: white;
        cursor: pointer;
        margin-top: 25px;
    }

    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 300px;
        width: 500px;
    }

    .font-underline {
        text-decoration: underline;
    }


.checkbox-label {
  background-color: #326358;
  width: 50px;
  height: 26px;
  border-radius: 50px;
  position: relative;
  padding: 5px;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.fa-moon {color: #f1c40f;}

.fa-sun {color: #f39c12;}

.checkbox-label .ball {
  background-color: #fff;
  width: 22px;
  height: 22px;
  position: absolute;
  left: 2px;
  top: 2px;
  border-radius: 50%;
  transition: transform 0.2s linear;
}

.card-light{
    border: none;
    background-color: #fff;
    color: #000;
}

.card-light .card-body{
    background-color: #fff;
    color: #000;
}

.card-dark{
    border: none;
    background-color: #050606;
    color: #fff;
}

.card-dark .card-body{
    background-color: #050606;
    color: #fff;
}


.checkbox:checked + .checkbox-label .ball {
  transform: translateX(24px);
}


.checkbox {
  opacity: 0;
  position: absolute;
}

.rating .fa-star {
  color: #ddd; /* Unchecked (gray) */
}

.rating .checked {
  color: #ffc107; /* Checked (yellow) */
}

body,
.nav-link,
.card,
.img-hero {
    transition: background-color 0.4s ease, color 0.4s ease, filter 0.4s ease;
}
</style>

<body class="theme-dark">

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top py-3 ">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                <img src="{{ asset('images/iwm.png') }}" class="logo-img logo-light" alt="" width="50" height="50"
                    class="d-inline-block align-text-top">
            </a>
            <div>
                <input type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="checkbox-label">
                    <i class="fas fa-sun"></i>
                    <i class="fas fa-moon"></i>
                  <span class="ball"></span>
                </label>
              </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item my-auto ">
                        <a class="nav-link text-white active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link text-white" aria-current="page" href="/gallery">Galeri</a>
                    </li>
                    {{-- <li class="nav-item my-auto">
                <a class="nav-link text-white" href="/admin/category">Products</a>
            </li> --}}

                    {{-- <li class="nav-item my-auto">
                <a class="nav-link text-white" href="/admin/exchange">Products</a>
            </li> --}}

                    {{-- <li class="nav-item dropdown my-auto">
                        <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" style="background: #2a2a2a !important;">
                            <li class="nav-item my-auto">
                                <a class="nav-link text-white" href="/products/netsuite">Oracle Netsuite</a>
                            </li>
                        </ul>
                    </li> --}}

                    <li class="nav-item my-auto">
                        <a class="nav-link text-white" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link text-white" href="/layanan">Layanan</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link text-white" href="/karier">Karier</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link text-white" href="/tentang-kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item my-auto">
                        <a class="nav-link text-white" href="/login">Login</a>
                    </li>




                    {{-- <li class="nav-item my-auto">
                <button class="btn btn-sm bt-primary rounded-5 px-4">
                    @if (Auth::check())
                        <a class="nav-link text-white" href="/logout">Logout</a>
                    @else
                        <a class="nav-link text-white" href="/login">Login</a>
                    @endif
                </button>
            </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="body-container">
        @yield('content')
    </div>

    <section id="footer" class="section" style="background: linear-gradient(0deg, #326358 0%, #05060600 100%);">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-md-4 text-start">
                    <img src="{{asset('images/iwm.png')}}" class="img-fluid logo-img logo-light">
                </div>
                <div class="col-md-4 text-start">
                    <b>Kontak :</b>
                    <ul class="p-0">
                        <li style="list-style: none">
                            <table style="border-collapse: separate; border-spacing: 0 5px;">
                                <tr>
                                    <td class="align-top">
                                        <i class="pe-3 fa-solid fa-location-dot"></i>
                                    </td>
                                    <td>
                                        <p class="text-white m-0">Jl. Raya Candi No. 1, Candi, Kec. Sukun, Kota Malang, Jawa Timur 65146</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="pe-3 fa-solid fa-phone"></i>
                                    </td>
                                    <td>
                                        <p class="text-white m-0">+62 812-3456-7890</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="pe-3 fa-solid fa-envelope"></i>
                                    </td>
                                    <td>
                                        <p class="text-white m-0">intimateweddingmalang@gmail.com</p>
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <b>Sosial Media: </b>
                    <ul class="p-0">
                        <li style="list-style: none">
                            <table style="border-collapse: separate; border-spacing: 0 5px;">
                                <tr>
                                    <td class="align-top">
                                        {{-- instagram --}}
                                        <i class="pe-3 fa-brands fa-instagram"></i>
                                    </td>
                                    <td>
                                        <p class="text-white m-0">@intimateweddingmalang</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{-- Youtube --}}
                                        <i class="pe-3 fa-brands fa-youtube"></i>
                                    </td>
                                    <td>
                                        <p class="text-white m-0">Intimate Wedding Malang</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="pe-3 fa-solid fa-envelope"></i>
                                    </td>
                                    <td>
                                        <p class="text-white m-0">intimateweddingmalang@gmail.com</p>
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="mobile-block-message" style="display: none;">
        <h2>Access Restricted</h2>
        <p>This form is not available on mobile devices. Please use a desktop browser.</p>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('owlcarousel/dist/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script>
        function swal(params) {
            return Swal.fire({
                icon: params.icon,
                title: params.title,
                text: params.text,
                showConfirmButton: params.showConfirmButton,
                showCancelButton: params.showCancelButton,
                confirmButtonText: params.confirmButtonText,
                cancelButtonText: params.cancelButtonText,
            });
        }


        $(document).ready(function() {
            $('#checkbox').change(function() {
                if ($(this).is(':checked')) {
                    $('body').removeClass('theme-dark').addClass('theme-light');
                    $('.nav-link').removeClass('text-white').addClass('text-dark');
                    $('.logo-img').removeClass('logo-light');
                    $('.img-hero').removeClass('overlay-img-dark').addClass('overlay-img-light');
                    $('.card').removeClass('card-dark').addClass('card-light');
                } else {
                    $('body').removeClass('theme-light').addClass('theme-dark');
                    $('.nav-link').removeClass('text-dark').addClass('text-white');
                    $('.logo-img').addClass('logo-light');
                    $('.img-hero').removeClass('overlay-img-light').addClass('overlay-img-dark');
                    $('.card').removeClass('card-light').addClass('card-dark');
                }
            });
        });
    </script>
    @stack('scripts')
    @stack('style')
</body>

</html>
