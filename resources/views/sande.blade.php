<x-app-layout>

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
</head>
<body>
    
var $posto-> {{ Auth::user()->login }};
echo $posto;
    vai testar a paciencia
    <div>{{ Auth::user()->login }}</div>
   {{$hoje = date ('d/m/Y')}}
   <form>
    <div class="form-row">
    <div class="col-md-2">
        <label for="nome">RG</label>
        <input type="text" class="form-control" id="rg" placeholder="" value="" required>
        </div>
        <div class="col-md-2">
        <label for="posto">posto</label>
        <input type="text" class="form-control" id="posto" placeholder="" value="<?php $posto ?>" required>
        </div>

    <div class="col-md-4">
        <label for="nome">Nome do requerente</label>
        <input type="text" class="form-control" id="nome" placeholder="" value="" required>
        </div>
    <div class="col-md-4">
        <label for="pai">Nome do pai</label>
        <input type="text" class="form-control" id="pai" placeholder="" value="" required>
        </div>
    <div class="col-md-4">
        <label for="mãe">Nome da mãe</label>
        <input type="text" class="form-control" id="mae" placeholder="" value="" required>
        </div>
        <div class="form-row">
    <div class="col-md-4">
        <label for="nome">Nome do requerente</label>
        <input type="text" class="form-control" id="nome" placeholder="" value="" required>
        </div>
    <div class="col-md-4">
        <label for="pai">Nome do pai</label>
        <input type="text" class="form-control" id="pai" placeholder="" value="" required>
        </div>
    <div class="col-md-4">
        <label for="mãe">Nome da mãe</label>
        <input type="text" class="form-control" id="mae" placeholder="" value="" required>
        </div>
    </div>
    </div>   
    
  
</body>
</html>
</x-app-layout>