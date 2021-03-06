@extends('layouts.main')

@section('title', '| Home')

@section('content')
<br>
<h4>Nieuwste Boeken</h4><br>
  @include ('partials._carousel')
  <br>
  <br>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 test" src="images/banner_1_carousel.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 test" src="images/banner_2_carousel.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 test" src="images/banner_5.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<br>
<!-- Five equal columns -->
<h4>Boeken Top 5</h4><br>
<div class="row">
@if (count($images3) > 0)
    @foreach($images3 as $image3)

    <div class="col">
      <div class="card" style="width: 12rem">
      <a href="{{ url('/book') }}"><img class="img-fluid mx-auto d-block" src="images/{{ $image3->image }}"></a>
        <div class="card-body">
          <h5 class="card-title">{{ $image3->title }}</h5>
          <p class="card-text">{{ $image3->abstract }}</p>
        </div>
      </div>
    </div>
    @endforeach
@else

    <div class="col">
      <div class="card" style="width: 12rem">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel <span class="badge badge-secondary">New</span></h6>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Boek Titel</h5>
        <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
        <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Boek Titel <span class="badge badge-secondary">New</span></h6>
           <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>  
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/jochem_meyer.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    @endif
  </div>
<br>
<!-- Six equal columns -->

<h4>Meest populair</h4>
<div class="row">
@if (count($images4) > 0)
    @foreach($images4 as $image4)
    <div class="col">
      <div class="card" style="width: 12rem">
      <a href="{{ url('/book') }}"><img class="img-fluid mx-auto d-block" src="images/{{ $image4->image }}"></a>
        <div class="card-body">
          <h5 class="card-title">{{ $image4->title }}</h5>
          <p class="card-text">{{ $image4->abstract }}</p>
        </div>
      </div>
    </div>
    @endforeach
@else
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Boek Titel</h5>
        <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
        <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>  
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    @endif
  </div>
<br>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 test" src="images/banner_1_carousel.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 test" src="images/banner_2_carousel.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 test" src="images/banner_5.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<br>
<!-- Six equal columns -->
<h3>Bestsellers</h3>
<div class="row">
    <div class="col">
      <div class="card" style="width: 12rem">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/paulien_cornelissen.jpg" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">Boek Titel</h5>
        <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
        <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/lucinda_riley.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/michelle_obama.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>  
    <div class="col">
      <div class="card" style="width: 12rem;">
        <img class="card-img-top" src="images/paulien_cornelissen.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Boek Titel</h5>
          <p class="card-text">Op zoek naar de 10 beste boeken van dit moment? onze boeken top 10 staat er vol mee! verzending gratis.</p>
          <a href="#" class="btn btn-primary">Winkelmand</a>
        </div>
      </div>
    </div>
    
  </div>
<br>

<div class="container">
    <div class="row">
        <div class="col">
          <div class="bg-primary text-white">
          <div class="thumbnail center well well-small text-center">
              <span class="border border-primary"></span>
                  <h2>Nieuwsbrief</h2>
                  
                  <p>Schrijf je nu in voor onze nieuwsbrief en blijf op de hoogte van alle aanbiedingen</p>
                  
                  <form action="" method="post">
                      <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                          <input type="text" id="" name="" placeholder="emailadres">
                      </div>
                      <br />
                      <input type="submit" value="Schrijf je nu in" class="btn btn-large" />
                  </form>
                  <br>
              </div>    
          </div>
    </div>
  </div>
</div>

@endsection

