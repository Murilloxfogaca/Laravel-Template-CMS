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
		<div class="section-header mb-2">
			<h3>Detalhes do alimento</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a  class="text-secondary" href="<?php echo url('alimentos'); ?>">Alimentos</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$offer->name}}</li>
				</ol>
			</nav>
		</div>	
		<div class="row">
			<div class="col-12 col-md-10 row p-3 rounded align-items-start">
				<div class="col-lg-5 ">
					<img class="w-100 img-responsive object-fit-contain mb-3"  style="max-height: 200px;object-fit:cover;"  src="<?php echo url('assets/image/alimento.png'); ?>">
				</div>
				<div class="col-lg-7 px-3">
					<h2 class="mb-3 pb-2 border-bottom">{{$offer->name}}</h2>
					<div class="col-12 row">
						<div class="col-lg-6">
							<h6 class="mb-2"><b>Status:</b> {{$offer->stock ? "Em estoque" : "Fora de estoque"}}</h6>
							<h6 class="mb-2"><b>Data:</b> {{date('d/m/Y', strtotime($offer->created_at))}}</h6>
							<h6 class="mb-2"><b>Agricultor:</b> {{$farmer->name}}</h6>
							<h6 class="mb-2"><b>Tipo:</b> {{$offer->type}}</h6>
						</div>
						<div class="col-lg-6">
							<h6 class="mb-2"><b>Custo Unitário:</b> R$ {{number_format($offer->cost, 2, ',', '.')}}</h6>
							<h6 class="mb-2"><b>Valor Unitário:</b> R$ {{number_format($offer->value, 2, ',', '.')}}</h6>
							<h6 class="mb-2"><b>Quantidade em estoque:</b> {{$offer->quantity}}</h6>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-10 row p-3 rounded align-items-center">
				<div class="col-lg-6 mb-2">
					<div class="card p-4">
						<h3>Editar produto</h3>
						<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
						<a class="btn btn-success" href="<?php echo url('produtos/alimento/editar/'.$offer->id); ?>">Ver mais</a>
					</div>
				</div>
				<div class="col-lg-6 mb-2">
					<div class="card p-4">
						<h3>Criar entrega</h3>
						<p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
						<a class="btn btn-success" href="<?php echo url('conferencia/folhas'); ?>">Ver mais</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection