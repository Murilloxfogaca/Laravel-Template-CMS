
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
                        <h3>Usuários ativos</h3>
                    </div>
                    <div class="col-lg-4 text-md-end">
                        <a class="btn btn-success btn-block" href="<?php echo url('usuario/solicitacoes');?>">Adicionar novo usuário</a>
                    </div>
                </div>
                <div class="row wow fadeInUp">
                    <?php 
                        if (!empty($usuarios)) { ?>
                        <!-- h6>Não foram encontrados Clientes cadastrados.</h6><php } else { ?-->
                        <div class="row wow fadeInUp">
                            <?php foreach ($usuarios as $key => $item) { ?>
                            <div class="col-lg-4 mb-4">
                                <div class="card p-4">
                                    <h4 class="mb-2"><b><?php echo $item['name']; ?></b></h4>
                                    <p class="mb-1"><b>Email:</b> <?php echo $item['email']; ?></p>
                                    <p class="mb-2"><b>Status:</b> <?php echo ($item['email_verified_at']) ? "Ativo" :  "Inativo"; ?></p>
                                    <a class="btn btn-outline-danger mt-1" href="<?php echo url('usuario/reset-password');?>">Resetar senha</a>
                                    <a class="btn btn-danger btn-block mt-1" href="<?php echo url('usuario/remove-user/'.$item['id']);?>">Remover</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
