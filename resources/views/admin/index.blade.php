@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">

                    <div class="tile-container">
                        <div class="tile">
                            <div class="tile-inner">
                                <div class="tile-inner-head">Total Users</div>
                                <div class="tile-inner-body">{{$users}}</div>
                            </div>
                        </div>
                        <div class="tile">
                            <div class="tile-inner">
                                <div class="tile-inner-head">Receivers <span class="label label-success">(done)</span></div>
                                <div class="tile-inner-body">{{$r_done}}</div>
                            </div>
                        </div>
                        <div class="tile">
                            <div class="tile-inner">
                                <div class="tile-inner-head">Receivers <span class="label label-danger">(pend)</span></div>
                                <div class="tile-inner-body">{{$r_pending}}</div>
                            </div>
                        </div>
                        <div class="tile">
                            <div class="tile-inner">
                                <div class="tile-inner-head">Receivers <span class="label label-warning">(proc)</span></div>
                                <div class="tile-inner-body">{{$r_processing}}</div>
                            </div>
                        </div>

                        <span class="stretch"></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('head')
    <style type="text/css">
        .tile-container{
            text-align: justify;
            -ms-text-justify: distribute-all-lines;
            text-justify: distribute-all-lines;
            height: 100%;
        }
        .tile {
            background: #eee;
            border: 1px solid #d9d8cd;
            display: inline-block;
            *display: inline;
            width: 200px;
            height: 150px;
            vertical-align: top;
            zoom: 1;
            margin-top: 20px;
            padding: 20px 10px;
        }
        .stretch {
            width: 100%;
            display: inline-block;
            font-size: 0;
            line-height: 0
        }
        .tile-inner{
            text-align: center;
            font-weight:bold;
        }
        .tile-inner-head{
            font-size: 1.2em;
        }
        .tile-inner-body{
            font-size:3em;
            vertical-align: middle;
        }
    </style>
@endsection