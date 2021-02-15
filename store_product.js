if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}

let products = [];
var productId = 0;

function ready() {
  console.log("store_product.js loaded");
  var cartItems = document.getElementsByClassName("shop-item");

  for (var i = 0; i < cartItems.length; i++) {
    var cartItem = cartItems[i];
    var addButton = cartItem
      .getElementsByClassName("p_icon")[0]
      .getElementsByClassName("btn-add-to-cart")[0];
    addButton.addEventListener("click", addToCartClicked);
  }
}

function addToCartClicked(event) {
  console.log("button clicked");

  //Fetch existing data from localstorage, if any
  if (localStorage.getItem("products")) {
    products = JSON.parse(localStorage.getItem("products"));
    productId = products.length;
  }

  var buttonClicked = event.target;
  var shopItem =
    buttonClicked.parentElement.parentElement.parentElement.parentElement;
  var itemInfo = shopItem.getElementsByClassName("product-btm")[0];
  var itemName = itemInfo.getElementsByClassName("item-name")[0].innerText;
  var itemPrice = parseFloat(
    itemInfo
      .getElementsByClassName("item-price")[0]
      .getElementsByClassName("price")[0]
      .innerText.replace("₹", "")
  );
  var itemImg = shopItem.getElementsByClassName('product-img')[0].getElementsByClassName('card-img')[0].src

  // Code to eliminate duplicate items in cart
  for (var i = 0; i < products.length; i++) {
    if (products[i]["name"].localeCompare(itemName) == 0) {
      return;
    }
  }
  productId = productId + 1;
  products.push({ "productId": productId, "name": itemName, "price": itemPrice, "img" : itemImg });
  localStorage.setItem("products", JSON.stringify(products));
  
}
