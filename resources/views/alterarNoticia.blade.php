@extends('padrao')
@section('content')
<section>
<div class="container cadastroNoticia">
<form class="row g-3" method="post" action="{{route('alterar-banco-noticia',$registrosNoticias->id)}}">
  @csrf
  @method('put')
<!----------------------------------------------------------------------------------------->








<!------------------------------ C A I X A S  D E  T E X T O ----------------------->




  
  <div class="alterarEspaco">
  <div class="alterarcaixa1">
    <div class="col-md-14">
        <label for="inputTopico" class="form-label">Tópico</label>
        <select class="form-select" aria-label="Default select example" for="inputTopico" name="topico" value="{{old('topico',$registrosNoticias->topico)}}">

        <option selected name="$registrosNoticias->topico">Selecione um Tópico</option>
        <option name="topico">Hardware</option>
        <option name="topico">Games</option>
        <option name="topico">Software</option>
        <option name="topico">Progamação</option>
        </select>

    </div>
  </div>

<!----------------------------------------------------------------------------------------->


<div class="alterarcaixa2">
  <div class="col-12">
    <label for="inputTitulo" class="form-label">Título</label>
    <input type="text" name="titulo"
    value="{{old('titulo',$registrosNoticias->titulo)}}"   class="form-control" id="inputTitulo" placeholder="">
    @error('titulo')
    <div class="text-sm-start text-light">Preencher o campo Título.</div>
    @enderror
  </div>
</div>

<!----------------------------------------------------------------------------------------->



<div class="alterarcaixa3">
  <div class="col-12">
    <label for="inputDuvida" class="form-label">Dúvida</label>
    <input type="text" name="duvida" 
    value="{{old('duvida',$registrosNoticias->duvida)}}"   class="form-control" id="inputDuvida" placeholder="">
    @error('duvida')
    <div class="text-sm-start text-light">Preencher o campo Dúvida.</div>
    @enderror
  </div>
</div>




<!----------------------------------------------------------------------------------------->













<!--------------------------------- B O T A O  A T T ------------------------------>

  <div class="atualizarbotao">
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
  </div>


<!----------------------------------------------------------------------------------------->





</form>
</div>
</section>
</div>
</div>
@endsection
