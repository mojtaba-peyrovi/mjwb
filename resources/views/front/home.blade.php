@extends('front.master')
@section('title')
    Home
@endsection
@section('content')

    @include('front.partials.top-bar')

    @include('front.partials.header')

    @include('flash::message')

    @include('front.partials.intro')

    <main id="main">


        @include('front.partials.about')

        @include('front.partials.services')

        @include('front.partials.technology')

        @include('front.partials.portfolio')

        @include('front.partials.testimonials')

        @include('front.partials.call-to-action')

        @include('front.partials.our-team')

        @include('front.partials.contact')

    </main>

    @include('front.partials.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="reveal/lib/jquery/jquery.min.js"></script>
    <script src="reveal/lib/jquery/jquery-migrate.min.js"></script>
    <script src="reveal/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="reveal/lib/easing/easing.min.js"></script>
    <script src="reveal/lib/superfish/hoverIntent.js"></script>
    <script src="reveal/lib/superfish/superfish.min.js"></script>
    <script src="reveal/lib/wow/wow.min.js"></script>
    <script src="reveal/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="reveal/lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="reveal/lib/sticky/sticky.js"></script>
    <script src="js/snazzy-info-window.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAja97O5eUdp1lKlGL9CA8oZxi4kjhVcjk"></script>
    <!-- Contact Form JavaScript File -->
    <script src="reveal/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="reveal/js/main.js"></script>
@endsection
@section('scripts')
    <script type="text/javascript">
        console.log('works');
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
    <script type="text/javascript">
        var infoWindow = new SnazzyInfoWindow({
        marker: marker,
        content: 'Snazzy!'
        });


    </script>
@endsection
