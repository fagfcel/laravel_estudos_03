@extends('layouts.main_layout')
@section('content')
    <h3>Este texto faz parte da view!</h3>
    
    {{-- renderizar o component --}}
    <x-my-component message="mensagem passada para dentro do componente" />
    
    {{-- Rrenderizar component que exite dentro de uma sub pasta --}}
    <x-admin.admin-card :name="$myName" teste="Olá Mundo"/>

    <h3>Este texto faz parte da view!</h3>
    <p>{{ $myName }}</p>

    @endsection