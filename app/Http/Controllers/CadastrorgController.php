<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelCadastrorg;



class CadastrorgController extends Controller
{
    
    public function index()
    {
        $datah=date('d/m/Y');
        return view('cadastrorg/index', ['datah'=> $datah]);
    }

    public function sande()
    {

        
       $datah=date('d/m/Y');
        return view('sande', ['datah'=> $datah]);


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datah=date('d/m/Y');
        return view('cadastrorg/index', ['datah'=> $datah]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
    ModelCadastrorg::create([
        'rg' => $request->rg,
        'datai' => $request->datai,
        'posto' => $request->posto,
        'usuariologin' => $request->usuariologin,
        'usuarionome' => $request->usuarionome,
        'nomereq' => $request->nomereq,
        'pai' => $request->pai,
        'mae' => $request->mae,
        'dtnasci' => $request->dtnasci,
        'sexo' => $request->sexo,
        'via' => $request->via,
        'graui' => $request->graui,
        'profissao' => $request->profissao,
        'estadonatu' => $request->estadonatu,
        'cidadenatu' => $request->cidadenatu,
        'pis' => $request->pis,
        'cpf' => $request->cpf,
        'tipocert' => $request->tipocert,
        'comarca' => $request->comarca,
        'livro' => $request->livro,
        'folha' => $request->folha,
        'termo' => $request->termo,
        'dtreg' => $request->dtreg,
        'dtcert' => $request->dtcert,
        'cutis' => $request->cutis,
        'cordocabelo' => $request->cordocabelo,
        'barba' => $request->barba,
        'bigode' => $request->bigode,
        'corolho' => $request->cordoolho,
        'tipodolho' => $request->tipodoolho,
        'obs' => $request->obs,
        'anomalias' => $request->anomalias,
        'endereco' => $request->endereco,
'numeroendereco' => $request->numeroendereco,
'complementoendereco' => $request->complementoendereco,
'bairro' => $request->anomalias,
'cidaderes' => $request->bairro,
'estadores' => $request->estadores,
'distrito' => $request->distrito,
'estadocivil' => $request->estadocivil,
'altura' => $request->altura,
'cep' => $request->cep, 
'telefone' => $request->telefone

    ]);

    
    return view ('cadastrorg/inicialrg');
    
/* dd($request->all()); */

        
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
       $search = $request->input('nomereq');
    $search1 = $request->input('mae');

    
if ($search){
 
$events =  ModelCadastrorg::where('nomereq','like', '%'.$request->input('nomereq').'%')
->where('mae','like', '%'.$request->input('mae').'%')
->limit(10)
->orderBy('id', 'DESC')
->get(); 


/* ModelCadastrorg::whereColumn([
    ['nomereq', 'like', $search ],
    ['mae', 'like', $search1],
])->get(); */


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


public function update1($id)
{
    $datah=date('d/m/Y');
    $events = ModelCadastrorg::findOrFail($id);
    
    return view('cadastrorg/editid',['events' => $events,'datah'=> $datah]);
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
public function update2(Request $request, $id)
{
    $datah=date('d/m/Y');
    $events = ModelCadastrorg::findOrFail($id);
   
    $events-> update([
        'rg' => $request->rg,
        'datai' => $request->datai,
        'posto' => $request->posto,
        'usuariologin' => $request->usuariologin,
        'usuarionome' => $request->usuarionome,
        'nomereq' => $request->nomereq,
        'pai' => $request->pai,
        'mae' => $request->mae,
        'dtnasci' => $request->dtnasci,
        'sexo' => $request->sexo,
        'via' => $request->via,
        'graui' => $request->graui,
        'profissao' => $request->profissao,
        'estadonatu' => $request->estadonatu,
        'cidadenatu' => $request->cidadenatu,
        'pis' => $request->pis,
        'cpf' => $request->cpf,
        'estadocivil' => $request->estadocivil,
        'tipocert' => $request->tipocert,
        'comarca' => $request->comarca,
        'distrito' => $request->distrito,
        'livro' => $request->livro,
        'folha' => $request->folha,
        'termo' => $request->termo,
        'dtreg' => $request->dtreg,
        'dtcert' => $request->dtcert,
        'cutis' => $request->cutis,
        'cordocabelo' => $request->cordocabelo,
        'barba' => $request->barba,
        'bigode' => $request->bigode,
        'corolho' => $request->cordoolho,
        'tipodolho' => $request->tipodoolho,
        'obs' => $request->obs,
        'anomalias' => $request->anomalias,
        'cep' => $request->cep,
        'telefone' => $request->telefone,
        'cidaderes' => $request->cidaderes,
        'estadores' => $request->estadores,
        'endereco' => $request->endereco,
        'numeroendereco' => $request->numeroendereco,
        'bairro' => $request->bairro,
        'complementoendereco' => $request->complementoendereco


    ]);
return "produto cadastrado com sucesso";
}

public function pesquisadata1(Request $request)
{
    $query = ModelCadastrorg::query();



    $data_inicio = \DateTime::createFromFormat('d/m/Y', $request->get('data_inicio'));
    $data_fim    = \DateTime::createFromFormat('d/m/Y', $request->get('data_fim'));

     if ($data_inicio && $data_fim) {
         $query->whereDate('datai', '>=', $data_inicio);
         $query->whereDate('datai', '<=', $data_fim);
     }

     $produtos = $query->paginate();

     return view('cadastrorg/teste2', compact('produtos'));

}
public function pesquisadata()
{
    return view('cadastrorg/teste1');

}



}