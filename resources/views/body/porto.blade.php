@extends('main.main')

@section('konten')
@include('component.navbar')

        {{-- hero section --}}
        <section id="home" class="pt-36 bg-white dark:bg-slate-800">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full self-center px-4 lg:w-1/2">
                        <div class="relative ">
                            <img src="img/fajareka.png" data-tooltip-target="tooltip-default" data-aos="zoom-in" data-aos-duration="1000" width="401" alt="" srcset="" class="  mx-auto rounded-b-lg z-[9] relative">
                            <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Fajar Eka Sandiyuda
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <span class="absolute bottom-0 z-[8] top-18 mx-auto sm:left-28 lg:left-24 md:left-28 " data-aos="zoom-in" data-aos-duration="1200">
                                <svg class="" viewBox="0 0 200 200" width="400" height="400" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#14b8a6" d="M49.1,-57.3C64.6,-45.6,78.6,-31,83.6,-13.2C88.5,4.5,84.3,25.4,73.8,41.8C63.4,58.2,46.6,70.1,27.7,77.8C8.7,85.5,-12.5,89,-30.4,82.7C-48.3,76.5,-62.9,60.6,-70.5,42.9C-78.2,25.2,-78.9,5.6,-76.4,-14.3C-74,-34.3,-68.3,-54.5,-55.1,-66.6C-41.8,-78.7,-20.9,-82.7,-2,-80.3C16.8,-77.8,33.7,-69,49.1,-57.3Z" transform="translate(100 100)" />
                                </svg>
                            </span>
                        </div>
                   </div>
                    <div class="w-full self-center mt-10 px-4 lg:w-1/2 lg:mt-0" >
                       <h1 class="text-base font-semibold text-teal-500 md:text-x lg:text-2xl" data-aos-duration="700" data-aos="fade-left">
                            Hi every-nyan,saya <span class="block font-bold text-slate-800 dark:text-white">Fajar Eka Sandiyuda</span>
                       </h1>
                       <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl" data-aos-duration="800" data-aos="fade-left">
                            Programmer & <span class="text-slate-800 dark:text-white">Siswa SMKN 1 Boyolangu </span>
                       </h2>
                       <p class="font-medium text-secondary mb-10 leading-relaxed" data-aos-duration="900" data-aos="fade-left">
                            Belajar membuat web portofolio untuk kepentingan pribadi,<span class="text-slate-800 dark:text-white">heheha!!</span>
                       </p>
                       <a data-aos-duration="1000" data-aos="fade-left" href="/cv" class="text-base font-semibold text-white bg-teal-500 py-3 px-8 rounded-full hover:shadow-lg hover:bg-teal-400 hover:opacity-80 transition duration-300 ease-in-out">CV Saya</a>
                    </div>

                </div>
            </div>
        </section>

        {{-- about section --}}
        <section id="about" class="pt-36 pb-32 dark:bg-slate-800 bg-white">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-ful px-4 mb-10 lg:w-1/2 ">
                        <h4 class="font-bold  uppercase text-teal-500 text-lg mb-3">About Me</h4>
                        <h2 class="font-bold text-black text-3xl mb-5 max-w-xl lg:text-4xl dark:text-white">Saya seorang siswa SMKN 1 Boyolangu Tulungagung</h2>
                        <p class="font-medium text-base text-secondary lg:text-lg">Saya tertarik mempelajari pemrograman karena impian saya adalah menjaddi seorang programmer</p>

                    </div>
                    <div class="w-full px-4 lg:w-1/2">
                        <h3 class="font-bold text-black text-2xl mb-4 max-w-xl lg:text-3xl lg:pt-10 dark:text-white">This is My Social Media</h3>
                        <p class="font-medium text-base text-secondary lg:text-lg">Ingin lebih kenal dengan saya? tak kenal maka tak tau tentang saya,hubungi saya di beberapa sosial media yang saya pakai</p>
                        <div class="flex items-center mt-5">
                            {{-- facebook --}}
                            <a href="https://www.facebook.com/nendra.olg?mibextid=ZbWKwL" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400" target="blank">
                                <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            {{-- instagram --}}
                            <a href="https://instagram.com/ekbear012?igshid=MzNlNGNkZWQ4Mg==" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400" target="blank">
                                <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                            </a>
                            {{-- git hub --}}
                            <a href="https://github.com/fajareka1" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400" target="blank">
                                <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- portofolio --}}
        <section id="portofolio" class="pt-36 pb-32 bg-slate-100 dark:bg-slate-900">
            <div class="container">
                <div class="w-full px-4">
                    <div class=" mx-auto text-center mb-16 max-w-4xl">
                        <h4 class="font-semibold text-lg text-teal-500 mb-2" data-aos="fade-up"
                        data-aos-anchor-placement="center-center">Portofolio</h4>
                        <h2 class="sm:text-4xl lg:text-5xl font-bold text-black text-3xl mb-4  dark:text-white" data-aos="fade-up"
                        data-aos-anchor-placement="center-center">My Project</h2>
                        <p class="md:text-lg text-secondary" data-aos="fade-up"
                        data-aos-anchor-placement="center-center">Berikut merupakan projek-projek yang pernah saya kerjakan, mulai dari projek pribadi dari sekolah dan projek tim</p>
                    </div>
                </div>
                <div class="w-full px-4 text-center mt-5">
                    <div class="container">
                        <h4 class="font-semibold text-2xl text-teal-500 mb-2" data-aos="fade-up" data-aos-duration="1000">Personal Project</h4>
                    </div>
                </div>
                <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                    <div class="mb-12 p-4 md:w-1/2 " data-aos="fade-up" data-aos-duration="1000">
                        <div class="rounded-medium overflow-hidden shadow-md">
                            <img src="img/a5porto.png" alt=""  srcset="">
                        </div>
                        <h3 class="mt-5 mb-3 font-semibold text-xl text-black  dark:text-white">
                            Portofolio
                        </h3>
                        <p class="font-medium text-base text-secondary">Projek personal membuat website portofolio untuk mendaftar PKL
                        </p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2"data-aos="fade-up" data-aos-duration="1000">
                        <div class="rounded-medium overflow-hidden shadow-md">
                            <img src="img/a2class.png" alt="" srcset="">
                        </div>
                        <h3 class="mt-5 mb-3 font-semibold text-xl text-black dark:text-white">
                            Web Class
                        </h3>
                        <p class="font-medium text-base text-secondary">Projek membuat website portofolio kelas
                        </p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2"data-aos="fade-up" data-aos-duration="1000">
                        <div class="rounded-medium overflow-hidden shadow-md">
                            <img src="img/a1game.png" alt="" srcset="">
                        </div>
                        <h3 class="mt-5 mb-3 font-semibold text-xl text-black dark:text-white">
                            Website Game 
                        </h3>
                        <p class="font-medium text-base text-secondary">Projek membuat website info harga dan tanggal rilis game
                        </p>
                    </div>

                </div>
                <div class="w-full px-4 text-center mt-5">
                    <div class="container">
                        <h4 class="font-semibold text-2xl text-teal-500 mb-2" data-aos="fade-up" data-aos-duration="1000">School Project</h4>
                    </div>
                </div>
                <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                    <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="rounded-medium overflow-hidden shadow-md">
                            <img src="img/a4raiden.png" alt="" srcset="">
                        </div>
                        <h3 class="mt-5 mb-3 font-semibold text-xl text-black  dark:text-white">
                            Website Game
                        </h3>
                        <p class="font-medium text-base text-secondary">Tugas sekolah membuat website game untuk penilaian UAS
                        </p>
                    </div>
                    <div class="mb-12 p-4 md:w-1/2"data-aos="fade-up" data-aos-duration="1000">
                        <div class="rounded-medium overflow-hidden shadow-md">
                            <img src="img/2.png" alt="" srcset="">
                        </div>
                        <h3 class="mt-5 mb-3 font-semibold text-xl text-black dark:text-white">
                            Website Sewa Jasa Cleaning Cervice
                        </h3>
                        <p class="font-medium text-base text-secondary">Tugas sekolah membuat website penyewaan jasa cleaning service
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 text-center mt-5">
                    <div class="container">
                        <h4 class="font-semibold text-2xl text-teal-500 mb-2" data-aos="fade-up" data-aos-duration="1000">Team Project</h4>
                    </div>
                </div>
                <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                    <div class="mb-12 p-4 md:w-1/2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="rounded-medium overflow-hidden shadow-md">
                            <img src="img/a3zeal.png" alt="" srcset="">
                        </div>
                        <h3 class="mt-5 mb-3 font-semibold text-xl text-black  dark:text-white">
                            Zeal rental Mainan
                        </h3>
                        <p class="font-medium text-base text-secondary">Projek membuat website Zeal rental mainan,sebuat website untuk penyewaan mainan anak
                        </p>
                    </div>

                </div>
            </div>
        </section>


        {{-- client --}}
        <section id="client" class="pt-36 pb-32 bg-slate-800 dark:bg-slate-800">
            <div class="container">
                <div class="w-full px-4">
                    <div class=" mx-auto text-center mb-16 max-w-4xl">
                        <h4 class="font-semibold text-lg text-teal-500 mb-2 ">My Skill</h4>
                        <h2 class="sm:text-4xl lg:text-5xl font-bold text-white text-3xl mb-4 ">Programing Lenguage</h2>
                        <p class="md:text-lg text-secondary">What can i do? saya memahami beberapa bahasa pemrograman seperti PHP, JavaScript, dan Python. Saya juga menguasai  beberapa frameWork seperti Laravel, VueJs, Tailwind, dan Bootstrap</p>
                    </div>
                    <div class="w-full px-4">
                        <div class="flex flex-wrap item-center justify-center" >
                            <a data-aos="zoom-in" data-aos-duration="1000" href="https://www.php.net/" class="max-w-[120px] mx-2 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                <img src="img/php.svg" width="70"  alt="" srcset="">
                            </a>
                            <a data-aos="zoom-in" data-aos-duration="1200" href="" class="max-w-[120px] mx-2 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                <img src="img/js.png" alt="" width="40" srcset="">
                            </a>
                            <a data-aos="zoom-in" data-aos-duration="1400" href="https://www.python.org/" class="max-w-[120px] mx-2 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                <img src="img/py2.svg" alt="" width="40" srcset="">
                            </a>
                            <a data-aos="zoom-in" data-aos-duration="1600" href="https://laravel.com/" class="max-w-[120px] mx-2 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                <img src="img/Laravel.svg" alt="" width="40" srcset="">
                            </a>
                            <a data-aos="zoom-in" data-aos-duration="1800" href="https://vuejs.org/" class="max-w-[120px] mx-2 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                <img src="img/Vue.png" alt="" width="40" srcset="">
                            </a>
                            <a data-aos="zoom-in" data-aos-duration="2000" href="https://tailwindcss.com/" class="max-w-[120px] mx-2 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                <img src="img/tw.svg" alt="" width="60" srcset="">
                            </a>
                            <a data-aos="zoom-in" data-aos-duration="2200" href="https://getbootstrap.com/" class="max-w-[120px] mx-2 py-4 grayscale opacity-60 transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                                <img src="img/bootstrap.svg" alt="" width="40" srcset="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- blog --}}
        {{-- <section id="blog" class="pb-32 pt-36 bg-slate-100 dark:bg-slate-900">
            <div class="container">
                <div class="w-full px-4">
                    <div class=" mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-teal-500 mb-2">Portofolio</h4>
                        <h2 class="sm:text-4xl lg:text-5xl font-bold text-black text-3xl mb-4 dark:text-white">My Project</h2>
                        <p class="md:text-lg text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id sed porro quae maxime cumque quasi velit laudantium repudiandae perferendis in!</p>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                        <div class="bg-white rounded-xl mb-10 overflow-hidden shadow-lg dark:bg-slate-800">
                            <img src="img/1.png" class="w-full" alt="" srcset="">
                            <div class="py-8 px-6">
                                <a class="block mb-3 font-semibold text-black hover:text-teal-500 truncate" href="">
                                    <h3 class="dark:text-white">programming ijo ijo royo royo</h3>
                                </a>
                                <p class="mb-6 font-medium text-secondary text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, enim?</p>
                                <a href="" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                        <div class="bg-white rounded-xl mb-10 overflow-hidden shadow-lg dark:bg-slate-800">
                            <img src="img/1.png" class="w-full" alt="" srcset="">
                            <div class="py-8 px-6">
                                <a class="block mb-3 font-semibold text-black hover:text-teal-500 truncate" href="">
                                    <h3 class="dark:text-white">programming ijo ijo royo royo</h3>
                                </a>
                                <p class="mb-6 font-medium text-secondary text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, enim?</p>
                                <a href="" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                        <div class="bg-white rounded-xl mb-10 overflow-hidden shadow-lg dark:bg-slate-800">
                            <img src="img/1.png" class="w-full" alt="" srcset="">
                            <div class="py-8 px-6">
                                <a class="block mb-3 font-semibold text-black hover:text-teal-500 truncate" href="">
                                    <h3 class="dark:text-white">programming ijo ijo royo royo</h3>
                                </a>
                                <p class="mb-6 font-medium text-secondary text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, enim?</p>
                                <a href="" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                        <div class="bg-white rounded-xl mb-10 overflow-hidden shadow-lg dark:bg-slate-800">
                            <img src="img/1.png" class="w-full" alt="" srcset="">
                            <div class="py-8 px-6">
                                <a class="block mb-3 font-semibold text-black hover:text-teal-500 truncate" href="">
                                    <h3 class="dark:text-white">programming ijo ijo royo royo</h3>
                                </a>
                                <p class="mb-6 font-medium text-secondary text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, enim?</p>
                                <a href="" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                        <div class="bg-white rounded-xl mb-10 overflow-hidden shadow-lg dark:bg-slate-800">
                            <img src="img/1.png" class="w-full" alt="" srcset="">
                            <div class="py-8 px-6">
                                <a class="block mb-3 font-semibold text-black hover:text-teal-500 truncate" href="">
                                    <h3 class="dark:text-white">programming ijo ijo royo royo</h3>
                                </a>
                                <p class="mb-6 font-medium text-secondary text-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, enim?</p>
                                <a href="" class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:opacity-80">baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- <section id="form" class="pb-32 bg-white pt-36 dark:bg-slate-800">
            <div class="container">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                
                <div class="w-full px-4">
                    <div class=" mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-teal-500 mb-2">Portofolio</h4>
                        <h2 class="sm:text-4xl lg:text-5xl font-bold text-black text-3xl mb-4 dark:text-white">My Project</h2>
                        <p class="md:text-lg text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id sed porro quae maxime cumque quasi velit laudantium repudiandae perferendis in!</p>
                    </div>
                </div>
                    <form action="">
                        <div class="w-full px-4 mb-8">
                            <label for="name" class="text-base font-bold text-teal-500">Name</label>
                            <input type="text" name="name" id="name" class="w-full bg-slate-200 text-black dark:text-white dark:bg-slate-900 p-3 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-500">
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="email" class="text-base font-bold text-teal-500">Email</label>
                            <input type="text" name="email" id="email" class="w-full bg-slate-200 dark:text-white dark:bg-slate-900 text-black p-3 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-500">
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="komen" class="text-base font-bold text-teal-500">Comment</label>
                            <textarea name="komen" id="komen" class="h-32 w-full bg-slate-200 text-black dark:text-white dark:bg-slate-900 p-3 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-500"></textarea>
                        </div>
                        <div class="w-full px-4">
                            <button type="submit" class="text-base font-semibold text-white bg-teal-500 py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg duration-500 transition">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section> --}}


        <section class="bg-white pt-24 pb-12 dark:bg-slate-800" id="contact">
            <div class="container">
                <div class="w-full px-4">
                    <div class=" mx-auto text-center mb-16">
                        <h4 class="font-semibold text-lg text-teal-500 mb-2">Contact Me</h4>
                        <h2 class="sm:text-4xl lg:text-5xl font-bold text-black text-3xl mb-4 dark:text-white">Hubungi saya</h2>
                        <p class="md:text-lg text-secondary">Ingin lebih kenal dengan saya? tak kenal maka tak tau tentang saya,anda bisa menghubungi saya lewat :</p>
                    </div>
                </div>
                <div class="mb-5 w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                    <a href="mailto:fajar.ekasandiyuda@gmail.com" data-aos="zoom-in" data-aos-duration="1000" class=" m-2  hover:text-[#EA4335] text-slate-500" target="blank">
                        <svg class="fill-current" width="40" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Gmail</title><path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/></svg>
                    <a href="https://www.facebook.com/nendra.olg?mibextid=ZbWKwL" data-aos="zoom-in" data-aos-duration="1000" class=" m-2  hover:text-[#1877F2] text-slate-500" target="blank">
                        <svg class="fill-current" role="img" width="40" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://wa.me/087712383764" data-aos="zoom-in" data-aos-duration="1200" class=" m-2 hover:text-[#25D366] text-slate-500" target="blank">
                        <svg class="fill-current" width="40" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    </a>
                    <a href="https://instagram.com/ekbear012?igshid=MzNlNGNkZWQ4Mg==" data-aos="zoom-in" data-aos-duration="1400" class=" m-2 hover:text-[#E4405F] text-slate-500" target="blank">
                        <svg class="fill-current" width="40" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>


                </div>
            </div>
        </section>




        {{-- footer --}}
        <section id="footer" class="bg-slate-800 pt-24 pb-12 dark:bg-slate-900">
            <div class="container">
                <div class="flex flex-wrap ">
                    <div class="w-full px-4 mb-12 font-medium text-slate-300 md:w-1/3 ">
                        <h2 class="font-bold text-4xl  mb-5 ">Fajar</h2>
                        <h3 class="text-2xl mb-2 font-bold ">Hubungi saya</h3>
                        <p class="">fajar.gamer.d@gmail.com</p>
                        <p class="">Tunggulsari kedungwaru tulungagung</p>
                    </div>
                    <div class="w-full px-4 mb-12 font-medium text-white md:w-1/3  ">
                        <h3 class="font-semibold text-xl mb-5">kategori Tulisan</h3>
                        <ul class="text-slate-300">
                            <li>
                                <a class="inline-block text-base hover:text-primary mb-3 " href="#home">Beranda</a>
                            </li>
                            <li>
                                <a class="inline-block text-base hover:text-primary mb-3 " href="#about">About me</a>
                            </li>
                            <li>
                                <a class="inline-block text-base hover:text-primary mb-3 " href="#portofolio">Portofolio</a>
                            </li>
                            <li>
                                <a class="inline-block text-base hover:text-primary mb-3 " href="#client">Client</a>
                            </li>
                            <li>
                                <a class="inline-block text-base hover:text-primary mb-3 " href="#blog">Blog</a>
                            </li>
                            <li>
                                <a class="inline-block text-base hover:text-primary mb-3 " href="#contact">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 mb-12 font-medium text-white  md:w-1/3 ">
                        <h3 class="font-semibold text-xl mb-5">Tautan</h3>
                        <ul class="text-slate-300">
                            <li>
                                <a class="inline-block hover:text-primary mb-3 " href="https://github.com/fajareka1">GitHub</a>
                            </li>

                            <li>
                                <a class="inline-block  hover:text-primary mb-3 " href="https://instagram.com/ekbear012?igshid=MzNlNGNkZWQ4Mg==">Instagram</a>
                            </li>
                            <li>
                                <a class="inline-block  hover:text-primary mb-3 " href="mailto:fajar.ekasandiyuda@gmail.com">Email</a>
                            </li>
                            <li>
                                <a class="inline-block  hover:text-primary mb-3 " href="https://wa.me/087712383764">WhatsApp</a>
                            </li>
                            <li>
                                <a class="inline-block  hover:text-primary mb-3 " href="https://www.facebook.com/nendra.olg?mibextid=ZbWKwL">Facebook</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="w-full pt-10 border-t border-slate-700 ">
                    <div class="flex items-center mt-5 justify-center mb-5">
                        {{-- facebook --}}
                        <a href="" class="w-9 h-9 m-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400" target="blank">
                            <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        {{-- instagram --}}
                        <a href="" class="w-9 h-9 m-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400" target="blank">
                            <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        {{-- git hub --}}
                        <a href="" class="w-9 h-9 m-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-teal-500 hover:bg-teal-500 hover:text-white text-slate-400" target="blank">
                            <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </div>
                    <p class="font-medium text-sm text-slate-500 text-center">Fajar Eka Sandiyuda</p>
                </div>
            </div>
        </section>
        {{-- back to tp --}}
        <a href="#home" id="munggah" class=" hidden hover:animate-pulse h-14 w-14  justify-center items-center bg-teal-500 rounded-full fixed z-[9999999] bottom-4 right-4 p-4">
            <span class="bock h-5 w-5 rotate-45 border-t-2 border-l-2 mt-2"></span>
        </a>


        
@endsection