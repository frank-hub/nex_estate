@extends('layouts.est_layout')

@section('main_layout')
    <div class="banner" style="background-image: url('../images/page-header.jpg')">
        <div style="margin-left: 410px">
            <h2 class="text-white">24 ACRES NAKURU | HOME</h2>
            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">MAKE INQUIRY</button>
            <button class="btn btn-primary" data-toggle="modal" data-target="#review">MAKE REVIEW</button>
        </div>
    </div>

  
  <!-- make inquiry -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

    <!-- make review -->
    <div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

      <section class="container">
        <div class="row">
            <div class="col-md-8" style="padding-right: 0px;">
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
            <div class="col-md-4" style="padding-left: 0px;margin-left: 0px;margin-top: 15px;">
                <div class="p-3" style="background-color:#838383;">
                    <h3 class="text-white">24 ACRES NAKURU | HOME</h3>
                    <h3 style="color: #FFA500;">KSH 150000</h3>
                    <div class="row          ">
                      <div class="col-sm-4">
                        <i class="fa fa-bed" style="font-size: 25px;color: #FFA500;"></i>
                        <h5 class="text-white">BED ROOMS 2</h5>
                      </div>
                      <div class="col-sm-4">
                        <i class="fa fa-shower" style="font-size: 30px;color: #FFA500;"></i>
                        <h5 class="text-white">Bathrooms 1</h5>
                      </div>
                      <div class="col-sm-4">
                        <i class="fas fa-warehouse" style="font-size: 30px;color: #FFA500;"></i>
                        <h5 class="text-white">Car Pack 1</h5>
                      </div>
                      <div class="col-sm-4">
                        <i class="fas fa-globe-africa" style="font-size: 30px;color: #FFA500;"></i>
                        <h5 class="text-white">AREA 98730Sq m</h5>
                      </div>
                      <div class="col-sm-4">
                        <i class="fas fa-map-marker-alt" style="font-size: 30px;color: #FFA500;"></i>
                        <h5 class="text-white">Wanyororo Main Rd, Nakuru, Kenya</h5>
                      </div>
                    </div>
                    <div style="background-color: #9B9B9B">
                      <h4 class="text-white">DEALER INFORMATION</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                          <h4>NEX-ESTATE</h4>
                          <i class="fa fa-envelope" style="font-size: 15px;color: #FFA500;">
                            <a style="margin-left: 10px;color: white" href="mailto:info@nextechdevelopers.com">info@nextechdevelopers.com</a>
                          </i>
                          <br>
                          <i class="fas fa-phone-volume" style="font-size: 15px;color: #FFA500;">
                            <a style="margin-left: 10px;color: white"  href="tel:+254717353774">+254 717 353 774</a>
                          </i>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection