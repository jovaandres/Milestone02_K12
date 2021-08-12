@extends('layouts/main')

@section('title')
    <title>AntiHoax || Laporkan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/lapor.css') }}"/>
@endsection

@section('container')
    <div class="container-2">
        <h2>Lapor Hoaks</h2>
        <div class="row">
            <div class="column-1">
                <form id="submitNews" method="post" action="{{ route('lapor.submit') }}">
                    @csrf
                    <label for="link">
                        <h3>Link Berita</h3>
                    </label>
                    <input type="url"
                           name="link"
                           id="link"
                           required
                           value="{{ old('link') }}"
                           placeholder="Enter the link here">

                    <label for="argument">
                        <h3>Alasan</h3>
                    </label>
                    <textarea name="argument"
                              class="text-area"
                              required
                              placeholder="Enter the explanation here"></textarea>
                    <center>
                        <button type="submit" id="submit-button" style="margin: auto;">Submit</button>
                    </center>
                </form>
            </div>
            <div class="column-2">
                <div class="disclaimer-box">
                    <h3>Disclaimer</h3>
                    <p>Link berita yang dilaporkan pada laman web ini
                        tidak akan langsung dinyatakan sebagai hoaks.
                        Berita yang telah dilaporkan akan ditampilkan di
                        News List dan akan dikonfirmasi kebenarannya oleh
                        pengunjung-pengunjung laman web ini. Anda juga
                        dapat mengonfirmasi kebenaran berita lain pada laman
                        web ini di halaman news list</p>
                </div>
            </div>
        </div>
    </div>
@endsection
