@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
		<section>
	<div class="container">
		<div class="section-header">
			<h3>Produtos</h3>
		</div>
		<div class="col-12 col-md-6 mx-auto p-4">
			<h3 class="text-center">Inserir Produtos</h3>
			<a class="btn btn-success mx-auto d-block mw-100" style="width:max-content;" href="<?php echo url('alimentos/inserirprodutos'); ?>">Ver mais</a>
		</div>
		<div class="col-12 mb-2 row">
			@foreach ($produtos as $value) { ?>
				<div class="col-lg-4 col-md-6 border-bottom mb-3 py-4 row ">
					<div class="col-12">
						<h3 class="mb-0 mt-4 text-center">{{$value->name}}</h3>
						<h5 class="mb-0 mb-4 h6 text-center font-weight-bold mt-2 text-secondary">#ID {{$value->id}}</h5>
						<hr>
						<p class="mb-0 mb-2 text-center"><b>Unidade de medida: </b>{{$value->unit_of_measurement}}</p>
						<p class="mb-0 mb-2 text-center"><b>Preço:</b> R${{$value->cost}}</h5>
						<div class="row mt-2 p-3 text-center">
						<a class="text-center col-12 btn-success btn" href="<?php echo url("alimentos/editar/".$value->id); ?>">Editar item</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>
@endsection