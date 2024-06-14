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
							<?php for ($i=0; $i < 5; $i++) { ?>
								<div class="alimentos-row col-md-3 mb-1 py-2">
									<div class="border p-1">
										<h6 class="mb-0 mt-2 mb-4 text-center">ID do alimento: <b class="d-block mt-1">#ID14124125</b></h6>
										<h6 class="mb-0 mt-2 mb-4 text-center px-5">Tipo de alimento:  <small class="mt-1 d-block font-weight-bold">Agricultor -> Armazém</small></h6>
										
										<h6 class="mb-0 mt-2 mb-4 text-center px-5">Agricultor:  <small class="mt-1 d-block font-weight-bold">João, o agricultor</small></h6>
										
										<h6 class="mb-0 mt-2 text-center px-5">Produtos:  <small class="mt-1 d-block font-weight-bold">Cenoura(10kg), Vagem(10kg), Cenoura do vale(4kg)</small></h6>
										
										<div class="py-1 text-center row px-5 pt-4">
											<a class="text-center mb-2 col-12 btn-outline-success btn" href="<?php echo url('alimentos/detalhes/2424'); ?>">Detalhes</a>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection