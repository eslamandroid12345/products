{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>القريشي</title>--}}
{{--    <link rel="icon" href="{{asset('img/1.png')}}" type="image/x-icon">--}}
{{--    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">--}}
{{--    <link rel="stylesheet" href="{{asset('css/style.css')}}">--}}
{{--    <style>--}}
{{--        .products-2{--}}

{{--            display: none;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}

{{--<body>--}}
{{--<header>--}}
{{--    <nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--        <div class="container">--}}
{{--            <a class="navbar-brand" href="{{url('/')}}">--}}
{{--                <img src="{{asset('img/1.png')}}">--}}
{{--            </a>--}}
{{--            <form class="d-flex mx-auto" action="{{url('/')}}">--}}
{{--                <input style="opacity: 0" class="form-control me-2" id="search" type="search" placeholder="ابحث بالباركود" name="barcode" aria-label="Search" autofocus>--}}
{{--            </form>--}}

{{--        </div>--}}
{{--    </nav>--}}


{{--</header>--}}

{{--<div class="container products">--}}
{{--    <div class="swiper mySwiper">--}}
{{--        <div class="swiper-wrapper">--}}
{{--            @foreach($products as $product)--}}
{{--            <div class="swiper-slide">--}}

{{--                <div class="box">--}}
{{--                    <div class="boxImg">--}}
{{--                        <img src="{{asset("/products/" . $product->img)}}" alt="">--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <div class="title">--}}
{{--                            <h4>--}}
{{--                              {{$product->name}}--}}
{{--                            </h4>--}}
{{--                            <span>{{$product->price}}<sup>$</sup></span>--}}
{{--                        </div>--}}
{{--                        <div class="details">--}}
{{--                            <p class="text-black-50">--}}
{{--                              {{$product->details}}--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}

{{--        <div class="swiper-pagination"></div>--}}
{{--    </div>--}}
{{--</div>--}}




{{--        --}}{{--start saerch realtime --}}
{{--        <div class="container products-2">--}}
{{--        <div class="swiper mySwiper">--}}
{{--        <div class="swiper-wrapper">--}}


{{--            <div class="swiper-slide">--}}

{{--            </div>--}}

{{--        </div>--}}
{{--        </div>--}}
{{--        </div>--}}





{{--<!-- file js -->--}}
{{--<script src="{{asset('js/jquery.min.js')}}"></script>--}}
{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('js/swiper-bundle.min.js')}}"></script>--}}
{{--<script>--}}
{{--    var swiper = new Swiper(".mySwiper", {--}}
{{--        cssMode: true,--}}
{{--        navigation: {--}}
{{--            nextEl: ".swiper-button-next",--}}
{{--            prevEl: ".swiper-button-prev",--}}
{{--        },--}}
{{--        pagination: {--}}
{{--            el: ".swiper-pagination",--}}
{{--        },--}}
{{--        mousewheel: true,--}}
{{--        keyboard: true,--}}
{{--        autoplay: true,--}}
{{--        speed: 1500,--}}
{{--    });--}}
{{--</script>--}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>--}}

{{--<script type="text/javascript">--}}
{{--    $('#search').on('keyup',function(){--}}
{{--        $value=$(this).val();--}}
{{--        $.ajax({--}}
{{--            type : 'get',--}}
{{--            url : '{{URL::to('/')}}',--}}
{{--            data:{'barcode':$value},--}}
{{--            success:function(data){--}}
{{--                $('.swiper-slide').html(data);--}}
{{--                $('.products').hide();--}}
{{--                $('.products-2').show();--}}

{{--            }--}}
{{--        });--}}
{{--    })--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
{{--    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });--}}
{{--</script>--}}

{{--   <script>--}}
{{--       setTimeout(function(){--}}
{{--           window.location.reload();--}}
{{--       }, 30000);--}}
{{--   </script>--}}

{{--</body>--}}

{{--</html>--}}


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>القريشي</title>
    <link rel="icon" href="img/1.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .products-2{

            display: none;
        }
        .textAn {
            margin-top: 5vh;
            overflow: hidden;
            position: relative;
            width: 100%;
            background-color: white;
            text-align: center;
            height: 20vh;
            margin-right: auto;
            margin-left: auto;
        }
        .textAn .textMove {
            padding: 15px 10px;
            font-size: 3rem;
            position: absolute;
            white-space: nowrap;
            -webkit-animation: textMove 30s ease-in-out infinite;
            animation: textMove 30s ease-in-out infinite;
        }

        @-webkit-keyframes textMove {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        @keyframes textMove {
            0% {
                transform: translateX(0%);
            }
            100% {
                transform: translateX(100%);
            }
        }
            </style>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="img/1.png" alt="logo">
            </a>
            <form class="d-flex mx-auto">
                <input style="opacity: 0;" class="form-control me-2" type="search" id="search" aria-label="Search" autofocus>
            </form>
        </div>
    </nav>
</header>


<section class="textAn">

    @foreach($sliders as $slider)
    <p class="textMove">{{$slider->advertisement}}</p>

   @endforeach


</section>

<div class="container products">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            @foreach($products as $product)
            <div class="swiper-slide">
                <div class="box">
                    <div class="boxImg">
                        <img src="{{asset("/products/" . $product->img)}}" alt="">
                    </div>
                    <div>
                        <div class="title">
                            <h4>
                               {{$product->name}}
                            </h4>
                            <span>{{$product->price}}<sup>$</sup></span>
                        </div>
                        <div class="details">
                            <p class="text-black-50">
                               {{$product->details}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach



        </div>


        <div class="swiper-pagination"></div>
    </div>
</div>


        <div class="container products-2">
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">

            </div>

        </div>
        </div>
        </div>




<!-- file js -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        cssMode: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        mousewheel: true,
        keyboard: true,
        autoplay: true,
        speed: 500,
        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
            640: {
                slidesPerView: 1,

            },
            768: {
                slidesPerView: 2,

            },
            1024: {
                slidesPerView: 4,

            },
        },
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{URL::to('/')}}',
            data:{'barcode':$value},
            success:function(data){
                $('.swiper-slide').html(data);
                $('.products').hide();
                $('.products-2').show();

            }
        });
    })
</script>
<script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

   <script>
       setTimeout(function(){
           window.location.reload();
       }, 30000);
   </script>
</body>

</html>
