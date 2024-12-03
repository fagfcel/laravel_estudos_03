@extends('layouts.other_layout')
@section('page_title', 'Other Page')

@section('top_bar')
    
@parent
    <div>Conteudo adicinal da barra do top!</div>
@endsection


@section('content')

    <p>Conteúdo da minha VIEW!</p>
@endsection

@section('bottom_bar')
    <div>Conteúdo da barra de rodapé!</div>
@endsection
