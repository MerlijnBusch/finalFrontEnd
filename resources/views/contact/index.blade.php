@extends('layouts.master')


@section('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
          integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
            integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
            crossorigin=""></script>
@endsection

@section('jumbotron')


    <div style="margin-bottom: 15px; margin-top: 15px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="text-center pb-3 display-3">
                        CONTACT US</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8">
                <form class="mbr-form" action="https://mobirise.com/" method="post">
                    <div class="row row-sm-offset">
                        <div class="col-md-4 multi-horizontal" data-for="name">
                            <div class="form-group">
                                <label class="form-control-label display-7" for="name-form1-4">Name</label>
                                <input type="text" class="form-control" name="name" data-form-field="Name" id="name-form1-4" required>
                            </div>
                        </div>
                        <div class="col-md-4 multi-horizontal" data-for="email">
                            <div class="form-group">
                                <label class="form-control-label display-7" for="email-form1-4">Email</label>
                                <input type="email" class="form-control" name="email" data-form-field="Email" id="email-form1-4" required>
                            </div>
                        </div>
                        <div class="col-md-4 multi-horizontal" data-for="phone">
                            <div class="form-group">
                                <label class="form-control-label display-7" for="phone-form1-4">Phone</label>
                                <input type="tel" class="form-control" name="phone" id="phone-form1-4">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label display-7" for="message-form1-4">Message</label>
                        <textarea type="text" class="form-control" name="message" rows="7" ></textarea>
                    </div>

                    <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black-outline display-4">SEND FORM</button></span>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div id="mapid" style="height: 70vh;width: 100%"></div>

@endsection

@section('js')

    <script>
        var mymap = L.map('mapid').setView([51.505, -0.09], 13);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1Ijoia2lkYXJlc29jb29sdGhlc2VkYXlzIiwiYSI6ImNqdG84MTRvMTJzN2s0YXJyZ2pmZ3g1cXEifQ.ENP5bc7JYntpdzhi0ahqCw'
        }).addTo(mymap);
    </script>
@endsection