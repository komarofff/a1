@extends ('layouts.app')

@section('title', 'ForwarderOne-request page. Only desktop version')
@section('description', 'ForwarderOne-request page -description')
@section('og')

@endsection
@section('style')

@endsection
@section('scripts')
<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
@endsection

@section('content')
<header class="header">
    <img class="header__banner" src="img/header/banner-request.png" srcset="img/header/banner-request@2x.png 2x,
             img/header/banner-request@3x.png 3x">

    @include('layouts.partials.topmenu', ['menu'=> [
    ['link' => '#', 'title' => 'About Us'],
    ['link' => '#', 'title' => 'Pricing'],
    ['link' => '#', 'title' => 'FAQ']
    ]]
    )
    <div class="header__content request-header-content">
        <p class="header__content-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum, de quibus
            loquor praecepta dantur.
        </p>
        <p class="header__content-title">
            Reliable Amazon FBA
        </p>
        <p class="header__content-subtitle">
            Freight Forwarding
        </p>
    </div>

</header>
<main class=" grid main request">
    <section class="main__people-blocks padding-both-vertical">
        <p class="h2">Create Your Request</p>
        <div class="grid">

            <div class="request__blocks">


            </div>

        </div>
    </section>
</main>
@include('layouts.partials.footer')

@endsection