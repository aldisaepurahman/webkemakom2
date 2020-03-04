@section('title', 'Berita Tentang Kemakom')
@extends('struct.master')

@section('content')
    <section id="content">
        <div class="covers">
            <div class="blue-blurs">
                <div class="col-md-12 col-sm-12 col-12 pt-5" id="information">
                    <h1 class="display-2 mt-4 headers-blue text-center">BERITA KEMAKOM</h1>
                    <div class="row mx-auto mt-5">
                        <div class="col-md-4 col-sm-8 col-12">
                            <p class="whitened">1 Maret 2020</p>
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="{{ url('/detail/berita/1') }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 col-sm-8 col-12">
                            <p class="whitened">1 Maret 2020</p>
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="{{ url('/detail/berita/2') }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 col-sm-8 col-12">
                            <p class="whitened">1 Maret 2020</p>
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="{{ url('/detail/berita/3') }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blue-blurs">
                <div class="col-md-12 col-sm-12 col-12 pt-5 pb-5" id="information">
                    <div class="row mx-auto">
                        <div class="col-md-4 col-sm-8 col-12">
                            <p class="whitened">1 Maret 2020</p>
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="{{ url('/detail/berita/1') }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 col-sm-8 col-12">
                            <p class="whitened">1 Maret 2020</p>
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="{{ url('/detail/berita/2') }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 col-sm-8 col-12">
                            <p class="whitened">1 Maret 2020</p>
                            <div class="card" style="width: 23rem;">
                                <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="{{ url('/detail/berita/3') }}" class="btn btn-primary">Selengkapnya</a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <a href="{{ url('/detail/berita/10') }}" class="btn btn-purple ml-auto mr-3">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                        <a href="{{ url('/detail/berita/10') }}" class="btn btn-primary mr-auto">
                            Selengkapnya <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection