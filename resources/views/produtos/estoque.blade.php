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
				<div class="row">
					<div class="section-header">
						<h2>Estoque</h2>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a class="text-secondary" href="<?php echo url('alimentos'); ?>">Produtos</a></li>
								<li class="breadcrumb-item active" aria-current="page">Estoque</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="col-l2 row">
					<div class="col-lg-12 col-md-8">
						<div class="alimentos row">
							@foreach($offers as $item)
								<div class="col-lg-4 mb-4">
									<div class="card p-4" name="{{$item->name}}">
										<h4 class="mb-0"><b>{{$item->name}}</b></h4>
										<p class="mb-0"><b>Data:</b> {{date('d/m/Y', strtotime($item->created_at))}}</p>
										<hr class="my-1" />
										<p class="mb-0"><b>Gênero:</b> {{$item->type}}</p>
										<p class="mb-0"><b>Tipo:</b> {{$item->type}}</p>
										<p class="mb-0"><b>Valor:</b> {{"R$ " . number_format($item->value, 2, ',', '.')}}</p>
										<p class="mb-2"><b>Custo:</b> {{"R$ " . number_format($item->cost, 2, ',', '.')}}</p>
										<a class="btn btn-outline-success btn-block mt-1" href="<?php echo url('produtos/alimento/detalhes/'.$item->id);?>">Ver mais</a>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection