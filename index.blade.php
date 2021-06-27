@extends('Admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th class="right-align">Status</th>
                </tr>
                <tbody>
                    @forelse ($empresa as $empresa)
                        <tr>
                            <td>{{$empresa->nome}}</td>
                            <td>{{$empresa->telefone}}</td>
                            <td>{{$empresa->endereco}}</td>
                            <td class="right-align">Cadastrado</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Não há dados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </thead>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.empresas.form')}}">
                <i class="large material-icons">
                    add
                </i>
            </a>
        </div>



    </section>

@endsection

