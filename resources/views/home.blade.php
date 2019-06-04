@extends('layouts.app')

@section('content')
  <style>

  </style>
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">
            Bem-vindo
            @if (auth()->check())
              <strong>
                {{ auth()->user()->name }}
              </strong>
            @endif
          </div>

          <div class="panel-body">
            @if (auth()->guest())
              Para acessar os <a href="{{ route('page.index') }}">Dados</a>,
              você precisa se
              <a href="/register">registrar</a>.<br/>
              Você será automaticamente logado após registrado.
            @else
              Agora você pode acessar os
              <a href="{{ route('page.index') }}">dados</a>!
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
