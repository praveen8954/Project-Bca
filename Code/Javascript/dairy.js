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
    sessionStorage.setItem('title',title);
    sessionStorage.setItem('price',price);
    sessionStorage.setItem('imageSrc',imageSrc);
    // console.log(title,price,imageSrc);
    // addItemToCart(title, price, imageSrc)
    // updateCartTotal()
}