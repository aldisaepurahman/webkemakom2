@section('title', 'Detail Kemakom')
@extends('struct.master')

@section('content')
<section id="detail">
    <div class="blurs">
        <div class="col-md-12 col-sm-12 col-12 pt-5">
            <h1 class="display-2 mt-4 headers-blue text-center">Judul</h1>
            <div class="col-md-8 col-sm-12 col-12 mx-auto">
                <div class="row mt-3">
                    <img src="{{ asset('assets/images/IMG_5946-1.JPG') }}" class="img-thumbnail">
                </div>
                <div class="row mt-3 infoText">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                        Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                    <p class="mt-5 pb-3 ml-auto">1 Maret 2020</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection