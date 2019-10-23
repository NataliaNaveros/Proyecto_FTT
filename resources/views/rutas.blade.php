@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Conoce Nuestras Rutas</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="card text-white bg-danger mb-3" style="max-width:20rem; margin-left: 10px">
                                <div class="card-header">
                                    <a class="text-left" href="{{route('armenia')}}" style="text-decoration: none;color: #FFFFFF">Conocer M&aacute;s</a>
                                </div>
                                <div class="card-body">
                                    <img src="{{asset('img/armenia.png')}}" style="width: 275px; height: 150px">
                                </div>
                            </div>
                            <div class="card text-white bg-danger mb-3" style="max-width: 20rem; margin-left:55px">
                                <div class="card-header">
                                    <a class="text-left" href="{{route('cali')}}" style="text-decoration: none;color: #FFFFFF">Conocer M&aacute;s</a>
                                </div>
                                <div class="card-body">
                                    <img src="{{asset('img/cali.png')}}" style="width: 275px; height: 150px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="card text-white bg-danger mb-3" style="max-width:20rem; margin-left: 10px">
                                <div class="card-header">
                                    <a class="text-left" href="{{route('pereira')}}" style="text-decoration: none;color: #FFFFFF">Conocer M&aacute;s</a>
                                </div>
                                <div class="card-body">
                                    <img src="{{asset('img/pereira.png')}}" style="width: 275px; height: 150px">
                                </div>
                            </div>
                            <div class="card text-white bg-danger mb-3" style="max-width: 20rem; margin-left:55px">
                                <div class="card-header">
                                    <a class="text-left" href="{{route('bolivar')}}" style="text-decoration: none; color: #FFFFFF">Conocer M&aacute;s</a>
                                </div>
                                <div class="card-body">
                                    <img src="{{asset('img/bolivar.png')}}" style="width: 275px; height: 150px">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card text-white bg-danger mb-3" style="max-width: 20rem; margin-left: 30px">
                            <div class="card-header">
                                <a class="text-left" href="{{route('buga')}}" style="text-decoration: none;color: #FFFFFF">Conocer M&aacute;s</a>
                            </div>
                            <div class="card-body">
                                <img src="{{asset('img/buga.png')}}" style="width: 275px; height: 150px">
                            </div>
                        </div>
                        <div class="card text-white bg-danger mb-3" style="max-width: 20rem; margin-left:55px">
                            <div class="card-header">
                                <a class="text-left" href="{{route('cartago')}}" style="text-decoration: none; color: #FFFFFF">Conocer M&aacute;s</a>
                            </div>
                            <div class="card-body">
                                <img src="{{asset('img/cartago.png')}}" style="width: 275px; height: 150px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
