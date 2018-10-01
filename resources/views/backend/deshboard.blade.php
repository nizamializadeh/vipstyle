@extends('layouts.backend')

@section('content')
    <div class="container-fluid">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <div class="icon bg-red">
                    <i class="material-icons">face</i>
                </div>
                <div class="content">
                    <div class="text">Authors</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <div class="icon bg-red">
                    <i class="material-icons">fiber_new</i>
                </div>
                <div class="content">
                    <div class="text">News</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <div class="icon bg-red">
                    <i class="material-icons">shopping_cart</i>
                </div>
                <div class="content">
                    <div class="text">NEW ORDERS</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <div class="icon bg-red">
                    <i class="material-icons">shopping_cart</i>
                </div>
                <div class="content">
                    <div class="text">NEW ORDERS</div>
                    <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                </div>
            </div>
        </div>
    </div>
@endsection