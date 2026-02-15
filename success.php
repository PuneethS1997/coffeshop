<?php include 'includes/header.php'; ?>

<section class="success-section d-flex align-items-center">
  <div class="container text-center">

    <div class="success-card mx-auto">

      <div class="success-icon mb-4">
        ✓
      </div>

      <h2 class="fw-bold mb-3">Payment Successful!</h2>

      <p class="text-muted mb-4">
        Thank you for your coffee order ☕  
        Your brew is being prepared with love.
      </p>

      <a href="<?= $BASE_URL ?>index" class="btn btn-coffee px-4 py-2">
        Back to Home
      </a>

    </div>

  </div>
</section>




<script>




// document.addEventListener("DOMContentLoaded", function () {
//   localStorage.removeItem("cart_" + CART_VERSION);
//   localStorage.removeItem("checkout_total");
// });

// localStorage.removeItem("buy_now");
// cart = {};
// saveCart();


  setTimeout(function(){
    window.location.href = "<?= $BASE_URL ?>index";
  }, 5000);
</script>


<?php include 'includes/footer.php'; ?>
