document.querySelector('button#getText').addEventListener('click', getText);
document.querySelector('button#getJson').addEventListener('click', getJson);
function getText() {
    fetch('sample-txt.txt')
    .then((res) => {
        return res.text();
    })
    .then((data) => {
        document.querySelector('div#output').innerHTML = data;
        console.log(data);
    }).catch((err) => {
        document.querySelector('div#output').innerHTML = "<p>Oops! Algum erro foi desparado!</p>";
        console.log('Oops! Erro: ' + err);
    });
}

function getJson() {
    fetch('users.json')
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        console.log(data);
    })
    .catch((err) => {console.log(err);})
    
}

    /** Mozila - https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Connection_management_in_HTTP_1.x
     * 
     * A API Fetch fornece uma interface JavaScript para acessar e manipular partes do pipeline HTTP, 
     * tais como os pedidos e respostas. 
     * Ela também fornece o método global fetch() (en-US) que fornece uma maneira fácil e lógica para buscar recursos de forma assíncrona através da rede.
     * 
     */