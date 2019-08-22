@extends('PlantillaViews.layout')
@section('contenido')  

@if(Entrust::can('ver-usuario'))   
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                    Home
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                     Usuarios
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Lista Usuarios</span>
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
                        <span class="caption-subject bold uppercase"> Lista de Usuarios</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">

                           <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="{{ route('usuario.agrega') }}">
                                    <button id="sample_editable_1_new" class="btn sbold green"> Agregar Usuario                                       
                                        <i class="icon-user-follow"></i> 
                                    </button>
                                    </a>
                                </div>
                            </div>




                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a href="{{ route('usuario.agrega2') }}">
                                    <button id="sample_editable_1_new" class="btn sbold green"> Agregar Usuario 2                                      
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
                                <th style="visibility: hidden"> Numero </th>
                                <th> Nombre </th>
                                <th> Apellido </th>
                                <th> Email </th>
                                <th> Documento </th>
                                <th> Telefono </th>
                                <th> Estado </th>
                                <th> Rol </th>
                                <th> Detalles/Editar </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($users as $user)
                                <tr class="odd gradeX"> 
                                    <td style="visibility: hidden" width="1" height="1"> 
                                        {{ $user->id }} 
                                    </td>                                   
                                    <td> 
                                        {{ $user->name }} 
                                    </td>
                                    <td> 
                                        {{ $user->usuario_apellido }} 
                                    </td>                 
                                    <td>
                                        <a href="mailto:{{ $user->email }}"> {{ $user->email }} </a>
                                    </td>
                                     <td> 
                                        {{ $user->usuario_documento }} 
                                    </td> 
                                    <td class="center"> {{ $user->usuario_telefono }} 
                                    </td>
                                    @if($user->usuario_estado == 1)
                                        <td style="color:#01DF01;" class="center">
                                         <b>
                                            Activo 
                                        </b>
                                        </td>
                                    @endif
                                    @if($user->usuario_estado == 0)
                                        <td style="color:#FF0000;" class="center"> 
                                            <b>
                                                Inactivo
                                            </b> 
                                        </td>
                                    @endif

                                    @foreach($roleusers as $roluser)
                                        @if($roluser->user_id == $user->id)
                                             @foreach($roles as $rol)
                                                @if($rol->id == $roluser->role_id)
                                                    @if($rol->name=='administrador')
                                                        <td class="center"> Administrador</td>

                                                    @endif
                                                     @if($rol->name=='evaluador')
                                                        <td class="center"> Evaluador</td>
                                                    @endif
                                                     @if($rol->name=='estudiante')
                                                        <td class="center"> Estudiante</td>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn btn-danger btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a href="">
                                                        <i class="fa fa-search"></i> Detalles </a>
                                                </li>
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
                                </tr>
                            @endforeach                    
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
            <p>Lista de usuarios regstrados en la plataforma </p>
        </div>
@endsection
                   
