var xhr = new XMLHttpRequest();
var documento = {
    "userId": 501,
    "id": 2,
    "title": "Como fazer requisições AJAX sem Jquery",
    "body": "Desenvolvedor larga jquery após decobrir o quão é fácil fazer requisições com AJAX sem jquery"
}

xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
        console.log(xhr);
    }
}

xhr.open("POST", "https://jsonplaceholder.typicode.com/posts");
xhr.send(documento);