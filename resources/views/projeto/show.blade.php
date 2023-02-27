@extends('layouts.app')

@section('template_title')
    {{ $projeto->name ?? 'Show Projeto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Projeto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('projetos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $projeto->nome }}
                        </div>
                        <div class="form-group">
                            <strong>Imagem:</strong>
                            {{ $projeto->imagem }}
                        </div>
                        <div class="form-group">
                            <strong>Descriçao:</strong>
                            {{ $projeto->descriçao }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $projeto->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
