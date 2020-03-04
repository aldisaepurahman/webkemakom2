@section('title', 'Kemakom')
@extends('struct.master')

@section('content')
<section id="content">
    <div class="covers">
        <div class="blurs">
            <div class="container text-center">
                <div class="col-md-8 col-sm-8 col-8 verticals mx-auto">
                    <h1 class="color-blurs">Keluarga Mahasiswa Komputer</h1>
                    <p>Lihat selengkapnya</p>
                    <a href="{{ url('/bem') }}" class="btn btn-purple">BEM <i class="fa fa-arrow-right"></i></a>
                    <a href="{{ url('/dpm') }}" class="btn btn-primary">DPM <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="infograph" class="mt-3">
    <div class="row mb-3">
        <div class="col-md-6 col-sm-12 col-12 fotoKabem text-center">
            <h1 class="display-5 headers-blue">Ketua dan Wakil Ketua</h1>
            <h1 class="display-5 headers-purple">BEM Kemakom</h1>
            <img src="{{ asset('assets/images/KABEM-2.png') }}" class="img-fluid">
        </div>
        <div class="col-md-6 col-sm-12 col-12 infoText pl-5">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12">
                    <h1 class="display-6 headers-blue">VISI</h1>
                    <p>Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                        kinerja sehingga dapat menebar manfaat bagi Kemakom</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 col-sm-12 col-12">
                    <h1 class="display-6 headers-purple">MISI</h1>
                    <ol>
                        <li>Menciptakan suasana kekeluargaan di internal dan eksternal BEM Kemakom
                            sehingga mampu mengoptimalkan kerja BEM Kemakom
                        </li>
                        <li>Mewujudkan kader yang aktif, berkarakter, religius, dan memiliki daya juang tinggi</li>
                        <li>Meningkatkan pelayanan BEM Kemakom dalam mengembangkan minat dan bakat mahasiswa Kemakom</li>
                        <li>Aktif dalam bergerak menyikapi isu internal maupun eksternal</li>
                        <li>Aktif dalam meningkatkan prestasi dan berkembang dalam bidang akademik maupun non akademik</li>
                        <li>Menjadikan BEM Kemakom yang lebih informatif dan komunikatif dengan berbagai pihak
                            baik internal maupun eksternal Kemakom
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3 pb-3 pl-4 divisions">
        <div class="col-md-6 col-sm-12 col-12">
            <div class="infoText">
                <h1 class="display-5 headers-purple text-center">Kabinet <b class="headers-blue">Pilar Harmoni</b></h1>
                <p>Pilar Harmoni terdiri dari dua kata. Pilar yaitu pondasi atau dasar yang baik dan kuat.
                    3 pilar yang mendukung visi BEM Kemakom yaitu kerja keras, kerja cerdas, kerja ikhlas
                    yang didasarkan Harmoni yaitu sebuah penyamaan rasa aksi, gagasan dan tujuan untuk
                    menimbulkan sebuah keselarasan agar menciptakan sebuah kebermanfaatan dalam mencapai
                    tujuan yang dibentuk secara bersama-sama.
                </p>
            </div>
            <div class="text-center">
                <img src="{{ asset('assets/images/pilar-harmoni-1.png') }}" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-12">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <a href="{{ url('/divisi/dpo') }}" class="divisiLink">
                        <h3 class="display-6 headers-purple"><img src="{{ asset('assets/images/DPO.png') }}"> DPO</h3>
                    </a>
                    <ul class="unordered">
                        <li>Biro MSDM</li>
                        <li>Biro Litbang</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <a href="{{ url('/divisi/divroh') }}" class="divisiLink">
                        <h3 class="display-6 headers-purple"><img src="{{ asset('assets/images/DIVROH.png') }}"> DIVROH</h3>
                    </a>
                    <ul class="unordered">
                        <li>Biro Keputrian</li>
                        <li>Biro Syiar</li>
                        <li>Biro Pembinaan</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12 col-12">
                    <a href="{{ url('/divisi/divkomtekinfo') }}" class="divisiLink">
                        <h3 class="display-6 headers-purple"><img src="{{ asset('assets/images/DIVKOM.png') }}"> DIVKOMTEKINFO</h3>
                    </a>
                    <ul class="unordered">
                        <li>Biro Teknologi</li>
                        <li>Biro Kreatif</li>
                        <li>Biro Komunikasi</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <a href="{{ url('/divisi/divdiklat') }}" class="divisiLink">
                        <h3 class="display-6 headers-purple"><img src="{{ asset('assets/images/DIKLAT.png') }}"> DIVDIKLAT</h3>
                    </a>
                    <ul class="unordered">
                        <li>Biro Pendidikan</li>
                        <li>Biro Pelatihan</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12 col-12">
                    <a href="{{ url('/divisi/divadsospol') }}" class="divisiLink">
                        <h3 class="display-6 headers-purple"><img src="{{ asset('assets/images/SOSPOL.png') }}"> DIVADSOSPOL</h3>
                    </a>
                    <ul class="unordered">
                        <li>Biro Sosial</li>
                        <li>Biro Kesejahteraan Masyarakat</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <a href="{{ url('/divisi/dpmb') }}" class="divisiLink">
                        <h3 class="display-6 headers-purple"><img src="{{ asset('assets/images/DPMB.png') }}"> DPMB</h3>
                    </a>
                    <ul class="unordered">
                        <li>Biro Keolahragaan</li>
                        <li>Biro Keakraban</li>
                        <li>Biro Kesenian</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="information">
    <div class="covers">
        <div class="blue-blurs">
            <div class="col-md-12 col-sm-12 col-12 mb-5">
                <div class="row">
                    <div class="col-md-3 col-sm-5 col-5 mr-auto ml-4">
                        <h2 class="display-5 whitened">Informasi</h2>
                    </div>
                    <div class="col-md-3 col-sm-5 col-5 ml-auto mt-3">
                        <a href="{{ url('/berita') }}" class="btn btn-info">Lihat Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row mt-5 mx-auto">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ url('/berita') }}" class="btn btn-primary">Berita</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="{{ url('/event') }}" class="btn btn-primary">Event</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="{{ url('/pixel') }}" class="btn btn-primary">Pixel</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="{{ url('/youtube') }}" class="btn btn-primary">Youtube</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection