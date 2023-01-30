<!DOCTYPE html>

<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orchid Wedding || Home </title>

    <!-- Load fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

    @if(Session('lang') == 'ar')
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('website/css/ar_style.css')}}" />
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('website/css/style.css')}}" />
    @endif

    <link rel="stylesheet" type="text/css" href="{{asset('website/css/font-awesome.css')}}" />

</head>
<body>
<div >
    <div class="mask"></div>
    <a href="#" class="logo"  style="z-index: 1000;">
        <img src="{{\App\Models\Setting::find(1)->image}}" alt="Orchid Wedding">
    </a>
    <a href=""   style="z-index: 1000;" class="menu-toggle" id="nav-expander"><i class="fa fa-bars"></i></a>
    @if(Session('lang') == 'ar')
        <a href="{{url('lang/en')}}"   style="z-index: 1000;    margin-right: 41px;" class="menu-toggle" ><i class="fa fa-globe"></i></a>
    @else
    <a href="{{url('lang/ar')}}"   style="z-index: 1000;    margin-right: 41px;" class="menu-toggle" ><i class="fa fa-globe"></i></a>
    @endif
    <!-- Offsite navigation -->
    <nav class="menu">
        <a href="#" class="close"><i class="fa fa-close"></i></a>
        <h3></h3>
        <ul class="nav"  style="display: block;">
            <li><a data-scroll href="#home">{{__('lang.Home')}}</a></li>
            <li><a data-scroll href="#services">{{__('lang.Services')}}</a></li>
            <li><a data-scroll href="#portfolio">{{__('lang.ourworks')}}</a></li>
            <li><a data-scroll href="#contact">{{__('lang.Contact')}}</a></li>
        </ul>
        <ul class="social-icons">

            <li class="">
                <a target="_blank" href="{{\App\Models\Setting::find(1)->facebook}}" class="">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li class="">
                <a target="_blank" href="{{\App\Models\Setting::find(1)->twitter}}" class="">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li class="">
                <a target="_blank" href="{{\App\Models\Setting::find(1)->email}}" class="">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li class="">
                <a target="_blank" href="{{\App\Models\Setting::find(1)->linked_in}}" class="x">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li class="-in">
                <a target="_blank" href="{{\App\Models\Setting::find(1)->instagram}}" class="">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>

        </ul>
    </nav>


</div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach(\App\Models\Slider::where('is_active','active')->get() as $key => $Slider)
        <div class="carousel-item @if($key == 0) active @endif">
            <img class="d-block w-100" src="{{$Slider->image}}"  style="max-height: 650px!important;" alt="{{$Slider->title}}">
            <div class="header-info" @if(Session('lang') == 'ar') style="position: absolute; color:#FFF;top: 50%;right: 25%"   @else style="position: absolute; color:#FFF;top: 50%;left: 25%" @endif>
                <h1>{{$Slider->title}}</h1>
                <p style=" color:#FFF;">{{$Slider->decsription}}

                </p>
                <a href="#contact" class="btn btn-primary">{{__('lang.Get in Touch')}}</a>
            </div>
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>




<section class="social-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-12">
                <img src='{{\App\Models\About::find(1)->image}}'   width="100%" height="100%">
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="d-flex align-items-center height-about">
                    <div style="height: 100%;">
                        <h3 class="text-capitalize heading-h">{{\App\Models\About::find(1)->title}}</h3>
                        <p class="ppp">
                            {{\App\Models\About::find(1)->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section><!-- social section -->
<!-- Services section start -->
<section id="services">

    <div class="container">
        <header>
            <h2>{{__('lang.Services')}}</h2>
        </header>
        <div class="row">
            @foreach(\App\Models\Service::where('is_active','active')->get() as  $Project)
            <div class="col-md-4">
                <div class="service-item">
                    <img src="{{$Project->image}}" alt="Weddings"  >
                    <h3>{{$Project->title}}</h3>
                    <p>{{$Project->description}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Services section end -->
<!-- Portfolio section start -->
<section id="portfolio" class="darker">
    <div class="container">
        <header>
            <h3></h3>
            <h2>  {{__('lang.ourworks')}}</h2>
        </header>
        <div id="single-project"></div>
        <div class="row">
            @foreach(\App\Models\Projects::where('is_active','active')->get() as  $Project)
            <figure class="portfolio-item col-md-4 col-sm-6" >
                <img class="img-responsive"  style="width: 100%!important;"  src="{{$Project->image}}" alt="Adena icons pack" />
                <figcaption class="mask">
                    <a href="#">
                        <i class="glyphicon glyphicon-plus"></i>
                    </a>
                </figcaption>
            </figure>
            @endforeach
        </div>
    </div>
</section>
<!-- Portfolio section end -->
<!-- Contact section start -->
<section id="contact">
    <div class="container">
        <header>
            <h2>{{__('lang.Get in Touch')}}</h2>
        </header>
        <div class="map-wrapper">


        </div>
        <div class="row">
            <div class="col-md-8">
                <form class="row" method="post" action="{{url('store_contact')}}">
                    @csrf
                    <div class="form-group col-md-6">
                        <input name="name" type="text" placeholder="{{__('lang.name')}}" class="form-control" />
                    </div>
                    <div class="form-group col-md-6">
                        <input name="email" type="email" placeholder="{{__('lang.email')}}" class="form-control" />
                    </div>
                    <div class="form-group col-md-6">
                        <input name="phone" type="number" placeholder="{{__('lang.phone')}}" class="form-control" />
                    </div>
                    <div class="form-group col-md-6">
                        <input name="subject" type="text" placeholder="{{__('lang.subject')}}" class="form-control" />
                    </div>
                    <div class="form-group col-md-12">
                        <textarea name="message" class="form-control" rows="10" placeholder="{{__('lang.Message')}}"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-lg btn-primary">{{__('lang.send')}}</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <address>
                    <span>{{__('lang.address')}}</span>
                    <p>
                        {{\App\Models\Setting::find(1)->address}}
                    </p>
                </address>
                <address>
                    <span>{{__('lang.email')}}</span>
                    <p>                        {{\App\Models\Setting::find(1)->email}}
                    </p>
                </address>
                <address>
                    <span>{{__('lang.phone')}}</span>
                    <p>                        {{\App\Models\Setting::find(1)->phone}}
                    </p>

                </address>
            </div>
        </div>
    </div>
</section>
<!-- Contact section end -->
<!-- Footer start -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p>Copyright &copy; 2023.Orchid Wedding All rights reserved.</p>
            </div>
            <div class="col-md-4">
                <ul class="social-icons">

                    <li class="">
                        <a target="_blank" href="{{\App\Models\Setting::find(1)->facebook}}" class="">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="">
                        <a target="_blank" href="{{\App\Models\Setting::find(1)->twitter}}" class="">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="">
                        <a target="_blank" href="{{\App\Models\Setting::find(1)->email}}" class="">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="">
                        <a target="_blank" href="{{\App\Models\Setting::find(1)->linked_in}}" class="x">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="-in">
                        <a target="_blank" href="{{\App\Models\Setting::find(1)->instagram}}" class="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end  -->

<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('website/js/smooth-scroll.js')}}"></script>

<!-- Load custom js for theme -->
<script type="text/javascript" src="{{asset('website/js/app.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(Session::get('message') == 'success')
<script>
    Swal.fire({
        icon: 'success',
        title: 'success',
        text: 'Thanks For Contact with us we will contact with you as soon as !',
    })

</script>

    @endif
</body>
</html>
