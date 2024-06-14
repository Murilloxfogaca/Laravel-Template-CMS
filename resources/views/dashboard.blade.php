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
                <div class="row">
                    <div class="col-12 col-md-4 row p-5 rounded align-items-center">
                        
                            <a href="<?php echo url('alimentos'); ?>"><img class="w-100 img-responsive object-fit-contain mb-3"  style="max-height: 300px;object-fit:cover;"  src="<?php echo url('assets/image/alimento.png'); ?>"></a>
                             <h3>Alimentos</h3>
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
                            <a class="btn btn-success" href="<?php echo url('alimentos'); ?>">Ver mais</a>
                        
                    </div>
                    
                    <div class="col-12 col-md-4 row p-5 rounded align-items-center">
                        
                            <a href="<?php echo url('agricultores'); ?>"><img class="w-100 img-responsive object-fit-contain mb-3"  style="max-height: 300px;object-fit:cover;"  src="<?php echo url('assets/image/pedido.png'); ?>"></a>
                            <h3>Agricultores</h3>
                            <p class="text-secondary">Sessão para gerenciar agricultores e alimentos: adicione novos agricultores, edite seus dados e adicione novos alimentos de forma rápida e fácil.</p>
                            <a class="btn btn-success" href="<?php echo url('agricultores'); ?>">Ver mais</a>
                        
                    </div>
                    
                    <div class="col-12 col-md-4 row p-5 rounded align-items-center">
                        
                            <a href="<?php echo url('clientes'); ?>"><img class="w-100 img-responsive object-fit-contain mb-3"  style="max-height: 300px;object-fit:cover;"  src="<?php echo url('assets/image/agricultor.png'); ?>"></a>
                            <h3>Clientes</h3>
                            <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
                            <a class="btn btn-success" href="<?php echo url('clientes'); ?>">Ver mais</a>

                    </div>


                <div class="col-12 col-md-4 row p-5 rounded align-items-center">
                    
                        <a href="<?php echo url('alimentos'); ?>"><img class="w-100 img-responsive object-fit-contain mb-3"  style="max-height: 300px;object-fit:cover;"  src="<?php echo url('assets/image/estoques.png'); ?>"></a>
                         <h3>Estoque</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
                        <a class="btn btn-success" href="<?php echo url('produtos/estoque'); ?>">Ver mais</a>
                    
                </div>

                <div class="col-12 col-md-4 row p-5 rounded align-items-center">
                    
                        <a href="<?php echo url('entregas'); ?>"><img class="w-100 img-responsive object-fit-contain mb-3"  style="max-height: 300px;object-fit:cover;"  src="<?php echo url('assets/image/usuarios.png'); ?>"></a>
                         <h3>Entregas</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
                        <a class="btn btn-success" href="<?php echo url('vendas'); ?>">Ver mais</a>
                    
                </div>

                <div class="col-12 col-md-4 row p-5 rounded align-items-center">
                    
                        <a href="<?php echo url('usuarios'); ?>"><img class="w-100 img-responsive object-fit-contain mb-3"  style="max-height: 300px;object-fit:cover;"  src="<?php echo url('assets/image/agricultores.png'); ?>"></a>
                         <h3>Usuario</h3>
                        <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate dolor in mi pellentesque suscipit. Suspendisse fermentum egestas tellus,</p>
                        <a class="btn btn-success" href="<?php echo url('usuarios'); ?>">Ver mais</a>
                    
                </div>

            </div>
        </section>
    </div>
</div>
@endsection
