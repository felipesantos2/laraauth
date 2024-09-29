@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <h1 class="text-2xl">
            Bem-vindo ao DASHBOARD
        </h1>
    </div>

    {{ html()->form('PUT', '/post')->open() }}

    {{ html()->email('email')->placeholder('Your e-mail address') }}

    {{html()->div()->text('hello World')->class('text-2xl text-red-500 uppercase') }}

    {{html()->span()->text('hello World')->class('text-2xl text-red-500 uppercase') }}

    {{ html()->form()->close() }}

@endsection
