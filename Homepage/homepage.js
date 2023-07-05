let buttons=document.getElementsByClassName("add");
for (let i = 0; i < buttons.length; i++) {
  const button = buttons[i];
  button.addEventListener('click', addToCartClicked);
}


function addToCartClicked(event) {
  var button = event.target;
  var shopItem = button.parentElement.parentElement;
  var title = shopItem.getElementsByClassName('card-text')[0].innerText;
  var price =button.parentElement.getElementsByClassName('rupees')[0].innerText;
  var imageSrc = shopItem.parentElement.getElementsByClassName('card-img-top')[0].src;
  console.log(title,price,imageSrc);
 localStorage+= localStorage.setItem("title",title);
 localStorage+=localStorage.setItem("price",price);
 localStorage+= localStorage.setItem("imageSrc",imageSrc);
    // document.write(localStorage.getItem("title"));
    document.getElementById("praveen").append(localStorage.getItem("title"));
    document.getElementById("pravee").append(localStorage.getItem("price"));
    document.getElementById("prave").firstChild.src=localStorage.getItem("imageSrc");
  }
    // document.getElementsById("praveen").innerHTML= sessionStorage.getItem('title');
  // if(sessionStorage!=undefined){
      // document.getElementById('table').append(title);
      // document.getElementById('table').append(price);
      // document.getElementById('table').append(imageSrc);
  
  
  
    // addItemToCart(title, price, imageSrc)
    // updateCartTotal()
