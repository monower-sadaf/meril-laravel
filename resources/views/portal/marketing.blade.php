


@extends('layout.portal_layout')

@section('content')
<style>
    .card-b {
        box-shadow: 0px 0px 8px 1px #6a6a6a;
    }
</style>

    <!--build:css-->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <div class="main">
        <section class="bg-no-repeat bg-center bg-cover h-[300px] lg:h-[10.4375em] md:h-[3em]" style="background-image: url({{ asset('assets/img/header-bg-5.jpg')}})">
            <div class="h-full bg-gradient-to-r from-[rgba(15,39,122,0.80)] to-[rgba(201,26,96,0.80)]">
                <div class="container mx-auto h-full flex items-center justify-center">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold text-white">Solution - Ensuring Quality That Meets Your Needs</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-[50px] pt-[50px]">
            <h3 class="text-center text-[35px] font-semibold text-black pb-[30px]">Solution</h3>
            <div class="container mx-auto px-2 lg:px-12 grid grid-cols-1 lg:grid-cols-3 gap-5">
                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#E80566] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/solution/e-gove.png') }}" class="w-[80px]" alt="MerilSoft" >
                    </div>
                    <div style="text-align: -webkit-center;">
                        <h3 class="text-[20px] font-semibold text-black">E-Governance</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Land Development Tax System</li>
                            <li>Case Management System</li>
                            <li>Unique Business ID System</li>
                            <li>Population Census Management System</li>
                        </ul>
                    </div>
                </div>
                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#06348B] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/solution/erp.png') }}" class="w-[80px]" alt="MerilSoft" >
                    </div>
                    <div style="text-align: -webkit-center;">
                        <h3 class="text-[20px] font-semibold text-black">ERP</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Sheba ERP</li>
                            <li>Oddo ERP</li>
                            <li>Custom ERP</li>                            
                        </ul>
                    </div>
                </div>
                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#1E90FF] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/solution/manage-it.png') }}" class="w-[80px]" alt="MerilSoft" >
                    </div>
                    <div>
                        <h3 class="text-[20px] font-semibold text-black">Managed IT</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Managed Cloud</li>
                            <li>Managed Security</li>
                            <li>Managed Network</li>
                            <li>Managed Software</li>
                        </ul>
                    </div>
                </div>

                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#1E90FF] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img  src="{{ asset('images/solution/innovation.png') }}" class="w-[80px]" alt="MerilSoft" >
                    </div>
                    <div style="text-align: -webkit-center;">
                        <h3 class="text-[20px] font-semibold text-black">Innovation</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Digital Transformation</li>
                            <li>Robotic Proccess Automation</li>
                            <li>Sustainable Technology</li>
                           
                        </ul>
                    </div>
                </div>

                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#E80566] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img  src="{{ asset('images/solution/ai.png') }}" class="w-[80px]" alt="MerilSoft" >
                    </div>
                    <div style="text-align: -webkit-center;">
                        <h3 class="text-[20px] font-semibold text-black">Artificial Intelligence</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Machine Learning</li>
                            <li>Natural Language Processing</li>
                            <li>Computer Vision</li>                           
                        </ul>
                    </div>
                </div>
                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#06348B] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img  src="{{ asset('images/solution/data-science.png') }}"class="w-[80px]" alt="MerilSoft" >
                    </div>
                    <div style="text-align: -webkit-center;">
                        <h3 class="text-[20px] font-semibold text-black">Data Science</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Data Analytics</li>
                            <li>Big Data</li>
                            <li>Blockchain</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <div class="container mx-auto px-2 lg:px-12">
            <h3 class="font-semibold text-[16px] lg:text-[30px] leading-[37px] text-primary text-center pb-[25px] lg:pb-[47px]">Trusted by over 500+ customers<span style="font-size: 25px;">*</span>...</h3>
        </div>
    
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
