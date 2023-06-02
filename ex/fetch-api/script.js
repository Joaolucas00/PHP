document.querySelector('button#getText').addEventListener('click', getText);

function getText() {
    fetch('sample-txt.txt')
    .then((res) => {
        return res.text();
    })
    .then((data) => {
        console.log(data);
    });



    /** Mozila - https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Connection_management_in_HTTP_1.x
     * 
     * A API Fetch fornece uma interface JavaScript para acessar e manipular partes do pipeline HTTP, 
     * tais como os pedidos e respostas. 
     * Ela também fornece o método global fetch() (en-US) que fornece uma maneira fácil e lógica para buscar recursos de forma assíncrona através da rede.
     * 
     */
}