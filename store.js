console.log("script loaded")
updateCartTotal()
var removeCartItemsButton = document.getElementsByClassName("btn-danger");
for (var i = 0; i < removeCartItemsButton.length; i++) {
  var button = removeCartItemsButton[i];
  button.addEventListener("click", removeCartItem);
}
var quantityInputs = document.getElementsByClassName("qty");
for (var i = 0; i < quantityInputs.length; i++) {
  var input = quantityInputs[i];
  input.addEventListener("change", quantityChanged);
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
    // console.log(cartRow)
    var itemQuantity = cartRow
      .getElementsByClassName("cart-quantity")[0]
      .getElementsByClassName("product_count")[0]
      .getElementsByClassName("qty")[0];
    var itemPrice = cartRow.getElementsByTagName("h5")[0].innerText;
    var quantity = itemQuantity.value;
    var price = parseFloat(itemPrice.replace("Rs", ""));
    total += price * quantity;
  }
  document
    .getElementsByClassName("cart-items")[0]
    .getElementsByClassName("cart-subtotal")[0]
    .getElementsByClassName("subtotal")[0]
    .getElementsByTagName("h5")[0].innerText = "Rs" + total;
}
