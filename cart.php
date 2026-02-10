<?php include 'includes/header.php'; ?>

<section class="container my-5">
  <h4 class="fw-bold mb-4">🛒 Your Cart</h4>

  <div id="cart-page-items"></div>

  <div id="cart-summary" class="mt-4 d-none">
    <div class="d-flex justify-content-between">
      <strong>Total</strong>
      <strong>₹<span id="cart-page-total">0</span></strong>
    </div>

    <a href="checkout" class="btn btn-dark w-100 mt-3">
      Proceed to Checkout
    </a>
  </div>

  <div id="empty-cart" class="text-center d-none">
    <p>Your cart is empty ☕</p>
    <a href="/" class="btn btn-outline-dark btn-sm">Shop Coffee</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
