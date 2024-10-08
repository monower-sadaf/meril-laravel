<div class="bg-white py-1">
    <div class="container mx-auto px-2 lg:px-12 flex justify-end">
        <div class="flex items-center gap-8">
            <a href="tel:+1-718-809-2244" class="flex items-center gap-2 text-[15px]">
                <svg class="w-4 h-4 fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                <span>
                    +1-718-809-2244
                </span>
            </a>
            <a href="mailto:contact@merilsoft.com" class="flex items-center gap-2 text-[15px]">
                <svg class="w-4 h-4 fill-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                <span>
                    contact@merilsoft.com
                </span>
            </a>
        </div>
    </div>
</div>
<nav class="bg-primary py-2">
    <div class="container mx-auto px-2 lg:px-12 flex justify-between items-center">
        <a href="#">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-[3.5em] h-[3em] lg:w-[5.5em] lg:h-[4.4375em]" />
        </a>

        <ul class=" gap-12 font-bold text-white text-[18px] hidden lg:flex">
            <li>
                <details class="dropdown group">
                    <summary class="btn border-none min-h-0 h-auto font-bold text-[18px] flex items-center gap-2 px-0">
                        <span>
                            Service
                        </span>
                        <svg class="w-4 h-4 fill-white group-hover:rotate-180 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    </summary>
                    <ul class="menu dropdown-content rounded-box z-[1] w-52 p-2 shadow text-white bg-primary pt-10">
                        <li>
                            <a href="{{ route('software') }}">Website Development</a>
                        </li>
                        <li>
                            <a href="{{ route('software') }}">Cloud and Hosting </a>
                        </li>
                        <li>
                            <a href="{{ route('software') }}">Digital Marketing</a>
                        </li>
                        <li>
                            <a href="{{ route('software') }}">Software Development</a>
                        </li>
                        <li>
                            <a href="{{ route('software') }}">Apps Development</a>
                        </li>
                        <li>
                            <a href="{{ route('software') }}">Outsourcing</a>
                        </li>
                    </ul>
                </details>
            </li>
            <li>
                <details class="dropdown group">
                    <summary class="btn border-none min-h-0 h-auto font-bold text-[18px] flex items-center gap-2 px-0">
                        <span>
                            Solution
                        </span>
                        <svg class="w-4 h-4 fill-white group-hover:rotate-180 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    </summary>
                    <ul class="menu dropdown-content rounded-box z-[1] w-52 p-2 shadow text-white bg-primary pt-10">
                        <li>
                            <a href="{{ route('marketing') }}">e-Governance</a>
                        </li>
                        <li>
                            <a href="{{ route('marketing') }}">ERP</a>
                        </li>
                        <li>
                            <a href="{{ route('marketing') }}">Managed IT</a>
                        </li>
                        <li>
                            <a href="{{ route('marketing') }}">Innovation</a>
                        </li>
                        <li>
                            <a href="{{ route('marketing') }}">Data Science</a>
                        </li>
                    </ul>
                </details>
            </li>
            <li>
                <details class="dropdown group">
                    <summary class="btn border-none min-h-0 h-auto font-bold text-[18px] flex items-center gap-2 px-0">
                        <span>
                            About us
                        </span>
                        <svg class="w-4 h-4 fill-white group-hover:rotate-180 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                    </summary>
                    <ul class="menu dropdown-content rounded-box z-[1] w-52 p-2 shadow text-white bg-primary pt-10 right-2">
                        <li>
                            <a href="{{ route('about_us') }}">About us</a>
                        </li>
                        <li>
                            <a href="#">Partner</a>
                        </li>
                        <li>
                            <a href="{{ route('contact_us') }}">Contact</a>
                        </li>
                    </ul>
                </details>
            </li>
        </ul>

        <button onclick="ToggleNav()" class="lg:hidden">
            <svg class="w-6 h-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/></svg>
        </button>

        
    </div>
</nav>


<div id="mobile-nav" style="display: none;" class="lg:hidden">
    <ul class="text-[15px] flex flex-col gap-2 lg:hidden p-4">
        <li>
            <details class="dropdown group">
                <summary class="btn border-none min-h-0 h-auto font-bold text-[18px] flex items-center gap-2">
                    <span>
                        Services
                    </span>
                    <svg class="w-4 h-4 fill-white group-hover:rotate-180 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                </summary>
                <ul class="menu dropdown-content bg-white rounded-box z-[1] w-52 p-2 shadow text-black">
                    <li>
                        <a href="{{ route('software') }}">Website Development</a>
                    </li>
                    <li>
                        <a href="{{ route('software') }}">Cloud and Hosting </a>
                    </li>
                    <li>
                        <a href="{{ route('software') }}">Digital Marketing</a>
                    </li>
                    <li>
                        <a href="{{ route('software') }}">Software Development</a>
                    </li>
                    <li>
                        <a href="{{ route('software') }}">Apps Development</a>
                    </li>
                    <li>
                        <a href="{{ route('software') }}">Outsourcing</a>
                    </li>
                </ul>
            </details>
        </li>
        <li>
            <details class="dropdown group">
                <summary class="btn border-none min-h-0 h-auto font-bold text-[18px] flex items-center gap-2">
                    <span>
                        Solutions
                    </span>
                    <svg class="w-4 h-4 fill-white group-hover:rotate-180 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                </summary>
                <ul class="menu dropdown-content bg-white rounded-box z-[1] w-52 p-2 shadow text-black">
                    <li>
                        <a href="{{ route('marketing') }}">e-Governance</a>
                    </li>
                    <li>
                        <a href="{{ route('marketing') }}">ERP</a>
                    </li>
                    <li>
                        <a href="{{ route('marketing') }}">Managed IT</a>
                    </li>
                    <li>
                        <a href="{{ route('marketing') }}">Innovation</a>
                    </li>
                    <li>
                        <a href="{{ route('marketing') }}">Data Science</a>
                    </li>
                </ul>
            </details>
        </li>
        <li>
            <details class="dropdown group">
                <summary class="btn border-none min-h-0 h-auto font-bold text-[18px] flex items-center gap-2">
                    <span>
                        About us
                    </span>
                    <svg class="w-4 h-4 fill-white group-hover:rotate-180 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                </summary>
                <ul class="menu dropdown-content bg-white rounded-box z-[1] w-52 p-2 shadow text-black">
                    <li>
                        <a href="{{ route('about_us') }}">About us</a>
                    </li>
                    <li>
                        <a href="#">Partner</a>
                    </li>
                    <li>
                        <a href="{{ route('contact_us') }}">Contact</a>
                    </li>
                </ul>
            </details>
        </li>
    </ul>
</div>


<div class="fixed bottom-36 right-5 z-50">
    <a href="#">
        <img class="w-[70px]" src="{{ asset('images/support.png') }}" alt="MerilSoft">
    </a>
</div>


<script>
    function ToggleNav() {
        var nav = document.getElementById("mobile-nav");
        if (nav.style.display === "block") {
            nav.style.display = "none";
        } else {
            nav.style.display = "block";
        }
    }   
 </script>