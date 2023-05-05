<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }} | New Project</title>

        <!-- Company Icon -->
        {{-- Icon --}}
        <link rel="icon" href="{{ asset('img/logo.webp') }}">
        
        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        {{-- Owl Carousel --}}
        <link href=" https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css " rel="stylesheet">
        
        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">

        <!-- Google Font -->
        <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
        rel="stylesheet"
        />

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- Custom Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css?v=)').time() }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css?v=)').time() }}">


        <!-- Link Swiper's CSS -->
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
        />
    </head>
    <body>

        <!-- main wrapper start -->
        <div class="main-wrapper">

          @if(Request::is('/'))
            @include('partials.navbar')
            @yield('container')
          @else
            @include('partials.general-navbar')
            <div class="content-wrapper">
              @yield('container')
            </div>
          @endif

        </div>

        @include('partials.footer')

        </div>
        <!-- main wrapper end -->

        <!-- whatsapp start -->
        <div id="whatsapp-chat" class="hide">
            <div class="header-chat">
            <div class="head-home">
                <h3>Halo!</h3>
                <p>
                Apabila kamu punya pertanyaan, silahkan chat admin di bawah ini.
                </p>
            </div>
            <div class="get-new hide">
                <div id="get-label"></div>
                <div id="get-nama"></div>
            </div>
            </div>
            <div class="home-chat">
            <!-- Info Contact Start -->
            <a class="informasi" href="javascript:void" title="Chat Whatsapp">
                <div class="info-avatar">
                <img src="{{ asset('img/ava-alif.webp') }}" />
                </div>
                <div class="info-chat">
                <span class="chat-label">Admin</span>
                <span class="chat-nama">Alifya</span>
                </div>
                <span class="my-number">+6281333149284</span>
            </a>
            <!-- Info Contact End -->
            <!-- Info Contact Start -->
            <a class="informasi" href="javascript:void" title="Chat Whatsapp">
                <div class="info-avatar">
                <img src="{{ asset('img/ava-rifyal.webp') }}" />
                </div>
                <div class="info-chat">
                <span class="chat-label">Admin</span>
                <span class="chat-nama">Rifyal</span>
                </div>
                <span class="my-number">+6282119654575</span>
            </a>
            <!-- Info Contact End -->
            <!-- Info Contact Start -->
            <a class="informasi" href="javascript:void" title="Chat Whatsapp">
                <div class="info-avatar">
                <img src="{{ asset('img/ava-esti.webp') }}" />
                </div>
                <div class="info-chat">
                <span class="chat-label">Admin</span>
                <span class="chat-nama">Esti</span>
                </div>
                <span class="my-number">+6282139227264</span>
            </a>
            <!-- Info Contact End -->
            <!-- <div class='blanter-msg'>Call us to <b>+62123456789</b> from <i>0:00hs a 24:00hs</i></div> -->
            </div>
            <div class="start-chat hide">
            <div class="first-msg">
                <span>Halo! Ada yang bisa kami bantu ?</span>
            </div>
            <div class="blanter-msg">
                <textarea
                id="chat-input"
                placeholder="Tulis pertanyaanmu disini"
                maxlength="120"
                row="1"
                ></textarea>
                <a href="javascript:void;" id="send-it">Kirim</a>
            </div>
            </div>
            <div id="get-number"></div>
            <a class="close-chat" href="javascript:void">×</a>
        </div>
        <a class="blantershow-chat" href="javascript:void" title="Show Chat">
            <i class="fab fa-whatsapp me-2"></i>Chat Dengan Admin
        </a>
        <!-- whatsapp end -->
      
        {{-- JQuery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        {{-- Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        
        <script src=" https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js "></script>
        
        {{-- <script src="{{ asset('js/trix.js') }}"></script> --}}
        <!-- Custom JS -->
        <script src="{{ asset('js/main.js') }}"></script>
        <script>
            $(".header.navbar-shrink .header-logo img").attr("src", "http://company-web.test/img/logo-dark.png");
        </script>

        @yield('myjsfile')
    </body>
</html>