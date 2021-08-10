@extends('layouts/main')

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
                <form action="">
                  <input
                    type="text"
                    id="cek-fakta-link"
                    name="cek-fakta-link"
                    value="Enter the link here"
                  />
                </form>
              </div>
              <div class="vl"></div>
              <div class="col-2">
                <form action="">
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
              <div class="col-1">
                <h5 class="news-link">
                  tribunnews.com/nasional/2021.08/10/sidang-tahunan-mpr
                </h5>
                <h6 class="news-analysis">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Nisi, iste? Blanditiis fugit recusandae, laudantium fugiat
                  eaque, aperiam maiores nam ducimus similique et itaque
                  cupiditate porro ullam, vero incidunt laboriosam nostrum?
                </h6>
              </div>
              <div class="vl"></div>
              <div class="col-2">
                <div class="btn-benar">Benar</div>
                <div class="persentase-hoaks">50%</div>
                <div class="btn-hoaks">Hoaks</div>
              </div>
            </div>
          </div>
          <div class="news-box">
            <div class="row">
              <div class="col-1">
                <h5 class="news-link">
                  tribunnews.com/nasional/2021.08/10/sidang-tahunan-mpr
                </h5>
                <h6 class="news-analysis">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Nisi, iste? Blanditiis fugit recusandae, laudantium fugiat
                  eaque, aperiam maiores nam ducimus similique et itaque
                  cupiditate porro ullam, vero incidunt laboriosam nostrum?
                </h6>
              </div>
              <div class="vl"></div>
              <div class="col-2">
                <div class="btn-benar">Benar</div>
                <div class="persentase-hoaks">50%</div>
                <div class="btn-hoaks">Hoaks</div>
              </div>
            </div>
          </div>
          <div class="news-box">
            <div class="row">
              <div class="col-1">
                <h5 class="news-link">
                  tribunnews.com/nasional/2021.08/10/sidang-tahunan-mpr
                </h5>
                <h6 class="news-analysis">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Nisi, iste? Blanditiis fugit recusandae, laudantium fugiat
                  eaque, aperiam maiores nam ducimus similique et itaque
                  cupiditate porro ullam, vero incidunt laboriosam nostrum?
                </h6>
              </div>
              <div class="vl"></div>
              <div class="col-2">
                <div class="btn-benar">Benar</div>
                <div class="persentase-hoaks">50%</div>
                <div class="btn-hoaks">Hoaks</div>
              </div>
            </div>
          </div>
          <div class="news-box">
            <div class="row">
              <div class="col-1">
                <h5 class="news-link">
                  tribunnews.com/nasional/2021.08/10/sidang-tahunan-mpr
                </h5>
                <h6 class="news-analysis">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Nisi, iste? Blanditiis fugit recusandae, laudantium fugiat
                  eaque, aperiam maiores nam ducimus similique et itaque
                  cupiditate porro ullam, vero incidunt laboriosam nostrum?
                </h6>
              </div>
              <div class="vl"></div>
              <div class="col-2">
                <div class="btn-benar">Benar</div>
                <div class="persentase-hoaks">50%</div>
                <div class="btn-hoaks">Hoaks</div>
              </div>
            </div>
          </div>
        </div>
@endsection
