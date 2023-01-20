@extends('layouts.sande')
@section('content')


<form method="POST" action="{{ route('post.update2', ['id'=> $events->id] )}}">
@csrf

   

<h2 ID="titulo" class="no-print">TELA DE EDIÇÃO</h2>
<div class="form-row 1linha">
    <div class="form-group col-md-2 ">
        
        <label class="no-print"  for="posto">RG</label>
        <input type="text" class="form-control print" id="rg" name="rg" placeholder="" value="{{$events->rg}}"  >
        </div>

    <div class="form-group col-md-2">
        <label class="no-print" for="datai">Data</label>
        <input type="text" class="form-control no-print" id="datai" name="datai" placeholder="" value="{{$datah}}">
        </div>
        <div class="form-group col-md-2">
        <label for="posto">posto</label>
        <input type="text" Readonly  class="form-control print" id="posto" name="posto" placeholder="" value="{{ Auth::user()->posto }}" >
        </div>

        <div class="form-group col-md-2">
        <label for="usuariologin">usuario/login</label>
        <input type="text" Readonly  class="form-control no-print" id="usuariologin" name="usuariologin" placeholder="" value="{{ Auth::user()->login }}" >
        </div>

        
        <div class="form-group col-md-4">
        <label for="usuarionome">usuario/nome</label>
        <input type="text" Readonly  class="form-control no-print" id="usuarionome" name="usuarionome" placeholder="" value="{{ Auth::user()->name }}" >
        </div>
        </div>


