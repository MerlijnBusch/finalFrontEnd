@extends('layouts.master')

@section('jumbotron')

    <style>
        input[type="text"], input[type="email"], input[type="password"] {
            background-color: lightgray;
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"
            integrity="sha256-Uv9BNBucvCPipKQ2NS9wYpJmi8DTOEfTA/nH2aoJALw=" crossorigin="anonymous"></script>



@endsection

@section('content')

    <div class="row" style="padding: 20px">
        <div class="col-md-6 col-12" style="padding: 5px">
            <div class="card">
                <div style="width:75%;">
                    <canvas id="canvas"></canvas>
                </div>
                <br>
                <br>
                <button id="randomizeData" class="btn btn-sm btn-primary">Randomize Data</button>
                <button id="addDataset" class="btn btn-sm btn-primary">Add Dataset</button>
                <button id="removeDataset" class="btn btn-sm btn-primary">Remove Dataset</button>
                <button id="addData" class="btn btn-sm btn-primary">Add Data</button>
                <button id="removeData" class="btn btn-sm btn-primary">Remove Data</button>
                <script src="{{asset('js/chart.js')}}"></script>
            </div>
        </div>

        <div class="col-md-6 col-12" style="padding: 5px">
            <div class="card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"> </i>
                        in komende text
                    </div>
                </div>


                <div class="row">
                    <div class="col-9">
                        <input class="form-control form-control-lg" type="text" placeholder="Enter bericht..">
                    </div>
                    <div class="col-3">
                        <button style="margin-left: -25px" class="btn btn-warning">Send</button>
                    </div>
                </div>
                <div class="d-block text-center card-footer">
                    <button class="btn-shadow btn-wide btn-pill btn btn-focus">
                        <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">5..</span>
                        View Alle Berichten
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection