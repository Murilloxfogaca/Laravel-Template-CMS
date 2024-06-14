
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
		<div class="col-12 row">
			<div class="col-lg-12">
				<h2>Adicionar novo alimento</h2>
				<nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
						<li class="breadcrumb-item"><a class="text-secondary" href="<?php echo url('clientes'); ?>">Clientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cliente</li>
                    </ol>
                </nav>
			</div>
			<div class="col-lg-12">
				<table class="table table-striped">
					<thead class="thead-dark">
						<tr>
						<th scope="col">ID da alimento</th>
						<th scope="col">Produto</th>
						<th scope="col">Data de entrada</th>
						<th scope="col">Agricultor</th>
						<th scope="col">Alterar Status</th>
						</tr>
					</thead>
					<tbody>
						<?php for ($i=0; $i < 8; $i++) { 
							echo '
							<tr>
								<th scope="row">14124125</th>
								<td>Abóbora Paulista Orgânico (2.0 kg)</td>
								<td>07/08/2022</td>
								<td>John Wayne</td>
								<td><button class="btn btn-success">Adicionar ao alimento</button>
								</td>
							</tr>
							';
						} ?>
					</tbody>
				</table>
				<h3 class="mt-4 mb-3">Alimentos realizados:</h3>
				<table class="table table-striped table-primary">
					<thead class="thead-dark">
						<tr>
						<th scope="col">ID da alimento</th>
						<th scope="col">Produto</th>
						<th scope="col">Status</th>
						<th scope="col">Agricultor</th>
						<th scope="col">Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php for ($i=0; $i < 8; $i++) { 
							echo '
							<tr>
								<th scope="row">14124125</th>
								<td>Abóbora Paulista Orgânico (2.0 kg)</td>
								<td>Checado</td>
								<td>John Wayne</td>
								<td>
									<button class="btn btn-success">Detalhe</button>
									<button class="btn btn-danger">Remover</button>
								</td>
							</tr>
							';
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection