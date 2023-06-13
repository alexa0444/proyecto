<form action="" method="POST" enctype="multipart/form-data">
    <div class="box box-info padding-1">
        <div class="box-body">
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input class="form-control" placeholder="Nombre" name="nombre" type="text" id="nombre">
                
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="formFile"  placeholder="Imagen" name="imagen" value="">
                
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input class="form-control" placeholder="Precio" name="precio" type="text" id="precio">
                
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input class="form-control" placeholder="Cantidad" name="cantidad" type="text" id="cantidad">
                
            </div>
    
        </div>
        <div class="box-footer mt20">
            <button type="submit" class="btn btn-primary">{{ __('CREAR') }}</button>
        </div>
    </div>
    </form>