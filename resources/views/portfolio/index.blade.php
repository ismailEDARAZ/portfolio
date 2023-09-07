<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <meta charset="utf-8">
    <title>Ismail Edaraz - I am a full-stack developer</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('assets/css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">

    <script src="{{ asset('assets/js/modernizr.js')}}"></script>
    <script src="{{ asset('assets/js/pace.min.js')}}"></script>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <style>
        .s-home {
            min-height: 400px;
            height: auto;
        }
        .home-content {
            padding-bottom: 0rem;
        }
        .d-none {
            display: none;
        }
    </style>
</head>
<body id="top">

<header class="s-header">
    <div class="header-logo">
        <a class="site-logo" href="/">
            <img src="{{ asset('assets/images/logo_.png') }}" alt="Homepage">
        </a>
    </div> 
    <nav class="header-nav">
        <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
        <div class="header-nav__content">
            <h3>Menu</h3>
            <ul class="header-nav__list">
                <li class="current"><a class="smoothscroll" href="https://www.ismailedaraz.com" title="home">Home</a></li>
                <li><a href="https://www.ismailedaraz.com/#about" title="about">About</a></li>
                <li><a href="https://www.ismailedaraz.com/#services" title="services">Services</a></li>
                <li><a href="https://www.ismailedaraz.com/portfolio" title="works">Works</a></li>
                <li><a href="https://www.ismailedaraz.com/#contact" title="contact">Contact</a></li>
                <li><a href="https://www.ismailedaraz.com/assets/ismail_edaraz.pdf" target="_blank">Resume</a></li>
            </ul>
            <ul class="header-nav__social">
                <li>
                    <a href="#0">
                        <img src="{{ asset('assets/images/svg/facebook.svg') }}" alt="" width="20px">
                    </a>
                </li>
                <li>
                    <a href="https://github.com/ismailEDARAZ" target="_blank">
                        <img src="{{ asset('assets/images/svg/github.svg') }}" alt="" width="20px">
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/ismail-edaraz-b7045a137" target="_blank">
                        <img src="{{ asset('assets/images/svg/linkedin-in.svg') }}" alt="" width="20px">
                    </a>
                </li>
            </ul>
        </div> 
    </nav> 
    <a class="header-menu-toggle" href="#0">
        <span class="header-menu-icon"></span>
    </a>
</header> 

<section id="home" class="s-home target-section" data-parallax="scroll" data-natural-width=3000 data-natural-height=1000 data-position-y=top>
    <div class="shadow-overlay"></div>
    <div class="home-content">
        <div class="row home-content__main">
            <h1>
                Portfolio
            </h1>
        </div> 
    </div> 
</section> 

<section id='works' class="s-works">
    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Featured Works</h3>
        </div>
    </div>
    
    <div class="row" data-aos="fade-up" style="margin-top: 30px;">
        <div class="col-full">
            <ul class="portfolio-cat">
                <li class="@if(!request()->cat || request()->cat == 'all')active @endif">
                    <a href="/portfolio?cat=all">
                        All
                    </a>
                </li>
                @foreach (App\Models\Category::all() as $cat)
                    <li class="@if(request()->cat && request()->cat != 'all' && request()->cat == $cat->id)active @endif">
                        <a href="/portfolio?cat={{ $cat->id }}">
                            {{ $cat->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row masonry-wrap">
        <div class="masonry" data-aos="fade-up">
            @foreach ($portfolio as $item)
                <div class="masonry__brick">
                    <div class="item-folio">
                        <div class="item-folio__thumb">
                            <a href="{{ $item->link }}" class="thumb-link" title="Lamp" data-size="1050x700">
                                <img src="{{ asset('storage/'.$item->image) }}" alt="">
                            </a>
                        </div>
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">{{ $item->name }}</h3>
                            <p class="item-folio__cat">{{ $item->category->name }}</p>
                        </div>
                        <a href="{{ $item->link }}" class="item-folio__project-link" title="Project link">Project Link</a>
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
                    </div> 
                </div> 
            @endforeach
        </div> 
    </div>

    <div class="row d-none">
        <div class="col-full text-center" style="margin-top: 60px;">
            <a href="#" class="btn-more">More projects</a>
        </div>
    </div>
</section> 

<section id="contact" class="s-contact">
    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead subhead--light">Contact Me</h3>
            <div class="display-1 display-1--light">
                Get in touch and let's make something great together. <br>
                Let's turn your idea on an even greater product.
            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-full contact-main" data-aos="fade-up">
            <p style="text-align: center;">
                <a href="mailto:" class="contact-email">
                    <span class="__cf_email__">ismail.edaraz@gmail.com</span>
                </a>
                <span class="contact-number">(+212) 678 215 343</span>
            </p>
        </div> 
    </div> 
    <div class="row">
        <div class="col-full contact-secondary" data-aos="fade-up" style="text-align: center;">
            <h3 class="subhead subhead--light">Follow Me</h3>
            <ul class="contact-social">
                <li>
                    <a href="#0">
                        <img src="{{ asset('assets/images/svg/facebook.svg') }}" alt="" width="25px">
                    </a>
                </li>
                <li>
                    <a href="https://github.com/ismailEDARAZ">
                        <img src="{{ asset('assets/images/svg/github.svg') }}" alt="" width="25px">
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/ismail-edaraz-b7045a137/">
                        <img src="{{ asset('assets/images/svg/linkedin-in.svg') }}" alt="" width="25px">
                    </a>
                </li>
            </ul> 
        </div> 
    </div> 
    <div class="row">
        <div class="col-full cl-copyright">
            <span>
                Copyright &copy; <script>document.write(new Date().getFullYear());</script> | This portfolio is made with <img src="https://s.w.org/images/core/emoji/14.0.0/svg/2764.svg" alt="" width="15">
            </span>
        </div>
    </div>
</section> 

    <div id="preloader">
        <div id="loader">
        </div>
    </div>

    <script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vb26e4fa9e5134444860be286fd8771851679335129114"></script>
</body>
</html>