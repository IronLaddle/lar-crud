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
            <h1> Logistic Data </h1>
        </div>
        <div class="col-6">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addLogisticModal">
                Add Logistic Data
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addLogisticModal" tabindex="-1" role="dialog" aria-labelledby="addLogisticModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addLogisticModal">Add Logistic Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/logistic/create" method="post">
            <div class="modal-body">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="logName">Logistic Name</label>
                        <input type="text" class="form-control" id="logistic_name" name="logistic_name" required>
                    </div>
                    <div class="form-group">
                        <label for="logAddress">Address</label>
                        <textarea type="text" class="form-control" id="address" name="address" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="logOfcPhone">Offine Phone</label>
                        <input type="tel" pattern="[0-9]{5}" class="form-control" id="office_phone" name="office_phone" required>
                    </div>
                    <div class="form-group">
                        <label for="logEmail">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
            </div>
        </div>
        </div>
        <!-- End Modal -->

<table class="table table-hover">
    <tr>
        <th>No.</th>
        <th>Logistic Name</th>
        <th>Address</th>
        <th>Office Phone (03-)</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @if (is_array($data_logistic) || is_object($data_logistic))
    @foreach($data_logistic as $index => $logistic)
    <tr>
        <td>{{ $index +1 }}</td>
        <td>{{$logistic-> logistic_name}}</td>
        <td>{{$logistic-> address}}</td>
        <td>{{$logistic-> office_phone}}</td>
        <td>{{$logistic-> email}}</td>
        <td>
            <a href="/logistic/{{$logistic->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
            <a href="/logistic/{{$logistic->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    @endforeach
    @endif
</table>

@endsection