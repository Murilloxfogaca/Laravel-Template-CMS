
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
                <div class="section-header pb-3">
                    <h3>Clientes</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a  class="text-secondary" href="{{url('painel')}}">Painel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Clientes</li>
                        </ol>
                    </nav>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-lg-12 mx-auto">
                        <div class="card mb-4 ">
                            <div class="card-header" id="heading-insert">
                                <div class="d-flex justify-content-between w-100">
                                    <h3>Adicionar Clientes</h3>
                                   
                                </div>
                            </div>
                            <div id="collapse-insert" class="collapse bg-light" aria-labelledby="heading-insert" style="display: flex;">
                                <div class="card-body">
                                    <form action="<?php echo url('clientes/adicionar');?>" method="post" role="form" enctype="multipart/form-data" name="insert">
                                        @csrf
                                        <div class="form-row row col-12">
                                      
                                        <div class="form-group col-lg-4 my-2">
                                            <label>Nome:</label>
                                            <input type="text" name="name" class="form-control" required >
                                        </div>

                                        <div class="form-group col-lg-4 my-2">
                                            <label>CNPJ:</label>
                                            <input type="text" name="cnpj" class="form-control cnpj" required >
                                        </div>

                                      
                                        
                                        <div class="form-group col-lg-4 my-2">
                                            <label>Forma de pagamento:</label>
                                            <select class="form-select form-control mb-3" name="form_of_payment" aria-label=".form-select-sm example">
                                                <option selected disabled>Selecione um prazo de pagamentos</option>
                                                <option value="">NENHUM</option>
                                                <option value="BOLETO">BOLETO</option>
                                                <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                                                <option value="PIX">PIX</option>
                                                <option value="PERMUTA">PERMUTA</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-4 my-2">
                                            <label>Observação:</label>
                                            <input type="text" name="box" class="form-control" required >
                                        </div>
                                        
                                        <div class="form-group col-lg-8 my-2">
                                            <label>Endereço:</label>
                                            <input type="text" name="address" class="form-control " required >
                                        </div>

                                    </form>
                                    <div class="text-right mt-3"><button type="submit" class="btn btn-success" >Adicionar Cliente</button></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!--======================================
                        Lista Clientes cadastrados
                        =======================================-->
                        <h4 class="card-title my-3">Clientes cadastrados</h4>
                        <?php 
                            if (!empty($clientes)) { ?>
                            <!-- h6>Não foram encontrados Clientes cadastrados.</h6><php } else { ?-->
                            <div class="row wow fadeInUp">
                                @foreach ($clientes as $key => $item) 
                                    <div class="col-lg-4 mb-4">
                                    <div class="card p-4">
                                        <h4 class="mb-2"><b>{{$item['name']}}</b></h4>
                                        <p class="mb-0"><b>Endereço:</b> {{$item['address']}}</p>
                                        <p class="mb-3"><b>CNPJ:</b> {{$item['cnpj']}}</p>
                                        <a class="btn btn-success btn-block mt-1" href="{{url('clientes/detalhes/'.$item['id'])}}">Ver mais</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        <?php } ?>
                       
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
