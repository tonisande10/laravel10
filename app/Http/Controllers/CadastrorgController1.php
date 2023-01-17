<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelCadastrorg;



class CadastrorgController extends Controller
{
    
    
    public function create()
    {
        $datah=date('d/m/Y');
        return view('cadastrorg/index', ['datah'=> $datah]);
    }


    public function store(Request $request)
    {
      
    $event= new ModelCadastrorg();
    $event->nomereq = $request->nomereq;
    $event->save();
    return redirect('/posts');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


public function push(Request $request)
{
    $datah=date('d/m/Y');
    
$search=request('nomereq');
if ($search){
$events = ModelCadastrorg::where([['nomereq','like','%'.$search]])->limit(2)->orderBy('id', 'DESC')->get();

}
else{
$events=ModelCadastrorg::all();
}
return view('cadastrorg/edit1',['events'=>$events,'search'=>$search], ['datah'=> $datah]);
}




public function update(Request $request)
{
    $datah=date('d/m/Y');
    

    $event= new ModelCadastrorg();
$event->id = $request->id;
$event->nomereq = $request->nomereq;
$event->save();

return view('cadastrorg/edit1',['datah'=> $datah]);
}
public function update2(Request $request, $id)
{
    $datah=date('d/m/Y');
    $events = ModelCadastrorg::findOrFail($id);

    $events-> update([
'nomereq'=>$request->nomereq,

    ])
return 'produto cadastrado com sucesso'
}



public function update1($id)
{
    $datah=date('d/m/Y');
$event = ModelCadastrorg::findOrFail($id);
return view('cadastrorg/editid',['event' => $event],['datah'=> $datah]);
}
public function visual($id)
{
    $datah=date('d/m/Y');
   
return view('cadastrorg/visual',['datah'=> $datah]);
}

public function pesquisar()
{
    $datah=date('d/m/Y');
  
return view('cadastrorg/pesquisa',['datah'=> $datah]);
}


}