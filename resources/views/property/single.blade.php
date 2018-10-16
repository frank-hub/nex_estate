@extends('layouts.est_layout')

@section('main_layout')
    <div class="banner" style="background-image: url('../images/page-header.jpg')">
        <div style="margin-left: 410px">
            <h2 class="text-white">24 ACRES NAKURU | HOME</h2>
            <button class="btn btn-info">MAKE INQUIRY</button>
            <button class="btn btn-primary">MAKE REVIEW</button>
        </div>
    </div>

    <section class="container">
        <div class="row">
            <div class="col-md-8">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('images/thogoto.png')}}" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('images/thogoto.png')}}" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('images/home_tiga.png')}}" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 mb-2 bg-gradient-primary text-white">
                    
                </div>
            </div>
        </div>
    </section>
@endsection