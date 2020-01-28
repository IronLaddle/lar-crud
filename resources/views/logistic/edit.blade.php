@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('success'))
    <div class="alert alert-success" role="alert">
        {{session('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col-6">
            <h1>Edit Logistic Data </h1>
        </div>
        <div class="col-md-8">
            <form action="/logistic/{{$logistic->id}}/update" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="logName">Logistic Name</label>
                    <input type="text" class="form-control" id="logistic_name" name="logistic_name" 
                    value="{{$logistic->logistic_name}}">
                </div>
                <div class="form-group">
                    <label for="logAddress">Address</label>
                    <textarea type="text" class="form-control" id="address" name="address">{{$logistic->address}}</textarea>
                </div>
                <div class="form-group">
                    <label for="logOfcPhone">Offine Phone</label>
                    <input type="tel" pattern="[0-9]{5}" class="form-control" id="office_phone" name="office_phone" 
                    value="{{$logistic->office_phone}}">
                </div>
                <div class="form-group">
                    <label for="logEmail">Email</label>
                    <input type="email" class="form-control" id="email" name="email" 
                    value="{{$logistic->email}}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection