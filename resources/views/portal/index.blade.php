@extends('layout.portal_layout')

@section('content')
    <div class="bg-cover bg-center mb-[59px]" style="background-image: url({{ asset('images/hero_image3.png') }});">
        <div class="container mx-auto px-2 lg:px-12 py-16 flex flex-col lg:flex-row lg:justify-between lg:items-end">
            <div class="lg:w-[45%]">
                <div class="pb-6 lg:pb-11">
                    <h3 class="text-[20px] lg:text-2xl font-bold text-white pb-3 lg:pb-6">Empower Your Business</h3>
                    <h3 class="text-[16px] lg:text-[22px] text-white">
                        We simplify complex operations, create meaningful user
                        experiences, and deliver scalable, enduring business value. Full
                        spectrum innovation with mobile, web, software, 3D and IoT
                        technology solutions.
                    </h3>
                </div>
                <div class="pb-[15px] lg:pb-[25px]">
                    <h3 class="text-[20px] lg:text-2xl font-bold text-white pb-3 lg:pb-6">Transforms businesses through technology:</h3>
                    <h3 class="text-[16px] lg:text-[22px] text-white">
                        We help businesses successfully navigate digital transformation
                        and drive real growth, drawing on the combined power of experience
                        and contextual knowledge, across a vast ecosystem of expertise.
                    </h3>
                </div>

                <a href="contact.html" class=" text-[16px] lg:text-[22px] bg-primary text-white font-bold px-2 py-1 lg:px-4 lg:py-2 rounded">Contact Us</a>
            </div>
            <a href="#" target="_blank">
                <img class="w-[8em] h-[5em] lg:w-[16.4375em] lg:h-[9.8125em]" src="{{ asset('images/mysoft_logo.png') }}" alt="my soft logo" />
            </a>
            
        </div>
    </div>

    <!-- <div class="container mx-auto px-2 lg:px-12 flex items-center justify-center pb-[63px]">
        <div class="flex flex-col items-center">
            <h3 class="text-[16px] lg:text-[26px] font-bold pb-[20px] lg:pb-[38px]">Cutting Edge Solution for your Business</h3>
            <h3 class="text-[15px] lg:text-[22px] leading-[33px] lg:max-w-[970px] text-center pb-[20px] lg:pb-[39px]">We help businesses successfully navigate digital transformation and drive real growth, drawing on the combined power of experience and contextual knowledge, across a vast ecosystem of expertise.</h3>
        </div>
    </div> -->

    <!-- <div class="container 2xl:mx-auto px-[31px] grid grid-cols-1 lg:grid-cols-2 gap-4 pb-[74px]">
        <img class="lg:w-[40.02625em]" src="{{ asset('images/img1.png') }}" alt="image">
        <div>
            <div class="pb-[46px]">
                <h3 class="font-bold text-[15px] lg:text-[26px] flex items-center gap-3 pb-3">
                    <span>
                        <img class="w-[1em] h-[1em] lg:w-[1.1em] lg:h-[1.3em]" src="{{ asset('images/img2.png') }}" alt="images">
                    </span>
                    <span>
                        Solution for Your Business Here
                    </span>
                </h3>
                <h3 class="text-[15px] lg:text-[22px] leading-[33px] pl-7 lg:pl-11">Interactively develop timely niche markets before extensive imperatives. Professionally repurpose strategies.</h3>
            </div>
            <ul class="flex flex-col gap-3 pb-5 lg:gap-5 lg:pb-11">
                <li class="flex gap-2 lg:gap-3"><img class="w-4 h-4 lg:w-7 lg:h-7 mt-2" src="{{ asset('images/img3.png') }}" alt="image"> <h3 class="text-[15px] lg:text-[22px] leading-[33px]">
                    <span class="font-bold">
                        Custom Software Development
                    </span> Tailoring bespoke software solutions (websites, mobile apps, data driven solutions) to align with specific business objectives.
                </h3></li>
                <li class="flex gap-2 lg:gap-3"><img class="w-4 h-4 lg:w-7 lg:h-7 mt-2" src="{{ asset('images/img3.png') }}" alt="image"> <h3 class="text-[15px] lg:text-[22px] leading-[33px]">
                    <span class="font-bold">
                        Data Analytics and Data Security Services 
                    </span> Ensuring  robust data protection and delivering actionable insights through  advanced analytics. Delivering top-tier managed security services to  protect against cyber threats and maintain data integrity.
                </h3></li>
                <li class="flex gap-2 lg:gap-3"><img class="w-4 h-4 lg:w-7 lg:h-7 mt-2" src="{{ asset('images/img3.png') }}" alt="image"> <h3 class="text-[15px] lg:text-[22px] leading-[33px]">
                    <span class="font-bold">
                        Life Science and Data-Driven Healthcare Research
                    </span> Advancing healthcare through innovative life science research and data-driven insights to improve patient outcomes.
                </h3></li>
                <li class="flex gap-2 lg:gap-3"><img class="w-4 h-4 lg:w-7 lg:h-7 mt-2" src="{{ asset('images/img3.png') }}" alt="image"> <h3 class="text-[15px] lg:text-[22px] leading-[33px]">
                    <span class="font-bold">
                        IT Consultancy Services 
                    </span> Providing expert advice to streamline and enhance IT infrastructures and strategies.
                </h3></li>
                <li class="flex gap-2 lg:gap-3"><img class="w-4 h-4 lg:w-7 lg:h-7 mt-2" src="{{ asset('images/img3.png') }}" alt="image"> <h3 class="text-[15px] lg:text-[22px] leading-[33px]">
                    <span class="font-bold">
                        Digital Marketing Services 
                    </span> Crafting innovative digital marketing strategies to boost online presence and engagement.
                </h3></li>
                <li class="flex gap-2 lg:gap-3"><img class="w-4 h-4 lg:w-7 lg:h-7 mt-2" src="{{ asset('images/img3.png') }}" alt="image"> <h3 class="text-[15px] lg:text-[22px] leading-[33px]">
                    <span class="font-bold">
                            AI and Cloud Services 
                    </span> Leveraging the latest in AI and cloud technologies to tackle modern business challenges.
                </h3></li>
            </ul>

            <div class="flex gap-7">
                <a href="services.html" class="text-[15px] lg:text-[22px] font-bold leading-[33px] bg-primary text-white px-2 py-1 lg:px-4 lg:py-2 rounded">View Service</a>
                <a href="contact.html" class="text-[15px] lg:text-[22px] font-bold leading-[33px] bg-white border border-primary px-2 py-1 lg:px-4 lg:py-2 rounded">Contact Us</a>
            </div>
        </div>
    </div> -->


    <section class="pb-[85px]">
        <h3 class="text-center text-[35px] font-semibold text-black pb-[47px]">Service</h3>
        <div class="container mx-auto px-2 lg:px-12 grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="bg-[#F2F7FF] p-5 rounded-md flex flex-col justify-center items-center gap-5">
                <img src="{{ asset('images/web2.png') }}" class="w-[80px]" alt="MerilSoft">
                <h3 class="text-[20px] font-semibold">Website Development</h3>
            </div>
            <div class="bg-[#F2F7FF] p-5 rounded-md flex flex-col justify-center items-center gap-5">
                <img src="{{ asset('images/cloud2.png') }}" class="w-[80px]" alt="MerilSoft">
                <h3 class="text-[20px] font-semibold">Cloud & Hosting</h3>
            </div>
            <div class="bg-[#F2F7FF] p-5 rounded-md flex flex-col justify-center items-center gap-5">
                <img src="{{ asset('images/bullhorn2.png') }}" class="w-[80px]" alt="MerilSoft">
                <h3 class="text-[20px] font-semibold">Digital Marketing</h3>
            </div>
            <div class="bg-[#F2F7FF] p-5 rounded-md flex flex-col justify-center items-center gap-5">
                <img src="{{ asset('images/android2.png') }}" class="w-[80px]" alt="MerilSoft">
                <h3 class="text-[20px] font-semibold text-center">Apps Development</h3>
            </div>
        </div>
    </section>


    <section class="pb-[85px]">
        <h3 class="text-center text-[35px] font-semibold text-black pb-[47px]">Solution</h3>
        <div class="container mx-auto px-2 lg:px-12 grid grid-cols-1 lg:grid-cols-4 gap-8">
            <div class="bg-[#F2F7FF] p-5 rounded-md flex flex-col justify-center items-center gap-5">
                <img src="{{ asset('images/egov.png') }}" class="w-[80px]" alt="MerilSoft">
                <h3 class="text-[20px] font-semibold">E-Governance</h3>
            </div>
            <div class="bg-[#F2F7FF] p-5 rounded-md flex flex-col justify-center items-center gap-5">
                <img src="{{ asset('images/erp.png') }}" class="w-[80px]" alt="MerilSoft">
                <h3 class="text-[20px] font-semibold">ERP</h3>
            </div>
            <div class="bg-[#F2F7FF] p-5 rounded-md flex flex-col justify-center items-center gap-5">
                <img src="{{ asset('images/infra.png') }}" class="w-[80px]" alt="MerilSoft">
                <h3 class="text-[20px] font-semibold">Managed IT</h3>
            </div>
            <div class="bg-[#F2F7FF] p-5 rounded-md flex flex-col justify-center items-center gap-5">
                <img src="{{ asset('images/pms.png') }}" class="w-[80px]" alt="MerilSoft">
                <h3 class="text-[20px] font-semibold text-center">Innovation</h3>
            </div>
        </div>
    </section>


    <div class="container mx-auto px-2 lg:px-12 pb-[62px] flex flex-col items-center">
            <h3 class="text-[15px] lg:text-[35px] font-semibold pb-3 lg:pb-5 text-black text-center">What Clients Say About Us</h3>
            <!-- <h3 class="text-[15px] lg:text-[25px] text-[#5C5C5C] text-center lg:w-[63%]">Rapidiously morph transparent internal or "organic" sources whereas resource sucking e-business innovate compelling internal.</h3> -->
            <div class="owl-carousel owl-theme w-1/2 bg-white shadow-lg rounded-md">
                <div class="item bg-white rounded-lg p-2 lg:p-4">
                    <div class="pb-3">
                        <svg class="w-10 h-10 fill-gray-100 bg-primary p-2 rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
                    </div>
                    <p class="text-[#2C2B2B] text-[14px] lg:text-[18px] leading-[30px] pb-3 lg:pb-5">Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.</p>

                    <div class="flex flex-col lg:flex-row items-center justify-between gap-3 lg:gap-0">
                        <div class="flex items-center gap-3 lg:w-[40%]">
                            <div>
                                <img class="w-16 h-16" src=" {{ asset('images/user1.png') }}"alt="image">
                            </div>
                            <div>
                                <p class="text-[18px] font-semibold text-primary">Kyan Boards</p>
                                <p class="text-[14px] leading-[18px]">CEO, ThemeTags</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-end">
                                <div class="flex gap-2 pb-3 lg:pb-0">
                                    <img class="w-4 h-4" src=" {{ asset('images/star.png') }}" alt="">
                                    <img class="w-4 h-4" src=" {{ asset('images/star.png') }}" alt="">
                                    <img class="w-4 h-4" src=" {{ asset('images/star.png') }}" alt="">
                                    <img class="w-4 h-4" src=" {{ asset('images/star.png') }}" alt="">
                                    <img class="w-4 h-4" src=" {{ asset('images/star.png') }}" alt="">
                                </div>
                                <p>5.0 Out of 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="item bg-white rounded-lg shadow-lg p-2 lg:p-4">
                    <div class="pb-3">
                        <svg class="w-10 h-10 fill-gray-100 bg-primary p-2 rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
                    </div>
                    <p class="text-[#2C2B2B] text-[14px] lg:text-[18px] leading-[30px] pb-3 lg:pb-5"> Intrinsicly facilitate functional imperatives without next-generation services. Compellingly revolutionize worldwide users enterprise best practices.</p>

                    <div class="flex flex-col lg:flex-row items-center justify-between gap-3 lg:gap-0">
                        <div class="flex items-center gap-3 lg:w-[40%]">
                            <div>
                                <img class="w-16 h-16" src="{{ asset('images/user1.png') }}" alt="image">
                            </div>
                            <div>
                                <p class="text-[18px] font-semibold text-primary">Pirtle Karol</p>
                                <p class="text-[14px] leading-[18px]">Team Leader, ThemeTags</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-end">
                                <div class="flex gap-2 pb-3 lg:pb-0">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                </div>
                                <p>5.0 Out of 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-white rounded-lg shadow-lg p-2 lg:p-4">
                    <div class="pb-3">
                        <svg class="w-10 h-10 fill-gray-100 bg-primary p-2 rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
                    </div>
                    <p class="text-[#2C2B2B] text-[14px] lg:text-[18px] leading-[30px] pb-3 lg:pb-5">Assertively procrastinate distributed relationships whereas equity invested intellectual capital everything energistically underwhelm proactive.</p>

                    <div class="flex flex-col lg:flex-row items-center justify-between gap-3 lg:gap-0">
                        <div class="flex items-center gap-3 lg:w-[40%]">
                            <div>
                                <img class="w-16 h-16" src="{{ asset('images/user1.png') }}"alt="image">
                            </div>
                            <div>
                                <p class="text-[18px] font-semibold text-primary">Kyan Boards</p>
                                <p class="text-[14px] leading-[18px]">CEO, ThemeTags</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-end">
                                <div class="flex gap-2 pb-3 lg:pb-0">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                </div>
                                <p>5.0 Out of 5</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-white rounded-lg shadow-lg p-2 lg:p-4">
                    <div class="pb-3">
                        <svg class="w-10 h-10 fill-gray-100 bg-primary p-2 rounded-md" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/></svg>
                    </div>
                    <p class="text-[#2C2B2B] text-[14px] lg:text-[18px] leading-[30px] pb-3 lg:pb-5"> Intrinsicly facilitate functional imperatives without next-generation services. Compellingly revolutionize worldwide users enterprise best practices.</p>

                    <div class="flex flex-col lg:flex-row items-center justify-between gap-3 lg:gap-0">
                        <div class="flex items-center gap-3 lg:w-[40%]">
                            <div>
                                <img class="w-16 h-16" src="{{ asset('images/user1.png') }}" alt="image">
                            </div>
                            <div>
                                <p class="text-[18px] font-semibold text-primary">Pirtle Karol</p>
                                <p class="text-[14px] leading-[18px]">Team Leader, ThemeTags</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col items-end">
                                <div class="flex gap-2 pb-3 lg:pb-0">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                    <img class="w-4 h-4" src="./assets2/images/star.png" alt="">
                                </div>
                                <p>5.0 Out of 5</p>
                            </div>
                        </div>
                    </div>
                </div> -->
               
            </div>
        </div>


    <section class="container mx-auto px-2 lg:px-12 flex flex-col items-center justify-center pb-[33px]">
        <h3 class="text-center text-[35px] font-semibold text-black pb-[15px]">Why did you leave this rating?</h3>
        <div class="flex justify-center items-center gap-3 pb-[15px]">
            <img src="{{ asset('images/star.png') }}" class="w-[36px]" alt="MerilSoft">
            <img src="{{ asset('images/star.png') }}" class="w-[36px]" alt="MerilSoft">
            <img src="{{ asset('images/star.png') }}" class="w-[36px]" alt="MerilSoft">
            <img src="{{ asset('images/star.png') }}" class="w-[36px]" alt="MerilSoft">
            <img src="{{ asset('images/star.png') }}" class="w-[36px]" alt="MerilSoft">
        </div>

        <form action="#">
            <textarea class="border border-gray-500 px-4 py-2 mb-[22px] rounded" rows="5" cols="70" name="comment" placeholder="Leave a comment"></textarea>
            <div class="flex justify-end">
                <button class="bg-primary text-white px-4 py-2 rounded">Submit</button>
            </div>
        </form>
    </section>


    <!-- <section class="container mx-auto px-2 lg:px-12 pb-[44px]">
        <h1 class="text-[15px] lg:text-[26px] font-semibold leading-[37px] text-[#1B3F73] text-center pb-[15px] lg:pb-[30px]">Our Latest News</h1>
        <h3 class="text-[15px] lg:text-[26px] font-semibold leading-[40px] text-[#5C5C5C] text-center pb-[15px] lg:pb-[30px]">For Our Latest News and Insights.</h3>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-4 pb-[26px] lg:pb-[52px]">
            <div class="relative group bg-white shadow-xl">
                <img src="{{ asset('images/card1.png') }}" class="w-full h-[300px]" alt="image">
                <div class="absolute bottom-0 p-4 bg-white group-hover:bg-[#152772] group-hover:text-white w-full flex flex-col gap-2 transition-all duration-300">
                    <h3 class="font-semibold text-[14px] lg:text-[24px] leading-[31px]">Holisticly promote enabled</h3>
                    <p class=" text-[12px] lg:text-[14px] hidden group-hover:block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p class="text-[14px] lg:text-[16px]">Nafisuzzaman</p>
                    <p class="text-[14px] lg:text-[16px]">Jan 1 2024</p>
                </div>
            </div>

            <div class="relative group bg-white shadow-xl">
                <img src="{{ asset('images/card2.png') }}" class="w-full h-[300px]" alt="image">
                <div class="absolute bottom-0 p-4 bg-white group-hover:bg-[#152772] group-hover:text-white w-full flex flex-col gap-2 transition-all duration-300">
                    <h3 class="font-semibold text-[14px] lg:text-[24px] leading-[31px]">Holisticly promote enabled</h3>
                    <p class=" text-[12px] lg:text-[14px] hidden group-hover:block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p class="text-[14px] lg:text-[16px]">Nafisuzzaman</p>
                    <p class="text-[14px] lg:text-[16px]">Jan 1 2024</p>
                </div>
            </div>

            <div class="relative group bg-white shadow-xl">
                <img src="{{ asset('images/card3.png') }}" class="w-full h-[300px]" alt="image">
                <div class="absolute bottom-0 p-4 bg-white group-hover:bg-[#152772] group-hover:text-white w-full flex flex-col gap-2 transition-all duration-300">
                    <h3 class="font-semibold text-[14px] lg:text-[24px] leading-[31px]">Holisticly promote enabled</h3>
                    <p class=" text-[12px] lg:text-[14px] hidden group-hover:block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p class="text-[14px] lg:text-[16px]">Nafisuzzaman</p>
                    <p class="text-[14px] lg:text-[16px]">Jan 1 2024</p>
                </div>
            </div>


        </div>
    </section> -->

    


    <div class="container mx-auto px-2 lg:px-12">
        <h3 class="font-semibold text-[16px] lg:text-[30px] leading-[37px] text-primary text-center pb-[25px] lg:pb-[47px]">Trusted by over 500+ customers*, some of them are here</h3>
    </div>

    <div class="bg-[#F3F5FF]">
        <div  class="container mx-auto px-2 lg:px-12 grid grid-cols-2 lg:grid-cols-5 justify-items-center gap-4 lg:gap-0 py-5">
            <img class="w-[95px]" src="{{ asset('images/Scout.png') }}" alt="image">
            <img class="w-[85px]" src="{{ asset('images/pm.png') }}" alt="image">
            <img class="w-[87px]" src="{{ asset('images/govt.png') }}" alt="image">
            <img class="w-[100px]" src="{{ asset('images/ICT.png') }}" alt="image">
            <img class="w-[75px]" src="{{ asset('images/UNDP.png') }}" alt="image">
        </div>
    </div>
@endsection




@section('scripts')
<script src="{{ asset('owlcarousel/dist/owl.carousel.min.js') }}"></script>

<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        // nav:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
</script>
@endsection




