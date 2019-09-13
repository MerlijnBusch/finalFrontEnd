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

    <div style="width:75%;">
        <canvas id="canvas"></canvas>
    </div>
    <br>
    <br>
    <button id="randomizeData" class="btn btn-primary">Randomize Data</button>
    <button id="addDataset" class="btn btn-primary">Add Dataset</button>
    <button id="removeDataset" class="btn btn-primary">Remove Dataset</button>
    <button id="addData" class="btn btn-primary">Add Data</button>
    <button id="removeData" class="btn btn-primary">Remove Data</button>
    <script src="{{asset('js/chart.js')}}"></script>



@endsection