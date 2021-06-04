@extends ('layouts.app')

@section('title', 'ForwarderOne-index. Only desktop version')
@section('description', 'ForwarderOne -description')
@section('og')

@endsection
@section('style')

@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slider/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
$('.main__testimonials-slider').slick({

    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slideToScroll: 1,
    centerMode: true,
    variableWidth: true
});
</script>
@endsection

@section('content')
<header class="header">
    <img class="header__banner" src="img/header/cameron-venti-1-cq-icr-wfqbi-unsplash-copy.jpg" srcset="img/header/cameron-venti-1-cq-icr-wfqbi-unsplash-copy@2x.jpg 2x,
             img/header/cameron-venti-1-cq-icr-wfqbi-unsplash-copy@3x.jpg 3x">
    @include('layouts.partials.topmenu', ['menu'=> [
    ['link' => '#', 'title' => 'About Us'],
    ['link' => '#', 'title' => 'Pricing'],
    ['link' => '#', 'title' => 'FAQ']
    ]]
    )
    <div class="header__content">
        <p class="header__content-title">
            Reliable Amazon FBA
        </p>
        <p class="header__content-subtitle">
            Freight Forwarding
        </p>
    </div>
    <div class="header__block">
        <div class="header__block-list">
            <p class="header__block-list-link">
                <img class="header__block-list-image" src="img/header/layer-24.png"
                    srcset="img/header/layer-24@2x.png 2x,img/header/layer-24@3x.png 3x">
                <span class="h3">Shipping</span>
                <span class="text">An hoc usque quaque</span>
            </p>
            <p class="header__block-list-link">
                <img class="header__block-list-image" src="img/header/layer-28.png"
                    srcset="img/header/layer-28@2x.png 2x,img/header/layer-28@3x.png 3x">
                <span class="h3">Tracking</span>
                <span class="text">An hoc usque quaque</span>
            </p>
            <p class="header__block-list-link">
                <img class="header__block-list-image" src="img/header/layer-37.png"
                    srcset="img/header/layer-37@2x.png 2x,img/header/layer-37@3x.png 3x">
                <span class="h3">Train</span>
                <span class="text">An hoc usque quaque</span>
            </p>
            <p class="header__block-list-link">
                <img class="header__block-list-image" src="img/header/layer-29.png"
                    srcset="img/header/layer-29@2x.png 2x,img/header/layer-29@3x.png 3x">
                <span class="h3">Plane</span>
                <span class="text">An hoc usque quaque</span>
            </p>
        </div>
        <a class="button-link" href="#">Get a quote</a>
    </div>
