
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
				<h2>Adicionar nova alimento</h2>
				<nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-secondary" href="{{url('agricultores')}}">Agricultores</a></li>
                        <li class="breadcrumb-item"><a class="text-secondary" href="{{url('agricultores/detalhes/'.$farmer->id)}}">{{$farmer->name}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar alimento</li>
                    </ol>
                </nav>
				<form action="{{url('/produtos/alimento/')}}" method="post" role="form" class="addprods" >
					@csrf
					<div class="form-row row">
						<div class="form-group col-12 col-md-4 my-2">
							<label class="w-100">Nome
								<input type="text" name="name" class="form-control w-100" value="{{ old('name') }}" required />
							</label>
						</div>
						<div class="form-group col-12 col-md-4 my-2 ">
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
						<div class="form-group col-12 col-md-4 my-2">
							<label class="w-100">Valor Unitário 
								<input type="text" name="value"  class="form-control w-100 real" value="{{ old('value') }}" required />
							</label>
						</div>
						<div class="form-group col-12 col-md-4 my-2 ">
							<label class="w-100">Preço Unitário 
								<input type="text" name="cost" class="form-control w-100 real" value="{{ old('cost') }}" required />
							</label>
						</div>

						<div class="form-group col-12 col-md-4 my-2 ">
							<label class="w-100">Tipo
								<select class="form-select form-control w-100 type" name="type" required>
									<option value="false" selected disabled hidde>Escolha um tipo</option>
									<option value="FLV">FLV (FRUTA, LEGUME OU VERDURA)</option>
									<option value="MANATU">MANATU</option>
									<option value="MEDICINAL">MEDICINAL</option>
									<option value="AROMÁTICA">AROMÁTICA</option>
									<option value="FOLHOSA">FOLHOSA</option>
									<option value="MERCEARIA">MERCEARIA</option>
									<option value="PROCESSADOS">PROCESSADO</option>
								</select>
							</label>
						</div>

						<div class="form-group col-12 col-md-4 my-2 ">
							<label class="w-100">Quantidade 
								<input type="number" name="quantity" min="0" class="form-control w-100" value="{{ old('quantity') }}" required />
							</label>
						</div>
						<input type="hidden" name="farmer_id"  value="{{$farmer->id}}"  />
						
						<div class="form-group col-12 offset-md-8 col-md-4 my-2 d-flex justify-content-end">
							<a class="btn btn-outline-success mx-2" href="{{url('agricultores/detalhes/'.$farmer->id)}}">Voltar</a>
							<button type="submit" class="btn btn-success">Adicionar produto</button>
						</div>
					</div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
</section>
@endsection