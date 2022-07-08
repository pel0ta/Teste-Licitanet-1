
@extends('layouts.main')
 
@section('title','Cadastrar Produto')

@section ('content')

       <div id="event-create-container"class="col-md-6 offset-md-3">
              <h1>Cadastrar Novo Produto</h1>
              <form action="/products" method="POST">
                     @csrf
                     <div class="Form-group">
                            <label for="title">Produto</label>
                            <input type="text"class="form-control" id="nome" name="nome" placeholder="nome do produto">
                     </div>
                     <div class="Form-group">
                            <label for="title">valor</label>
                            <input type="text"class="form-control" id="valor" name="valor" placeholder="valor do produto">
                     </div>
                     <div class="Form-group">
                            <label for="title">Quantidade</label>
                            <input type="text"class="form-control" id="estoque" name="estoque" placeholder="Quantidade de estoque">
                     </div>
                     <div class="Form-group">
                            <label for="title">Cidade</label>
                            <input type="text"class="form-control" id="cidade" name="cidade" placeholder="Cidade onde o produto se encontra">
                     </div>
                     <input type="submit" class="btn btn-primary" value="Cadastrar Produto">
              </form>
       </div>

@endsection