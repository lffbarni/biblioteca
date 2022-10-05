@extends('layout.app')
@section('title', 'Listagem de Contatos')
@section('content')
    <h1>Listagem de Contatos</h1>
    <ul>
        <li>
            <a href="{{url('contatos/'.$contato->id)}}"></a>
        </li>
    </ul>
@endsection
@endsection