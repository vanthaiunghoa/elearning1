
    <div class="row">
        <div class="col-md-12">
            <div class="box collapsed-box">
                <div class="box-header with-border"> 
                  <input class="box-title inputS" type="text" value="{{$semana->tema}}"/>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>                    
                    <!--<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                  </div> 
                </div>
                                            <!-- /.box-header -->
                <div style="display: none;" class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                          <!--Contenido-->
                         <ul id="menu" style="width: 300px;">
                             
                          	@foreach($semana->recursos as $recurso)
                          		 <li style="list-style: none; padding: 5px;margin: 3px 0;background: #000;"><a style="color: #fff" href="#">{{$recurso->nombre}}</a></li>
                          	@endforeach

                          </ul>
                          <!--Fin Contenido-->
                        </div>
                    </div>
                                    
                </div>
            </div>

    	</div>
	</div> <!--FIN ROW  -->
