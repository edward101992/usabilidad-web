@extends('PlantillaViews.layout')
@section('contenido')

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            Home
            <i class="fa fa-angle-right"></i>
        </li>
    </ul>
</div>
<div class="row">

    <div class="col-md-12">

        <div class="portlet light ">
            <div class="portlet-title">
                @if(Entrust::hasRole('administrador'))
                <div class="caption font-dark">
                    <i class="glyphicon glyphicon-ok"></i>
                    <span class="caption-subject bold uppercase"> Bienvenido Administrador</span>
                </div>
                @endif 
                @if(Entrust::hasRole('evaluador'))
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Bienvenido Evaluador</span>
                </div>
                @endif  

                @if(Entrust::hasRole('estudiante'))
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Bienvenido Estudiante</span>
                </div>
                @endif

            </div>


        </div>


    </div>
</div>
@endsection

@section('descripcionPag')
<div class="note note-info">
    <p>Inicio Usabilidad-Web Administrador </p>
</div>
@endsection