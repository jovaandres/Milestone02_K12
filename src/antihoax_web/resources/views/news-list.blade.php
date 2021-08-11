@extends('layouts/main')

@section('title')
    <title>AntiHoax || News List</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/news-list.css') }}"/>
@endsection


@section('container')
    <h2>News List</h2>
    <div class="small-container">
        <div id="disclaimer-box">
            <h4>Disclaimer</h4>
            <p>
                Karena <i>rating</i> kebenaran berita yang telah diaporkan di News
                List dikonfirmasi oleh pengunjung-pengunjung lain pada laman ini,
                maka <i>rating</i> tidak akurat 100% dan pastikan utnuk
                mendapatkan pendapat kedua dari sumber-sumber lain.
            </p>
        </div>
        <div id="link-box">
            <div class="row">
                <div class="col-1">
                    <form id="cekFakta" method="post" action="{{ route('news.cek') }}">
                        @csrf
                        <input
                            type="text"
                            id="link"
                            name="link"
                            placeholder="Enter the link here"
                        />
                        <input
                            type="submit"
                            id="cek-fakta-submit"
                            value="Cek Fakta"
                        />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hl"></div>
    <div id="news-list">
        <div class="news-box">
            <div class="row">
                @if (count($results) > 0 )
                    @foreach ($results as $result)
                        <div class="col-1">
                            <h5 class="news-link">
                                {{ $result->link }}
                            </h5>
                            <h6 class="news-analysis">
                                {{ $result->reason }}
                            </h6>
                        </div>
                        <div class="vl"></div>
                        <div class="col-2">
                            <div class="btn-benar">Benar</div>
                            <div class="persentase-hoaks">50%</div>
                            <div class="btn-hoaks">Hoaks</div>
                        </div>
                    @endforeach
                @else
                    <div class="col-1">
                        <h5 class="news-link">
                            Link tidak ada
                        </h5>
                        <h6 class="news-analysis">
                            Hasil tidak ditemukan
                        </h6>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
