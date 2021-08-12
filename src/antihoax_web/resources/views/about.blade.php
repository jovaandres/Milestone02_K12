@extends('layouts/main')

@section('title')
    <title>AntiHoax || About Us</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/about.css') }}" />
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
@endsection
