@extends('layout.app', ["current" => "home"])

@section('body')

    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Aqui você cadastra todos os seus produtos.
                        </p>
                        <a href="/categorias/novo" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
