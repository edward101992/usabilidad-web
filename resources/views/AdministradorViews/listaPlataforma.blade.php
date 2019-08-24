@extends('PlantillaViews.layout')
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
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                   
                             <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="">
                                    <button id="sample_editable_1_new" class="btn sbold green"> Agregar Plataforma                                       
                                        <i class="icon-user-follow"></i> 
                                    </button>
                                    </a>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Opciones
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Imprimir </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Guardar PDF </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th></th>
                                <th> Nombre Plataforma</th>                             
                                <th> Descripcion </th>
                                <th> Integrantes</th>
                                <th> Opciones</th>
                        
                            </tr>
                        </thead>
                       <tbody>
                                    <td></td>
                                    <td> 
                                        Usabilidad-Web
                                    </td>
           
                                    <td>
                                        Plataforma desarrollada para medir la usabilidad en aplicaciones
                                        web en la Universidad Cundianamarca - Facatativa.
                                    </td>
                                    <td>
                                        Edward Ramos Baez
                                    </td>


                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn btn-danger btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Opciones
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
                   
