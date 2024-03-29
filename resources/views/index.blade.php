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
              background-image: url(/assets/images/hero-home.jpg);
              background-size: contain;
              background-repeat: no-repeat;
              background-position: right;
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
            <h3>Transcend Studio</h3>
            <ul class="header-nav__list">
                <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                <li><a class="smoothscroll" href="#about" title="about">About</a></li>
                <li><a class="smoothscroll" href="#services" title="services">Services</a></li>
                <li><a class="smoothscroll" href="/portfolio" title="works">Works</a></li>
                <li><a class="smoothscroll" href="#contact" title="contact">Contact</a></li>
            </ul>
            <ul class="header-nav__social">
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
                <li>
                    <a href="https://wa.me/0678215343">
                        <img src="{{ asset('assets/images/svg/whatsapp.svg') }}" alt="" width="25px">
                    </a>
                </li>
            </ul>
        </div> 
    </nav> 
    <a class="header-menu-toggle" href="#0">
        <span class="header-menu-icon"></span>
    </a>
</header> 

<section id="home" class="s-home target-section" data-parallax="scroll" data-natural-width=3000 data-natural-height=2000 data-position-y=top>
    <div class="shadow-overlay"></div>
    <div class="home-content">
        <div class="row home-content__main">
            <h1>
                Hello! I'm Ismail <br>
                I am a Sr. Full-stack Developer.
            </h1>
            <p>
                I create stunning digital experiences <br>
                that will help your business stand out.
            </p>
        </div> 
    </div> 
    <ul class="home-sidelinks">
        <li><a class="smoothscroll" href="#about">About</a></li>
        <li><a class="smoothscroll" href="#services">Services</a></li>
        <li><a href="/portfolio">Works</a></li>
        <li><a class="smoothscroll" href="#contact">Contact</a></li>
        <li><a href="https://www.ismailedaraz.com/assets/ismail_edaraz.pdf" target="_blank">Resume</a></li>
    </ul> 
    <ul class="home-social">
        <li class="home-social-title">Follow Me</li>
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
        <li>
            <a href="https://wa.me/0678215343">
                <img src="{{ asset('assets/images/svg/whatsapp.svg') }}" alt="" width="25px">
            </a>
        </li>
    </ul>  
</section> 

<section id='services' class="s-services">
    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead"> what i do</h3>
            <div class="display-1">
                I have everything you need to launch and grow a successful digital business.
            </div>
        </div>
    </div> 
    <div class="row" data-aos="fade-up">
        <div class="col-full">
            <p class="lead">
                I pride myself on providing quality services that meet my clients' needs and exceed their expectations. <br/>
                Contact me today to learn more about how I can help your business succeed.
            </p>
        </div>
    </div> 
    <div class="row services-list block-1-3 block-m-1-2 block-tab-full">
        <div class="col-block service-item " data-aos="fade-up">
            <div class="service-text">
                <h3 class="h4">Web Development</h3>
                <p>
                    I specialize in building custom websites for businesses and organizations of all sizes. I has expertise in a variety of programming languages and frameworks, and I use the latest technologies to ensure that our clients' websites are fast, responsive, and user-friendly.
                </p>
            </div>
        </div>
        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-text">
                <h3 class="h4">Mobile App Development</h3>
                <p>
                    I also offer mobile app development services for iOS and Android devices. Whether you need a native app or a cross-platform solution, I have the skills and experience to build the perfect app for your needs.
                </p>
            </div>
        </div>
        <div class="col-block service-item" data-aos="fade-up">
            <div class="service-text">
                <h3 class="h4">E-commerce Development</h3>
                <p>
                    If you're looking to sell products or services online, I can help you set up an e-commerce platform that meets your specific requirements. I can integrate payment gateways, shopping carts, and other features to ensure a seamless shopping experience for your customers.
                </p>
            </div>
        </div>
    </div> 
</section> 

<section id='works' class="s-works">
    <div class="row section-header" data-aos="fade-up">
        <div class="col-full">
            <h3 class="subhead">Featured Works</h3>
            <div class="display-1">
                These are some of me recent design projects and i are so excited to show them to you.
            </div>
        </div>
    </div> 

    <div class="row masonry-wrap">
        <div class="masonry">
            @foreach ($portfolio as $item)
                <div class="masonry__brick" data-aos="fade-up">
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

    <div class="row">
        <div class="col-full text-center" style="margin-top: 60px;">
            <a href="/portfolio" class="btn-more">More projects</a>
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
                <li>
                    <a href="https://wa.me/0678215343">
                        <img src="{{ asset('assets/images/svg/whatsapp.svg') }}" alt="" width="25px">
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