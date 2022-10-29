@extends('layouts.home')
@section('content')
<!-- Start Main Banner Area -->
<div id="home" class="main-banner">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container-fluid">

                <div class="row align-items-center mx-4">
                    <div class="col-lg-6">

                        <div class="banner-content">
                            <h1>Palang Merah Indonesia - Kabupaten Bone</h1>
                            <p>Alamat Jl. Dr. Wahidin Sudiro Husodo, Macanang, Kec. Tanete Riattang Bar., Kabupaten Bone, Sulawesi Selatan</p>

                            <!-- <div class="banner-holder">
                                    <a href="#">
                                        <img src="{{url('user')}}/img/store/1.png" alt="image">
                                    </a>
                                    <a href="#">
                                        <img src="{{url('user')}}/img/store/2.png" alt="image">
                                    </a>
                                </div> -->
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="banner-image">
                            <img src="{{url('user')}}/img/giveme.png" alt="image">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="{{url('user')}}/img/shape/1.png" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="{{url('user')}}/img/shape/2.png" alt="image">
        </div>

        <div class="shape-3">
            <img src="{{url('user')}}/img/shape/3.svg" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{url('user')}}/img/shape/4.svg" alt="image">
        </div>

        <div class="shape-5">
            <img src="{{url('user')}}/img/shape/5.png" alt="image">
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Fun Facts Area -->
<section id="pesan" class="fun-facts-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <img src="{{ asset('images/blood-a.png') }}" alt="" width="160" height="244">
                    </div>
                    <h3>
                        <span class="odometer" data-count="{{ Helper::get_count_darah('A') }}">00</span>
                    </h3>
                    <p>Golongan Darah A</p>
                    <br>
                    <a href="{{ route('pendaftaran.darah', 'A') }}" class=" btn  btn-lg btn-block text-light font-weight-bolder font-size-h6 px-5" style="background: linear-gradient(to right, #DC1C13, #F07470)">Pesan</a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <img src="{{ asset('images/blood-b.png') }}" alt="" width="160" height="244">
                    </div>
                    <h3>
                        <span class="odometer" data-count="{{ Helper::get_count_darah('B') }}">00</span>
                    </h3>
                    <p>Golongan Darah B</p>
                    <br>
                    <a href="{{ route('pendaftaran.darah', 'B') }}" class=" btn  btn-lg btn-block text-light font-weight-bolder font-size-h6 px-5" style="background: linear-gradient(to right, #DC1C13, #F07470)">Pesan</a>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <img src="{{ asset('images/blood-ab.png') }}" alt="" width="160" height="244">
                    </div>
                    <h3>
                        <span class="odometer" data-count="{{ Helper::get_count_darah('AB') }}">00</span>
                    </h3>
                    <p>Golongan Darah AB</p>
                    <br>
                    <a href="{{ route('pendaftaran.darah', 'AB') }}" class=" btn  btn-lg btn-block text-light font-weight-bolder font-size-h6 px-5" style="background: linear-gradient(to right, #DC1C13, #F07470)">Pesan</a>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-fun-fact">
                    <div class="icon">
                        <img src="{{ asset('images/blood-o.png') }}" alt="" width="160" height="244">
                    </div>
                    <h3>
                        <span class="odometer" data-count="{{ Helper::get_count_darah('O') }}">00</span>
                    </h3>
                    <p>Golongan Darah O</p>
                    <br>
                    <a href="{{ route('pendaftaran.darah', 'O') }}" class=" btn  btn-lg btn-block text-light font-weight-bolder font-size-h6 px-5" style="background: linear-gradient(to right, #DC1C13, #F07470)">Pesan</a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts Area -->

