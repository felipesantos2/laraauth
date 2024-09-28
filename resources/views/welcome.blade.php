@extends('layouts.master')

@section('title', 'Welcome')

@section('content')


    <x-success-alert />

    <x-navigation-links>
        <x-slot:menu>

            <x-menu-link href="{{ route('login.create') }}" target="_self">
                <x-slot:name>Login</x-slot:name>
            </x-menu-link>

            <x-menu-link href="{{ route('login.create') }}" target="_self">
                <x-slot:name>Login</x-slot:name>
            </x-menu-link>

            <x-menu-link href="{{ route('login.create') }}" target="_self">
                <x-slot:name>Login</x-slot:name>
            </x-menu-link>

            <x-menu-link href="{{ route('login.create') }}" target="_self">
                <x-slot:name>Login</x-slot:name>
            </x-menu-link>

        </x-slot:menu>
    </x-navigation-links>


    {{-- <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <h1 class="text-2xl">
                Bem-vindo ...
        </h1>
    </div> --}}

@endsection
