@extends('compro.components.layout')

@section('content')

<section class="section">
    <div class="container">
        <section class="section-body">
            <div class="row d-flex">
                <div class="col-md-5 my-auto">
                    <div class="text-center">
                        <img src="{{asset('images/iwm.png')}}" class="img-fluid logo-img logo-light" alt="">
                    </div>
                    <h1>
                        Wujudkan Pernikahan Intimate dan Syar'i Pilihanmu
                    </h1>
                    <p>
                        Bersama tim berpengalaman, kami hadirkan pernikahan yang hangat, sakral, dan elegant sesuai syariat.
                    </p>

                    <button class="btn bt-primary">
                        <a href="" >
                            Rencanakan Bersama IWM
                        </a>
                    </button>
                </div>

                <div class="col-md-7 position-relative mt-5">
                    <img src="{{ asset('images/img1.png') }}" alt="hero" class="img-fluid " style="z-index: 2;">

                    {{-- Gradient overlay --}}
                    <div class="position-absolute top-0 start-0 w-100 h-100 img-hero overlay-img-dark"></div>
                </div>
            </div>
        </section>

        <section class="section-body">
            <h3 class="text-center">Kenapa memilih Intimate Wedding Malang?</h3>
            <div class="row d-flex mt-5 justify-content-around">

                <div class="col-md-3">
                    <div class="card wed-card card-dark">
                        <div class="card-body p-0 position-relative">
                            <div class="position-relative text-center">
                                <img src="{{ asset('images/img1.png') }}" alt="img" class="img-fluid rounded-3" style="max-height: 250px;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3" style="
                                    background:
                                        linear-gradient(to right, rgba(0,0,0,0.4), transparent 30%),
                                        linear-gradient(to left, rgba(0,0,0,0.4), transparent 30%),
                                        linear-gradient(to top, rgba(0,0,0,0.4), transparent 50%);
                                    z-index: 2;
                                    pointer-events: none;
                                "></div>
                            </div>
                            <div class="p-3" style="position: relative; z-index: 3;">
                                <h5 class="card-title text-center my-3">Pendekatan Personal</h5>
                                <p class="card-text">
                                    Setiap kisah cinta itu unik. Kami bantu merencanakan pernikahan sesuai kebutuhanmu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card wed-card card-dark">
                        <div class="card-body p-0 position-relative">
                            <div class="position-relative text-center">
                                <img src="{{ asset('images/img1.png') }}" alt="img" class="img-fluid rounded-3" style="max-height: 250px;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3" style="
                                    background:
                                        linear-gradient(to right, rgba(0,0,0,0.4), transparent 30%),
                                        linear-gradient(to left, rgba(0,0,0,0.4), transparent 30%),
                                        linear-gradient(to top, rgba(0,0,0,0.4), transparent 50%);
                                    z-index: 2;
                                    pointer-events: none;
                                "></div>
                            </div>
                            <div class="p-3" style="position: relative; z-index: 3;">
                                <h5 class="card-title text-center my-3">Syariah Friendly</h5>
                                <p class="card-text">
                                    Kami pastikan rangkaian acara sesuai dengan nilai dan batasan syariat Islam
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card wed-card card-dark">
                        <div class="card-body p-0 position-relative">
                            <div class="position-relative text-center">
                                <img src="{{ asset('images/img1.png') }}" alt="img" class="img-fluid rounded-3" style="max-height: 250px;">
                                <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3" style="
                                    background:
                                        linear-gradient(to right, rgba(0,0,0,0.4), transparent 30%),
                                        linear-gradient(to left, rgba(0,0,0,0.4), transparent 30%),
                                        linear-gradient(to top, rgba(0,0,0,0.4), transparent 50%);
                                    z-index: 2;
                                    pointer-events: none;
                                "></div>
                            </div>
                            <div class="p-3" style="position: relative; z-index: 3;">
                                <h5 class="card-title text-center my-3">Terintegrasi dengan Sistem Lumina</h5>
                                <p class="card-text">
                                    Pantau progres persiapanmu secara real-time melalui platform ekslusif kami.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <section class="section-body">
            <div class="row d-flex">


                <div class="col-md-7 mt-5 text-center">
                    {{-- Image --}}
                    <img src="{{ asset('images/chart.png') }}" alt="hero" class="img-fluid rounded-4" style="z-index: 2;">
                </div>

                <div class="col-md-5 my-auto">
                    <h1>
                        Pantau dan Rencanakan Acaramu dari Satu Tempat
                    </h1>
                    <p>
                        Akses sistem Lumina untuk melihat timeline, pembayaran, hingga checklist persiapan pernikahanmu. Semua terorganisir, rapi, dan mudah digunakan.
                    </p>

                    <button class="btn bt-primary">
                        <a href="" >
                            Masuk ke Lumina
                        </a>
                    </button>
                </div>
            </div>
        </section>

        <section  class="section-body">
            <h3 class="text-center">Apa Kata Mereka?</h3>
            <div class="owl-carousel owl-theme mt-4">
                <div>
                    <div class="card w-75 mx-auto">
                        <div class="card-body text-center">
                            {{-- FIVE STARS RATING --}}
                            <div class="d-flex justify-content-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>

                                <p class="my-5 mx-5">
                                    "Terima kasih IWM! Aku nggak nyangka pernikahanku bisa seindah dan setenang itu. Timnya sigap banget dan sistemnya juga membantu banget."
                                </p>

                                <em>
                                    <p class="text-center">- Nabila & Arif -</p>
                                </em>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card w-75 mx-auto">
                        <div class="card-body text-center">
                            {{-- THREE STARS RATING --}}
                            <div class="d-flex justify-content-center">
                                <div class="rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>

                                <p class="my-5 mx-5">
                                    "Terima kasih IWM! Aku nggak nyangka pernikahanku bisa seindah dan setenang itu. Timnya sigap banget dan sistemnya juga membantu banget."
                                </p>

                                <em>
                                    <p class="text-center">- Nabila & Arif -</p>
                                </em>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    </script>
@endpush
