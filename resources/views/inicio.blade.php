@extends('layouts.main')

@section('title', 'Inicio')

@section('head')
    <link href="{{ asset('assets\plugins\morris-js\morris.min.css') }}" rel="stylesheet">
@endsection


@section('content')
    {{-- {{ dump(request()->routeIs('inicio')) }} --}}
    <div id="content-container">
        <div id="page-head">

            <div class="text-center">
                <h3>Bienvenido a tú Sistema Punto de Venta</h3>
                <p>¡ Hola Alfredo Heraz Pérez !
                <p>
            </div>
        </div>


        <!--Page content-->
        <div id="page-content">

            <div class="row">
                <a href="producto">
                    <div class="col-md-3">
                        <div class="panel panel-primary panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="fa fa-star fa-2x fa-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold">347</p>
                                <p class="mar-no">Productos</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="venta">
                    <div class="col-md-3">
                        <div class="panel panel-mint panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold">241</p>
                                <p class="mar-no">Ventas</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="compra">
                    <div class="col-md-3">
                        <div class="panel panel-primary panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="fa fa-shopping-bag fa-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold">241</p>
                                <p class="mar-no">Compras</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="usuario">
                    <div class="col-md-3">
                        <div class="panel panel-mint panel-colorful media middle pad-all">
                            <div class="media-left">
                                <div class="pad-hor">
                                    <i class="fa fa-user-circle-o fa-3x"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <p class="text-2x mar-no text-semibold">241</p>
                                <p class="mar-no">Usuarios</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Compras Chart -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Compras</h3>
                            <h3 class="panel-title">$3920 (MES ACTUAL)</h3>
                        </div>
                        <div class="pad-all">
                            <div id="demo-morris-area-legend" class="text-center"></div>
                            <div id="demo-morris-area" style="height:250px"></div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">

                    <!-- Ventas Chart -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ventas</h3>
                            <h3 class="panel-title">$7200 (MES ACTUAL)</h3>
                        </div>
                        <div class="pad-all">
                            <div id="demo-morris-line-legend" class="text-center"></div>
                            <div id="demo-morris-line" style="height:268px"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- Pie Chart -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Productos más vendidos</h3>
                        </div>
                        <div class="panel-body">
                            <div id="demo-flot-pie" style="height: 250px"></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">

                    <!-- Donut Chart -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Productos agregados recientemente</h3>
                        </div>
                        <div class="panel-body">
                            <div id="demo-flot-donut" style="height: 250px"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End page content-->

    </div>
@endsection


@section('script')
    <!--Morris.js [ OPTIONAL ]-->
    <script src="{{ asset('assets\plugins\morris-js\morris.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\morris-js\raphael-js\raphael.min.js') }}"></script>

    <!--Morris.js Sample [ SAMPLE ]-->
    <script src="{{ asset('assets\js\demo\morris-js.js') }}"></script>

    <!--Flot Chart [ OPTIONAL ]-->
    <script src="{{ asset('assets\plugins\flot-charts\jquery.flot.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\flot-charts\jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\flot-charts\jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('assets\plugins\flot-charts\jquery.flot.tooltip.min.js') }}"></script>

    <!--Flot Sample [ SAMPLE ]-->
    <script src="{{ asset('assets\js\demo\flot-charts.js') }}"></script>

@endsection
