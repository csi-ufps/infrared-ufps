@extends('crudbooster::admin_template')
@section('content')
    <!-- Your html goes here -->
    <div>
        <p><a title='Return' href="{{CRUDBooster::mainpath()}}"><i class='fa fa-chevron-circle-left '></i>
                &nbsp; Volver al listado Racks</a></p>

        <div class="panel panel-default">
            <div class="panel-heading">
                <strong><i class='fa fa-cloud'></i> 1</strong>
            </div>

            <div class="panel-body" style="padding:20px 0px 0px 0px">
                <form class='form-horizontal' method='post' id="form" enctype="multipart/form-data"
                      action="{{CRUDBooster::mainpath('add-save')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="box-body" id="parent-form-area">
                        <div class='form-group header-group-0 ' id='form-group-name' style="">
                            <label class='control-label col-sm-2'>
                                Nombre
                                <span class='text-danger' title='Este campo es requerido'>*</span>
                            </label>

                            <div class="col-sm-10">
                                <input type='text' title="Nombre"
                                       required maxlength=70 class='form-control' name="name" id="name" value=''/>
                                <div class="text-danger"></div>
                                <p class='help-block'></p>
                            </div>
                        </div>
                        <div class='form-group header-group-0 ' id='form-group-dimensions' style="">
                            <label class='control-label col-sm-2'>
                                Dimensiones
                            </label>
                            <div class="col-sm-10">
                                <input type='text' title="Dimensiones" maxlength=255 class='form-control' name="dimensions" id="dimensions" value=''/>
                                <div class="text-danger"></div>
                                <p class='help-block'></p>
                            </div>
                        </div>
                        <div class='form-group header-group-0 ' id='form-group-reference' style="">
                            <label class='control-label col-sm-2'>
                                Referencia
                                <span class='text-danger' title='Este campo es requerido'>*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type='text' title="Referencia" required maxlength=255 class='form-control' name="reference" id="reference" value=''/>
                                <div class="text-danger"></div>
                                <p class='help-block'></p>
                            </div>
                        </div>
                        <div class='form-group header-group-0 ' id='form-group-mark' style="">
                            <label class='control-label col-sm-2'>
                                Marca
                                <span class='text-danger' title='Este campo es requerido'>*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type='text' title="Marca" required maxlength=255 class='form-control' name="mark" id="mark" value=''/>
                                <div class="text-danger"></div>
                                <p class='help-block'></p>
                            </div>
                        </div>
                        <div class='form-group header-group-0 ' id='form-group-observations' style="">
                            <label class='control-label col-sm-2'>Observaciones
                            </label>
                            <div class="col-sm-10">
                                <textarea name="observations" id="observations" maxlength=5000 class='form-control' rows='5'></textarea>
                                <div class="text-danger"></div>
                                <p class='help-block'></p>
                            </div>
                        </div>
                        <div class='form-group header-group-0 ' id='form-group-image' style="">
                            <label class='col-sm-2 control-label'>Image
                            </label>
                            <div class="col-sm-10">
                                <input type='file' id="image" title="Image" class='form-control' name="image"/>
                                <p class='help-block'>Tipo de imágenes soportados: JPG, JPEG, PNG, GIF, BMP</p>
                                <div class="text-danger"></div>
                            </div>
                        </div>
                        <div class='form-group header-group-0 ' id='form-group-cabling_center_id' style="">
                            <label class='control-label col-sm-2'>Centros de cableado
                                <span class='text-danger' title='Este campo es requerido'>*</span>
                            </label>
                            <div class="col-sm-10">
                                <select style='width:100%' class='form-control selectpicker' id="cabling_center_id"
                                        required name="cabling_center_id" data-show-subtext="true" data-live-search="true">
                                    <option value=''>** Selecciona un Centro de cableado</option>
                                    @foreach($cabling_centers as $cabling_center)
                                        {{ $cabling_centers }}
                                        <option data-subtext="{{$cabling_center->b_name}}"
                                                value="{{$cabling_center->cc_id}}">{{$cabling_center->cc_name}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                </div><!--end-text-danger-->
                                <p class='help-block'></p>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer" style="background: #F5F5F5">
                        <div class="form-group">
                            <label class="control-label col-sm-2"></label>
                            <div class="col-sm-10">
                                <a href="{{CRUDBooster::mainpath()}}" class='btn btn-default'><i class='fa fa-chevron-circle-left'></i> Volver</a>
                                <input type="submit" name="submit" value='Guardar y Añadir otro' class='btn btn-success'>
                                <input type="submit" name="submit" value='Guardar' class='btn btn-success'>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
