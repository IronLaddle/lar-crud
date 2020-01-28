@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Normal user.<br>
                    Go to <a href="/logistic">Logistic</a> OR find below
                    <form class="search-here">
                        <input type="text" name="tracking_no" class="form-control" placeholder="Looking for Logistic" >
                        <a href="/logistic">
                            <button type="button"><i class="far fa-search"></i></button>
                        </a>
                    </form>
                    <h6>Try: <a href="#" data-try-sample="logistic">Simple CRUD Logistic Data</a></h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection