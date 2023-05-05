@extends('layouts.app')
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
    }
    body {
        min-height: 100vh;
        background-image: linear-gradient(
                rgba(0, 0, 0, 0.6),
                rgba(0, 0, 0, 0.6)
            ),
            url("gambar/laptop.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@section('content')
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Aplikasi Katalog Laptop') }}
                        <img src={{ asset("gambar/logoenter.png") }} alt="logo" style="width:10%; float: right;">
                    </div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{ __('You are logged in!') }}
                      <button type="button" class="btn btn-primary" style="float:right"><a href="{{route('Laptop')}}" style="color:white; text-decoration:none">Katalog</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
