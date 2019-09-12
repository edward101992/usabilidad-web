 
@extends('PlantillaViews.layout')
@section('contenido')  
@if(Entrust::can('crear-usuario'))  
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
        <span>Agregar Usuarios</span>
    </li>
</ul>
</div>

<div class="portlet light portlet-fit portlet-form ">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-save font-green"></i>
            <span class="caption-subject font-green bold uppercase">Agregar Usuarios</span>
        </div>
    </div>


    @if($errors->any())
        <script>toastr.success()</script>
    @endif

    <div class="portlet-body">
       <form action="{{ url('Usabilidad-Web/InsertarUsuario') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
           {{ csrf_field() }}
           <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button> Tienes algunos errores. Por favor, comprueba tu información. 
        </div>


        <div class="form-body">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="form-group">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new"> Buscar </span>
                                    <span class="fileinput-exists"> Cambiar </span>
                                    <input type="file" name="usuario_imagen" accept="image/*"> </span>
                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Cancelar </a>
                                    <span class="label label-info">Si no agrega una imagen se insertara una por defecto.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col col-lg-1">

                        </div>

                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">            
                                <div class="input-icon">
                                    <input type="text" name="nombre" class="form-control">
                                    <label for="form_control_1">Nombre :</label>
                                    <span class="help-block">Digite el Nombre</span>
                                    <i class="icon-user-following"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-1">

                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">            
                                <div class="input-icon">
                                    <input type="text" name="usuario_apellido" class="form-control">
                                    <label for="form_control_1">Apellido :</label>
                                    <span class="help-block">Digite el Apellido</span>
                                    <i class="icon-user-following"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col col-lg-1">

                        </div>

                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">            
                                <div class="input-icon">
                                    <input type="text" name="usuario_documento" class="form-control">
                                    <label for="form_control_1">Documento :</label>
                                    <span class="help-block">Digite el Numero de Documento</span>
                                    <i class="icon-credit-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-1">

                        </div>


                        <div class="col-md-3">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">            
                                <div class="input-icon">
                                    <input type="text" name="usuario_telefono" class="form-control">
                                    <label for="form_control_1">Telefono :</label>
                                    <span class="help-block">Digite el Numero de Telefono</span>
                                    <i class="icon-call-in"></i>
                                </div>
                            </div>
                        </div>

                    </div>



                    <div class="row">
                        <div class="col col-lg-1">

                        </div>


                        <div class="col-md-2">
                           <div class="form-group form-md-line-input form-md-floating-label has-success">
                             <label>Genero</label>
                             <select class="form-control" name="usuario_genero">
                                <option value="0">Masulino</option>
                                <option value="1">Femenino</option>
                                <option value="2">Otro</option>
                            </select>                   
                            <span class="help-block">Elija el Genero</span>
                        </div>
                    </div>
                </div>
                <br>
                <h3>Rol y Estado</h3>
                <br>
                <div class="row">

                   <div class="col col-lg-1">

                   </div>
                   <div class="col-md-2">
                       <div class="form-group form-md-line-input form-md-floating-label has-success">

                        <select class="form-control" name="role_id">
                            <option value="1">Administrador</option>
                            <option value="2">Evaluador</option>
                            <option value="3">Estudiante</option>
                        </select>                   
                        <span class="help-block">Elija el Rol del Usuario</span>
                    </div>
                </div>
                <div class="col col-lg-1">

                </div>
                <label class="col-md-1 control-label" for="form_control_1">Estado</label>
                <div class="col-md-3">
                    <div class="md-radio-inline">
                        <div class="md-radio">
                            <input type="radio" id="radio53" value="1" name="usuario_estado" class="md-radiobtn">
                            <label for="radio53">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Habil </label>
                            </div>
                            <div class="md-radio has-error">
                                <input type="radio" id="radio54" name="usuario_estado" value="0" class="md-radiobtn" checked>
                                <label for="radio54">
                                    <span></span>
                                    <span class="check"></span>
                                    <span class="box"></span> Inhabil </label>
                                </div>
                            </div>
                        </div>



                    </div>
                    <h3>Usuario y Contraseña</h3>
                    <br>

                    <div class="row">
                        <div class="col col-lg-1">

                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">            
                                <div class="input-icon">
                                    <input type="email" name="email" class="form-control">
                                    <label for="form_control_1">Correo :</label>
                                    <span class="help-block">Digite el Correo</span>
                                    <i class="icon-envelope"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-1">

                        </div>
                        <div class="col-md-4">
                            <div class="form-group form-md-line-input has-success form-md-floating-label">            
                                <div class="input-icon">
                                    <input type="text" name="password" class="form-control">
                                    <label for="form_control_1">Contraseña :</label>
                                    <span class="help-block">Digite la Contraseña</span>
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">


                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-offset-5 col-md-9">
                                        <button type="submit" class="btn green">Registrar Usuario</button>
                                        <button type="button" class="btn btn-danger">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
        @endsection