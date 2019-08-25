@extends('PlantillaViews.layout')
@section('linkDatatable')
<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection
@section('contenido')  

@if(Entrust::can('ver-plataforma'))   
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                    Home
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                     Plataforma
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Lista Plataformas</span>
            </li>
        </ul>
    </div>
<div class="row">

        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Lista de Plataformas</span>
                    </div>
                </div>
            <div class="portlet box red">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>PLataformas Registradas en Usabilidad-Web </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_4">
                                        <thead>
                                            <tr>
                                                <th class="all">Plataforma</th>
                                                <th class="min-phone-l">Fecha Creacion</th>
                                                <th class="min-tablet">Estado</th>
                                                <th class="desktop">Opciones</th>

                                                <th class="none">Integrante</th>
                                                <th class="none">Descripcion: </th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Biblioteca UDEC</td>
                                                <td>20/12/2009</td>
                                                 <td style="color:#01DF01;" class="center">
                                         <b>
                                            Activo 
                                        </b>
                                        </td>
                                                          <td>
                                        <div class="btn-group">
                                            <button class="btn btn btn-danger btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    
                                                     <a href="">
                                                        <i class="fa fa-pencil-square"></i> Editar </a>
                                                </li>

                                                 <li>
                                                    <a href="">
                                                        <i class="fa fa-check"></i> Habilitar </a>
                                                </li>

                                                 <li>
                                                    <a href="">
                                                        <i class="fa fa-ban"></i> Deshabilitar </a>
                                                </li>

                        
                                            </ul>
                                        </div>
                                    </td>
                                                <td>Juan Perez</td>
                                                <td>
                                                Aplicacion creada para ayudar a la organizacion de libros
                                                en la Universidad Cundinamarca - Facatativa
                                                </td>
                                              
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>

  
            <!-- END EXAMPLE TABLE PORTLET-->
           
        </div>
    </div>
@endif

@endsection
@section('descripcionPag')
         <div class="note note-info">
            <p>Lista de aplicaciones registradas en la plataforma </p>
        </div>
@endsection
                   
@section('scriptTabla')
<script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
@endsection    