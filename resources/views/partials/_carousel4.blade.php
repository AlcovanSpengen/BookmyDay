<div class="container" id="carousel">
    <div class="row">
            <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
                <div class="carousel-inner col-sm w-100 mx-auto" role="listbox" id="img-saveurs">
                    <div class="carousel-item active">
                        <div class="row" style="width: 1194px">
                            @if (count($images5) > 0)
                                @foreach($images5 as $image5)
                                    <div class="col-md-2">
                                    <a href="{{ url('/kinderboeken/verhalenensprookjes') }}"><img class="img-fluid mx-auto d-block" src="images/{{ $image5->image }}"></a>
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/7zussen.jpg">
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/aardbevingen.jpg" >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/geluk.jpg" >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/heterdaad.jpg" >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/reuzenperzik.jpg" >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>                                
                            @endif
                            </div>
                        </div>

                    

                        <div class="carousel-item">
                            <div class="row" style="width: 1194px !important;">
                                
                            @if (count($images6) > 0)
                                @foreach($images6 as $image6)
                                    <div class="col-md-2">
                                    <a href="{{ url('/kinderboeken/verhalenensprookjes') }}"><img class="img-fluid mx-auto d-block" src="images/{{ $image6->image }}"></a>
                                        <div class="card-body">
                                            
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/obama.jpg" >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/gorgels.jpg" >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/taal.jpg"  >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/building.jpg" >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/nieuwe.jpg" >
                                    <div class="card-body">
                                            
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
