<?php include 'includes/header.php'; ?>

<div class="container mt-5 pt-5" style="max-width:600px;">
  <h3 class="mb-4">Checkout</h3>

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
document.addEventListener("DOMContentLoaded", function () {

  const total = localStorage.getItem("checkout_total");

  if (!total || total <= 0) {
    alert("Cart is empty!");
    window.location.href = "cart";
    return;
  }

  document.getElementById("checkout-total").innerText = total;

  document.getElementById("checkout-form").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("fullName").value;
    const address = document.getElementById("address").value;

    var options = {
      "key": "rzp_test_1DP5mmOlF5G5ag", // 🔥 Replace with your key
      "amount": total * 100, // Razorpay uses paise
      "currency": "INR",
      "name": "Your Coffee Store",
      "description": "Coffee Purchase",
      "image": "https://yourlogo.com/logo.png",
      "handler": function (response) {

        alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);

        // Clear cart after successful payment
        localStorage.removeItem("cart");
        localStorage.removeItem("checkout_total");

        window.location.href = "success"; // create success page
      },
      "prefill": {
        "name": name
      },
      "theme": {
        "color": "#6F4E37"
      }
    };

    var rzp = new Razorpay(options);
    rzp.open();
  });

});
</script>

<?php include 'includes/footer.php'; ?>
