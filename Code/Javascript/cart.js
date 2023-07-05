// let title= localStorage.setItem("title",title);
// let price = localStorage.setItem("price",price);
// let imageSrc= localStorage.setItem("imageSrc",imageSrc);
// if(sessionStorage!=undefined){
    // document.getElementById('table').append(title);
    // document.getElementById('table').append(price);
    // document.getElementById('table').append(imageSrc);
    // console.log(document.getElementsByClassName("table-data")[0].innerHTML=document.createTextNode(localStorage.getItem("title")))
    for (let i = 0; i < localStorage.getItem("title").length; i++) {
        const title = localStorage.getItem("title");
        console.log(localStorage.getItem("title"))
        document.getElementsByClassName("table-data").append(title)
    
//    console.log(title) ;
//    document.getElementsByClassName("table-data")[0].innerHTML=title;
    // document.createTextNode(localStorage.getItem("title"));
    }
    // document.getElementsByClassName("table-data")[0].innerHTML=document.createTextNode(localStorage.getItem("title"));
    // document.getElementsByClassName("table-data")[0].innerHTML=document.createTextNode(localStorage.getItem("title"));
    
    // document.getElementById("praveen").innerHTML=localStorage.getItem("title");
    // document.getElementById("pravee").innerHTML=localStorage.getItem("price");
    // document.getElementById("prave").firstChild.src=localStorage.getItem("imageSrc");
