@extends('padrao')
@section('content')




<section class="container m-5">


<div class="buscaEditar">
<div class="container m-5">



<form method="get" action="{{route('ver-noticia')}}">
<div class="row center">
  <div class="col">
    <input type="text" id="topico" name="topico" class="form-control" placeholder="Busque por tópico" aria-label="First name">
  </div>

  <div class="col">
  <button type="submit" class="btn btn-info">Buscar</button>
  </div>
</form>



</div>
</div>





<table class="table">
  <thead>
    <tr>
      <th scope="col">Topico</th>
      <th scope="col">Titulo</th>
      <th scope="col">Duvida</th>
    </tr>
  </thead>
  <tbody>




    @foreach($registrosNoticia as $registrosNoticias)
    <tr>
      <div class="topico10">
      <td>{{$registrosNoticias->topico}}</td>
      </div>


      <div class="topico11">
      <td>{{$registrosNoticias->titulo}}</td>
      </div>



      <div class="topico12">
      <td>{{$registrosNoticias->duvida}}</td>
      </div>

      
      

    </tr>
    @endforeach





  </tbody>
</table>

</section>
</div>

@endsection