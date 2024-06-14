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
			<h3>Editar <?php echo $produto->label; ?></h3>
		</div>
		<div class="row wow fadeInUp">
			<div class="col-lg-8 col-12 mx-auto">
				<div class="card-body">
					<h4 class="card-title mt-3">Dados do Produto</h4>
					<hr>
					<form action="<?php echo url('alimentos/editarproduto');?>" method="post" role="form" class="editprod" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo $produto->id; ?>">
						<div class="form-row">
							<div class="form-group col-12">
								<label class="w-100">Nome
									<input type="text" name="name" class="form-control w-100" required value="<?php echo $produto->name; ?>" />
								</label>
							</div>
							<div class="form-group col-12">
								<label class="w-100">Variação
									<input type="text" name="variation" class="form-control w-100" value="<?php echo $produto->variation; ?>" required />
								</label>
							</div>
							<div class="form-group col-12 ">
								<label class="w-100">Peso
									<input type="number" name="weight" value="<?php echo $produto->weight; ?>" class="form-control w-100" />
								</label>
							</div>
							<div class="form-group col-12 ">
								<label class="w-100">Unidade de medida
									<select class="form-select form-control w-100" name="unit_of_measurement">
										<option selected value="<?php echo $produto->unit_of_measurement; ?>"><?php echo $produto->unit_of_measurement; ?></option>
										<option value="KILOGRAM" <?php if($produto->unit_of_measurement === "KILOGRAM"){ echo "selected"; } ?>>Kilograma</option>
										<option value="GRAM" <?php if($produto->unit_of_measurement === "GRAM"){ echo "selected"; } ?>>Grama</option>
										<option value="LITER" <?php if($produto->unit_of_measurement === "LITER"){ echo "selected"; } ?>>Litro</option>
										<option value="MILLILITER" <?php if($produto->unit_of_measurement === "MILLILITER"){ echo "selected"; } ?>>Mililitro</option>
									</select>
								</label>
							</div>
							<div class="form-group col-12 ">
								<label class="w-100">Preço
									<input type="text" name="coast" class="form-control w-100 real" value="<?php echo $produto->cost; ?>" required />
								</label>
							</div>
							<div class="form-group col-12 ">
								<label class="w-100">Preço em estoque
									<input type="text" name="storage_price" class="form-control w-100 real" value="<?php echo $produto->storage_price; ?>" />
								</label>
							</div>
							<div class="form-group col-12 ">
								<label class="w-100">Quantidade em estoque
									<input type="text" name="stock" class="form-control w-100"  value="<?php echo $produto->stock; ?>" required />
								</label>
							</div>
							<div class="form-group col-12 ">
								<label class="w-100">Exclusivo 
									<select class="form-select form-control w-100" name="manatu_exclusive" required>
										<option value="no" selected>Não</option>
										<option value="si">Sim</option>
									</select>
								</label>
							</div>
							<h6 class="font-weight-700"><?php echo $get_tipo_family_parameter; ?> | <span class="text-underline edit_family">Editar</span></h6>
							<input type="hidden" class="subtype_id" name="subtype_id" id="subtype_id">
							<div class="form-group col-12 form-group-edit" style="display: none;">
								<label class="w-100">Familia do produto
									<select class="form-select form-typesfamily form-control w-100" name="product_family">
										<option value="" selected disabled hidde>Escolha um tipo</option>
										<?php foreach ($typefamily as $value){ 
											if(!is_array($value)) {?>
												<option value="<?php echo $value->id; ?>" class="<?php if($value->subtypes_allowed){ echo 'subtype_allowed'; } else { echo 'no_allowed'; } ?>">
													<?php echo $value->name; ?>
												</option>
											<?php }
										} ?>
									</select>
								</label>
								<label class="w-100 subtype-select">Subtipo do produto
									<?php foreach ($typefamily as $value){ 
										if(is_array($value)) { ?>
											<select class="form-select form-control subform w-100 id-<?php echo $value['id_sub']; ?>" name="sub-<?php echo $value['id_sub']; ?>">
												<option value="">Selecionar</option>
												<?php foreach ($value["content"] as $item){ ?>
													<option value="<?php echo $item->id; ?>">
														<?php echo $item->name; ?>
													</option>
												<?php } ?> 
											</select>
									<?php } 
								} ?>
								</label>
							</div>
						</div>
						<div class="text-right"><button type="submit" class="btn btn-success" title="Inserir nova negociação">Editar alimento</button></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection