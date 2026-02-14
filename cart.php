<?php include 'includes/header.php'; ?>

<section class="container my-5" style="max-width: 900px;">
  <h4 class="fw-bold mb-4">🛒 Your Cart</h4>

  <!-- CART ITEMS -->
  <div id="cart-page-items"></div>
  <h5 class="fw-bold mt-4">You may also like</h5>
<div id="recommend-box" class="row g-3"></div>


  <!-- SUMMARY -->
  <div id="cart-summary" class="mt-4 d-none">
    <div class="d-flex justify-content-between align-items-center fs-5">
      <strong>Total</strong>
      <strong>₹<span id="cart-page-total">0</span></strong>
    </div>

    <a href="checkout" class="btn btn-dark w-100 mt-3 py-2">
      Proceed to Checkout →
    </a>
  </div>

  <!-- EMPTY CART -->
  <div id="empty-cart" class="text-center d-none">
    <p class="fs-5 mb-3">Your cart is empty ☕</p>
    <a href="<?= $BASE_URL ?>index" class="btn btn-outline-dark">Shop Coffee</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
