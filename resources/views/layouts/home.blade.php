@extends('layouts.master')

@section('jumbotron')

    <div class="container">
        <div class="row">
            <div class="span4"></div>
            <div class="span4">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" style="height: 60vh;">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('image/banner2.jpeg')}}" alt="WIjnglazen">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('image/banner2.jpeg')}}" alt="Wijnglazen">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('image/banner2.jpeg')}}" alt="Wijnglazen">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="text-primary" style="margin-left: auto; margin-right: auto; margin-top: 3vh; font-size: 2.5em;">
                <h1><b>TRENDING CATEGORIEËN</b></h1>
            </div>
            <div class="span4"></div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="center-block">
                    <img src="{{asset('image/banner3.jpeg')}}" class="rounded mx-auto d-block img-thumbnail" alt="Wijnfles">
                    <p class="text-underline-blue"><b>Shop Rode Wijn</b></p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="center-block">
                    <img src="{{asset('image/banner3.jpeg')}}" class="rounded mx-auto d-block img-thumbnail" alt="Wijnfles">
                    <p class="text-underline-blue"><b>Shop Witte Wijn</b></p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="center-block">
                    <img src="{{asset('image/banner3.jpeg')}}" class="rounded mx-auto d-block img-thumbnail" alt="Wijnfles">
                    <p class="text-underline-blue"><b>Shop Rosé Wijn</b></p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="center-block">
                    <img src="{{asset('image/banner3.jpeg')}}" class="rounded mx-auto d-block img-thumbnail" alt="Wijnfles">
                    <p class="text-underline-blue"><b>Shop Port Wijn</b></p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 200px">
            <div class="col-lg-6 col-sm-12">
                <img src="{{asset('image/banner4.jpeg')}}" class="img-fluid" alt="Wijn glas">
                <div style="text-align: center;">
                    <h3>2 Glazen voor $20</h3>
                    <button type="button" class="btn btn-lg btn-outline-dark">Koop nu</button>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <img src="{{asset('image/banner4.jpeg')}}" class="img-fluid" alt="Wijn glas">
                <div style="text-align: center;">
                    <h3>2 Glazen voor $20</h3>
                    <button type="button" class="btn btn-lg btn-outline-dark">Koop nu</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
            <div class="text-primary" style="margin-left: auto; margin-right: auto; margin-top: 3vh; font-size: 2.5em; text-align: center">
                <h1><b>BLIJF UPTODATE</b></h1>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top"><img class="img-thumbnail" style="height: 300px;" src="{{asset('image/card1.jpg')}}" alt="wijn winkel"></div>
                    <div class="card-body text-center" style="height: 150px;">
                        <h5 class="card-title">Store locator</h5>
                        <p class="card-text">Zoek je locatie en we laten de dichtbij zijnste winkel zien</p>
                        <a href="#" class="h6"><u>Zoek Winkel</u></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top"><img class="img-thumbnail" style="height: 300px;" src="{{asset('image/card2.jpg')}}" alt="wijn fles"></div>
                    <div class="card-body text-center" style="height: 150px;">
                        <h5 class="card-title">Instagram</h5>
                        <p class="card-text">Wij hebben je dagelijk uptodate</p>
                        <a href="#" class="h6"><u>Volg ons</u></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top"><img class="img-thumbnail" style="height: 300px;" src="{{asset('image/card3.png')}}" alt="stick man"></div>
                    <div class="card-body text-center" style="height: 150px;">
                        <h5 class="card-title">Customer club</h5>
                        <p class="card-text">Meld je aan voor kortingen en extra aanbiedingen en wijn tips</p>
                        <a href="#" class="h6"><u>Meld aan</u></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-left">
            <p class="display-4 ">De beste wijn verkoper sinds 1890</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>



@endsection

@section('content')





@endsection