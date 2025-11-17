@extends('layouts.main')

@include('partials.navbar')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1 style="color:white;">Selamat Datang</h1>
            <h2 style="color:white;">Di Klinik Pratama Wahyu Widodo</h2>
            <a href="/antrian" class="btn-get-started scrollto">Ambil Antrian</a>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Sistem Antrian Online Klinik Pratama Wahyu Widodo</h3>
                            <p>
                                Ini adalah Sistem Antrian Online di Klinik Wahyu WIdodo dimana setiap pengunjung dapat
                                mengambil antrian
                                Sesuai Poliklinik terlebih dahulu dari rumah
                            </p>
                            <div class="text-center">
                                <a href="/antrian" class="more-btn">Ambil Antrian <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-plus-medical"></i>
                                        <h4>Poli Umum</h4>
                                        <p>Pelayanan Poli Umum adalah pelayanan pemeriksaan medis berupa pemeriksaan
                                            kesehatan, pengobatan, dan edukasi kepada pasien dalam rangka meningkatkan
                                            kesehatan perorangan dan masyarakat.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class='bx  bx-dna'  ></i> 
                                        <h4>Poli Gigi</h4>
                                        <p>Pelayanan Kesehatan Gigi dan Mulut merupakan pelayanan kesehatan gigi dan mulut
                                            berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan
                                            medis dasar kesehatan gigi dan mulut.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bxs-shield-plus"></i>
                                        <h4>Poli KIA</h4>
                                        <p>Poli KIA (Kesehatan Ibu dan Anak) dan KB (Kelahiran Berencana) memberikan layanan
                                            terkait kehamilan, persalinan, dan perawatan pasca melahirkan. Selain itu, poli
                                            ini juga menyediakan informasi dan layanan terkait keluarga berencana.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->



        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Doctors</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Departments</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Research Labs</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Awards</p>
                        </div>
                    </div>

                </div>

            </div> -->
        </section><!-- End Counts Section -->

       <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Doctors</h2>
                    <p>Berikut adalah daftar dokter yang bertugas dan memberikan pelayanan kesehatan di Klinik Pratama Wahyu Widodo.</p>
                </div>


        <div class="row">
                        <div class="col-md-6">
                            <div class="member d-flex align-items-start">
                                <div class="image-container">
                                         <img src="/assets/img/doctors/doctors-2.jpg" alt="doctor" 
                                         class="rounded-md object-cover w-8 h-8"/>
                                </div>
                                <div class="member-info">
                                    <h4>dr.Avysia Tri Marga Wulan</h4>
                                    <span>Spesialis Umum</span>
                                    <p>Dokter poli umum yang memberikan layanan pemeriksaan, diagnosis, dan pengobatan untuk berbagai keluhan kesehatan umum, seperti demam, batuk, flu, nyeri, luka ringan, maupun penyakit tidak menular lainnya.</p>
                                    <div class="social">
                                        <a href="{#}"><i class="ri-twitter-fill"></i></a>
                                        <a href="{#}"><i class="ri-facebook-fill"></i></a>
                                        <a href="{#}"><i class="ri-instagram-fill"></i></a>
                                        <a href="{#}"><i class="ri-tiktok-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start">
                                <div class="image-container">
                                         <img src="/assets/img/doctors/doctors-3.jpg" alt="doctor" 
                                         class="rounded-md object-cover w-8 h-8"/>
                                </div>
                                <div class="member-info">
                                    <h4>dr. Sihwidhi Chandra Nugraha</h4>
                                    <span>Spesialis Gigi</span>
                                    <p>Dokter poli gigi yang memberikan pelayanan pemeriksaan, perawatan, dan pengobatan terkait kesehatan gigi dan mulut, seperti penambalan gigi berlubang, pembersihan karang gigi, pencabutan gigi, serta penanganan infeksi atau kelainan gusi.</p>
                                    <div class="social">
                                        <a href="{}"><i class="ri-twitter-fill"></i></a>
                                        <a href="{}"><i class="ri-facebook-fill"></i></a>
                                        <a href="{}"><i class="ri-instagram-fill"></i></a>
                                        <a href="{}"><i class="ri-tiktok-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start">
                                <div class="image-container">
                                         <img src="/assets/img/doctors/doctors-2.jpg" alt="doctor" 
                                         class="rounded-md object-cover w-8 h-8"/>
                                </div>
                                <div class="member-info">
                                    <h4>dr. Ade Ira Rahmawati Putri</h4>
                                    <span>Spesialis Umum</span>
                                    <p>Dokter poli umum yang memberikan layanan pemeriksaan, diagnosis, dan pengobatan untuk berbagai keluhan kesehatan umum, seperti demam, batuk, flu, nyeri, luka ringan, maupun penyakit tidak menular lainnya.</p>
                                    <div class="social">
                                        <a href="{}"><i class="ri-twitter-fill"></i></a>
                                        <a href="{}"><i class="ri-facebook-fill"></i></a>
                                        <a href="{}"><i class="ri-instagram-fill"></i></a>
                                        <a href="{}"><i class="ri-tiktok-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    


                </div>
        </section><!-- End Doctors Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>



            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Mojodoyong RT/21, Kedawung, Sragen</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>klinikwahyuwidodo@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Telephone:</h4>
                                <p>+6281329744077</p>
                            </div>

                            <div class="clock">
                                <i class="bi bi-clock"></i>
                                <h4>Timing</h4>
                                <p>24 Jam</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5894.353965344471!2d111.02555776744447!3d-7.519929435730511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1e9c36db04e7%3A0x9ba55ac26ec1b332!2sKlinik%20Wahyu%20Widodo!5e0!3m2!1sid!2sid!4v1752999051959!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection

@include('partials.footer')
