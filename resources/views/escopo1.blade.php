@extends('layouts.app')
@section('content')
    @verbatim
    <main class="container" id="app">
    <div class="row">
        <div class="bg-white my-3 p-3 rounded shadow-sm col-12">

            <h1>Busca de Usuários do GitHub</h1>

            <p class="lead">Informe o usuário para pesquisar os perfis</p>

            <div class="input-group mb-3">
                <input type="text" class="form-control" v-model="term" placeholder="Nome do usuário">

                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" @click="findUser" type="button" id="button-addon2">
                    Pesquisar</button>
                </div>
            </div>
        </div>
    </div>
    <div v-if="items.length > 0" class="row">
        <div class="bg-white my-3 p-3 rounded shadow-sm col-12">
            <h6 class="border-bottom border-gray pb-2 mb-0">Resultado da busca</h6>
            <template v-for="item in items">
                <div class="media text-muted pt-3">
                    <img data-src="" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;"
                         :src="item.avatar_url" data-holder-rendered="true">

                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                        <strong class="d-block text-gray-dark"><a :href="item.html_url"
                                                                  target="_blank">@{{item.login}}</a></strong>
                        <a :href="item.repos_url" target="_blank">
                            {{item.repos_url}}
                        </a>
                    </p>
                </div>
            </template>
        </div>
    </div>
</main>
@endverbatim
@endsection('content')