<!-- Start About Area -->
<section id="about" class="about-area pb-100">
    <div class="container">
        <div class="section-title">
            <h2>Tentang Donor Darah</h2>
            <div class="bar"></div>
            <p>Salah satu kegiatan PMI yang paling dikenal masyarakat adalah donor darah. Menyumbangkan sebagian darah untuk kemudian disalurkan kepada yang membutuhkan menjadi suatu sumbangan berarti dalam kehidupan sosial bermasyarakat. Tidak membutuhkan persyaratan sulit untuk menjadi calon donor.</p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <h3>Syarat Donor Darah</h3>
                    <div class="bar"></div>
                    <p><b>Syarat Untuk Menjadi Donor Darah :</b></p>
                    <p>Donor darah adalah orang yang memberikan darah secara sukarela untuk maksud dan tujuan transfusi darah bagi orang lain yang membutuhkan. Semua orang dapat menjadi donor darah jika memenuhi persyaratan yang berlaku.</p>
                    <p><b>Apa Syarat-syarat Untuk Menjadi Donor Darah ?</b></p>
                    <ol>
                        <li>Sehat jasmani dan rohani</li>
                        <li>Usia 17 sampai dengan 65 tahun</li>
                        <li>Berat badan minimal 45 kg</li>
                        <li>Tekanan darah :</li>
                        <ul>
                            <li>sistole 100 - 170</li>
                            <li>diastole 70 - 100</li>
                        </ul>
                        <li>Kadar haemoglobin 12,5g% s/d 17,0g%</li>
                        <li>Interval donor minimal 12 minggu atau 3 bulan sejak donor darah sebelumnya (maksimal 5 kali dalam 2 tahun)</li>
                    </ol>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{url('user')}}/img/mobiles.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="{{url('user')}}/img/shape/1.png" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="{{url('user')}}/img/shape/2.png" alt="image">
        </div>

        <div class="shape-3">
            <img src="{{url('user')}}/img/shape/3.svg" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{url('user')}}/img/shape/4.svg" alt="image">
        </div>

        <div class="shape-5">
            <img src="{{url('user')}}/img/shape/5.png" alt="image">
        </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Features Area -->
<section id="features" class="features-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>FAQ's</h2>
            <div class="bar"></div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="fa fa-sun"></i>
                    </div>
                    <h3>Mengapa Harus Bayar Saat Kita Butuh Darah dari PMI ?</h3>
                    <p>Biaya yang kita keluarkan perkantong darah sebenarnya adalah biaya penggantian pemeliharaan darah, supaya kondisinya tetap sama seperti saat berada dalam tubuh kita. Biaya ini yang kita kenal dgn nama <b>"BPPD"</b> atau Biaya Penggantian Pengelolaan Darah.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="fa fa-lightbulb"></i>
                    </div>
                    <h3>Mengapa Kita Perlu Donor Darah ?</h3>
                    <p><b>Kebutuhan yang besar </b>: Setiap delapan detik, ada satu orang yang membutuhkan transfusi darah di Indonesia.</p>
                    <p><b>Pemeriksaan kesehatan gratis </b>: Sebelum mendonorkan darah, petugas akan memeriksa suhu tubuh, denyut nadi, tekanan darah dan kadar hemoglobin Anda.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <h3>Kenapa Ketika Membutuhkan Darah Prosesnya Lama ?</h3>
                    <p>Proses permintaan darah transfusi memerlukan proses <b>"Crossmatch"</b> yaitu uji serasi silang antara darah pasien dengan darah donor yang diberikan. Crossmatch ini bertujuan untuk melihat apakah darah pasien sesuai dengan darah donor sehingga tidak ada efek yang merugikan pasien transfusi darah tersebut.Secara keseluruhan darah pendonor baru siap diberikan kepada seseorang itu butuh waktu paling lama sekitar 3 jam</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="single-features">
                    <div class="icon">
                        <i class="fa fa-eye"></i>
                    </div>
                    <h3>Apa Yang Harus Kita Persiapkan Sebelum Donor ?</h3>
                    <p>Kita memerlukan tidur yang nyenyak di malam sebelum mendonor, sarapan pagi atau makan siang sebelum mendonor. Banyak minum seperti jus, susu sebelum mendonor. Rileks saat mendonor, dan banyak minum setelah mendonor. Kita bisa melanjutkan kegiatan setelah mendonor, asal hindari aktivitas fisik yang berat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="{{url('user')}}/img/shape/1.png" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="{{url('user')}}/img/shape/2.png" alt="image">
        </div>

        <div class="shape-3">
            <img src="{{url('user')}}/img/shape/3.svg" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{url('user')}}/img/shape/4.svg" alt="image">
        </div>

        <div class="shape-5">
            <img src="{{url('user')}}/img/shape/5.png" alt="image">
        </div>
    </div>
</section>
<!-- End Features Area -->

<!-- End Screenshot Area -->
<!-- <section id="screenshots" class="screenshot-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Our Expert Team</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-team">
                    <div class="image">
                        <img src="{{url('user')}}/img/team/image1.jpg" alt="image">

                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="content">
                            <h3>Justin Roberto</h3>
                            <p>Founder & CEO</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-team">
                    <div class="image">
                        <img src="{{url('user')}}/img/team/image2.jpg" alt="image">

                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="content">
                            <h3>Louis Agassiz</h3>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-team">
                    <div class="image">
                        <img src="{{url('user')}}/img/team/image3.jpg" alt="image">

                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="content">
                            <h3>Carl Anderson</h3>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="{{url('user')}}/img/shape/1.png" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="{{url('user')}}/img/shape/2.png" alt="image">
        </div>

        <div class="shape-3">
            <img src="{{url('user')}}/img/shape/3.svg" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{url('user')}}/img/shape/4.svg" alt="image">
        </div>

        <div class="shape-5">
            <img src="{{url('user')}}/img/shape/5.png" alt="image">
        </div>
    </div>
