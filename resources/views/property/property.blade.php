@extends('layouts.est_layout')

@section('main_layout')
    <div class="banner" style="background-image: url('../images/page-header.jpg')">
        <h2 class="text-white" style="margin-left: 410px">PROPERTY</h2>
    </div>

    <section class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-md-9">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-placement="top" title="Grid View" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-th"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings-tab"  data-placement="top" title="List View" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false"><i class="fas fa-list"></i></a>
                    </li>
                </ul>
                  
                  <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="{{url('property/single')}}" class="card">
                                                <img class="card-img-top" src="{{asset('images/home_tiga.png')}}" alt="Card image cap">
                                                <div class="card-body">
                                                <h5 class="card-title">THOGORIO FLATS | RENTALS</h5>
                                                <p class="card-text">Area :7800m2 <span class="float-right">Ksh 15000</span></p>
                                                <p class="card-text">
                                                    <small class="text-muted h5">
                                                        <i class="fas fa-bed"></i>(2)
                                                        <i class="fas fa-shower" style="margin-left: 15px;"></i>(1)
                                                        <i class="fas fa-car" style="margin-left: 15px;"></i>(0)
                                                        </small>
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="" class="card">
                                                <img class="card-img-top" src="{{asset('images/thogoto.png')}}" alt="Card image cap">
                                                <div class="card-body">
                                                <h5 class="card-title">THREE BEDROOM HOUSE | HOME</h5>
                                                <p class="card-text">Area :7800m2 <span class="float-right">Ksh 15000</span></p>
                                                <p class="card-text">
                                                    <small class="text-muted h5">
                                                        <i class="fas fa-bed" style="margin-left: 15px;"></i>(2)
                                                        <i class="fas fa-shower" style="margin-left: 15px;"></i>(1)
                                                        <i class="fas fa-car" style="margin-left: 15px;"></i>(0)
                                                    </small>
                                                </p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="" class="card">
                                                <img class="card-img-top" src="{{asset('images/thogoto.png')}}" alt="Card image cap">
                                                <div class="card-body">
                                                <h5 class="card-title">THREE BEDROOM HOUSE | HOME</h5>
                                                <p class="card-text">Area :7800m2 <span class="float-right">Ksh 15000</span></p>
                                                <p class="card-text">
                                                    <small class="text-muted h5">
                                                        <i class="fas fa-bed" style="margin-left: 15px;"></i>(2)
                                                        <i class="fas fa-shower" style="margin-left: 15px;"></i>(1)
                                                        <i class="fas fa-car" style="margin-left: 15px;"></i>(0)
                                                    </small>
                                                </p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-md-4">
                                            <a href="" class="card">
                                                <img class="card-img-top" src="{{asset('images/thogoto.png')}}" alt="Card image cap">
                                                <div class="card-body">
                                                <h5 class="card-title">THREE BEDROOM HOUSE | HOME</h5>
                                                <p class="card-text">Area :7800m2 <span class="float-right">Ksh 15000</span></p>
                                                <p class="card-text">
                                                    <small class="text-muted h5">
                                                        <i class="fas fa-bed" style="margin-left: 15px;"></i>(2)
                                                        <i class="fas fa-shower" style="margin-left: 15px;"></i>(1)
                                                        <i class="fas fa-car" style="margin-left: 15px;"></i>(0)
                                                    </small>
                                                </p>
                                                </div>
                                            </a>
                                        </div>
                                    </div> 
                                </div>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">.love..</div>
                  </div>
            </div>
            <div class="col-md-3">
                <h3><strong>Smart Search</strong></h3>
                <hr>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" name="key_word" id="" placeholder="Key Word" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select name="type" id="" class="form-control">
                                    <option value="non" class="selected">--Select Type--</option>
                                    <option value="rent" class="disabled">Rentals</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <select name="status" id="" class="form-control">
                                <option value="none" class="selected">--Status--</option>
                                <option value="rent">For Rent</option>
                                <option value="sale">For Sale</option>
                            </select>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
          
          <script>
            $(function () {
              $('#myTab li:last-child a').tab('show')
            })
          </script>
    </section>
@endsection
