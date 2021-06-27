@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">


        <form action="{{route('admin.empresas.adicionar')}}" method="POST">

            @csrf

            <div class="input-field">
                <input type="text" name="nome" id="nome"/>
                <label for="nome">Nome</label>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input type="text" name="telefone" id="telefone"/>
                <label for="telefone">Telefone</label>
                @error('telefone')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>
            <div class="input-field">
                <input type="text" name="endereco" id="endereco"/>
                <label for="endereco">Endereço</label>
                @error('endereco')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>

    </section>

@endsection
