@extends('layouts.main')

@section('title', 'Categorías')

@section('head')

    <!--DataTables [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\datatables\media\css\dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets\plugins\datatables\extensions\Responsive\css\responsive.dataTables.min.css') }}"
        rel="stylesheet">

    <!--Animate.css [ OPTIONAL ]-->
    <link href="{{ asset('assets\plugins\animate-css\animate.min.css') }}" rel="stylesheet">

@endsection


@section('content')
    {{-- {{ dump(request()->routeIs('categoria')) }}  --}}

    <div id="content-container">
        <div id="page-head">

            <!--Page Title-->
            <div id="page-title">
                <h1 class="page-header text-overflow text-center brand-text">Administración de Categorías</h1>
            </div>
        </div>


        <div id="page-content">

            <!-- Categorías -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">

                        <div class="row">
                            <div class="eq-height">
                                <div class="col-lg-4 eq-box-lg">
                                    <div class="panel">
                                        <div class="panel-body demo-nifty-btn">
                                            <button id="demo-bootbox-custom-h-form" class="btn btn-primary">Agregar Categoría</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </h3>
                </div>


                <div class="panel-body">
                    <table id="demo-dt-selection" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Categoría</th>
                                <th>Descripción</th>
                                <th class="min-tablet">Estado</th>
                                <th class="min-tablet">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
								<td><span class="badge badge-mint">Activo</span></td>
                                <td>61</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
								<td><span class="badge badge-mint">Activo</span></td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
								<td><span class="badge badge-mint">Activo</span></td>
                                <td>66</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
								<td><span class="badge badge-mint">Activo</span></td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td><span class="badge badge-mint">Activo</span></td>
                                <td>
									<button class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></button>
									<button class="btn btn-mint btn-icon"><i class="demo-psi-pen-5 icon-lg"></i></button>
									<button class="btn btn-info btn-icon"><i class="fa fa-low-vision fa-1x"></i></button>
									<button class="btn btn-warning btn-icon"><i class="fa fa-toggle-off fa-1x"></i></button>
									<button class="btn btn-success btn-icon"><i class="fa fa-toggle-off fa-1x"></i></button>
								</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td><span class="badge badge-mint">Activo</span></td>
                                <td>61</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
								<td><span class="badge badge-mint">Activo</span></td>
                                <td>59</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
								<td><span class="badge badge-mint">Activo</span></td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td><span class="badge badge-mint">Activo</span></td>>
                                <td>39</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
								<td><span class="badge badge-mint">Activo</span></td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td><span class="badge badge-danger">Inactivo</span></td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
								<td><span class="badge badge-danger">Inactivo</span></td>
                                <td>22</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
								<td><span class="badge badge-danger">Inactivo</span></td>
                                <td>36</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td><span class="badge badge-danger">Inactivo</span></td>
                                <td>43</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
								<td><span class="badge badge-danger">Inactivo</span></td>
                                <td>19</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
								<td><span class="badge badge-danger">Inactivo</span></td>
                                <td>66</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
								<td><span class="badge badge-danger">Inactivo</span></td>
                                <td>64</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

@endsection


@section('script')

    <!--DataTables [ OPTIONAL ]-->
    <script src="{{ asset('assets\plugins\datatables\media\js\jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets\plugins\datatables\media\js\dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets\plugins\datatables\extensions\Responsive\js\dataTables.responsive.min.js') }}"></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src="{{ asset('assets\js\demo\tables-datatables.js') }}"></script>

    <!--Bootbox Modals [ OPTIONAL ]-->
    <script src="{{ asset('assets\plugins\bootbox\bootbox.min.js') }}"></script>


    <!--Modals [ SAMPLE ]-->
    <script src="{{ asset('assets\js\demo\ui-modals.js') }}"></script>

@endsection
