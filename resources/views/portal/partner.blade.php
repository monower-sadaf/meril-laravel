


@extends('layout.portal_layout')

@section('content')

    <!--build:css-->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <div class="main">
        <section class="bg-no-repeat bg-center bg-cover h-[300px] lg:h-[10.4375em] md:h-[3em]" style="background-image: url({{ asset('assets/img/header-bg-5.jpg')}})">
            <div class="h-full bg-gradient-to-r from-[rgba(15,39,122,0.80)] to-[rgba(201,26,96,0.80)]">
                <div class="container mx-auto h-full flex items-center justify-center">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold text-white">Partner - Power of Our Partner</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-[50px] pt-[50px]" style="text-align: -webkit-center;">
            <h3 class="text-center text-[35px] font-semibold text-black pb-[30px]" >Partner</h3>
            <h3 class="text-[16px] lg:text-[18px] text-black w-[80%]" style="width: 60%;text-align: -webkit-center;" >
                <p class="text-left" style="font-size: 22px;font-weight: bold;margin-bottom: 10px;">Mysoftheaven (BD) Ltd.</p>
                <p style="text-align: justify;">Mysoft Heaven (BD) Ltd. offers the complete software product development, lifecycle and support services. We carry 15+ years’ experience in design, develop and maintaining software products and services. We understand in today’s dynamic market, product development requires innovation, creativity as well as speed to deliver. We convert clients’ ‘Product Vision’ into product development

                    The development life cycle is controlled by client inputs and direction. There are no hidden charges or any other additional costs involved. This provides you complete independence and flexibility to get the project developed end-to-end as per your budget provisions. we provide provides knowledgeable, skilled, motivated, energetic and competent consultants who work seamlessly as part of client teams to provide quality solutions. Before any such project begins, we provide you the effort estimates, project timeline, material/resource estimates and other vital figures to help you decide on financials.
                    
                    We serve our clients with experienced and highly motivated staff. Our state-of-the-art infrastructure helps us to overcome challenges associated with product development. Our long-lasting engagement with Microsoft, Java, open source and other technology helps us to be on top in the changing technology market place, and enables us to support developed product accessible on cross platform (Window, Linux and Mac)
                    
                    Choose Mysoft Heaven (BD) Ltd. as your trusted partner for all your software development needs, and experience excellence, innovation, and unparalleled support every step of the way.</p>
            </h3>
            
        </section>

        <section>
            <div class="bg-white shad py-3 mb-[25px] lg:py-6 lg:mb-[50px] mb-[25px]" style="margin-bottom:30px">
                <div class="container mx-auto px-2 lg:px-12 grid grid-cols-2 lg:grid-cols-7 justify-items-center gap-4 lg:gap-0  flex justify-center flex-col md:flex-col lg:flex-row" style="display: flex; gap: 50px;">
                    <div class="flex flex-col lg:flex-row items-center gap-3 lg:gap-6">
                        <img class="w-[3em] h-[3em] lg:w-[5.143125em] lg:h-[5.143125em]" src="./assets2/images/stats1.png" alt="image">
                        <div>
                            <h3 class="text-[16px] lg:text-3xl font-bold text-center lg:text-left" style="color: #1a2c79;font-size: 42px;">2500+</h3>
                            <h3 class="text-[12px] lg:text-[22px] font-semibold text-center lg:text-left">Projects</h3>
                        </div>
                    </div>
                    <div class="bg-primary w-px h-[4.5em] hidden lg:block"></div>
                    <div class="flex flex-col lg:flex-row items-center gap-3 lg:gap-6">
                        <img class="w-[3em] h-[3em] lg:w-[5.143125em] lg:h-[5.143125em]" src="./assets2/images/stats2.png" alt="image">
                        <div>
                            <h3 class="text-[16px] lg:text-3xl font-bold text-center lg:text-left" style="color: #1a2c79;font-size: 42px;">1500+</h3>
                            <h3 class="text-[12px] lg:text-[22px] font-semibold text-center lg:text-left">Happy Customers</h3>
                        </div>
                    </div>
                    <!-- <div class="bg-primary w-px h-[4.5em] hidden lg:block"></div>
                    <div class="flex flex-col lg:flex-row items-center gap-3 lg:gap-6">
                        <img class="w-[3em] h-[3em] lg:w-[4em] lg:h-[4em]" src="./assets2/images/stats3.png" alt="image">
                        <div>
                            <h3 class="text-[16px] lg:text-3xl font-bold text-center lg:text-left">7000+</h3>
                            <h3 class="text-[12px] lg:text-[22px] font-semibold text-center lg:text-left">Downloaded</h3>
                        </div>
                    </div> -->
                    <div class="bg-primary w-px h-[4.5em] hidden lg:block"></div>
                    <div class="flex flex-col lg:flex-row items-center gap-3 lg:gap-6">
                        <img class="w-[3em] h-[3em] lg:w-[4em] lg:h-[4em]" src="./assets2/images/stats4.png" alt="image">
                        <div>
                            <h3 class="text-[16px] lg:text-3xl font-bold text-center lg:text-left" style="color: #1a2c79;font-size: 42px;">100+</h3>
                            <h3 class="text-[12px] lg:text-[22px] font-semibold text-center lg:text-left">Team Members</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <div class="container mx-auto px-2 lg:px-12">
            <h3 class="font-semibold text-[16px] lg:text-[30px] leading-[37px] text-primary text-center pb-[25px] lg:pb-[47px]">Trusted by over 500+ customers<span style="font-size: 25px;">*</span>...</h3>
        </div> -->
    
        <div class="bg-[#F3F5FF]">
            <div  class="container mx-auto px-2 lg:px-12 grid grid-cols-2 lg:grid-cols-5 justify-items-center gap-4 lg:gap-0 py-5">
                <img class="w-[95px]" src="{{ asset('images/scout3.png') }}" alt="image">
                <img class="w-[85px]" src="{{ asset('images/bcct2.png') }}" alt="image">
                <img class="w-[87px]" src="{{ asset('images/govt3.png') }}" alt="image">
                <img class="w-[100px]" src="{{ asset('images/ict3.png') }}" alt="image">
                <img class="w-[75px]" src="{{ asset('images/a2i2.png') }}" alt="image">
            </div>
        </div>
    </div>


    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="{{ asset('assets/js/vendors/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/mixitup.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/headroom.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/smooth-scroll.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/wow.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.waypoints.min.js')}}"></script>
    <!--<script src="{{ asset('assets/js/vendors/countUp.min.js')}}"></script>-->
    <script src="{{ asset('assets/js/vendors/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/validator.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <!--endbuild-->



    @endsection
