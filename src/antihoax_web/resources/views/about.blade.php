@extends('layouts/main')

@section('title')
    <title>AntiHoax || About Us</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}"/>
@endsection

@section('container')
    <div class="container-2">
        <img src="{{ asset('img/antihoax.png') }}">
        <div class="box">
            <p>"Truth! Truth! Truth!"</p>
        </div>
        <div class="content">
            <p>
                Kebenaran sangat penting bagi kami sampai kami mengulanginya
                tiga kali dalam motto kami. Di AntiHoax kami memimpikan
                suatu dunia dimana hoaks sepenuhnya dieradikasikan. Dunia
                dimana masyarakat umum dapat mengakses segala jenis informasi
                yang tersedia di internet tanpa adanya kekhawatiran bahwa
                informasi itu tidak valid.
            </p>
            <!-- <br> -->
            <p>
                AntiHoax menyediakan platform bagi para pengguna internet
                untuk melaporkan dan menilai kevalidan dari suatu laman
                berita sehingga masyarakat internet dapat lebih terinformasi
                atas halaman-halaman yang diragukan kebenarannya.
            </p>
            <!-- <br> -->
            <p>
                Pelaporan hoaks dapat dilakukan oleh pengguna disertai dengan
                bukti bahwa link lampiran diragukan kebenarannya. Dari situ,
                pengguna-pengguna lain dapat menilai kebenaran atau ketidakbenaran
                dari laporan yang sudah ada.
            </p>
        </div>
    </div>

    <div class="hl"></div>

    <div class="wrapper">
        <h1>Our Amazing Team</h1>
        <div class="our_team">
            <div class="team_member">
                <div class="member_img">
                    <img src="img/jova.jpg" alt="our_team">
                </div>
                <h3>jova</h3>
                <h6>Backend Developer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/jov.andrs/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520182@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/jova-andres-riski-b0b232200/" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
            <div class="team_member">
                <div class="member_img">
                    <img src="img/zayd.jpg" alt="our_team">
                </div>
                <h3>zayd</h3>
                <h6>Backend Developer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/zayd_mkz/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520163@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/zayd-muhammad-kawakibi-zuhri-46a391191/" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
            <div class="team_member">
                <div class="member_img">
                    <img src="img/ayub.jpg" alt="our_team">
                </div>
                <h3>ayub</h3>
                <h6>Backend Developer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/ayubstak/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520155@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/ayub-seipanya-b6156a218/" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
            <div class="team_member">
                <div class="member_img">
                    <img src="img/fadil.png" alt="our_team">
                </div>
                <h3>fadil</h3>
                <h6>Backend Developer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/fadillfauzani/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520180@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/fadilfauzani/" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
        <div class="our_team">
            <div class="team_member">
                <div class="member_img">
                    <img src="img/adell.png" alt="our_team">
                </div>
                <h3>adell</h3>
                <h6>Frontend Developer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/adellinekania/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520123@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/adelline-kania-setiyawan-1917a1204/" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
            <div class="team_member">
                <div class="member_img">
                    <img src="img/roby.png" alt="our_team">
                </div>
                <h3>roby</h3>
                <h6>Frontend Developer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/robypurenomo/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520331@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="#" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
            <div class="team_member">
                <div class="member_img">
                    <img src="img/hani.jpg" alt="our_team">
                </div>
                <h3>hani</h3>
                <h6>Frontend Developer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/hanifahghna/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520235@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="#" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
        <div class="our_team">
            <div class="team_member">
                <div class="member_img">
                    <img src="img/afan.jpg" alt="our_team">
                </div>
                <h3>afan</h3>
                <h6>Designer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/afanhandoyo_/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520350@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/ahmad-alfani-handoyo/" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
            <div class="team_member">
                <div class="member_img">
                    <img src="img/fajri.jpg" alt="our_team">
                </div>
                <h3>fajri</h3>
                <h6>Designer</h6>
                <ul class="social">
                    <li><a href="https://www.instagram.com/rahmatalf_/" class="fab fa-instagram"></a></li>
                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=16520171@std.stei.itb.ac.id" class="far fa-envelope"></a></li>
                    <li><a href="https://www.linkedin.com/in/rahmat-al-fajri-99ab46217/" class="fab fa-linkedin"></a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
