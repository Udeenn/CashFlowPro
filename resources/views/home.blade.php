@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h1>Welcome to Cash Flow Pro, {{ Auth::user()->name }}!</h1>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 mt-2">
                                <p>Cash Flow Pro membantu Anda mengelola dan melacak arus masuk dan keluar keuangan Anda secara efisien. Dengan dashboard intuitif dan analitik real-time, peroleh kendali atas kesehatan finansial Anda dan optimalkan pengelolaan arus kas Anda.</p>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
