@extends('layouts.sande')

@section('content')

<form method="GET" action="{{ route('pesquisadata1') }}">
<div class="teste">

<input type="date" value="" name="data_inicio" />
<input type="date" value="" name="data_fim" />

<button type="submit">vai<button>



@endsection