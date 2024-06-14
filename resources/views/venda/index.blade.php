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
				<div class="section-header mb-4 mt-2">
					<h3>Conferência	de entregas</h3>
				</div>
				<table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">Data da criação</th>
						<th scope="col">Produto</th>
						<th scope="col">Quantidade</th>
						<th scope="col">Cliente</th>
						<th scope="col">Alterar Status</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($orders as $value){  ?>
							<tr>
								<td>@php echo (new DateTime($value['created_at']))->format('d/m/Y'); @endphp</td>
								<td>@php echo $value['offer']['name']; @endphp</td>
								<td @php if($value['qtd'] > $value['offer']['quantity']) echo "class='text-danger'"; @endphp> 
									@php echo $value['qtd']." <small>max atual:".$value['offer']['quantity']."</small>" @endphp
								</td>
								<td>@php echo $value['client']['name']; @endphp</td>
								<td>
									<?php if($value['status'] === "CONCLUIDO" || $value['status'] === "CANCELADO" || $value['qtd'] > $value['offer']['quantity']) {
										if($value['status'] === "CONCLUIDO") { 
											echo "Concluído"; 
										} else {
											echo "Cancelado";
										}
									} else {?>
									<form action="{{url('/vendas/atualizar/'.$value['id'])}}" method="post" class="d-flex">
										@csrf
										@method('PATCH')
										<input type="hidden" value="@php echo $value['qtd']; @endphp" name="quantity_old" />
										<input type="hidden" value="@php echo $value['offer']['id']; @endphp" name="id_offer" />
										<select class="form-select mx-1 fform-select-sm" name="status" aria-label=".fform-select-sm example">
											@php if($value['status'] === "PREPARO") echo "<option selected value='PREPARO'>Em preparo</option>"; @endphp
											<option @php if($value['status'] === "ENVIADO") echo "selected disabled"; @endphp value="ENVIADO">Enviado ou Retirado</option>
											<option @php if($value['status'] === "CONCLUIDO") echo "selected"; @endphp value="CONCLUIDO">Concluído</option>
											<?php if($value['status'] !== "ENVIADO") { ?> 
												<option @php if($value['status'] === "CANCELADO") echo "selected"; @endphp value="CANCELADO">Cancelado</option>  
											<?php } ?>
										</select>
										<button type="submit" class="btn btn-success btn-sm">Atualizar</button>
									</form>
									<?php } ?>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<h3 class="mt-5">Conferência de entregas</h3>
				<form action="<?php echo url('vendas/adicionar');?>" method="post" role="form" enctype="multipart/form-data" class="row d-lg-flex justify-content-center align-items-end">
					@csrf
					<div class="form-row col-lg-4">
						<label class="w-100">Selecionar Cliente
							<?php if(!empty($clients)){ ?>
								<select class="form-select form-control w-100" name="cliente">
									<option value="">Selecionar</option>
									<?php foreach ($clients as $item){ ?>
										<option value="<?php echo $item->id; ?>">
											<?php echo $item->name; ?>
										</option>
									<?php } ?> 
								</select>
							<?php } ?>
						</label>
					</div>
					<div class="form-row col-lg-4">
						<label class="w-100">Selecionar Produto
							<?php if(!empty($offer)){ ?>
								<select class="form-select form-control w-100" name="produto">
									<option value="">Selecionar</option>
									<?php foreach ($offer as $item){ ?>
										<option value="<?php echo $item->id; ?>" data-quantity="<?php echo $item->quantity; ?>">
											<?php echo $item->name; ?> (max: <?php echo $item->quantity; ?>)
										</option>
									<?php } ?> 
								</select>
							<?php } ?>
						</label>
					</div>
					<div class="form-group col-lg-4 ">
						<label class="w-100">Quantidade
							<input type="number" name="qtd" min="0" class="form-control w-100" />
						</label>
					</div>
					<div class="form-row col-lg-4 offset-md-8 mt-3">
						<div class="text-right"><button type="submit" class="btn btn-success w-100" title="Inserir nova negociação">Criar Pedido</button>
					</div>
				</div>
			</form>
			</div>
		</section>
@endsection