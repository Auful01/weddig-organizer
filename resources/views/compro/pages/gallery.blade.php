@extends('compro.components.layout')

@section('content')

<section class="section">
    <div class="container-fluid">
        <section class="section-body">
            <div class="container text-center mt-4 w-50">
                <h1>Setiap Momen Punya Cerita</h1>
                <em>
                    Abadikan kisah cinta dalam balutan acara yang sakral dan syar'i. Lihat bagaimana kami mengemas hari istimewa mereka menjadi kenangan yang tak terlupakan.
                </em>
            </div>

            <div class="overflow-hidden mt-5">
                <div id="imgContainer-1" class="images-container1 mt-5">
                    @for ($i = 0; $i < 2; $i++)
                        <img src="{{asset('images/img1.png')}}" alt="" class="img-fluid rounded-3" style="max-height: 300px;max-width: 100%;">
                        <img src="{{asset('images/img1.png')}}" alt="" class="img-fluid rounded-3" style="max-height: 300px;max-width: 100%;">
                        <img src="{{asset('images/img1.png')}}" alt="" class="img-fluid rounded-3" style="max-height: 300px;max-width: 100%;">
                        <img src="{{asset('images/img1.png')}}" alt="" class="img-fluid rounded-3" style="max-height: 300px;max-width: 100%;">
                    @endfor
                </div>
                <div id="imgContainer-2" class="images-container2 mt-3">
                    @for ($i = 0; $i < 2; $i++)
                        <img src="{{asset('images/img1.png')}}" alt="" class="img-fluid rounded-3" style="max-height: 300px;max-width: 100%;">
                        <img src="{{asset('images/img1.png')}}" alt="" class="img-fluid rounded-3" style="max-height: 300px;max-width: 100%;">
                        <img src="{{asset('images/img1.png')}}" alt="" class="img-fluid rounded-3" style="max-height: 300px;max-width: 100%;">
                        <img src="{{asset('images/img1.png')}}" alt="" class="img-fluid rounded-3" style="max-height: 300px;max-width: 100%;">
                    @endfor
                </div>
            </div>


            <style>
                /* body {
                margin: 0;
                padding: 0;
                } */

                .main-container {
                height: 100vh;
                width: 100%;
                background-color: black;
                display: flex;
                align-items: center;
                justify-content: center;
                }

                .marquee-container {
                padding: 10px;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 10px;
                background-color: white;
                height: 300px;
                width: 300px;
                overflow: hidden;
                }

                .images-container1 {
                width: 100%;
                display: flex;
                flex-direction: row;
                gap: 10px;
                animation: rightToLeft 31s infinite;
                }

                .images-container1 img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                }

                .images-container2 {
                transform: translateX(-200px);
                width: 100%;
                display: flex;
                flex-direction: row;
                gap: 10px;
                animation: leftToRight 31s infinite;
                }

                .images-container2 img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                }

                @keyframes rightToLeft {
                0% {
                    transform: translateX(0);
                }
                50% {
                    transform: translateX(-200px);
                }
                100% {
                    transform: translateX(0);
                }
                }

                @keyframes leftToRight {
                0% {
                    transform: translateX(-200px);
                }
                50% {
                    transform: translateX(0px);
                }
                100% {
                    transform: translateX(-200px);
                }
                }

                @keyframes topToBottom {
                0% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-200px);
                }
                100% {
                    transform: translateY(0);
                }
                }

                @keyframes bottomToTop {
                0% {
                    transform: translateY(-200px);
                }
                50% {
                    transform: translateY(0px);
                }
                100% {
                    transform: translateY(-200px);
                }
                }

                </style>

        </section>

        <div class="container">
            <section class="section-body">
                <div class="row d-flex">
                    <div class="col-md-5 my-auto">
                        <h1>
                            Cerita di balik Acara
                        </h1>
                        <p>
                            Akad Nikah & Resepsi <br>
                            Fulan & Fulanah <br>
                            Malang, 2025 <br>
                        </p>
                        <p>Fulan & Fulana menginginkan akad yang hangat, tertutup, dan khusyuk. Dari konsultasi pertama hingga H-1, kami mendampingi mereka merancang hari sakral ini dengan penuh cinta dan ketenangan...</p>


                    </div>

                    <div class="col-md-7 position-relative mt-5">
                        {{-- Image --}}
                        <img src="{{ asset('images/img1.png') }}" alt="hero" class="img-fluid " style="z-index: 2;">

                        {{-- Gradient overlay --}}
                        <div class="position-absolute top-0 start-0 w-100 h-100 img-hero overlay-img-dark"></div>
                    </div>
                </div>
            </section>
        </div>

        {{-- Gallery --}}
        <section class="section-body mt-5">
            <div class="container text-center">
                <h1>Potret Kisah Mereka</h1>

                <nav class="nav nav-pills nav-justified mt-4 flex-nowrap overflow-auto">
                    <a class="nav-link active" aria-current="page" href="#">Semua</a>
                    <a class="nav-link" href="#">Momen Akad</a>
                    <a class="nav-link" href="#">Resepsi</a>
                    <a class="nav-link" href="#">Make Up & Fitting</a>
                    <a class="nav-link" href="#">Behind The Scene</a>
                </nav>


                <style>
                    /* Nav link active underlined */
                    .nav-pills .nav-link.active {
                        border-bottom: 2px solid #326358;
                        background: none;
                        border-radius: 0;
                        border-width: 0 0 3px 0;
                    }

                    .nav-pills .nav-link {
                        color: #326358;
                        font-weight: 600;
                        font-size: 1.2rem;
                    }

                    .grid {
                        margin: 0 auto;
                    }
                    .grid-sizer,
                    .grid-item {
                        width: 20%;
                    }

                    @media (max-width: 768px) {
                        .grid-sizer,
                        .grid-item {
                            width:33.33%;
                        }
                    }

                </style>

                    <div style="height: 630px; overflow-y: hidden;">
                        <div class="grid mt-4" data-masonry='{"percentPosition": true }'>
                            <div class="grid-sizer"></div> <!-- ini penting -->

                            @for ($i = 0; $i < 18; $i++)
                                <div class="grid-item mb-2 px-1">
                                    <img src="{{ asset('images/img1.png') }}" class="img-fluid w-100" style="height: {{ rand(100, 300) }}px; object-fit: cover;">
                                </div>
                            @endfor
                        </div>
                    </div>



            </div>
        </section>

        <div class="container mt-2">
            <section class="section-body">
                <div class="row d-flex">
                    <div class="col-md-7 position-relative mt-5">
                        {{-- Image --}}
                        <img src="{{ asset('images/img1.png') }}" alt="hero" class="img-fluid " style="z-index: 2;">

                        {{-- Gradient overlay --}}
                        <div class="position-absolute top-0 start-0 w-100 h-100 img-hero overlay-img-dark"></div>
                    </div>

                    <div class="col-md-5 my-auto">
                        <h1>
                            Rencanakan Acaramu Bersama Kami
                        </h1>
                        <p>Setiap momen indah dimulai dari langkah pertama yang tepat. Bersama Intimate Wedding Malang, wujudkan pernikahan intim dan syar'i yang kamu impikan - dengan pendampingan penuh dari hati.</p>

                        <button class="btn bt-primary">
                            <a href="#" >
                                Rencanakan Bersama IWM
                            </a>
                        </button>
                    </div>


                </div>
            </section>
        </div>
    </div>
</section>

@endsection



@push('scripts')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:20,
            nav:true,
            autoplay:true,
            autoplayTimeout:1500,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })

        document.addEventListener('DOMContentLoaded', function () {
            const grid = document.querySelector('.grid');
            imagesLoaded(grid, function () {
                new Masonry(grid, {
                    itemSelector: '.grid-item',
                    columnWidth: '.grid-sizer',
                    percentPosition: true
                });
            });
        });
    </script>
@endpush
