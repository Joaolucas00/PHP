var xhr = new XMLHttpRequest();
var documento;

xhr.responseType = "json";
xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200) {
        documento = xhr.response;
        // documento = JSON.parse(documento);
        console.log(documento);
    } else {

    }
}

xhr.open("GET", "https://jsonplaceholder.typicode.com/posts/1"); // criando uma requisição

xhr.send(); // Envia a requisição acima