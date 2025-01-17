@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header p-0">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <a class="navbar-brand" href="#">DashBoard</a>
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{route('ventas.show', ['venta' => $ultimaventa])}}">Última venta <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('compras.show', ['compra' => $ultimacompra])}}">Última compra</a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                        </div>
                    </nav>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card-deck mb-4">
                        <a class="card bg-dark text-white shadow" href="{{route('cities.index')}}">
                            <img src="{{asset('https://picsum.photos/id/57/600/300?blur=2')}}" class="card-img-top" alt="citiies">
                            <div class="card-img-overlay shadow">
                                <table class="h-100">
                                    <tbody>
                                        <tr>
                                            <td class="align-bottom">
                                                <h2 class="font-weight-bold mb-3">Ciudades</h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </a>

                        <a class="card bg-dark text-white shadow" href="{{route('clients.index')}}">
                            <img src="{{asset('https://picsum.photos/id/64/600/300?blur=2')}}" class="card-img-top" alt="clients">
                            <div class="card-img-overlay shadow">
                                <table class="h-100">
                                    <tbody>
                                        <tr>
                                            <td class="align-bottom">
                                                <h2 class="font-weight-bold mb-3">Clientes</h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </a>

                        <a class="card bg-dark text-white shadow" href="{{route('users.index')}}">
                            <img src="{{asset('https://picsum.photos/id/1/600/300?blur=2')}}" class="card-img-top" alt="users">
                            <div class="card-img-overlay shadow">
                                <table class="h-100">
                                    <tbody>
                                        <tr>
                                            <td class="align-bottom">
                                                <h2 class="font-weight-bold mb-3">Usuarios</h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </a>


                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4 mb-3">
                            <div class="card shadow bg-gradient-success">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase mb-0 text-white">Total
                                                Ciudades</h5>
                                            <span class="h2 font-weight-bold mb-0 text-white">350,897</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                                <i class="fa fa-arrow-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap text-light">Último Mes</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card bg-gradient-secondary">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase mb-0 text-white">Total Clientes
                                            </h5>
                                            <span class="h2 font-weight-bold mb-0 text-white">2,356</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                                <i class="ni ni-atom"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-white mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap text-light">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
