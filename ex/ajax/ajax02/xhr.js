var xhr = new XMLHttpRequest();

xhr.responseType = "json";

xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        console.log(xhr);
    }
}

xhr.open("GET", "https://jsonplaceholder.typicode.com/posts/1");
xhr.send();