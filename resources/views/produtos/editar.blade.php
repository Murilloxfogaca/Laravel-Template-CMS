
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
			<div class="col-lg-8">
				<h2>Adicionar nova alimento</h2>
				<nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?php echo url('agricultores'); ?>">Agricultores</a></li>
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?php echo url('agricultores/detalhes/'.$farmer->id); ?>">{{$farmer->name}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar alimento</li>
                    </ol>
                </nav>
				<form action="{{url('/produtos/alimento/'.$offer->id)}}" method="POST" role="form" class="addprods" >
					@csrf
					@method('PATCH')
					<div class="form-row row">
						<div class="form-group col-12 col-md-6 my-2">
							<label class="w-100">Nome
								<input type="text" name="name" class="form-control w-100" value="{{ $offer->name }}" required />
							</label>
						</div>
						<div class="form-group col-12 col-md-6 my-2 ">
							<label class="w-100">Unidade de medida
								<select class="form-select form-control w-100" name="unit_of_measurement">
									<option value="false" selected disabled hidde>Escolha um tipo</option>
									<option value="" >Nenhuma</option>
									<option value="KILOGRAM">Kilograma</option>
									<option value="GRAM">Grama</option>
									<option value="LITER">Litro</option>
									<option value="MILLILITER">Mililitro</option>
								</select>
							</label>
						</div>
						<div class="form-group col-12 col-md-6 my-2">
							<label class="w-100">Valor Unitário 
								<input type="text" name="value"  class="form-control w-100 real" value="{{ number_format($offer->value, 2, ',', '.') }}" required />
							</label>
						</div>
						<div class="form-group col-12 col-md-6 my-2 ">
							<label class="w-100">Preço Unitário 
								<input type="text" name="cost" class="form-control w-100 real" value="{{ number_format($offer->cost, 2, ',', '.') }}" required />
							</label>
						</div>
						
						<div class="form-group col-12 col-md-4 my-2 ">
							<label class="w-100">Quantidade 
								<input type="text" name="quantity" class="form-control w-100" value="{{ $offer->quantity }}" required />
							</label>
						</div>

						<div class="form-group col-12 col-md-8 my-2 ">
							<label class="w-100">Agricultores
								<select class="form-select form-control w-100 farmer" name="farmer" required>
									@foreach ($farmerAll as $item)
										<option value="{{$item->id}}" @if ($farmer->id === $item->id)
											selected
										@endif>{{$item->name}}</option>
									@endforeach
									
								</select>
							</label>
						</div>
					
					</div>
					<button type="submit" class="btn btn-success mt-3">Adicionar produto</button>
				</form>
			</div>
			<div class="col-lg-4 d-lg-flex d-none">
				<img alt="Agricultores" class="w-100 img-responsive" src="<?php echo url('assets/image/alimentos.png'); ?>" style="" />
			</div>
		</div>
	</div>
</section>
@endsection