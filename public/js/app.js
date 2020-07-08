new Vue({
    el: '#app',
    data: {
        items: [],
        term: '',
        acertapidata: '',
        pesquisando: false
    },
    computed: {
        hasResult(){
            return this.acertapidata;
        }
    },
    methods: {
        findUser(){
            if (this.term) {
                let query = `https://api.github.com/search/users?q=${this.term}&per_page=5`
                fetch(query)
                    .then(
                    (response) => {

                        response.json().then(data => this.items = data.items);
                    }
                )
                    .catch(function (err) {
                        console.log('Fetch Error :-S', err);
                    });
            }
        },
        consumirAcertApi() {
            /**
             * Problemas encontrados:
             * 1. O endpoint nao aceita content-type: application/json (Access to fetch at 'https://apiweb-enwzofr76a-uc.a.run.app/auth/login' from origin 'null' has been blocked by CORS policy: Request header field content-type is not allowed by Access-Control-Allow-Headers in preflight response.)
             * 2. A única forma que encontrei de enviar os dados seria como texto.
             */
            this.pesquisando = !this.pesquisando;
            fetch('https://apiweb-enwzofr76a-uc.a.run.app/auth/login',
                {
                    method: 'POST',
                    body: JSON.stringify({
                        'token': '7e8230ae820bd5f3d4f022489415dbb1',
                        'usuario': '2143',
                        'senha': '123456'
                    })
                })
                .then(
                (response) => {

                    response.text().then(data => this.acertapidata = data);
                }
            )
                .catch(function (err) {
                    console.log('Fetch Error :-S', err);
                });
        }
    }
});