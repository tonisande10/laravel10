

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="{{ asset('css/sande.css') }}" rel="stylesheet"> 
<link href="{{ asset('css/print.css') }}" media="print" rel="stylesheet"> 
</head>

 
   <form>
    <h2 class="no-print">MASCÁRA INFORMATIZADA</h2>
    <div class="1linha">
    <div class="col-md-2">
        <label class="no-print"  for="posto">RG</label>
        <input type="text" class="form-control print" id="rg" placeholder="" value="" >
        </div>
    <div class="col-md-2">
        <label class="no-print" for="nome">Data</label>
        <input type="text" class="form-control print" id="datai" placeholder="" value="{{$datah}}">
        </div>
        <div class="col-md-2">
        <label for="posto">posto</label>
        <input type="text" class="form-control print" id="posto" placeholder="" value="{{ Auth::user()->posto }}" >
        </div>

        <div class="col-md-2">
        <label for="usuariologin">usuario/login</label>
        <input type="text" class="form-control print" id="usuariologin" placeholder="" value="{{ Auth::user()->login }}" >
        </div>

        
        <div class="col-md-4">
        <label for="usuarionome">usuario/nome</label>
        <input type="text" class="form-control no-print" id="usuarionome" placeholder="" value="{{ Auth::user()->name }}" >
        </div>
        </div>
</br></br></br>