<div class="form-row 2linha">
    <div class="form-group col-md-4">
        <label for="nomereq">Nome do requerente</label>
        <input type="text" class="form-control print" name="nomereq" id="nomereq" placeholder=""value="{{$events->nomereq}}" >
        </div>
    <div class="form-group col-md-4">
        <label for="pai">Nome do pai</label>
        <input type="text" class="form-control print" id="pai" name="pai" placeholder="" value="{{$events->mae}}" >
        </div>
    <div class="form-group col-md-4">
        <label for="mae">Nome da mãe</label>
        <input type="text" class="form-control print" id="mae" name="mae" placeholder="" value="{{$events->pai}}" >
        </div>
    </div>


    <div class="form-row 3linha">
    <div class="form-group col-md-2">
        <label for="dtnasci">Data de nascimento</label>
              <input type="date" class="form-control print" id="dtnasci" name="dtnasci" placeholder="" value="{{$events->dtnasci}}" >
        </div>
    <div class="form-group col-md-2">
        <label for="sexo">Sexo</label>
            <select class="form-control print" id="sexo" name="sexo" value="" >
            <option  value="{{$events->sexo}}">{{$events->sexo}}</option>
           
            <option value="MASCULINO">MASCULINO</option>
              <option value="FEMININO">FEMININO</option>
            </select>
    </div>

    <div class="form-group col-md-2">
        <label for="via">Via</label>
            <select class="form-control print" id="via" name="via" value="" >
            <option  value="{{$events->via}}">{{$events->via}}</option>  
            <option value="1ª VIA">1ª VIA</option>
              <option value="2ª VIA">2ª VIA</option>
              <option value="3ª OU MAIS VIAS">3ª VIA</option>
              <option value="MEC">MEC</option>
              <option value="RET. JUDICIAL">RET. JUDICIAL</option>
            </select>
    </div>
    <div class="form-group col-md-2">
        <label for="graui">Grau de Instrução</label>
            <select class="form-control print" id="graui" name="graui" value="" >
            <option  value="{{$events->graui}}">{{$events->graui}}</option>
            <option value="NÃO ALFABETIZADO">NÃO ALFABETIZADO</option>
              <option value="1º GRAU INCOMPLETO">1º GRAU INCOMPLETO</option>
              <option value="1º GRAU COMPLETO">1º GRAU COMPLETO</option>
              <option value="2º GRAU INCOMPLETO">2º GRAU INCOMPLETO</option>
              <option value="2º GRAU COMPLETO">2º GRAU COMPLETO</option>
            </select>
    </div>
    <div class="form-group col-md-4">
        <label for="profissao">Profissão</label>
        <input type="text" class="form-control print" id="profissao" name="profissao" placeholder="" value="{{$events->profissao}}" >
        </div>
    </div>
    </div>  
    

    <div class="form-row 4linha">
    <div class="form-group col-md-2">
        <label for="estadonatu">Estado nascimento</label>
        <input type="text" class="form-control print" id="estadonatu" name="estadonatu"placeholder="" value="{{$events->estadonatu}}" >
        </div>
    <div class="form-group col-md-4">
        <label for="cidadenatu">Cidade nascimento</label>
        <input type="text" class="form-control print" id="cidadenatu" name="cidadenatu"placeholder="" value="{{$events->cidadenatu}}" >
    </div>

    <div class="form-group col-md-3">
        <label for="pis">PIS</label>
        <input type="text" class="form-control print" id="pis" name="pis" placeholder="" value="{{$events->pis}}" >
        </div>
        <div class="col-md-3">
        <label for="posto">CPF</label>
        <input type="text" class="form-control print" id="cpf" name="cpf" placeholder="" value="{{$events->cpf}}" >
        </div>
    </div>

    <div class="form-row 5linha">
    <div class="form-group col-md-2">
    <label for="estadocivil">estadocivil</label>
            <select class="form-control print" id="estadocivil" name="estadocivil"  >>
            
            <option  value="{{$events->estadocivil}}"> {{$events->estadocivil}}</option>
            <option value="SOLTEIRO">SOLTEIRO</option>
              <option value="CASADO">CASADO</option>
              <option value="DIVORCIADO">DIVORCIADO</option>
             </select>
    </div>
             <div class="form-group col-md-2">
    <label for="tipocert">Certidão</label>
            <select class="form-control print" id="tipocert" name="tipocert" value="" >
            <option  value="{{$events->tipocert}}"> {{$events->tipocert}}</option>  
            <option value="NASCIMENTO">NASCIMENTO</option>
              <option value="CASAMENTO">CASAMENTO</option>
             </select>
            </div>
            <div class="form-group col-md-3">
        <label for="comarca">Comarca</label>
        <input type="text" class="form-control print" id="comarca" name="comarca" placeholder="" value="{{$events->comarca}}" >
        </div>

        <div class="form-group col-md-2">
        <label for="comarca">Distrito</label>
        <input type="text" class="form-control print" id="distrito" name="distrito" placeholder="" value="{{$events->distrito}}" >
        </div>

        <div class="form-group col-md-1">
        <label for="livro">Livro</label>
        <input type="text" class="form-control print" id="livro" name="livro" placeholder="" value="{{$events->livro}}" >
        </div>

        <div class="form-group col-md-1">
        <label for="folha">Folha</label>
        <input type="text" class="form-control print" id="folha" name="folha"placeholder="" value="{{$events->folha}}" >
        </div>

        <div class="form-group col-md-1">
        <label for="termo">Termo</label>
        <input type="text" class="form-control print" id="termo" name="termo"placeholder="" value="{{$events->termo}}" >
        </div>

       
    </div>


    <div class="form-row 6linha">
    <div class="form-group col-md-2">

    
        <label for="dtreg">Data do Reg.</label>
        <input type="date" class="form-control print" id="dtreg" name="dtreg" placeholder="" value="{{$events->dtreg}}" >
        </div>

        <div class="form-group col-md-2">
        <label for="dtcert">Data da Cert.</label>
        <input type="date" class="form-control print" id="dtcert" name="dtcert" placeholder="" value="{{$events->dtcert}}" >
        </div>

        <div class="form-group col-md-2">
        <label for="cep">CEP</label>
        <input type="text" class="form-control print" id="cep" name="cep" placeholder="" value="{{$events->cep}}" >
        </div>

        <div class="form-group col-md-2">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control print" id="telefone" name="telefone" placeholder="" value="{{$events->telefone}}" >
        </div>

        <div class="form-group col-md-2">
        <label for="cidaderes">Cidade reside</label>
        <input type="text" class="form-control print" id="cidaderes" name="cidaderes" placeholder="" value="{{$events->cidaderes}}" >
        </div>

        <div class="form-group col-md-2">
        <label for="estadores">Estado reside</label>
        <input type="text" class="form-control print" id="estadores" name="estadores" placeholder="" value="{{$events->estadores}}" >
        </div>
        </div>
        <div class="form-row 7linha">
        <div class="col-md-4">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control print" id="endereco" name="endereco" placeholder="" value="{{$events->endereco}}" >
        </div>

        <div class="form-group col-md-2">
        <label for="numeroendereco">Nº</label>
        <input type="text" class="form-control print" id="numeroendereco" name="numeroendereco" placeholder="" value="{{$events->numeroendereco}}" >
        </div>

        <div class="form-group col-md-4">
        <label for="complementoendereco">Complemento</label>
        <input type="text" class="form-control print" id="complementoendereco" name="complementoendereco" placeholder="" value="{{$events->complementoendereco}}" >
        </div>

        <div class="form-group col-md-2">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control print" id="bairro" name="bairro" placeholder="" value="{{$events->bairro}}" >
        </div>

        </div>
        
        
        <div class="form-row 8linha">
        <div class="form-group col-md-1">
        <label for="altura">Altura</label>
        <input type="text" class="form-control print" id="altura" name="altura" placeholder="" value="{{$events->altura}}" >
        </div>
        
        <div class="form-group col-md-1">
        <label for="cutis">Cutis</label>
            <select class="form-control print" id="cutis" name="cutis" value="" >
            <option  value="{{$events->cutis}}"> {{$events->cutis}}</option>   
            <option value="PRETA">PRETA</option>
              <option value="PARDA">PARDA</option>
              <option value="AMARELA">BRANCA</option>
           </select>
            </div>

            <div class="form-group col-md-2">

        <label for="cordocabelo">Cor do Cabelo</label>
            <select class="form-control print" id="cordocabelo" name="cordocabelo" value="" >
            <option  value="{{$events->cordocabelo}}"> {{$events->cordocabelo}}</option>    
            <option value="CASTANHOS">CASTANHOS</option>
              <option value="LOUROS">LOUROS</option>
              <option value="GRISALHOS">GRISALHOS</option>
              <option value="RUIVOS">RUIVOS</option>
              <option value="BRANCOS">BRANCOS</option>
           </select>
            </div>         
            <div class="form-group col-md-2">
        <label for="barba">Barba</label>
            <select class="form-control print" id="barba" name="barba" value="" >
            <option  value="{{$events->barba}}"> {{$events->barba}}</option>    
            <option value="IMBERBE">IMBERBE</option>
              <option value="RALA">RALA</option>
              <option value="CHEIA">CHEIA</option>
              <option value="RAPADA">RAPADA</option>
              <option value="LONGA">LONGA</option>
           </select>
            </div>

            <div class="form-group col-md-2">
        <label for="bigode">Bigode</label>
            <select class="form-control print" id="bigode" name="bigode" value="" >
            <option  value="{{$events->bigode}}"> {{$events->bigode}}</option>    
            <option value="NENHUM">NENHUM</option>
              <option value="FINO">FINO</option>
              <option value="GROSSO">GROSSO</option>
              <option value="RAPADO">RAPADO</option>
              <option value="APARADO">APARADO</option>
              <option value="LONGO">LONGO</option>
           </select>
            </div>

            <div class="form-group col-md-2">
        <label for="cordolho">Cor do Olho</label>
            <select class="form-control print" id="cordoolho" name="cordoolho"value="" >
            <option  value="{{$events->corolho}}"> {{$events->corolho}}</option>    
            <option value="CASTANHO">CASTANHO</option>
              <option value="PRETO">PRET</option>
              <option value="AZUL">AZUL</option>
              <option value="DUAS CORES">DUAS CORES</option>
              <option value="VERDES">VERDES</option>
              <option value="ACINZENTADOS">ACINZENTADOS</option>
           </select>
            </div>

            <div class="form-group col-md-2">
        <label for="tipodoolho">Tipo do Olho</label>
            <select class="form-control print" id="tipodoolho" name="tipodoolho" value="" >
            <option  value="{{$events->tipodolho}}"> {{$events->tipodolho}}</option>   
            <option value="REDONDOS">REDONDOS</option>
              <option value="ORIENTAIS">ORIENTAIS</option>
              <option value="GRANDES">GRANDES</option>
              <option value="PEQUENOS">PEQUENOS</option>
            </select>
            </div>

        
    </div>
    <div class="form-row 6linha">

    <div class="form-group col-md-12">
        <label for="anomalias">Anomalias.</label>
        <input type="text" class="form-control print" id="anomalias" name="anomalias" placeholder=""  value="{{$events->anomalias}}" >
        </div>
    <div class="form-group col-md-12">
        <label for="obs">Obervações.</label>
        <input type="text" class="form-control print" id="obs" name="obs" placeholder=""  value="{{$events->obs}}" >
        </div>

   
        
        </div>

        <div>
        
 <button class="no-print" type="submit">ENVIAR</button>
 <input type="button" class="no-print" value="IMPRIMIR" onClick="window.print()"/>
 </div>
  
</form>






@endsection






