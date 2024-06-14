
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
                    <h3>Agricultores</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a  class="text-secondary" href="<?php echo url('painel'); ?>">Painel</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agricultores</li>
                        </ol>
                    </nav>
                </div>
                <div class="row wow fadeInUp">
                    <div class="col-md-4 border p-4">
                        <h3>Adicionar agricultor</h3>
                        <div id="collapse-insert" class="collapse " aria-labelledby="heading-insert" style="display: flex;">
                            <form action="{{route('agricultores.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row row col-12">
                                
                                <div class="form-group col-lg-12 my-2">
                                    <label class="mb-1">Nome do responsável:</label>
                                    <input type="text" name="name" class="form-control"  value="{{ old('name') }}" placeholder="Ex. Jorge Aragão" required >
                                </div>
                                <div class="form-group col-lg-12 my-2">
                                    <label class="mb-1">Nome reduzido ou apelido:</label>
                                    <input type="text" name="surname" class="form-control" placeholder="Ex. Jorginho" value="{{ old('surname') }}" required >
                                </div>
                                <div class="form-group col-lg-12 my-2">
                                    <label class="mb-1">Razao social:</label>
                                    <input type="text" name="razao_social" class="form-control" value="{{ old('razao_social') }}" placeholder="Ex. Jorge Aragão Galpões LTDA" required >
                                </div>
                                <div class="form-group col-lg-12 my-2">
                                    <label class="mb-1">CNPJ:</label>
                                    <input type="text" name="document" value="{{ old('document') }}" placeholder="Ex. 11.111.111/1111-11" class="form-control cnpj" required >
                                </div>
                                
                                <div class="form-group col-lg-12 my-2">
                                    <label class="mb-1">Endereço e cidade</label>
                                    <input name="address" class="form-control"  value="{{ old('address') }}"  placeholder="Ex. Ubaldino do Amaral, 249 - Sorocaba" required id="address" />
                                </div>


                                <div class="text-right"><button type="submit" class="btn btn-success w-100 mt-3" >Adicionar Agricultor</button></div>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-8 px-4">
                        <!--======================================
                        Lista Agricultores cadastrados
                        =======================================-->
                        <h4 class="card-title mb-4 h4 mt-0">Agricultores cadastrados:</h4>
                        <div class="row wow fadeInUp">
                            @foreach($farmers as $item)
                            <div class="col-lg-6 mb-4">
                                <div class="card p-4">
                                    <h4 class="mb-2"><b>{{ $item->name }}</b></h4>
                                    <p class="mb-0"><b>Endereço:</b> {{ $item->address }}</p>
                                    <p class="mb-0"><b>CNPJ:</b> {{ $item->document }}</p>
                                    <a class="btn btn-success btn-block mt-1" href="<?php echo url('produtos/alimento/'.$item->id); ?>">Adicionar produto</a>
                                    <a class="btn btn-outline-success btn-block mt-1" href="<?php echo url('agricultores/detalhes/'.$item->id);?>">Ver mais</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @if(count($farmers) === 0)
                            <h3 class="text-secondary h3">Nenhum Agricultor cadastrado!</h3>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
