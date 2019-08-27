    
@extends('PlantillaViews.layout')

@section('linkAddColumna')
<link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('contenido')
@if(Entrust::can('crear-plataforma'))
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
        <span>Agregar Plataforma</span>
    </li>
</ul>
</div>
<div class="portlet box red">

<div class="portlet-title">
<div class="caption">
<i class="fa fa-gift"></i>Agregar Aplicacion </div>

</div>
<div class="portlet-body form">
<form role="form" action="{{ url('Usabilidad-Web/InsertarPlataforma') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <br>


    <div class="form-group last">
        <label class="control-label col-md-3">Logo de Aplicacion</label>
        <div class="col-md-9">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                    <div>
                        <span class="btn default btn-file">
                            <span class="fileinput-new"> Seleccionar Logo </span>
                            <span class="fileinput-exists"> Cambiar </span>
                            <input type="file" name="logo_plataforma" accept="image/*"> </span>
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Quitar </a>
                        </div>
                    </div>
                    <div class="clearfix margin-top-10">
                        <span class="label label-danger">Advertencia</span> Si no agrega un logo se le insertara uno por defecto. </div>

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Nombre</label>
                    <div class="col-md-7">
                        <input type="text" name="nombre_plataforma" placeholder="Nombre Plataforma" class="form-control" /> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Descripcion</label>
                        <div class="col-md-7">
                            <textarea id="maxlength_textarea" name="descripcion_plataforma" class="form-control" maxlength="200" rows="2" placeholder="Descripcion Plataforma"></textarea>
                            <span class="help-block"> Describa de forma breve su aplicacion y sus caracteristicas. </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha Creacion</label>
                        <div class="col-md-3">
                            <div class="input-group input-medium date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                <input type="text" name="fecha_creacion_plataforma" class="form-control" readonly>
                                <span class="input-group-btn">
                                    <button class="btn default" type="button">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                            <span class="help-block"> Seleccione Fecha </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">URL</label>
                        <div class="col-md-7">
                            <input type="text" name="url_plataforma" placeholder="URL Plataforma" class="form-control" /> </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-3 control-label">Estado</label>
                           <div class="col-md-3">
                            <select id="select2-single-input-sm" name ="estado_plataforma" class="form-control input-sm select2-multiple">
                                <optgroup label="Estado de Plataforma">
                                    <option value="1">Activo</option>
                                    <option value="0" >Inactivo</option>
                                </optgroup>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Integrantes :</label>
                        <div class="col-md-9">
                            <div class="mt-repeater">
                                <div data-repeater-list="group-b">
                                    <div data-repeater-item class="row">
                                        <div class="col-md-4">
                                            <label class="control-label">Nombres y Apellidos</label>
                                            <select id="select2-single-input-sm" class="form-control input-sm select2-multiple">
                                                <optgroup label="Estudiantes Registrados">
                                                    <option value="1">Edward Ramos Baez</option>
                                                    <option value="0" >Juan Perez gonzalez armaranto</option>
                                                </optgroup>

                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="control-label">Estado </label>
                                            <input type="text" placeholder="Activo" class="form-control" /> </div>
                                            <div class="col-md-1">
                                                <label class="control-label">&nbsp;</label>
                                                <a href="javascript:;" data-repeater-delete class="btn btn-danger">
                                                    <i class="fa fa-close"></i>Quitar Integrante
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                        <i class="fa fa-plus"></i> Añadir Integrante</a>
                                        <br>
                                        <br> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn btn-circle green">Agregar</button>
                                        <button type="button" class="btn btn-circle grey-salsa btn-outline">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @endif
                @endsection
                @section('descripcionPag')
                <div class="note note-info">
                    <p>Agregar Aplicaciones a la plataforma </p>
                </div>
                @endsection

                @section('scriptAddColumna')

                <script src="../assets/global/plugins/jquery-repeater/jquery.repeater.js" type="text/javascript"></script>
                <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
                <script src="../assets/pages/scripts/form-repeater.min.js" type="text/javascript"></script>
                <script src="../assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>

                @endsection