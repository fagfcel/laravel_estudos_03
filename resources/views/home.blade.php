@extends('layouts.main_layout')
@section('content')
{{-- <div class="text-center"> --}}
    {{-- @foreach ($pessoas_linguas as $pessoa => $linguas ) --}}
        {{-- Component --}}
        {{-- <x-card-pessoa :$pessoa :$linguas /> --}}
    {{-- @endforeach --}}
{{-- </div> --}}

{{-- Other componete e $slot --}}
{{-- <div>
    <h4 class="text-info">Como funciona um Slot?</h4>
    <x-other-card > 
        <h1 class="text-danger">Este é o Slot</h1>
    </x-other-card >
</div> --}}

<x-multi-slot>
    <x-slot:title>Este é o titulo!!</x-slot:title>
    <x-slot:content>Este é o contexto!!</x-slot:content>
    <x-slot:footer>
        <ul>
            <li>item 1</li>
            <li>item 2</li>
            <li>item 3</li>
        </ul>
    </x-slot:footer>
</x-multi-slot>

@endsection