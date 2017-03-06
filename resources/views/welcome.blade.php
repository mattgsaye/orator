@extends('master')

@section('title')
    Orator - Get the Word Out!
@endsection
@section('content')

    <form class="col-lg-6"
          style="
            background-color: lightsteelblue;
            border: 1px solid steelblue;
            border-radius: 20px;
            width: 400px;
            padding: 20px;
            -moz-box-shadow:5px 5px 5px rgba(98, 128, 168, 0.7);
            -webkit-box-shadow:5px 5px 5px rgba(98, 128, 168, 0.7);
            box-shadow:5px 5px 5px rgba(98, 128, 168, 0.7)">
        <h1 style="text-align: center">New Oration</h1>
        <hr>
        <div class="form-group row">
            <label for="OrationTitle" class="form-control-label col-sm-4"> Title </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="OrationTitle" placeholder="Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="OrationDescription" class="form-control-label col-sm-4"> Description </label>
            <div class="col-sm-8">
                <textarea style="resize: none" class="form-control" id="OrationDescription" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="OrationTitle" class="form-control-label col-sm-4"> Date </label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id="OrationTitle" placeholder="Date">
            </div>
        </div>
        <div class="form-group row">
            <label for="OrationTitle" class="form-control-label col-sm-4"> Time </label>
            <div class="col-sm-8">
                <input type="time" class="form-control" id="OrationTitle" placeholder="Time">
            </div>
        </div>
    </form>
    <div class="col-sm-2">    </div>

    <form class="col-lg-9"
          style="
            background-color: lightsteelblue;
            border: 1px solid steelblue;
            border-radius: 20px;
            width: 650px;
            margin-left: 10px;
            padding: 20px;
            -moz-box-shadow:5px 5px 5px rgba(98, 128, 168, 0.7);
            -webkit-box-shadow:5px 5px 5px rgba(98, 128, 168, 0.7);
            box-shadow:5px 5px 5px rgba(98, 128, 168, 0.7)">
        <h1 style="text-align: center"> Orations </h1>
        <hr>
        <div class="form-group row col-sm-3" style="text-align: center; border: 1px solid steelblue; margin-left: 7px; margin-right: 10px; width: 23%;">
            <h2>  Name </h2>
            <p> Lorem ipsum dolor sit amet</p>
            <button type="button" class="btn btn-primary" style="margin-bottom: 5px">Primary</button>
        </div>
        <div class="form-group row col-sm-3" style="text-align: center; border: 1px solid steelblue; margin-left: 0px; margin-right: 10px; width: 23%;">
            <h2>  Name </h2>
            <p> Lorem ipsum dolor sit amet</p>
            <button type="button" class="btn btn-primary" style="margin-bottom: 5px">Primary</button>
        </div>
        <div class="form-group row col-sm-3" style="text-align: center; border: 1px solid steelblue; margin-left: 0px; margin-right: 10px;  width: 23%;">
            <h2>  Name </h2>
            <p> Lorem ipsum dolor sit amet</p>
            <button type="button" class="btn btn-primary" style="margin-bottom: 5px">Primary</button>
        </div>
        <div class="form-group row col-sm-3" style="text-align: center; border: 1px solid steelblue; margin-left: 0px; margin-right: 10px;  width: 23%;">
            <h2>  Name </h2>
            <p> Lorem ipsum dolor sit amet</p>
            <button type="button" class="btn btn-primary" style="margin-bottom: 5px">Primary</button>
        </div>
    </form>
@endsection
