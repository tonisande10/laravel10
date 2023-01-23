@extends('layouts.sande')

@section('content')
<div class="teste">

<input type="date" value="{{ request('data_inicio') }}" name="data_inicio" />
<input type="date" value="{{ request('data_fim') }}" name="data_fim" />


   <div>
   
   <table class="table">
   
   
   
   <thead>
    
   <tr>
     
     
       <th scope="col">Nome</th>
       <th scope="col">Data</th>
      
       
     </tr>
   
   <tbody>
   @foreach($produtos as $produto)
     <tr>
    
     <td width="10%"><?php echo $produto['nomereq']; ?></td>
     <td width="33%"  ><?php echo $produto['datai']; ?></td>
  
        
   </thead>
       
         </tr>
         @endforeach
   </tbody>
 </table>
 
  
  
   



@endsection