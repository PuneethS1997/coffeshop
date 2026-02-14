<footer class="footer text-center mt-5">
  <p>© 2026 FifthGen Coffee</p>
</footer>

<div id="mobile-cart-bar" class="mobile-cart-bar d-none">
  <div class="container d-flex justify-content-between align-items-center">
    <div>
      <strong id="cart-items">0 items</strong>
      <div class="small text-muted">₹<span id="cart-total">0</span></div>
    </div>
    <button class="btn btn-dark btn-sm px-4" onclick="openCartDrawer()">
  View Cart →
</button>

  </div>
</div>

<!-- Cart Backdrop -->
<div id="cart-backdrop" class="cart-backdrop d-none" onclick="closeCartDrawer()"></div>

<!-- Cart Drawer -->
<div id="cart-drawer" class="cart-drawer">
  <div class="cart-header d-flex justify-content-between align-items-center">
    <h6 class="mb-0">🛒 Your Cart</h6>
    <button class="btn btn-sm btn-light" onclick="closeCartDrawer()">✕</button>
  </div>

  <!-- 🔥 THIS IS REQUIRED -->
  <div id="cart-drawer-items" class="p-3"></div>

  <div class="cart-footer">
    <strong>Total: ₹<span id="cart-drawer-total">0</span></strong>
    <a href="checkout" class="btn btn-dark w-100 mt-2">Checkout</a>
  </div>
</div>


<div id="filterDrawer" class="filter-drawer">
  <div class="drawer-header">
    <strong>Filters</strong>
    <button onclick="closeFilterDrawer()">✕</button>
  </div>

  <!-- PRICE RANGE -->
  <div class="drawer-section">
    <label class="fw-bold mb-2 d-block">
      Price: ₹<span id="priceVal">1000</span>
    </label>
    <input
      type="range"
      min="100"
      max="1000"
      step="50"
      value="1000"
      id="priceRange"
    >
  </div>

  <!-- ROAST TYPE -->
  <div class="drawer-section">
    <strong class="d-block mb-2">Roast Type</strong>
    <label><input type="checkbox" class="roast-filter" value="light"> Light</label><br>
    <label><input type="checkbox" class="roast-filter" value="medium"> Medium</label><br>
    <label><input type="checkbox" class="roast-filter" value="dark"> Dark</label>
  </div>

  <!-- APPLY -->
  <button class="btn btn-dark w-100 mt-3" onclick="applyFilters()">
    Apply Filters
  </button>
  <button class="btn position-relative">
  Filters
  <span id="filter-count"
        class="badge bg-danger position-absolute top-0 start-100 translate-middle d-none">
    0
  </span>
</button>

  <button class="btn btn-outline-secondary w-100 mt-2" onclick="clearFilters()">
  Clear Filters
</button>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="<?= $BASE_URL ?>/assets/js/main.js"></script> -->
<?php
$js_file = $_SERVER['DOCUMENT_ROOT'] . $BASE_URL . "/assets/js/main.js";
$js_version = file_exists($js_file) ? filemtime($js_file) : time();
?>

<script src="<?= $BASE_URL ?>assets/js/main.js?v=<?= $js_version ?>" defer></script>





</body>
</html>
