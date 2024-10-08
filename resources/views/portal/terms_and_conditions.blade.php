


@extends('layout.portal_layout')

@section('content')

    <!--build:css-->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <div class="main">
        <section class="bg-no-repeat bg-center bg-cover h-[300px] lg:h-[10.4375em] md:h-[3em]" style="background-image: url({{ asset('assets/img/header-bg-5.jpg')}})">
            <div class="h-full bg-gradient-to-r from-[rgba(15,39,122,0.80)] to-[rgba(201,26,96,0.80)]">
                <div class="container mx-auto h-full flex items-center justify-center">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold text-white">Terms & Conditions</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-[50px] pt-[50px]" style="text-align: -webkit-center;">
            <h3 class="text-center text-[35px] font-semibold text-black pb-[30px]">Terms & Conditions </h3>
            <div class="text-left" style="width: 60%; ">
                <ul style="list-style: outside;">
                        <li>
                            <span class="font-semibold">Acceptance of Terms:</span> 
                            By accessing our Services, you acknowledge that you have read, understood, and agree to be bound by these Terms.
                        </li>
                        <li>
                            <span class="font-semibold">Modifications:</span> 
                            We reserve the right to modify these Terms at any time. We will notify you of any changes by posting the new Terms on our website. Your continued use of the Services after the modifications constitutes your acceptance of the new Terms.
                        </li>
                        <li>
                            <span class="font-semibold">Eligibility:</span> 
                            You must be at least 2 years old to use our Services. By using our Services, you represent that you meet this age requirement.
                        </li>
                        <li>
                            <span class="font-semibold">User Accounts:</span> 
                            To access certain features of our Services, you may need to create an account. You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account. You agree to notify us immediately of any unauthorized use of your account.
                        </li>
                        <li>
                            <span class="font-semibold">License:</span> 
                            Subject to your compliance with these Terms, we grant you a limited, non-exclusive, non-transferable license to use our software and Services for personal or internal business purposes.
                        </li>
                        <li>
                            <span class="font-semibold">Intellectual Property:</span> 
                            All content, trademarks, and other intellectual property associated with our Services are the property of MerilSoft or our licensors. You may not reproduce, distribute, modify, or create derivative works of any content without our prior written consent.
                        </li>
                        <li>
                            <span class="font-semibold">Payment Terms:</span> 
                            If you purchase any paid Services, you agree to pay all fees associated with the Services as specified on our website. All fees are non-refundable unless otherwise stated.
                        </li>
                        <li>
                            <span class="font-semibold">Termination:</span> 
                            We may terminate or suspend your access to our Services at any time, without prior notice or liability, for any reason, including if you breach these Terms. Upon termination, your right to use the Services will immediately cease.
                        </li>
                        <li>
                            <span class="font-semibold">Disclaimer of Warranties:</span> 
                            Our Services are provided on an "as-is" and "as-available" basis without any warranties of any kind, either express or implied. We do not warrant that the Services will be error-free, secure, or uninterrupted.
                        </li>
                        <li>
                            <span class="font-semibold">Limitation of Liability:</span> 
                            To the fullest extent permitted by law, MerilSoft shall not be liable for any indirect, incidental, special, or consequential damages arising out of or in connection with your use of the Services.
                        </li>
                        <li>
                            <span class="font-semibold">Indemnification:</span> 
                            You agree to indemnify, defend, and hold harmless MerilSoft, its affiliates, and their respective officers, directors, and employees from any claims, losses, damages, liabilities, and expenses arising out of your use of the Services or your violation of these Terms.
                        </li>
                        <li>
                            <span class="font-semibold">Governing Law:</span> 
                            These Terms shall be governed by and construed in accordance with the laws of the USA, without regard to its conflict of law principles.
                        </li>
                        <li>
                            <span class="font-semibold">Dispute Resolution:</span> 
                            Any disputes arising out of or relating to these Terms shall be resolved through binding arbitration. The arbitration shall take place in the USA.
                        </li>
                        <li>
                            <span class="font-semibold">Contact Information:</span> 
                            If you have any questions about these Terms, please contact us at [Insert Contact Information].
                        </li>
                </ul>
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
