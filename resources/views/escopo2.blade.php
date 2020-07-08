@extends('layouts.app')
@section('content')
    @verbatim
    <main class="container" id="app">
        <div class="row">
            <div class="bg-white my-3 p-3 rounded shadow-sm col-12">

                <h1>Escopo 2</h1>

                <p class="lead">Consumir a seguinte a api "https://apiweb-enwzofr76a-uc.a.run.app/auth/login" e apresentar o retorno em tela.
                </p>
                <button class="btn btn-outline-secondary btn-lg" @click="consumirAcertApi" role="button">Consumir API</button>

            </div>
        </div>
        <div v-show="pesquisando" class="row">
            <div class="bg-white my-3 p-3 rounded shadow-sm col-12">
                <h6 class="border-bottom border-gray pb-2 mb-0">{{ hasResult ? 'Resultado:' : 'Pesquisando...' }}</h6>
                <div v-html="acertapidata" v-if="hasResult">
                </div>
            </div>
        </div>
    </main>
    @endverbatim
@endsection
