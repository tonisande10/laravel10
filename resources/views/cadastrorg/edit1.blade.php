@extends('layouts.sande')

@section('content')
<script>
var btn = document.querySelector('button[type="button"]');
btn.addEventListener('click', function(){
    window.location='/update1/$event->id';
});
</script>



    <h2 class="no-print" id="titulo">LISTA DE CANDIDATOS</h2>
    <div class="1linha">
    @foreach($events as $event)
    <table class="table">
    
   
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Mãe</th>
      <th scope="col">Ações</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
    <td><?php echo $event['id']; ?></td>
    <td><?php echo $event['nomereq']; ?></td>
    <td><?php echo $event['mae']; ?></td>
       
         <td>
          
            <a href="/visual/<?php echo $event['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
            <a href="/update1/<?php echo $event['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
            <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $event['id']; ?>"><i class="fa fa-trash"></i> Excluir</a>
        </td>
        </tr>
  </tbody>
</table>
@endforeach

   

      
@if(count($events) == 0)
<p>Não ha eventos disponiveis<p>
@endif



@endsection