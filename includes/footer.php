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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $BASE_URL ?>/assets/js/main.js"></script>




</body>
</html>
