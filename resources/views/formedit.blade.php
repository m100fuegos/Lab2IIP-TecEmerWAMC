<div class="container-fluid">
        <div class="row">
            <div class="form-group col">
                <label class="col-form-label col-form-label-sm" for="codprod">Código</label>
                <input type="text" name="codprod" value="{{ $productos->codprod }}" class="form-control form-control-sm col-sm-4" id="codprod" placeholder="Ej: AA-0001" value="{{ $productos->codprod }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label class="col-form-label col-form-label-sm" for="nombreprod">Descripción</label>
                <input type="text" name="nombreprod" class="form-control form-control-sm col-sm-10" id="nombreprod" placeholder="Nombre del producto"value="{{ $productos->nombreprod }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label class="col-form-label col-form-label-sm" for="typeprod">Tipo de Producto</label>
                <input type="text" name="typeprod" class="form-control form-control-sm col-sm-10" id="typprod" placeholder="Tipo de producto" value="{{ $productos->typprod }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label class="col-form-label col-form-label-sm" for="costunit">Costo Unitario</label>
                <input type="number" name="costunit" class="form-control form-control-sm col-sm-4" id="costunit" step="0000.0001" placeholder="000.000"value="{{ $productos->costunit }}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col">
                <label class="col-form-label col-form-label-sm" for="cantexist">Cantidad</label>
                <input type="number" name="cantexist" class="form-control form-control-sm col-sm-4" id="cantexist" placeholder="0000" value="{{ $productos->cantexist }}">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ route('productos.index') }}" class="link btn btn-secondary">Cancelar</a>
        <input type="submit" name="saveitem" class="btn btn-primary" id="saveitem" value="Guardar"></input>
    </div>
</div>