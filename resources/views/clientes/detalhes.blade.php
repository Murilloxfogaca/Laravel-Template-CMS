
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
                    <h3>Detalhes do Cliente</h3>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-secondary" href="<?php echo url('clientes'); ?>">Clientes</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $cliente->name; ?></li>
                    </ol>
                </nav>
                <div class="row col-12">
                    <div class="col-lg-8">
                        <form action="<?php echo url('clientes/atualizar/'.$cliente->id);?>"  method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-row row col-12">
                            <div class="form-group col-lg-6 my-2">
                                <label>Nome:</label>
                                <input type="text" name="name" class="form-control" required value="<?php echo $cliente->name; ?>" >
                            </div>
                            <div class="form-group col-lg-6 my-2">
                                <label>CNPJ:</label>
                                <input type="text" name="cnpj" class="form-control cnpj" required value="<?php echo $cliente->cnpj; ?>">
                            </div>
                            <div class="form-group col-lg-6 my-2">
                                <label>Endereço e Cidade</label>
                                <input name="address" class="form-control" required id="endereco" value="<?php echo $cliente->address; ?>"></input>
                            </div>

                            <div class="form-group col-lg-6 my-2">
                                <label>Forma de pagamento:</label>
                                <select class="form-select form-control mb-3" name="form_of_payment" aria-label=".form-select-sm example">
                                    <option <?php if($cliente->form_of_payment === "") echo "selected" ?> value="">NENHUM</option>
                                    <option <?php if($cliente->form_of_payment === "BOLETO") echo "selected" ?> value="BOLETO">BOLETO</option>
                                    <option <?php if($cliente->form_of_payment === "TRANSFERENCIA") echo "selected" ?> value="TRANSFERENCIA">TRANSFERENCIA</option>
                                    <option <?php if($cliente->form_of_payment === "PIX") echo "selected" ?> value="PIX">PIX</option>
                                    <option <?php if($cliente->form_of_payment === "PERMUTA") echo "selected" ?> value="PERMUTA">PERMUTA</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-12 my-2">
                                <label>Observação sobre o Cliente</label>
                                <textarea name="box" class="form-control"> <?php echo $cliente->box; ?></textarea>
                            </div>
                            <div class="form-group col-lg-8 my-2">
                                <button type="submit" class="btn btn-success" >Atualizar</button>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-flex d-none">
                        <img alt="clientes" class="w-100 img-responsive" src="<?php echo url('assets/image/usuarios.png'); ?>" style="" />
                    </div>
                </div>
            </section>
    </div>
</div>
@endsection
