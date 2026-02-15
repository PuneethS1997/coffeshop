<?php include 'includes/header.php'; ?>

<div class="container mt-5 pt-5" style="max-width:600px;">
  <h3 class="mb-4">Checkout</h3>

  <div class="checkout-product-card" id="buy-now-section" style="display:none;">

<div class="checkout-product">
  <img id="checkout-product-image" src="" alt="" width="100">

  <div class="checkout-details">
    <h4 id="checkout-product-name"></h4>
    <p>Price: ₹<span id="checkout-product-price"></span></p>
    <p>Quantity: <span id="checkout-product-qty"></span></p>
    <h5>Total: ₹<span id="checkout-product-total"></span></h5>
  </div>
</div>

</div>



  <form id="checkout-form">
    <input id="fullName" class="form-control mb-3" placeholder="Full Name" required>
    <input id="address" class="form-control mb-3" placeholder="Address" required>

    <h5 class="mb-3">
      Total: ₹<span id="checkout-total">0</span>
    </h5>

    <button type="submit" class="btn btn-success w-100">
      Pay 
    </button>
  </form>
</div>

<!-- Razorpay Script -->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  function clearCartAfterPayment() {
  localStorage.removeItem("cart_" + CART_VERSION);
  cart = {};
  updateNavbarCartCount();
}

document.addEventListener("DOMContentLoaded", function () {

  renderCartPage();

  const total = getTotalPrice();

  if (!total || total <= 0) {
    alert("Cart is empty!");
    window.location.href = "cart";
    return;
  }

 


  document.getElementById("checkout-total").innerText = total;

  console.log("Cart:", cart);
console.log("Total:", getTotalPrice());

  document.getElementById("checkout-form").addEventListener("submit", function(e) {

    e.preventDefault();

    const name = document.getElementById("fullName").value;

    var options = {
      "key": "rzp_test_1DP5mmOlF5G5ag",
      "amount": total * 100,
      "currency": "INR",
      "name": "Your Coffee Store",
      "description": "Coffee Purchase",
      handler: function (response) {

if (response.razorpay_payment_id) {

  const isBuyNow = localStorage.getItem("buy_now_mode");

  if (isBuyNow === "true") {

    // Restore old cart if backup exists
    const backup = localStorage.getItem("temp_cart_backup");

    if (backup) {
      localStorage.setItem("cart_" + CART_VERSION, backup);
      localStorage.removeItem("temp_cart_backup");
    } else {
      localStorage.removeItem("cart_" + CART_VERSION);
    }

    localStorage.removeItem("buy_now_mode");

  } else {
    // Normal checkout → clear cart
    localStorage.removeItem("cart_" + CART_VERSION);
  }

}

window.location.href = "success";
}
,
      "prefill": { "name": name },
      "theme": { "color": "#6F4E37" }
    };

    var rzp = new Razorpay(options);
    rzp.open();
  });

});

</script>




<?php include 'includes/footer.php'; ?>
