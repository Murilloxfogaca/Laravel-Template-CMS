
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
                    <h3>Detalhes do Agricultor</h3>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a  class="text-secondary" href="<?php echo url('agricultores'); ?>">Agricultores</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$farmer->name}}</li>
                    </ol>
                </nav>
                <div class="row col-12">
                    <div class="col-lg-8">

                        
                        <form action="{{route('agricultores.update', $farmer->id)}}" method="post" role="form" enctype="multipart/form-data" name="insert">
                            @csrf
                            @method('PUT')
                            <div class="form-row row col-12">
                            <div class="form-group col-lg-6 my-2">
                                <label>Nome:</label>
                                <input type="text" name="name" class="form-control" value="{{$farmer->name}}" required>
                            </div>
                            <div class="form-group col-lg-6 my-2">
                                <label>Nome reduzido:</label>
                                <input type="text" name="surname" class="form-control" value="{{$farmer->surname}}" required >
                            </div>

                            <div class="form-group col-lg-6 my-2">
                                <label>CNPJ:</label>
                                <input type="text" name="document" class="form-control cnpj" value="{{$farmer->document}}"  required >
                            </div>
                            
                            <div class="form-group col-lg-12 my-2">
                                <label>Endereço e Cidade</label>
                                <input name="address" class="form-control" required id="address" value="{{$farmer->address}}" />
                            </div>
                            <div class="form-group d-flex col-lg-8 my-2">
                                <button type="submit" class="btn btn-success" >Atualizar</button>
                                @if(count($offers) === 0)
                                    <a class="btn btn-outline-success mx-3" href="<?php echo url('produtos/alimento/'.$farmer->id); ?>" >Adicionar alimento</a>
                                @endif
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="col-lg-4 d-lg-flex d-none">
                        <img alt="Agricultores" class="w-100 img-responsive" src="<?php echo url('assets/image/agricultor.png'); ?>" style="" />
                    </div>
                </div>
                    <!--======================================
                    Lista Agricultores cadastrados
                    =======================================-->
                    @if($offers->count() > 0)
                        <div class="mb-3 mt-5">
                            <h2 class="card-title my-0">Alimentos cadastrados</h2>
                        </div>
                    @endif
                    <div class="row col-12">
                    @foreach($offers as $item)
                        <div class="col-lg-4 mb-4">
                            <div class="card p-4">
                                <h4 class="mb-0"><b>{{$item->name}}</b></h4>
                                <p class="mb-0"><b>Data:</b> {{date('d/m/Y', strtotime($item->created_at))}}</p>
                                <hr class="my-1" />
                                <p class="mb-0"><b>Gênero:</b> {{$item->type}}</p>
                                <p class="mb-0"><b>Tipo:</b> {{$item->type}}</p>
                                <p class="mb-0"><b>Valor:</b> {{"R$ " . number_format($item->value, 2, ',', '.')}}</p>
                                <p class="mb-2"><b>Custo:</b> {{"R$ " . number_format($item->cost, 2, ',', '.')}}</p>
                                <a class="btn btn-outline-success btn-block mt-1" href="<?php echo url('produtos/alimento/detalhes/'.$item->id);?>">Ver mais</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @if(count($offers) > 0)
                    <a class="btn btn-success d-block mx-auto" style="max-width: 240px" href="<?php echo url('produtos/alimento/'.$farmer->id); ?>" >Adicionar alimento</a>
                @endif
            </div>
        </section>
    </div>
</div>
@endsection