</section> -->
<!-- End Screenshot Area -->

<!-- Start Testimonial Area -->
<!-- <section class="testimonial-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Testimonial</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
        </div>

        <div class="testimonial-slides">
            <div class="client-feedback">
                <div>
                    <div class="item">
                        <div class="single-feedback">
                            <div class="icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-feedback">
                            <div class="icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Quis ipsum suspendisse ultrices gravida.”</p>
                        </div>
                    </div>
                </div>

                <button class="prev-arrow slick-arrow">
                    <i class="fa fa-chevron-left"></i>
                </button>

                <button class="next-arrow slick-arrow">
                    <i class="fa fa-chevron-right"></i>
                </button>
            </div>

            <div class="client-thumbnails">
                <div>
                    <div class="item">
                        <div class="img-fill">
                            <img src="{{url('user')}}/img/client/1.jpg" alt="client">
                        </div>

                        <div class="title">
                            <h3>Jonus Nathan</h3>
                            <span>CEO at Envato</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill">
                            <img src="{{url('user')}}/img/client/2.jpg" alt="client">
                        </div>

                        <div class="title">
                            <h3>Sadio Finn</h3>
                            <span>CEO at FlatIcon</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill">
                            <img src="{{url('user')}}/img/client/3.jpg" alt="client">
                        </div>

                        <div class="title">
                            <h3>Tom Olivar</h3>
                            <span>CEO at ThemeForest</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill">
                            <img src="{{url('user')}}/img/client/4.jpg" alt="client">
                        </div>

                        <div class="title">
                            <h3>James Finn</h3>
                            <span>CEO at GitLab</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill">
                            <img src="{{url('user')}}/img/client/5.jpg" alt="client">
                        </div>

                        <div class="title">
                            <h3>John Lucy</h3>
                            <span>CEO at Linkedin</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill">
                            <img src="{{url('user')}}/img/client/1.jpg" alt="client">
                        </div>

                        <div class="title">
                            <h3>Sarah Taylor</h3>
                            <span>CEO at Twitter</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill">
                            <img src="{{url('user')}}/img/client/2.jpg" alt="client">
                        </div>

                        <div class="title">
                            <h3>James Anderson</h3>
                            <span>CEO at Facebook</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="img-fill">
                            <img src="{{url('user')}}/img/client/3.jpg" alt="client">
                        </div>

                        <div class="title">
                            <h3>Steven Smith</h3>
                            <span>CEO at EnvyTheme</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="{{url('user')}}/img/shape/1.png" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="{{url('user')}}/img/shape/2.png" alt="image">
        </div>

        <div class="shape-3">
            <img src="{{url('user')}}/img/shape/3.svg" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{url('user')}}/img/shape/4.svg" alt="image">
        </div>

        <div class="shape-5">
            <img src="{{url('user')}}/img/shape/5.png" alt="image">
        </div>
    </div>
</section> -->
<!-- End Testimonial Area -->

<!-- Start Contact Area -->
<!-- <section id="contact" class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="send-btn">
                                    <button type="submit" class="default-btn">
                                        Send Message
                                        <span></span>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-info">
                    <div class="contact-info-content">
                        <h3>Contact with us by Your Phone Number or Email Address</h3>
                        <h2>
                            <a href="tel:+1-485-456-0102">+1-485-456-0102</a>
                            <span>Or</span>
                            <a href="mailto:hello@colugo.com">hello@colugo.com</a>
                        </h2>

                        <ul class="social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="default-shape">
        <div class="shape-1">
            <img src="{{url('user')}}/img/shape/1.png" alt="image">
        </div>

        <div class="shape-2 rotateme">
            <img src="{{url('user')}}/img/shape/2.png" alt="image">
        </div>

        <div class="shape-3">
            <img src="{{url('user')}}/img/shape/3.svg" alt="image">
        </div>

        <div class="shape-4">
            <img src="{{url('user')}}/img/shape/4.svg" alt="image">
        </div>

        <div class="shape-5">
            <img src="{{url('user')}}/img/shape/5.png" alt="image">
        </div>
    </div>
</section> -->
<!-- End Contact Area -->
@endsection