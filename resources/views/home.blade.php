@extends('layouts.main_layout')
@section('content')
{{-- <div class="text-center"> --}}
    {{-- @foreach ($pessoas_linguas as $pessoa => $linguas ) --}}
        {{-- Component --}}
        {{-- <x-card-pessoa :$pessoa :$linguas /> --}}
    {{-- @endforeach --}}
{{-- </div> --}}

{{-- Other componete e $slot --}}
<div>
    <h4 class="text-info">Como funciona um Slot?</h4>
    <x-other-card > 
        <h1 class="text-danger">Este é o Slot</h1>
    </x-other-card >
</div>

@endsection