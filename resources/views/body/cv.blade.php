@extends('main.main')

@section('konten')

{{-- navbar cuy --}}
<header class="bg-white absolute top-0 left-0 w-full flex  z-10 dark:bg-slate-800">
    <div class="container">
        <div class=" relative">
            <div class="" data-aos="fade-down" data-aos-duration="1000">
                <a class="font-bold text-lg text-teal-500 block py-6" href="/"> BACK</a>
            </div>
        </div>
    </div>
</header>


    <div class="container mt-24">
        <div class="w-full flex justify-end">
            <a href="https://drive.google.com/file/d/1C1A0ftdj9MWNbXV5WfXG38s_6JQiWVs7/view?usp=sharing" class="text-base font-semibold text-white bg-teal-500 py-3 px-8  rounded-lg hover:shadow-lg hover:bg-teal-400 hover:opacity-80 transition duration-300 ease-in-out">Download</a>
        </div>
    </div>
    <div class="container flex flex-wrap mt-5 bg-white rounded-t-md">
        <div class="w-full self-center px-4 lg:w-1/2">
            <div class="relative mt-10">
                <img data-tooltip-target="tooltip-default" src="img/fajareka.png" width="201" alt="" srcset="" class=" mx-auto rounded-b-lg z-[9] relative">
                <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Fajar Eka Sandiyuda
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <span class="absolute bottom-0 z-[8] top-20 lg:left-52 md:left-64 left-20">
                    <svg class="" viewBox="0 0 200 200" width="200" height="200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#14b8a6" d="M49.1,-57.3C64.6,-45.6,78.6,-31,83.6,-13.2C88.5,4.5,84.3,25.4,73.8,41.8C63.4,58.2,46.6,70.1,27.7,77.8C8.7,85.5,-12.5,89,-30.4,82.7C-48.3,76.5,-62.9,60.6,-70.5,42.9C-78.2,25.2,-78.9,5.6,-76.4,-14.3C-74,-34.3,-68.3,-54.5,-55.1,-66.6C-41.8,-78.7,-20.9,-82.7,-2,-80.3C16.8,-77.8,33.7,-69,49.1,-57.3Z" transform="translate(100 100)" />
                      </svg>
                </span>
            </div>
       </div>
        <div class=" w-full self-center px-4  lg:w-1/2 lg:text-left mt-10 text-center">
           <h1 class="text-base font-semibold text-teal-500 md:text-x lg:text-2xl">
                Perkenalkan nama saya <span class="block font-bold text-slate-800 dark:text-white">Fajar Eka Sandiyuda</span>
           </h1>
           <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">
                Seorang Siswa dari <span class="text-slate-800 dark:text-white"> SMKN 1 Boyolangu </span>
           </h2>
        </div>

    </div>
    <div class="container flex flex-wrap bg-white rounded-b-md  mb-5">
        <div class="w-full mb-3 bg-white mt-10 lg:border-r  p-10 border-slate-400 lg:w-2/4 sm:mb-3 ">
            <div class="container">
                <h2 class="font-bold  text-teal-500 mb-3">INFORMASI SAYA :</h2>
                <div class="mb-2 flex flex-wrap mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Nama Lengkap : </h2>
                    <p class="font-medium text-secondary"> Fajar Eka Sandiyuda</p>
                </div>
                <div class="mb-2 flex flex-wrap mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Tempat & Tanggal Lahir :</h2>
                    <p class="font-medium text-secondary"> Tulungagung/12-Agustus-2005</p>
                </div>
                <div  class="mb-2 flex flex-wrap mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Jenis Kelmin : </h2>
                    <p class="font-nedium text-secondary">Laki-Laki</p>
                </div>
                <div class="mb-2 flex flex-wrap mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Agama : </h2>
                    <p class="font-nedium text-secondary">Islam</p>
                </div>
                <div class="mb-2 w-full flex flex-wrap  mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Alamat :</h2>
                    <p class="font-nedium text-secondary ">Dsn. Mekarsari, RT/RW. 02/02, Ds.Tunggulsari, Kedungwaru, Tulungagung</p>
                </div>
                <div class="mb-2 flex flex-wrap mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Kode Pos : </h2>
                    <p class="font-nedium text-secondary"> 66222</p>
                </div>
                <div class="mb-2 flex flex-wrap mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Kewarganegaraan : </h2>
                    <p class="font-nedium text-secondary"> WNI</p>
                </div>
                <div class="mb-2 flex flex-wrap mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Hobi : </h2>
                    <p class="font-nedium text-secondary"> Menggambar, Membaca, Mendengar lagu</p>
                </div>
                <div class="mb-2 flex flex-wrap mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Nomor Telepon : </h2>
                    <p class="font-nedium text-secondary"> 081335951749</p>
                </div>
                
                <div class="mb-2  mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Bahasa : </h2>
                    <div class="">
                        <p class="font-nedium text-secondary"> Indonesia : Aktif</p>
                        <p class="font-nedium text-secondary"> Inggris : Pasif</p>
                        <p class="font-nedium text-secondary"> Jepang : Belajar</p>
                    </div>


                </div>
                <div class="mb-2 mt-1">
                    <h2 class="font-slate-800 font-bold mr-1">Sosial Media : </h2>
                    <div class="">
                        <p class="font-nedium text-secondary"> Facebook : Fajar Eka Sandiyuda</p>
                        <p class="font-nedium text-secondary"> Instagram : ekbear012</p>
                        <p class="font-nedium text-secondary"> Email : fajar.ekasans@gmail.com</p>
                    </div>
                </div>


            </div>
        </div>
        <div class="w-full mb-3 bg-white p-10 mt-10 rounded-md lg:w-2/4 ">
            <div class="container">
                <h2 class="font-bold text-teal-500">TENTANG SAYA :</h2>
                <p>Saya adalah siswa SMK Negeri 1 Boyolangu Tulungagung kompetensi keahlian Rekayasa Perangkat Lunak. Saya siswa yang tanggung jawab terhadap pekerjaan yang diberikan.</p>
            </div>
            <div class="container mt-5">
                <h2 class="font-bold text-teal-500">RIWAYAT PENDIDIKANN :</h2>
                <ul>
                    <li>SD  : (2012-2018) SD Negeri 1 Tunggulsari</li>
                    <li>SMP : (2012-2021) SMP Negeri 1 Sumbergempol</li>

                </ul>

            </div>
            <div class="container mt-5">
                <h2 class="font-bold text-teal-500">PENGALAMAN ORGANISASI :</h2>
                <ul>
                    <li>PMR( 2019-2020 )</li>
                    <li>Bahasa Jepang</li>
                    <li>ELC(English Language Club)</li>
                    <li>Perkumpulan Pengajar TPQ An-Nahdiyah</li>
                </ul>
            </div>
            <div class="container mt-5">
                <h2 class="font-bold text-teal-500">PENGALAMAN :</h2>
                <p class="">LKS Tingkat Jawa Timur (Web Tech)</p>
                <p>Lulus Test JLPT N5</p>
            </div>
            <div class="container mt-5">
                <h2 class="font-bold text-teal-500">KEAHLIAN :</h2>
                <p>Saya menguasai bahasa pemrograman php dan meguasai salah satu frame work php yaitu laravel</p>
                <p>Saya mampu membuat program CRUD</p>
            </div>
            
        </div>
    </div>
            {{-- footer --}}
    <section id="footer" class="bg-slate-800 pt-24 pb-12">
                <div class="container">
                    <div class="flex flex-wrap ">
                        <div class="w-full px-4 mb-12 font-medium text-slate-300 md:w-1/3 ">
                            <h2 class="font-bold text-4xl  mb-5 ">Fajar</h2>
                            <h3 class="text-2xl mb-2 font-bold ">Hubungi saya</h3>
                            <p class="">fajar.gamer.d@gmail.com</p>
                            <p class="">Tunggulsari kedungwaru tulungagung</p>
                        </div>
                        <div class="w-full px-4 mb-12 font-medium text-white md:w-1/3 d ">
                            <h3 class="font-semibold text-xl mb-5">kategori Tulisan</h3>
                            <ul class="text-slate-300">
                                <li>
                                    <a class="inline-block text-base hover:text-primary mb-3 " href="#home">Beranda</a>
                                </li>
                                <li>
                                    <a class="inline-block text-base hover:text-primary mb-3" href="#about">About me</a>
                                </li>
                                <li>
                                    <a class="inline-block text-base hover:text-primary mb-3 " href="#portofolio">Portofolio</a>
                                </li>
                                <li>
                                    <a class="inline-block text-base hover:text-primary mb-3" href="#client">Client</a>
                                </li>
                                <li>
                                    <a class="inline-block text-base hover:text-primary mb-3 " href="#blog">Blog</a>
                                </li>
                                <li>
                                    <a class="inline-block text-base hover:text-primary mb-3" href="#form">Form</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full px-4 mb-12 font-medium text-white md:w-1/3 ">
                            <h3 class="font-semibold text-xl mb-5">Tautan</h3>
                            <ul class="text-slate-300">
                                <li>
                                    <a class="inline-block hover:text-primary mb-3 " href="">GitHub</a>
                                </li>
                                <li>
                                    <a class="inline-block hover:text-primary mb-3 " href="">Linkedin</a>
                                </li>
                                <li>
                                    <a class="inline-block  hover:text-primary mb-3 " href="">Instagram</a>
                                </li>
                                <li>
                                    <a class="inline-block  hover:text-primary mb-3 " href="">Email</a>
                                </li>
                                <li>
                                    <a class="inline-block  hover:text-primary mb-3 " href="">WhatsApp</a>
                                </li>
                                <li>
                                    <a class="inline-block  hover:text-primary mb-3 " href="">Facebook</a>
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




@endsection