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
				<div class="section-header mb-4">
					<h3>Alimentos</h3>
					<nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a  class="text-secondary" href="<?php echo url('painel'); ?>">Painel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Alimentos</li>
                        </ol>
                    </nav>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<div class="card p-4">
							<h3>Agricultores</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
							<a class="btn btn-success" href="<?php echo url('agricultores'); ?>">Ver mais</a>
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<div class="card p-4">
							<h3>Estoque</h3>
							<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
							<a class="btn btn-success" href="<?php echo url('produtos/estoque'); ?>">Ver mais</a>
						</div>
					</div>
					
				</div>
				<div class="col-12">
					<h4>Alimentos adicionados:</h4>
				</div>
				<div class="row">
					@foreach ($offers as $value)
						<div class="alimentos-row col-md-3 py-3">
							<div class="border p-3">
								<h3 class="mb-3 text-center">{{$value->name}}</h3>
								<p class="mb-0 mb-1 text-center"><b>Tipo: </b>{{$value->type}}</p>
								<p class="mb-0 mb-1 text-center"><b>Preço:</b> R${{$value->cost}}  </p>
								<p class="mb-0 mb-1 text-center"><b>Valor:</b> R${{$value->value}}</p>
								<div class="row mt-2 mb p-3 text-center">
									<a class="text-center col-12 btn-success btn" href="<?php echo url("produtos/alimento/detalhes/".$value->id); ?>">Editar item</a>
									<a class="text-center mt-1 col-12 btn-outline-success btn" target="_blank" href="<?php echo url("agricultores/detalhes/".$value->farmer_id ); ?>">Detalhes do agricultor</a>
								</div>
							</div>
						</div>
					@endforeach 
				</div>
				
				@if(count($offers) === 0)
					<div class="col-md-12 py-3">
						<h4 class="text-center text-secondary">Nenhum alimento encontrado!</h4>
					</div>
					@endif
				</div>
			</div>
		</section>
@endsection