<div class="2linha">
    <div class="col-md-4">
        <label for="nomereq">Nome do requerente</label>
        <input type="text" class="form-control print" id="nomereq" placeholder="" value="" >
        </div>
    <div class="col-md-4">
        <label for="pai">Nome do pai</label>
        <input type="text" class="form-control print" id="pai" placeholder="" value="" >
        </div>
    <div class="col-md-4">
        <label for="mae">Nome da mãe</label>
        <input type="text" class="form-control print" id="mae" placeholder="" value="" >
        </div>
    </div></br></br></br>


    <div class="3linha">
    <div class="col-md-2">
        <label for="dtnasci">Data de nascimento</label>
              <input type="text" class="form-control print" id="dtnasci" placeholder="" value="" >
        </div>
    <div class="col-md-2">
        <label for="sexo">Sexo</label>
            <select class="form-control print" id="sexo" value="" >
              <option value="MASCULINO">MASCULINO</option>
              <option value="FEMININO">FEMININO</option>
            </select>
    </div>

    <div class="col-md-2">
        <label for="via">Via</label>
            <select class="form-control print" id="via" value="" >
              <option value="1ª VIA">1ª VIA</option>
              <option value="2ª VIA">2ª VIA</option>
              <option value="3ª OU MAIS VIAS">3ª VIA</option>
              <option value="MEC">MEC</option>
              <option value="RET. JUDICIAL">RET. JUDICIAL</option>
            </select>
    </div>
    <div class="col-md-2">
        <label for="graui">Grau de Instrução</label>
            <select class="form-control print" id="graui" value="" >
              <option value="NÃO ALFABETIZADO">NÃO ALFABETIZADO</option>
              <option value="1º GRAU INCOMPLETO">1º GRAU INCOMPLETO</option>
              <option value="1º GRAU COMPLETO">1º GRAU COMPLETO</option>
              <option value="2º GRAU INCOMPLETO">2º GRAU INCOMPLETO</option>
              <option value="2º GRAU COMPLETO">2º GRAU COMPLETO</option>
            </select>
    </div>
    <div class="col-md-4">
        <label for="profissao">Profissão</label>
        <input type="text" class="form-control print" id="profissao" placeholder="" value="" >
        </div>
    </div>
    </div>  
    </br></br></br> 
    <div class="4linha">
    <div class="col-md-2">
        <label for="estadonatu">Estado nascimento</label>
        <input type="text" class="form-control print" id="estadonatu" placeholder="" value="" >
        </div>
    <div class="col-md-4">
        <label for="cidadenatu">Cidade nascimento</label>
        <input type="text" class="form-control print" id="cidadenatu" placeholder="" value="" >
    </div>

    <div class="col-md-3">
        <label for="pis">PIS</label>
        <input type="text" class="form-control print" id="pis" placeholder="" value="" >
        </div>
        <div class="col-md-3">
        <label for="posto">CPF</label>
        <input type="text" class="form-control print" id="cpf" placeholder="" value="" >
        </div>
    </div>
    <div class="4linha">
    <div class="col-md-2">
        <label for="tipocert">Tipo de Certidão</label>
            <select class="form-control print" id="tipocert" value="" >
              <option value="NASCIMENTO">NASCIMENTO</option>
              <option value="CASAMENTO">CASAMENTO</option>
    
            </select>
            </div>
            <div class="col-md-3">
        <label for="comarca">Comarca</label>
        <input type="text" class="form-control print" id="comarca" placeholder="" value="" >
        </div>

        <div class="col-md-1">
        <label for="livro">Livro</label>
        <input type="text" class="form-control print" id="livro" placeholder="" value="" >
        </div>

        <div class="col-md-1">
        <label for="folha">Folha</label>
        <input type="text" class="form-control print" id="folha" placeholder="" value="" >
        </div>

        <div class="col-md-1">
        <label for="termo">Termo</label>
        <input type="text" class="form-control print" id="termo" placeholder="" value="" >
        </div>

        <div class="col-md-2">
        <label for="dtreg">Data do Reg.</label>
        <input type="text" class="form-control print" id="dtreg" placeholder="" value="" >
        </div>

        <div class="col-md-2">
        <label for="dtcert">Data da Cert.</label>
        <input type="text" class="form-control print" id="dtcert" placeholder="" value="" >
        </div>
    </div>


    <div class="5linha">
    <div class="col-md-2">
        <label for="cutis">Cutis</label>
            <select class="form-control print" id="cutis" value="" >
              <option value="PRETA">PRETA</option>
              <option value="PARDA">PARDA</option>
              <option value="AMARELA">BRANCA</option>
           </select>
            </div>
            <div class="col-md-2">

        <label for="cordocabelo">Cor do Cabelo</label>
            <select class="form-control print" id="cordocabelo" value="" >
              <option value="CASTANHOS">CASTANHOS</option>
              <option value="LOUROS">LOUROS</option>
              <option value="GRISALHOS">GRISALHOS</option>
              <option value="RUIVOS">RUIVOS</option>
              <option value="BRANCOS">BRANCOS</option>
           </select>
            </div>         
            <div class="col-md-2">
        <label for="barba">Barba</label>
            <select class="form-control print" id="barba" value="" >
              <option value="IMBERBE">IMBERBE</option>
              <option value="RALA">RALA</option>
              <option value="CHEIA">CHEIA</option>
              <option value="RAPADA">RAPADA</option>
              <option value="LONGA">LONGA</option>
           </select>
            </div>

            <div class="col-md-2">
        <label for="bigode">Bigode</label>
            <select class="form-control print" id="bigode" value="" >
              <option value="NENHUM">NENHUM</option>
              <option value="FINO">FINO</option>
              <option value="GROSSO">GROSSO</option>
              <option value="RAPADO">RAPADO</option>
              <option value="APARADO">APARADO</option>
              <option value="LONGO">LONGO</option>
           </select>
            </div>

            <div class="col-md-2">
        <label for="corolho">Cor do Olho</label>
            <select class="form-control print" id="bigode" value="" >
              <option value="CASTANHO">CASTANHO</option>
              <option value="PRETO">PRET</option>
              <option value="AZUL">AZUL</option>
              <option value="DUAS CORES">DUAS CORES</option>
              <option value="VERDES">VERDES</option>
              <option value="ACINZENTADOS">ACINZENTADOS</option>
           </select>
            </div>

            <div class="col-md-2">
        <label for="tipoolho">Tipo do Olho</label>
            <select class="form-control print" id="tipoolho" value="" >
              <option value="REDONDOS">REDONDOS</option>
              <option value="ORIENTAIS">ORIENTAIS</option>
              <option value="GRANDES">GRANDES</option>
              <option value="PEQUENOS">PEQUENOS</option>
            </select>
            </div>

        
    </div>
    <div class="6linha">
    <div class="col-md-12">
        <label for="obs">Obervações.</label>
        <input type="text" class="form-control print" id="obs" placeholder="" value="" >
        </div>

        <div class="col-md-12">
        <label for="anomalias">Anomalias.</label>
        <input type="text" class="form-control print" id="anomalias" placeholder="" value="" >
        </div>
        
        </div>

    
    <input type="button" value="Print this page" onClick="window.print()"/>
</form>
</body> 

</html>
