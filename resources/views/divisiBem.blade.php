@section('title', 'Divisi Kemakom')
@extends('struct.master')

<style type="text/css">
.bemCovers{
    width: 100%;
    height: 80%;
    background-image: url("{{ asset('assets/images/IMG_5932-1.JPG') }}");
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
            <div class="col-md-12 col-sm-12 col-12 pt-5">
                <div class="row mt-5 mx-auto text-center">
                    <h2 class="display-2 headers-purple">DIVISI PENGEMBANGAN ORGANISASI</h2>
                    <img src="{{ asset('assets/images/DPO.png') }}" class="mx-auto">
                </div>
            </div>
        </div>
    </div>
    <div class="bemBlursBottom">
        <div class="col-md-12 col-sm-12 col-12 pt-5">
            <div class="col-md-1 col-sm-6 col-12">
                <div class="underlinePurple"></div>
            </div>
            <div class="col-md-12 col-sm-12 col-12 infoText">
                <h1 class="display-5 whitened">DESKRIPSI</h1>
                <div class="underlinePurple"></div>
                <p class="whitened">Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                    kinerja sehingga dapat menebar manfaat bagi Kemakom.Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                    kinerja sehingga dapat menebar manfaat bagi Kemakom.Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                    kinerja sehingga dapat menebar manfaat bagi Kemakom</p>
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
                <div class="col-md-6 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                        <p class="headers-green">Sekretaris</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-12">
                    <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                        <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                        <p class="headers-green">Bendahara</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="col-md-1 col-sm-6 col-12">
                        <div class="underlinePurple"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12 infoText">
                        <h1 class="display-6">NAMA BIRO</h1>
                        <div class="underlinePurple"></div>
                        <p class="pt-3">Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom.Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom.Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom</p>
                    </div>  
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-12 mx-auto text-center">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                            <p class="headers-green text-center">KETUA</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="col-md-1 col-sm-6 col-12">
                        <div class="underlinePurple"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12 infoText">
                        <h1 class="display-6">NAMA BIRO 2</h1>
                        <div class="underlinePurple"></div>
                        <p class="pt-3">Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom.Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom.Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom</p>
                    </div>  
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-12 mx-auto text-center">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                            <p class="headers-green text-center">KETUA</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="col-md-1 col-sm-6 col-12">
                        <div class="underlinePurple"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-12 infoText">
                        <h1 class="display-6">NAMA BIRO 3</h1>
                        <div class="underlinePurple"></div>
                        <p class="pt-3">Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom.Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom.Menjadikan BEM Kemakom yang aktif dan berdaya juang tinggi dalam 
                            kinerja sehingga dapat menebar manfaat bagi Kemakom</p>
                    </div>  
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-12 mx-auto text-center">
                            <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                            <p class="headers-green text-center">KETUA</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8 col-12">
                            <div class="col-md-6 col-sm-8 col-12 mx-auto text-center">
                                <img src="{{ asset('assets/images/IMG_6412-1.JPG') }}" class="img-thumbnail">
                                <p class="headers-green">Anggota</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection