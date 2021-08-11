@extends('layouts/main')

@section('title')
    <title>AntiHoax || Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}"/>
@endsection

@section('container')
    <div class="banner">
        <div class="container-1">
            <p>Tidak yakin dengan keaslian berita?</p>
            <p1>Cantumkan linknya di sini!</p1>
            <form id="cekFakta" method="post" action="{{ route('home.news') }}">
                @csrf
                <input type="url"
                       id="link"
                       name="link"
                       required
                       value="{{ old('link') }}"
                       placeholder="Enter the link here">
                <input type="submit" value="Cek Fakta">
            </form>
            <p2>Menemukan hoaks?<a href="/lapor">Laporkan disini</a></p2>
        </div>
    </div>
    <div class="info">
        <div class="container-2">
            <div class="section">
                <h1>Apa itu hoaks?</h1>
                <p>Menurut Kamus Besar Bahasa Indonesia (KBBI) hoaks atau dalam bahasa Inggris hoax adalah informasi
                    bohong. Hoaks adalah informasi palsu, berita bohong, atau fakta yang diplintir atau direkayasa untuk
                    tujuan lelucon hingga serius (politis).</p>
            </div>
            <div class="section">
                <h1>Mengapa kita harus khawatir dengan hoaks?</h1>
                <p>Dampak yang ditimbulkan oleh hoaks akan sangat luar biasa. Mulai dari kesalahpahaman kecil hingga
                    berdampak serius terhadap sosial, ekonomi, politik, dan keamanan. Bahkan hoaks juga dapat mengancam
                    keutuhan negara. Penyebaran berita hoax sering terjadi di media sosial dan mempengaruhi pola pikir
                    masyarakat.</p>
            </div>
            <div class="section">
                <h1>Apa contoh dampak dari hoaks?</h1>
            </div>
            <div class="section-2">
                <img src="img/info-1.png" align="left">
                <h2>Perusakan Ambulans di Yogyakarta</h2>
                <p>Seorang pria berinisial IZ alias Unyil (28) diamankan jajaran kepolisian karena aksi perusakan
                    terhadap satu unit mobil ambulans pengangkut pasien Covid-19. Kejadian tersebut berlangsung di Jalan
                    Piyungan-Prambanan KM 1, Yogyakarta. Dari pemeriksaan itu, IZ yang sehari-hari berprofesi sebagai
                    sopir truk ini nekat melakukan perusakan pada ambulans karena termakan isu liar di media sosial.</p>
                <p1>
                    Sumber: CNN Indonesia
                    https://www.cnnindonesia.com/nasional/20210714131951-12-667562/perusak-ambulans-sar-diy-di-piyungan-bantul-dibekuk-polisi
                </p1>
            </div>
            <div class="section">
                <h1>Apa ciri-ciri hoaks?</h1>
                <ul>
                    <li>Berita yang didapatkan menimbulkan kecemasan, kebencian, atau permusuhan antar satu sama lain.
                    </li>
                    <li>Tidak ada sumber berita jelas yang dapat dimintai pertanggungjawaban atau klarifikasi.</li>
                    <li>Informasi bersifat menyerang, berat sebelah, dan tidak netral.</li>
                    <li>Memiliki judul provokatif yang tidak sesuai dengan isi berita.</li>
                    <li>Memaksa untuk membagikan berita tersebut agar viral.</li>
                    <li>Berita yang diluncurkan tidak menyeluruh, ada fakta yang disembunyikan, dan memelintir informasi
                        yang diberikan oleh sumber terpercaya.
                    </li>
                    <li>Menggunakan data dan foto fiktif agar berita yang ditulis dapat dipercaya.</li>
                    <li>Memanipulasi fakta yang sebenarnya.</li>
                    <li>Ditulis oleh media yang tidak kredibel.</li>
                </ul>
            </div>
            <div class="section-3">
                <h1>Menemukan hoaks?</h1>
                <a href="/lapor">Laporkan disini
                </a>
            </div>
        </div>
    </div>

@endsection
