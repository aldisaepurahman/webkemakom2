@section('title', 'BEM Kemakom')
@extends('struct.master')

<style type="text/css">
.bemCovers{
    width: 100%;
    height: 80%;
    background-image: url("{{ asset('assets/images/IMG_5939-1.JPG') }}");
    background-size: cover;
    background-position: 100% 50%;
}

.bemBlurs{
    font-family: Mont SemiBold;
    background-color: #8abeb6;
    height: 100%;
    opacity: 0.9;
}

.bemBlursBottom{
    font-family: Mont SemiBold;
    background-color: #8abeb6;
    height: 80%;
    opacity: 0.9;
}
</style>

@section('content')
<section id="content">
    <div class="bemCovers">
        <div class="bemBlurs">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="col-md-6 col-sm-8 col-12 mt-5">
                    <div class="row mt-5">
                        <h2 class="display-2 headers-purple">KABINET PILAR HARMONI</h2>
                        <h2 class="display-2 whitened">2020</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bemBlursBottom">
        <div class="col-md-12 col-sm-12 col-12 pt-5">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-12">
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="underlinePurple"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <h1 class="display-5 whitened">VISI</h1>
                        <div class="underlinePurple"></div>
                        <p class="whitened infoText">Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-12">
                    <div class="col-md-2 col-sm-6 col-12">
                        <div class="underlinePurple"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12">
                        <h1 class="display-5 whitened">MISI</h1>
                        <div class="underlinePurple"></div>
                        <ol class="whitened infoText">
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
    </div>
    <div class="nonDiv pb-4">
        <div class="col-md-12 col-sm-12 col-12">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-12 mx-auto text-center">
                    <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                    <p class="headers-green text-center">KETUA</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2 col-sm-6 col-12 mx-auto text-center">
                    <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                    <p class="headers-green">WAKIL KETUA</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                        <p class="headers-green">Sekretaris 1</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                        <p class="headers-green">Bendahara 1</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                        <p class="headers-green">Sekretaris 2</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                        <p class="headers-green">Bendahara 2</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <a href="{{ url('/divisi/dpo') }}" class="headers-purple divisi">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">DPO
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <a href="{{ url('/divisi/divkomtekinfo') }}" class="headers-purple divisi">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">DIVKOMTEKINFO
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <a href="{{ url('/divisi/divroh') }}" class="headers-purple divisi">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">DIVROH
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <a href="{{ url('/divisi/divdiklat') }}" class="headers-purple divisi">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">DIVDIKLAT
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <a href="{{ url('/divisi/divadsospol') }}" class="headers-purple divisi">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">DIVADSOSPOL
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <a href="{{ url('/divisi/dpmb') }}" class="headers-purple divisi">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">DPMB
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection