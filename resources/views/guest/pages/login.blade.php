@extends('layouts.form')

@section('title', 'Login')

@section('content')

    {{-- https://www.material-tailwind.com/docs/html/form --}}
    <div class="container h-screen">
        <div class=" w-full h-full flex justify-center items-center">

            <div class="relative flex flex-col rounded-xl bg-transparent shadow-lg p-8 border">

                <x-danger-alert />

                <h4 class="block text-xl font-medium text-slate-800">
                    Bora fazer login!
                </h4>

                <p class="text-slate-500 font-light">
                    E-mail e senha meu camarada.
                </p>

                <form class="mt-8 mb-2 w-80 max-w-screen-lg sm:w-96" action="{{ route('login.store') }}" method="POST">

                    @csrf

                    <div class="mb-1 flex flex-col gap-6">
                        <div class="w-full max-w-sm min-w-[200px] hidden">
                            <label class="block mb-2 text-sm text-slate-600">
                                Nome Completo
                            </label>
                            <input type="text" name="name" autocomplete="name" aria-autocomplete="inline"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Seu Nome" value="Felipe Pinheiro" />
                            <div>
                                @error('name')
                                    <div class="text-red-500 font-semibold">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full max-w-sm min-w-[200px]">
                            <label class="block mb-2 text-sm text-slate-600">
                                Email
                            </label>
                            <input type="email" name="email" autocomplete="email"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Seu Email" value="santospinheiro627@gmail.com" />
                            <div>
                                @error('email')
                                    <div class="text-red-500 font-semibold">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full max-w-sm min-w-[200px]">
                            <label class="block mb-2 text-sm text-slate-600">
                                Senha
                            </label>
                            <input type="password" name="password"
                                class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Sua Senha" value="123456789" />
                            <div>
                                @error('password')
                                    <div class="text-red-500 font-semibold">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button
                        class="mt-4 w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="submit">
                        Acessar
                    </button>

                    <p class="flex justify-center mt-6 text-sm text-slate-600">
                        Ainda sem conta?
                        <a href="#signup" class="ml-1 text-sm font-semibold text-slate-700 underline">
                            Bora criar!
                        </a>
                    </p>

                </form>

            </div>

        </div>
    </div>

@endsection
