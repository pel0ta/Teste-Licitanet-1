@extends('layouts.main')
 
@section('title','Teste 1 licitanet')

@section ('content')
    <div id="search-container" class="col-md-12">
        <h1>Buscar algum produto</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control"placeholder="procurar">
        </form>
    </div>         
        <table class="table" id="tabela">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade em Estoque</th>
                    <th scope="col">Cidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>                    
                        <td>{{$product->id}}</td>
                        <td>{{$product->nome}}</td>
                        <td>{{$product->valor}}</td>
                        <td>{{$product->estoque}}</td>
                        <td>{{$product->cidade}}</td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
@endsection
