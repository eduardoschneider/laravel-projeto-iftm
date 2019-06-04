@extends('layouts.app')

@section('content')
  <div class="container">

    <form method="POST" action="/page/{{ $page->id }}">

      <div class="clearfix">
        <div class="pull-left">
          <div class="lead">
            <strong>Edição de registro: {{ $page->name }}</strong>
          </div>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-success">Salvar</button>
          <a href="/page" class="btn btn-danger">Voltar</a>
        </div>
      </div>
      <hr>

      {!! method_field('PUT') !!}
      @include('page.form')
    </form>

  </div>
@endsection
