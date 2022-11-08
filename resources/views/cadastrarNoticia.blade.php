@extends('padrao')
@section('content')
<section>



  <div class="titulo">
    <h1><p class="text-center">Adote ou doe um pet!</p></h1>
  </div>



  <div class="formulario">

  <div class="container1">
    <form class="row g-3" method="post" action="{{route('salvar-bancoNoticia')}}">
      @csrf



      <div class="col-md-6">
      <label for="inputTopico" class="form-label">Adotar/Doar:</label>
      <select class="form-select" aria-label="Default select example" for="inputTopico" name="topico" value="{{old('topico')}}">

      <option selected>Selecione um Tópico</option>
      <option name="topico">Doar</option>
      <option name="topico">Adotar</option>
      </select>

      </div>

      
      <div class="col-md-6">
        <label for="inputTitulo" class="form-label">Nome:</label>
        <input type="text" name="titulo" value="{{old('titulo')}}" class="form-control" id="inputTitulo" placeholder="Informe o nome do dono"> 
        @error('titulo')
        <div class="text-sm-start text-dark">Preencher o campo título.</div>
        @enderror
      </div>

      <div class="col-md-6">
        <label for="inputTitulo" class="form-label">Nome:</label>
        <input type="text" name="titulo" value="{{old('titulo')}}" class="form-control" id="inputTitulo" placeholder="Informe o nome do pet"> 
        @error('titulo')
        <div class="text-sm-start text-dark">Preencher o campo título.</div>
        @enderror
      </div>

      
      <div class="col-md-6">
        <label for="inputTitulo" class="form-label">Raça:</label>
        <input type="text" name="titulo" value="{{old('titulo')}}" class="form-control" id="inputTitulo" placeholder="Informe a raça"> 
        @error('titulo')
        <div class="text-sm-start text-dark">Preencher o campo título.</div>
        @enderror
      </div>



      <div class="col-md-14">
        <label for="inputTitulo" class="form-label">Sobre:</label>
        <textarea class="form-control" placeholder="Escreva sua dúvida" id="floatingTextarea2" style="height: 100px" name="duvida" value="{{old('duvida')}}"></textarea>
        @error('titulo')
        <div class="text-sm-start text-dark">Preencher o campo dúvida.</div>
        @enderror
      </div>








      <div class="pronto">
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      </div>


    </form>
  </div>

  </div>

</div>

</section>
@endsection
