@extends('layout.principal')

@section('conteudo')

<h1>Edita produto</h1>

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="/produtos/atualiza" method="POST">
	
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />	
	
	<input type="hidden" name="id" value="{{ $p->id }}" />
		
	<div class="form-group">
		<label>Nome</label>
		<input name="nome" class="form-control" value="{{ $p->nome }}"/>
	</div> 
	<div class="form-group">
		<label>Descrição</label>
		<input name="descricao" class="form-control" value="{{ $p->descricao }}"/>
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input name="valor" class="form-control" value="{{ $p->valor }}"/>
	</div>
	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" name="quantidade" class="form-control" value="{{ $p->quantidade }}"/>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Update</button>
</form>

@stop