if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
}



function ready() {
  console.log("script loaded");

  let products = []
  
  getProductsFromLocalStorage()
  loadCartItems() 
  updateCartTotal();

  // var removeCartItemsButton = document.getElementsByClassName("btn-danger");
  // for (var i = 0; i < removeCartItemsButton.length; i++) {
  //   var button = removeCartItemsButton[i];
  //   button.addEventListener("click", removeCartItem);
  // }
  // var quantityInputs = document.getElementsByClassName("qty");
  // for (var i = 0; i < quantityInputs.length; i++) {
  //   var input = quantityInputs[i];
  //   input.addEventListener("change", quantityChanged);
  // }
}

function loadCartItems() {
  for(var i = 0; i < products.length;i++) {
    var itemName = products[i]['name']
    var itemPrice = products[i]['price']
    var itemImage = products[i]['img']

    var cartRow = document.createElement('tr')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartRowContents = `
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="${itemImage}" alt="" style = " object-fit: contain;
  width: 140px;
  height: 100px;"/>
                    </div>
                    <div class="media-body">
                      <p>${itemName}</p>
                    </div>
                  </div>
                </td>
                <td class = 'cart-price'>
                  <h5>₹ ${itemPrice}</h5>
                </td>
                <td class = "cart-quantity">
                  <div class="product_count">
                  <input type="number" value="1" class="input-text qty" />
                  </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger">Remove</button>
                </td>
  `
    cartRow.innerHTML = cartRowContents
    cartItems.prepend(cartRow)
    cartRow.getElementsByClassName("btn-danger")[0].addEventListener('click', removeCartItem);
    cartRow.getElementsByClassName("qty")[0].addEventListener("change", quantityChanged)
  }
}

function getProductsFromLocalStorage() {
  products = JSON.parse(localStorage.getItem('products'));
}

function quantityChanged(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0) {
    input.value = 1;
  }
  updateCartTotal();
}

function removeCartItem(event) {
  var buttonClicked = event.target;
  buttonClicked.parentElement.parentElement.remove();
  updateCartTotal();
}

function updateCartTotal() {
  var cartItemContainer = document.getElementsByClassName("cart-items")[0];
  var cartRows = cartItemContainer.getElementsByClassName("cart-row");
  var total = 0;
  for (var i = 0; i < cartRows.length; i++) {
    var cartRow = cartRows[i];
    var itemQuantity = cartRow
      .getElementsByClassName("cart-quantity")[0]
      .getElementsByClassName("product_count")[0]
      .getElementsByClassName("qty")[0];
    var itemPrice = cartRow.getElementsByTagName("h5")[0].innerText;
    var quantity = itemQuantity.value;
    var price = parseFloat(itemPrice.replace("₹", ""));
    total += price * quantity;
  }
  document
    .getElementsByClassName("cart-items")[0]
    .getElementsByClassName("cart-subtotal")[0]
    .getElementsByClassName("subtotal")[0]
    .getElementsByTagName("h5")[0].innerText = "₹ " + total;
}
