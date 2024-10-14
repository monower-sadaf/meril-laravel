


@extends('layout.portal_layout')

@section('content')
<style>
    .card-b {
        height: 150px;
        width: 150px;
    }
</style>
    <!--build:css-->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <div class="main">
        <section class="bg-no-repeat bg-center bg-cover h-[30052px] lg:h-[10.4375em] md:h-[3em]" style="background-image: url({{ asset('assets/img/header-bg-5.jpg')}})">
            <div class="h-full bg-gradient-to-r from-[rgba(15,39,122,0.80)] to-[rgba(201,26,96,0.80)]">
                <div class="container mx-auto h-full flex items-center justify-center">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold text-white">Services - Driven by Dedication and Devotion</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-[50px] pt-[50px]">
            <h3 class="text-center text-[35px] font-semibold text-black pb-[30px]">Services</h3>
            <div class="container mx-auto px-2 lg:px-12 grid grid-cols-1 lg:grid-cols-3 gap-5">
                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#E80566] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/service_image1.png') }}" class="w-[80px]" alt="MerilSoft" style="filter: invert(100%) brightness(2);">
                    </div>
                    <div>
                        <h3 class="text-[20px] font-semibold text-black">Website Development</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Design and develop</li>
                            <li>E-commerce</li>
                            <li>CMS</li>
                            <li>Maintainance</li>
                        </ul>
                    </div>
                </div>
                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#06348B] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/cloud2.png') }}" class="w-[80px]" alt="MerilSoft" style="filter: invert(100%) brightness(2);">
                    </div>
                    <div>
                        <h3 class="text-[20px] font-semibold text-black">Cloud & Hosting</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Cloud Hosting</li>
                            <li>Domain Registration</li>
                            <li>Web Hosting</li>
                            <li>Cloud Security</li>
                        </ul>
                    </div>
                </div>
                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#1E90FF] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/bullhorn2.png') }}" class="w-[80px]" alt="MerilSoft" style="filter: invert(100%) brightness(2);">
                    </div>
                    <div>
                        <h3 class="text-[20px] font-semibold text-black">Digital Marketing</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Social Media Marketing</li>
                            <li>Content Marketing</li>
                            <li>SEO</li>
                            <li>Web Analytics</li>
                        </ul>
                    </div>
                </div>

                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#1E90FF] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/android.png') }}" class="w-[80px]" alt="MerilSoft" style="filter: invert(100%) brightness(2);">
                    </div>
                    <div>
                        <h3 class="text-[20px] font-semibold text-black">Apps Development</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Android App Development</li>
                            <li>iOS App Development</li>
                            <li>React Native App Development</li>
                            <li>Flutter App Development</li>
                        </ul>
                    </div>
                </div>

                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#E80566] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/software-development.png') }}" class="w-[80px]" alt="MerilSoft" >
                    </div>
                    <div>
                        <h3 class="text-[20px] font-semibold text-black">Software Development</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>Web Application Development</li>
                            <li>Mobile Apps Development</li>
                            <li>Software Testing and Quality Assurance</li>
                            <li>API Development and Integration</li>
                        </ul>
                    </div>
                </div>
                <div class="pt-10 rounded-md flex flex-col justify-center items-center gap-5">
                    <div class="bg-[#06348B] card-b" style="border-radius: 20px;padding: 36px;transition: all 0.3s ease-in-out;cursor: pointer;">
                        <img src="{{ asset('images/outsourcing.png') }}" class="w-[80px]" alt="MerilSoft" >
                    </div>
                    <div>
                        <h3 class="text-[20px] font-semibold text-black">Outsourcing</h3>
                        <ul class="list-disc" style="text-align: -webkit-center;font-size: 13px;color: #6a6a6a;">
                            <li>IT Consulting</li>
                            <li>Technology Project</li>
                            <li>IT Human Resources</li>
                            <li>Offshore IT Services</li>
                        </ul>
                    </div>
                </div>
            </div>
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
