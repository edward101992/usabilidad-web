@section('linkEditarPlataforma')
<link href="../assets/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />
@endsection

@extends('PlantillaViews.layout')
@section('contenido')


                    <div class="profile">
                        <div class="tabbable-line tabbable-full-width">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1_1" data-toggle="tab"> Detalles </a>
                                </li>
                                <li>
                                    <a href="#tab_1_3" data-toggle="tab"> Editar </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="list-unstyled profile-nav">
                                                <li>
                                                    <img src="../assets/pages/media/profile/people19.png" class="img-responsive pic-bordered" alt="" />
                                                    <a href="javascript:;" class="profile-edit"> Editar </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-8 profile-info">
                                                    <h1 class="font-green sbold uppercase">Bilioteca UDEC</h1>
                                                    <p>Plataforma diseñada para guaardar los libros de la universidad Cundinamarca
                                                    </p>
                                                    <p>
                                                        <a href="javascript:;"> www.universidadcundinamarca.com </a>
                                                    </p>
                                                    <ul class="list-inline">
                                                       
                                                            <i class="fa fa-calendar"></i>Creada el 18 Diciembre de 2018 </li>
                                                       
                                                    </ul>
                                                </div>
                                                <!--end col-md-8-->
                                                <div class="col-md-4">
                                                    <div class="portlet sale-summary">
                                                        <div class="portlet-title">
                                                            <div class="caption font-red sbold"> Evaluacion </div>
                                                            
                                                        </div>
                                                          <div class="portlet-body">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <span class="sale-info"> Veces Evaluada
                                                                        <i class="fa fa-img-up"></i>
                                                                    </span>
                                                                    <span class="sale-num"> 0 </span>
                                                                </li>
                                                             
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-md-4-->
                                            </div>
                                            <!--end row-->
                                            <div class="tabbable-line tabbable-custom-profile">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_11" data-toggle="tab"> Evaluadores </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_22" data-toggle="tab"> Obervaciones </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_11">
                                                        <div class="portlet-body">
                                                            <table class="table table-striped table-bordered table-advance table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <i class="fa fa-briefcase"></i> Nombre 
                                                                        </th>
                                                                        <th> 
																			<i class=""></i> Correo 
                                                                        </th>
                                                                        <th class="hidden-xs">
                                                                            <i class=""></i> Fecha de Evaluacion 
                                                                        </th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="hidden-xs"> Edward Ramos </td>
                                                                        <td class="hidden-xs"> edwardconw@gmail.com </td>
                                                                        <td class="hidden-xs"> 12-02-2011 </td>                                                                        <td>
                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> VER EVALUADOR </a>
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--tab-pane-->
                                                    <div class="tab-pane" id="tab_1_22">
                                                        <div class="tab-pane active" id="tab_1_1_1">
                                                            <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
                                                                <ul class="feeds">
                                                                    <li>
                                                                        <div class="col1">
                                                                            <div class="cont">
                                                                                <div class="cont-col1">
                                                                                    <div class="label label-success">
                                                                                        <i class="fa fa-bell-o"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="cont-col2">
                                                                                    <div class="desc"> Debe mejorar
                                                                                       
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col2">
                                                                            <div class="date"> 12-02-2012 </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:;">
                                                                            <div class="col1">
                                                                                <div class="cont">
                                                                                    <div class="cont-col1">
                                                                                        <div class="label label-success">
                                                                                            <i class="fa fa-bell-o"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="cont-col2">
                                                                                        <div class="desc"> Debe mejorar </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col2">
                                                                                <div class="date"> 23-02-2011 </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                  
                                                                  
                                                                   
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--tab-pane-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab_1_2-->
                                <div class="tab-pane" id="tab_1_3">
                                    <div class="row profile-account">
                                        <div class="col-md-3">
                                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#tab_1-1">
                                                        <i class="fa fa-cog"></i> Informacion Plataforma </a>
                                                    <span class="after"> </span>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tab_2-2">
                                                        <i class="fa fa-picture-o"></i> Cambiar Logo </a>
                                                </li>
                                                
                                                <li>
                                                    <a data-toggle="tab" href="#tab_4-4">
                                                        <i class="fa fa-eye"></i> Habilitar - Deshabilitar </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="tab-content">
                                                <div id="tab_1-1" class="tab-pane active">
                                                    <form role="form" action="#">
                                                        <div class="form-group">
                                                            <label class="control-label">Nombre Plataforma</label>
                                                            <input type="text" placeholder="Nombre Plataforma" class="form-control" /> </div>
                                                      
                                                        <div class="form-group">
                                                            <label class="control-label">Descripcion</label>
                                                            <textarea class="form-control" rows="3" placeholder="Descripcion"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Url Plataforma</label>
                                                            <input type="text" placeholder="http://www.URLaplicacion.com" class="form-control" /> </div>
                                                        <div class="margiv-top-10">
                                                            <a href="javascript:;" class="btn green"> EDITAR </a>
                                                            <a href="javascript:;" class="btn default"> CANCELAR </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div id="tab_2-2" class="tab-pane">
                                                    
                                                    <form action="#" role="form">
                                                        <div class="form-group">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                <div>
                                                                    <span class="btn default btn-file">
                                                                        <span class="fileinput-new"> SELECCIONAR LOGO </span>
                                                                        <span class="fileinput-exists"> CAMBIAR </span>
                                                                        <input type="file" name="..."> </span>
                                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        <div class="margin-top-10">
                                                            <a href="javascript:;" class="btn green"> EDITAR </a>
                                                            <a href="javascript:;" class="btn default"> CANCELAR </a>
                                                        </div>
                                                    </form>
                                                </div>
                                               
                                            
                                                <div id="tab_4-4" class="tab-pane">
                                                    <form action="#">
                                                        <table class="table table-bordered table-striped">
                                                            <tr>
                                                                <td>Al deshabilitar la Plataforma los evaluadores ya no tendran acceso a ella.</td>
                                                                <td>
                                                                    <div class="mt-radio-inline">
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios1" value="option1" /> HABILITAR
                                                                            <span></span>
                                                                        </label>
                                                                        <label class="mt-radio">
                                                                            <input type="radio" name="optionsRadios1" value="option2" checked/> DESHABILITAR
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                           
                                                        </table>
                                                        <!--end profile-settings-->
                                                        <div class="margin-top-10">
                                                            <a href="javascript:;" class="btn green"> EDITAR </a>
                                                            <a href="javascript:;" class="btn default"> CANCELAR </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                </div>
                                <!--end tab-pane-->
                              
                                <!--end tab-pane-->
                            </div>
                        </div>
                    </div>

		
@endsection
	
@section('descripcionPag')
	<div class="note note-info">
	<p>Editar Plataforma Registrada</p>
	</div>
@endsection

@section('scriptEditarPlataforma')
<script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
@endsection