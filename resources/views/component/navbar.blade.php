{{-- navbar cuy --}}
<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10" >
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4" data-aos="fade-down" data-aos-duration="1000">
                <a class="font-bold text-lg text-teal-500 block py-6" href="">LOGO</a>
            </div>
            <div class="flex items-center justify-center px-4">
                <button id="humburger" name="humberger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="hamburger-line origin-top-left"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class="lg:block  lg:static lg:bg-transparent lg:dark:bg-transparent lg:max-w-full lg:shadow-none hidden right-4 top-full absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full dark:bg-slate-800 dark:shadow-slate-900">
                    <ul class="block lg:flex">
                        <li class="group" data-aos="fade-down" data-aos-duration="1200">
                            <a class="font-base flex text-black py-2 mx-8 group-hover:text-teal-500 dark:text-white" href="#home">Beranda</a>

                        </li>
                        <li class="group" data-aos="fade-down" data-aos-duration="1400">
                            <a class="font-base flex text-black py-2 mx-8 group-hover:text-teal-500 dark:text-white" href="#about">About Me</a>

                        </li>
                        <li class="group" data-aos="fade-down" data-aos-duration="1600">
                            <a class="font-base flex text-black py-2 mx-8 group-hover:text-teal-500 dark:text-white" href="#portofolio">Portofolio</a>

                        </li>
                        <li class="group" data-aos="fade-down" data-aos-duration="1800">
                            <a class="font-base text-black flex py-2 mx-8 group-hover:text-teal-500 dark:text-white" href="#client">My Skill</a>

                        </li>
                        <li class="group" data-aos="fade-down" data-aos-duration="2000">
                            <a class="font-base text-black flex py-2 mx-8 group-hover:text-teal-500 dark:text-white" href="#blog">Blog</a>

                        </li>
                        <li class="group" data-aos="fade-down" data-aos-duration="2200">
                            <a class="font-base text-black flex py-2 mx-8 group-hover:text-teal-500 dark:text-white" href="#contact">Contact Me</a>

                        </li>
                        {{-- <li class="group" data-aos="fade-down" data-aos-duration="2200">
                            <a class="font-base text-black flex py-2 mx-8 group-hover:text-teal-500 dark:text-white" href="#form">Message</a>

                        </li> --}}
                        <li class="flex items-center pl-8 ">
                            <div class="flex item-center">
                                <span class="mr-2 text-sm text-slate-500">light</span>
                                <input type="checkbox" class="hidden" id="dark-toggle">
                                <label for="dark-toggle">
                                    <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                                    </div>
                                </label>
                                <span class="ml-2 text-sm text-slate-500">Dark</span>

                            </div>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>