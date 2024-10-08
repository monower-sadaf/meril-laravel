<footer  class="bg-primary  bg-cover bg-center pt-7 pb-3" style="background-image: url(' {{ asset('images/world_map.png') }}');">
        <div class="container mx-auto px-2 lg:px-12 ">
            <div class="">
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-4 border-b border-white pb-5">
                    <div>
                         <div class="pb-5">
                            <h3 class="text-white text-[15px] lg:text-[22px] font-semibold pb-[15px]">Office</h3>
                            <div class="flex items-center lg:items-start gap-2">
                                <img class="w-[20px] h-[20px] mt-1" src="{{ asset('images/pin.png') }}" alt="image">
                                <p class="text-white lg:max-w-[171px] text-[14px] lg:text-[16px]">1216 BROADWAY FL 2, NEW YORK, NY, 10001</p>
                            </div>
                         </div>
                         <!-- <div class="pb-5">
                            <h3 class="text-white text-[15px] lg:text-[22px] font-semibold pb-[15px]">Branch Office:</h3>
                            <div class="flex items-center lg:items-start gap-2">
                                <img class="w-[20px] h-[20px] mt-1" src="{{ asset('images/pin.png') }}" alt="image">
                                <p class="text-white lg:max-w-[171px] text-[14px] lg:text-[16px]">1216 BROADWAY FL 2, NEW YORK, NY, 10001</p>
                            </div>
                         </div> -->
                         <div class="flex items-center lg:items-start gap-2 pb-5">
                            <img class="w-[20px] mt-1" src="{{ asset('images/mail.png') }}" alt="image">
                            <p class="text-white lg:max-w-[171px] text-[14px] lg:text-[16px]">contact@merilsoft.com</p>
                         </div>

                         <div class="flex items-center gap-5 " style="place-content: center;">
                            <a href="#" class="flex items-center gap-2">
                                <img class="w-[37px]" src="{{ asset('images/fb.png') }}" alt="image">
                            </a>
                         </div>
                    </div>
                    <div>
                        <h3 class="font-semibold text-[15px] lg:text-[22px] text-white pb-[10px]">Service</h3>
                        <ul class="flex flex-col gap-4 text-white text-[14px] lg:text-[16px]">
                            <li>
                                <a href="#">
                                    Website Development
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Mobile app development
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Social Media Marketing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cloud & Hosting
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ERP
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-[15px] lg:text-[22px] text-white pb-[10px]">Solution</h3>
                        <ul class="flex flex-col gap-4 text-white text-[14px] lg:text-[16px]">
                            <li>
                                <a href="#">
                                    e-Governance
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    ERP
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#">
                                    Managed IT
                                </a>
                            </li> -->
                            <li>
                                <a href="#">
                                    Innovation
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Data Science
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-[15px] lg:text-[22px] text-white pb-[10px]">About us</h3>
                        <ul class="flex flex-col gap-4 text-white text-[14px] lg:text-[16px]">
                            <li>
                                <a href="#">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Why us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Contact
                                </a>
                            </li>
                            <!-- <li>
                                <a href="contact.html">
                                    Contact Us
                                </a>
                            </li> -->
                        </ul>
                    </div>
                    <div>
                        <a href="https://mysoftheaven.com/">
                            <h3 class="font-semibold text-[15px] lg:text-[22px] text-white pb-[10px] text-center">Partner</h3>
                            <img class="w-[150px] lg:w-[200px] mx-auto" src="{{ asset('images/mysoft_logo.png') }}" alt="image">
                        </a>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row items-center justify-center gap-3 text-white font-semibold py-3">             
                    <p class="text-[14px] lg:text-[16px]">© 2024 Merilsoft. All rights reserved </p>
                    <div class="bg-white w-px h-5 hidden lg:block"></div>
                    <p class="text-[14px] lg:text-[16px]"><a href="{{ route('terms_and_conditions') }}">Terms & Conditions </a></p>
                    <div class="bg-white w-px h-5 hidden lg:block"></div>
                    <p class="text-[14px] lg:text-[16px]">Privacy Policy</p>
                    <div class="bg-white w-px h-5 hidden lg:block"></div>
                    <p class="text-[14px] lg:text-[16px]"><a href="diversity.html">Diversity</a></p>
                </div>
            </div>
        </div>
    </footer>