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
                    <p class="text-underline-blue"><b>Shop red Wine</b></p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="center-block">
                    <img src="{{asset('image/banner3.jpeg')}}" class="rounded mx-auto d-block img-thumbnail" alt="Wijnfles">
                    <p class="text-underline-blue"><b>Shop White Wine</b></p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="center-block">
                    <img src="{{asset('image/banner3.jpeg')}}" class="rounded mx-auto d-block img-thumbnail" alt="Wijnfles">
                    <p class="text-underline-blue"><b>Shop Rosé Wine</b></p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="center-block">
                    <img src="{{asset('image/banner3.jpeg')}}" class="rounded mx-auto d-block img-thumbnail" alt="Wijnfles">
                    <p class="text-underline-blue"><b>Shop Port Wine</b></p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 200px">
            <div class="col-lg-6 col-sm-12">
                <img src="{{asset('image/banner4.jpeg')}}" class="img-fluid" alt="Wijn glas">
                <div style="text-align: center;">
                    <h3>2 Glass for $20</h3>
                    <button type="button" class="btn btn-lg btn-outline-dark">Koop nu</button>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <img src="{{asset('image/banner4.jpeg')}}" class="img-fluid" alt="Wijn glas">
                <div style="text-align: center;">
                    <h3>2 Glass for $20</h3>
                    <button type="button" class="btn btn-lg btn-outline-dark">Koop nu</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
            <div class="text-primary" style="margin-left: auto; margin-right: auto; margin-top: 3vh; font-size: 2.5em; text-align: center">
                <h1><b>STAY UPTODATE</b></h1>
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
                        <p class="card-text">Search location for closest shop</p>
                        <a href="#" class="h6"><u>Zoek Winkel</u></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top"><img class="img-thumbnail" style="height: 300px;" src="{{asset('image/card2.jpg')}}" alt="wijn fles"></div>
                    <div class="card-body text-center" style="height: 150px;">
                        <h5 class="card-title">Instagram</h5>
                        <p class="card-text">daily uptodate</p>
                        <a href="#" class="h6"><u>Volg ons</u></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top"><img class="img-thumbnail" style="height: 300px;" src="{{asset('image/card3.png')}}" alt="stick man"></div>
                    <div class="card-body text-center" style="height: 150px;">
                        <h5 class="card-title">Customer club</h5>
                        <p class="card-text">Join group for tips and wine advice</p>
                        <a href="#" class="h6"><u>Meld aan</u></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-left">
            <p class="display-4 ">best wine seller since 1890</p>
            <p>Wine is an alcoholic drink made from fermented grapes.[1] Yeast consumes the sugar in the grapes and converts it to ethanol, carbon dioxide, and heat. Different varieties of grapes and strains of yeasts produce different styles of wine. These variations result from the complex interactions between the biochemical development of the grape, the reactions involved in fermentation, the terroir, and the production process. Many countries enact legal appellations intended to define styles and qualities of wine. These typically restrict the geographical origin and permitted varieties of grapes, as well as other aspects of wine production. Wines not made from grapes include rice wine and fruit wines such as plum, cherry, pomegranate, currant and elderberry.

                Wine has been produced for thousands of years. The earliest known traces of wine are from Georgia (c. 6000 BC),[2][3][4][5] Iran (c. 5000 BC),[6][7] and Sicily (c. 4000 BC)[8] although there is evidence of a similar alcoholic drink being consumed earlier in China (c. 7000 BC).[9][10][11] The earliest known winery is the 6,100-year-old Areni-1 winery in Armenia.[12][13] Wine reached the Balkans by 4500 BC and was consumed and celebrated in ancient Greece, Thrace and Rome. Throughout history, wine has been consumed for its intoxicating effects.[14][15][16]

                Wine has long played an important role in religion. Red wine was associated with blood by the ancient Egyptians[17] and was used by both the Greek cult of Dionysus and the Romans in their Bacchanalia; Judaism also incorporates it in the Kiddush and Christianity in the Eucharist.</p>
        </div>



@endsection

@section('content')





@endsection