</header>
<main class="grid main">
    <section class="main__people-blocks padding-both-vertical">
        <p class="h2">Testimonial Belt</p>
        <div class="grid">
            <div class="main__blocks ">
                <div class="main__people-block">
                    <img class="main__people-image" src="img/main/layer-34.jpg"
                        srcset="img/main/layer-34@2x.jpg 2x,    img/main/layer-34@3x.jpg 3x">
                    <p class="h3">JOHN DOE</p>
                    <p class="small-text">
                        Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Sed tamen omne, quod de.
                    </p>
                </div>
                <div class="main__people-block ">
                    <img class="main__people-image" src="img/main/layer-36.jpg"
                        srcset="img/main/layer-36@2x.jpg 2x,    img/main/layer-36@3x.jpg 3x">
                    <p class="h3">Jenelyn Doe</p>
                    <p class="small-text">
                        Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Sed tamen omne, quod de.
                    </p>
                </div>
                <div class="main__people-block">
                    <img class="main__people-image" src="img/main/layer-35.jpg"
                        srcset="img/main/layer-35@2x.jpg 2x,    img/main/layer-35@3x.jpg 3x">
                    <p class="h3">Alex DOE</p>
                    <p class="small-text">
                        Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Sed tamen omne, quod de.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="main__description-gray-block padding-both-vertical">
        <div class="grid">
            <div class="main__description-block-right ">
                <div class="main__description-block">
                    <p class="h3 red">Unlimited opportunities for your business</p>
                    <p class="h2">One simple platform</p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur.
                    </p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur. Urgent tamen
                        et nihil remittunt.
                    </p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor.
                    </p>
                </div>
                <div class="main__image-block-right">
                    <img class="main__description-image" src="img/main/main-description-image.png"
                        srcset="img/main/main-description-image.png 2x,    img/main/main-description-image.png 3x">
                </div>
            </div>
        </div>
    </section>
    <section class="main__description-white-block padding-both-vertical">
        <div class="grid">
            <div class="main__description-block-left ">
                <div class="main__image-block-left">
                    <img class="main__description-image" src="img/main/main-description-image.png"
                        srcset="img/main/main-description-image.png 2x,    img/main/main-description-image.png 3x">
                </div>
                <div class="main__description-block">
                    <p class="h3 red">Unlimited opportunities for your business</p>
                    <p class="h2">One simple platform</p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur.
                    </p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur. Urgent tamen
                        et nihil remittunt.
                    </p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="main__testimonials-block padding-both-vertical">
        <div class="grid">
            <div class="main__testimonials-slider ">
                <div>
                    <div class="main__testimonials-slider-block">
                        <p class="h3 white">Testimonials</p>
                        <p class="h2 white">What our members have to say...</p>
                        <img class="testimonials-small-image" src="img/main/layer-43.jpg"
                            srcset="img/main/layer-43@2x.jpg 2x,    img/main/layer-43@3x.jpg 3x">
                        <p class="big-text white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                            de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur. Urgent tamen
                            et nihil remittunt. Graecum enim hunc versum nostis omnes-: Suavis laborum est praeteritorum
                            memoria.
                        </p>
                        <p class="star">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </p>
                        <p class="text white bottom-margin-none">Patrick losey, CEO</p>
                        <p class="smaller-text white">Rainingfire Interactive</p>
                    </div>
                </div>
                <div>
                    <div class="main__testimonials-slider-block">
                        <p class="h3 white">Testimonials</p>
                        <p class="h2 white">What our members have to say...</p>
                        <img class="testimonials-small-image" src="img/main/layer-43.jpg"
                            srcset="img/main/layer-43@2x.jpg 2x,    img/main/layer-43@3x.jpg 3x">
                        <p class="big-text white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                            de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur. Urgent tamen
                            et nihil remittunt. Graecum enim hunc versum nostis omnes-: Suavis laborum est praeteritorum
                            memoria.
                        </p>
                        <p class="star">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </p>
                        <p class="text white bottom-margin-none">Patrick losey, CEO</p>
                        <p class="smaller-text white">Rainingfire Interactive</p>
                    </div>
                </div>
                <div>
                    <div class="main__testimonials-slider-block">
                        <p class="h3 white">Testimonials</p>
                        <p class="h2 white">What our members have to say...</p>
                        <img class="testimonials-small-image" src="img/main/layer-43.jpg"
                            srcset="img/main/layer-43@2x.jpg 2x,    img/main/layer-43@3x.jpg 3x">
                        <p class="big-text white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                            de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur. Urgent tamen
                            et nihil remittunt. Graecum enim hunc versum nostis omnes-: Suavis laborum est praeteritorum
                            memoria.
                        </p>
                        <p class="star">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </p>
                        <p class="text white bottom-margin-none">Patrick losey, CEO</p>
                        <p class="smaller-text white">Rainingfire Interactive</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="main__advantages padding-both-vertical">
        <p class="h3">Our ADvantages</p>
        <p class="h2">Why Choose Us</p>
        <div class="grid">
            <div class="main__advantages-area">
                <div class="main__advantages-block">
                    <img class="advantages-block-image" src="img/main/layer-59.png"
                        srcset="img/main/layer-59@2x.png 2x, img/main/layer-59@3x.png 3x">
                    <p class="h2">Advantage title</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum.
                        Ad eas enim res ab Epicuro
                    </p>
                    <a class="small-button-link" href="#">Learn more</a>
                </div>
                <img class="advantages-block-stripe" src="img/main/layer-45.png"
                    srcset="img/main/layer-45@2x.png 2x, img/main/layer-45@3x.png 3x">
                <div class="main__advantages-block">
                    <img class="advantages-block-image" src="img/main/layer-60.png"
                        srcset="img/main/layer-60@2x.png 2x, img/main/layer-60@3x.png 3x">
                    <p class="h2">Advantage title</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum.
                        Ad eas enim res ab Epicuro
                    </p>
                    <a class="small-button-link" href="#">Learn more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="main__inquire inquire-background padding-both-vertical">
        <p class="h2 white">How to Inquire</p>
        <div class="grid">
            <div class="main__inquire-area">
                <div class="main__inquire-block">
                    <img class="red-circle" src="img/main/red-circle.png"
                        srcset="img/main/red-circle@2x.png 2x,   img/main/red-circle@3x.png 3x">
                    <div class="white-circle">
                        <p class="h3">1</p>
                    </div>
                    <p class="text white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ille ridens: Video, inquit,
                        quid.
                    </p>
                </div>
                <div class="main__inquire-block">
                    <img class="red-circle" src="img/main/red-circle.png"
                        srcset="img/main/red-circle@2x.png 2x,   img/main/red-circle@3x.png 3x">
                    <div class="white-circle">
                        <p class="h3">2</p>
                    </div>
                    <p class="text white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ille ridens: Video, inquit,
                        quid.
                    </p>
                </div>
                <div class="main__inquire-block">
                    <img class="red-circle" src="img/main/red-circle.png"
                        srcset="img/main/red-circle@2x.png 2x,   img/main/red-circle@3x.png 3x">
                    <div class="white-circle">
                        <p class="h3">3</p>
                    </div>
                    <p class="text white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ille ridens: Video, inquit,
                        quid.
                    </p>
                </div>
                <div class="main__inquire-block">
                    <img class="red-circle" src="img/main/red-circle.png"
                        srcset="img/main/red-circle@2x.png 2x,   img/main/red-circle@3x.png 3x">
                    <div class="white-circle">
                        <p class="h3">4</p>
                    </div>
                    <p class="text white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ille ridens: Video, inquit,
                        quid.
                    </p>
                </div>

            </div>
        </div>

    </section>
    
</main>
@include('layouts.partials.footer')

@endsection