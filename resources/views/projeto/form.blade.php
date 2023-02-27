<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nome') }}
            {{ Form::text('nome', $projeto->nome, ['class' => 'form-control' . ($errors->has('nome') ? ' is-invalid' : ''), 'placeholder' => 'Nome']) }}
            {!! $errors->first('nome', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagem') }}
            {{ Form::text('imagem', $projeto->imagem, ['class' => 'form-control' . ($errors->has('imagem') ? ' is-invalid' : ''), 'placeholder' => 'Imagem']) }}
            {!! $errors->first('imagem', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descriçao') }}
            {{ Form::text('descriçao', $projeto->descriçao, ['class' => 'form-control' . ($errors->has('descriçao') ? ' is-invalid' : ''), 'placeholder' => 'Descriçao']) }}
            {!! $errors->first('descriçao', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('url') }}
            {{ Form::text('url', $projeto->url, ['class' => 'form-control' . ($errors->has('url') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('url', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>