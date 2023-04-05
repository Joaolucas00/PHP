var xhr = new XMLHttpRequest();


xhr.onreadystatechange = function(){
    if(xhr.readyState == 4) {
        console.log(xhr);
        console.log("OK");
    }
}

xhr.open("GET", "https://jsonplaceholder.typicode.com/posts/1");

xhr.send();