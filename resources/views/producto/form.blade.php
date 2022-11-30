<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_producto') }}
            {{ Form::text('nombre_producto', $producto->nombre_producto, ['class' => 'form-control' . ($errors->has('nombre_producto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Producto']) }}
            {!! $errors->first('nombre_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_producto') }}
            {{ Form::text('cantidad_producto', $producto->cantidad_producto, ['class' => 'form-control' . ($errors->has('cantidad_producto') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Producto']) }}
            {!! $errors->first('cantidad_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precio_producto') }}
            {{ Form::text('precio_producto', $producto->precio_producto, ['class' => 'form-control' . ($errors->has('precio_producto') ? ' is-invalid' : ''), 'placeholder' => 'Precio Producto']) }}
            {!! $errors->first('precio_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_categoria') }}
            {{ Form::select('id_categoria', $categoria, $producto->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Id Categoria']) }}
            {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion_producto') }}
            {{ Form::text('descripcion_producto', $producto->descripcion_producto, ['class' => 'form-control' . ($errors->has('descripcion_producto') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Producto']) }}
            {!! $errors->first('descripcion_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="mt-3 btn btn-outline" style="border-color:#e57373; color:#e57373; background-color:white">Crear</button>
    </div>
</div>