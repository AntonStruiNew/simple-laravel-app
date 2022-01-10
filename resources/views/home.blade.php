@extends('layouts.app')

@section('title')Главная страница @endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore molestiae ipsum mollitia alias voluptate eveniet nihil beatae expedita odio! Quaerat sequi iusto eveniet magni expedita aliquam nobis, aperiam quo voluptate.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection