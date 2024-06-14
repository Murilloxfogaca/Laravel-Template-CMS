
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
                <div class="section-header pb-3 row">
                    <div class="col-lg-8">
                    <h3>Adicionar usuário</h3>
                    </div>
                    <div class="col-lg-4 text-md-end">
                        <a class="btn btn-success btn-block" href="<?php echo url('usuarios');?>">Ver Usuários</a>
                    </div>
                </div>
               
                <div class="row wow fadeInUp">
                    <div class="col-lg-12 mx-auto">
                        <div class="card mb-4 ">
                            <div class="card-header" id="heading-insert">
                                <div class="d-flex justify-content-between w-100">
                                    <h3>Adicionar Usuário</h3>    
                                </div>
                            </div>
                            <div id="collapse-insert" class="collapse bg-light" aria-labelledby="heading-insert" style="display: flex;">
                                <div class="card-body">
                                    <form action="<?php echo url('usuario/adicionar-solicitacao');?>" method="post" role="form" name="adicionar">
                                        <div class="form-row row col-12">
                                      
                                        <div class="form-group col-lg-4 my-2">
                                            <label>Nome:</label>
                                            <input type="text" name="nome" class="form-control" required >
                                        </div>
                                        <div class="form-group col-lg-4 my-2">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control" required >
                                        </div>
                                        
                                        <div class="form-group col-lg-4 my-2">
                                            <label>Tipo:</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option value="2">Normal</option>
                                                <option value="1">Administrador</option>
                                            </select>
                                        </div>

                                        <div class="text-right"><button type="submit" class="btn btn-success" >Adicionar Usuário</button></div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!--======================================
                        Lista Clientes cadastrados
                        =======================================-->
                        <h4 class="card-title my-3">Solicitações</h4>
                        <?php 
                            if (!empty($usuarios)) { ?>
                            <!-- h6>Não foram encontrados Clientes cadastrados.</h6><php } else { ?-->
                            <div class="row wow fadeInUp">
                                <?php foreach ($usuarios as $key => $item) { ?>
                                <div class="col-lg-4 mb-4">
                                    <div class="card p-4">
                                        <h4 class="mb-2"><b><?php echo $item['name']; ?></b></h4>
                                        <p class="mb-0"><b>Email:</b> <?php echo $item['email']; ?></p>
                                        <p class="mb-4"><b>Data:</b> <?php echo date("d/m/Y", strtotime($item['created_at'])); ?></p>
                                        <a class="btn btn-danger btn-block mt-1" href="<?php echo url('usuarios/remove-associate');?>">Cancelar</a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
