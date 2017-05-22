@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Packages</div>

                <div class="panel-body">
                    <table class="table table-bordered table-stripped">
                        <thead>
                        <tr>
                            <th>Package Name</th>
                            <th>Package Amount</th>
                            <th>Package Receiving Amount</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$row->name}}</td>
                                <td>{{$row->paying_amount}}</td>
                                <td>{{$row->receiving_amount}}</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs">Payers pend</a>
                                    <a href="#" class="btn btn-success btn-xs">Payers proc</a>
                                    <br>
                                    <a href="#" class="btn btn-primary btn-xs">Receivers pend</a>
                                    <a href="#" class="btn btn-success btn-xs">Receivers done</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection