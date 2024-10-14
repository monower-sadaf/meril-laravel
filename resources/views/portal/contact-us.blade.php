


@extends('layout.portal_layout')

@section('content')
<style>
    .r_robot {    
    font-size: 14px;
    font-family: 'Roboto', sans-serif;
}

.r_box-container {
    display: flex;
    background-color: #F9F9F9;
    border: 1px solid #D3D3D3;
    border-radius: 3px;
    width: 300px;
    align-items: center;
    padding: 10px 0px 10px 0px;
}

input[type="checkbox"] {
    appearance: none;    
    width: 26px;
    height: 26px;    
    border: 2px solid #C1C1C1;
    margin: 0px 14px 0px 14px;
}

input[type="checkbox"]:checked::before {
    content: url(https://img.icons8.com/?size=20&id=27&format=png&color=1e5180);
    display: block;    
    line-height: 20px;
    padding: 0.05rem 0.6rem 0rem 0.05em;
}

.r_logo {    
    display: block;
    margin-left: 65%;
}

.r_logo-text {
    text-align: right;
    font-size: 9px;
    font-family: 'Roboto', sans-serif;
}

.r_logo-text-tos {
    display: block;
    text-align: right;
    font-size: 9px;
    font-family: 'Roboto', sans-serif;
    margin-left: 80px;
}

.r_container {
    margin-right: 10px;
    text-align: center;
    line-height: 0.1rem;
}
</style>
    <!--build:css-->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> --}}
    <div class="main">
        <section class="bg-no-repeat bg-center bg-cover h-[300px] lg:h-[10.4375em] md:h-[3em]" style="background-image: url({{ asset('assets/img/header-bg-5.jpg')}})">
            <div class="h-full bg-gradient-to-r from-[rgba(15,39,122,0.80)] to-[rgba(201,26,96,0.80)]">
                <div class="container mx-auto h-full flex items-center justify-center">
                    <div class="text-center">
                        <h1 class="text-4xl font-bold text-white">Contact us - Empower Your Business</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-12 md:pb-20 pt-12 md:pt-20 mx-auto" style="margin-bottom: 32px;">
            <h3 class="text-center text-3xl font-semibold text-black pb-10 md:pb-16" style="margin-top: 26px;">Contact us</h3>
           
            <form action="{{ route('sendManualEmail') }}" method="POST" class="space-y-4 md:space-y-6  rounded-md" style="max-width: 35%;margin: 20px auto;padding: 37px;box-shadow: 0px 0px 5px 1px #939393;" id="contact-form">
                @csrf
                @if (session()->has('success'))
                    <div class="bg-green-500 p-2 text-white" style="background: aquamarine;text-align: center;color: black">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="flex flex-col md:flex-row">
                    <div class="w-full md:w-1/2 md:pr-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input required type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" />
                    </div>
                    <div class="w-full mt-4 md:mt-0 md:pl-4 md:w-1/2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input required type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" />
                    </div>
                    <div class="w-full mt-4 md:mt-0 md:pl-4 md:w-1/2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Mobile number </label>
                        <input type="number" id="number" name="number" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary" />
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea required id="message" name="message" rows="4" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"></textarea>
                </div>
                <div class="flex flex-col" style="margin: 11px 0px;">
                    <div class="r_box-container">
                        <input type="checkbox" required class="r_check">
                        <p class="r_robot">I'm not a robot</p>
                          <div>
                            <div class="r_container" style="line-height: 12px;">
                              <div class="r_logo">
                                <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.0906 14.9789C30.0899 14.7631 30.0849 14.5485 30.0753 14.335V2.15984L26.7093 5.52576C23.9545 2.15375 19.7637 0 15.0697 0C10.1847 0 5.84492 2.33169 3.10156 5.94269L8.61873 11.5179C9.15941 10.5179 9.92751 9.65906 10.8536 9.01039C11.8168 8.25873 13.1816 7.64415 15.0695 7.64415C15.2976 7.64415 15.4736 7.6708 15.603 7.72101C17.9421 7.90563 19.9696 9.19653 21.1635 11.0702L17.2581 14.9755C22.2047 14.9561 27.7928 14.9447 30.0902 14.978" fill="#1C3AA9"/>
                                <path d="M14.9789 0.000610352C14.7631 0.00131601 14.5485 0.00633868 14.335 0.0159818H2.15983L5.52576 3.38191C2.15375 6.13673 0 10.3275 0 15.0216C0 19.9065 2.33173 24.2463 5.94269 26.9897L11.5179 21.4725C10.5179 20.9318 9.65906 20.1637 9.01039 19.2376C8.25877 18.2744 7.64415 16.9096 7.64415 15.0217C7.64415 14.7937 7.6708 14.6176 7.72101 14.4883C7.90563 12.1492 9.19653 10.1216 11.0702 8.92779L14.9755 12.8331C14.9561 7.88654 14.9447 2.29845 14.978 0.00103747" fill="#4285F4"/>
                                <path d="M0 15.0211C0.00072284 15.2369 0.00569389 15.4514 0.0153656 15.665V27.8402L3.38129 24.4742C6.13611 27.8462 10.3269 30 15.021 30C19.9059 30 24.2457 27.6683 26.9891 24.0573L21.4719 18.4821C20.9312 19.4821 20.1631 20.3409 19.237 20.9896C18.2738 21.7413 16.909 22.3558 15.0211 22.3558C14.7931 22.3558 14.617 22.3292 14.4877 22.279C12.1486 22.0944 10.121 20.8035 8.92718 18.9298L12.8325 15.0245C7.88593 15.0439 2.29784 15.0553 0.000429605 15.022" fill="#ABABAB"/>
                                </svg>
                                  <div class="r_logo-text">
                                    <p>reCAPTCHA</p>            
                                  </div>            
                              </div>
                              <p class="r_logo-text-tos">Privacy - Terms</p>
                            </div>
                          </div>    
                      </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Send
                    </button>
                </div>
            </form>

           
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
