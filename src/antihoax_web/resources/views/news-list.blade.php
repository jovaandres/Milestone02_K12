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
                            type="url"
                            id="link"
                            name="link"
                            required
                            value="{{ old('link') }}"
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
    @if (session('success'))
        <div class="alert alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('success') }}
        </div>
    @elseif(session('failed'))
        <div class="alert alert-failed">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ session('failed') }}
        </div>
    @endif
    <div id="news-list">
        @if (count($results) > 0 )
            @foreach ($results as $result)
                <div class="news-box">
                    <div class="row">
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
                            <form method="post" action="{{ route('news.upvote') }}">
                                @csrf
                                <input
                                    type="text"
                                    value="{{ $result->link }}"
                                    name="link"
                                    id="link"
                                    style="visibility: hidden"
                                >
                                <button class="btn-benar">Benar</button>
                            </form>
                            @php($percentage = round(($result->upvote/($result->upvote + $result->downvote))*100, 2))
                            @if($percentage >= 80)
                                <div class="persentase-hoaks" style="color: #4aa340">{{ $percentage }}%</div>
                            @elseif($percentage >= 60)
                                <div class="persentase-hoaks" style="color: #91dd5a">{{ $percentage }}%</div>
                            @elseif($percentage >= 40)
                                <div class="persentase-hoaks" style="color: #cfec4c">{{ $percentage }}%</div>
                            @elseif($percentage >= 20)
                                <div class="persentase-hoaks" style="color: #f8ab26">{{ $percentage }}%</div>
                            @else
                                <div class="persentase-hoaks" style="color: #f82d26">{{ $percentage }}%</div>
                            @endif
                            <p>{{ $result->upvote + $result->downvote.' votes' }} </p>
                            <form method="post" action="{{ route('news.downvote') }}">
                                @csrf
                                <input
                                    type="text"
                                    value="{{ $result->link }}"
                                    name="link"
                                    id="link"
                                    style="visibility: hidden"
                                >
                                <button class="btn-hoaks">Hoaks</button>
                            </form>
                        </div>
                    </div>
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
@endsection
