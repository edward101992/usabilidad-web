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
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet light portlet-fit portlet-form ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-save font-green"></i>
                        <span class="caption-subject font-green bold uppercase">Agregar Usuarios</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <!-- BEGIN FORM-->

                    <form  action="{{ url('Usabilidad-Web/InsertarUsuario') }}" method="POST" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
                    
                        {{ csrf_field() }}
                        <div class="form-body">

                            <div class="alert alert-danger display-hide">
                                <button class="close" data-close="alert"></button> Tienes algunos errores. Por favor, comprueba tu información. </div>
                            <div class="alert alert-success display-hide">
                                <button class="close" data-close="alert"></button> La Informacion es Correcta! </div>
                            

                             
                                  <div class="form-group">
                                    <label class="control-label col-md-3">Imagen :
                                   
                                </label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen">
                                  </div>
                   
                              <div class="form-group  margin-top-20">
                                 <span class="required"> * </span>
                                <label class="control-label col-md-3">Nombre :
                                   
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('nombre'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Este campo es requerido."></i>
                                                        <input type="text" name="nombre" class="form-control" />
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="text" name="nombre" class="form-control" value="{{ old('nombre')}}"/>
                                        @endif 
                                </div>
                            </div>

                             <div class="form-group  margin-top-20">
                                <span class="required"> * </span>
                                <label class="control-label col-md-3">Apellido :                             
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('usuario_apellido'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Este campo es requerido."></i>
                                                        <input type="text" name="usuario_apellido" class="form-control" />
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="text" name="usuario_apellido" class="form-control" value="{{ old('usuario_apellido')}}"/>
                                        @endif 
                                </div>
                            </div>
                    <div class="form-group  margin-top-20">
                                <span class="required"> * </span>
                                <label class="control-label col-md-3">Documento :                             
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('usuario_documento'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Este campo es requerido."></i>
                                                        <input type="text" name="usuario_documento" class="form-control" />
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="text" name="usuario_documento" class="form-control" value="{{ old('usuario_documento')}}"/>
                                        @endif 
                                </div>
                            </div>
                       
                        <div class="form-group  margin-top-20">
                                <span class="required"> * </span>
                                <label class="control-label col-md-3">Correo :                             
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('email'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Este campo es requerido."></i>
                                                        <input type="text" name="email" class="form-control" />
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="email" name="email" class="form-control" value="{{ old('email')}}"/>
                                        @endif 
                                </div>
                            </div>
                            
                            <div class="form-group  margin-top-20">
                                <span class="required"> * </span>
                                <label class="control-label col-md-3">Telefono :                             
                                </label>
                                <div class="col-md-4">
                                        @if($errors->has('usuario_telefono'))
                                            <div class="form-group has-error">
                                                <div class="col-md-12">
                                                    <div class="input-icon right">
                                                        <i class="fa fa-warning tooltips" data-original-title="Este campo es requerido."></i>
                                                        <input type="text" name="usuario_telefono" class="form-control" />
                                                     </div>
                                                </div>
                                            </div>
                                        @else
                                            <input type="text" name="usuario_telefono" class="form-control" value="{{ old('usuario_telefono')}}"/>
                                        @endif 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Rol :</label>
                                <div class="col-md-4">
                                    <select class="bs-select form-control" data-width="10%" name="role_id">
                                       <option value="1">Administrador</option>
                                       <option value="2">Evaluador</option>
                                       <option value="3" selected>Estudiante</option>
                                       
                                    </select>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="control-label col-md-3">Estado :</label>
                                <div class="col-md-4">
                                    <select class="bs-select form-control" data-width="75%" name="usuario_estado">
                                       <option value="1">Habilitado</option>
                                       <option value="0" selected>Deshabilitado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Genero :</label>
                                <div class="col-md-4">
                                    <select class="bs-select form-control" data-width="75%" name="usuario_genero">
                                       <td style="color:#01DF01;" class="center">
                                       <option value="0" selected >Masculino</option>
                                       <option value="1" >Femenino</option>                                  
                                       <option value="3">Otro</option>
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group  margin-top-20">
                                  <span class="required"> * </span>
                                <label class="control-label col-md-3">Contraseña :
                                  
                                </label>
                                <div class="col-md-4">
                                    <div class="input-icon right">
                                        <i class="fa"></i>
                                        <input type="password" class="form-control" name="password" value="{{ old('password')}}"/> </div>
                                </div>
                            </div>
                            


                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Registrar</button>
                                    
                                        <button type="button" class="btn default">Cancelar</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
    @endif
@endsection