@extends('layouts.main_layout')
@section('content')
<div class="text-center">
    @foreach ($pessoas_linguas as $pessoa => $linguas )
        {{-- Component --}}
        <x-card-pessoa :namePessoa="$pessoa" :linguasPessoa="$linguas"/>
    @endforeach
</div>

@endsection