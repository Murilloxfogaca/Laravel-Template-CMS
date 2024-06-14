<section>
	<div class="container">
		<div class="section-header">
			<h3>Alimentos</h3>
		</div>
		<div class="alimentos py-4 mb-2 row">
			<?php for ($i=0; $i < 5; $i++) { ?>
				<div class="alimentos-row col-md-4 mb-3 py-4">
					<div class="border p-3">
						<h6 class="mb-0 mt-2 mb-4 text-center">ID do alimento: <b class="d-block mt-1">#ID14124125</b></h6>
						<h6 class="mb-0 mt-2 mb-4 text-center px-5">Tipo de alimento:  <small class="mt-1 d-block font-weight-bold">Agricultor -> Armazém</small></h6>
						
						<h6 class="mb-0 mt-2 mb-4 text-center px-5">Agricultor:  <small class="mt-1 d-block font-weight-bold">João, o agricultor</small></h6>
						
						<h6 class="mb-0 mt-2 text-center px-5">Produtos:  <small class="mt-1 d-block font-weight-bold">Cenoura(10kg), Vagem(10kg), Cenoura do vale(4kg)</small></h6>
						
						<div class="py-1 text-center row px-5 pt-4">
							<a class="text-center mb-2 col-12 btn-danger btn" href="<?php echo base_url('alimentos/detalhes/2424'); ?>">Detalhes</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>