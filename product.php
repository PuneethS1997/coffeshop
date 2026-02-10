<?php include 'includes/header.php'; ?>

<div class="container mt-5 pt-5">
  <h3 class="fw-bold mb-4">Our Coffee</h3>
  <div class="row">
    <?php for($i=1;$i<=6;$i++): ?>
    <div class="col-md-4 mb-4">
      <div class="product-card">
      <img src="https://source.unsplash.com/400x400/?coffee,beans">
        <h6>Medium Roast</h6>
        <p>₹459</p>
        <div class="qty-box d-flex align-items-center justify-content-center gap-2">
  <button class="btn btn-outline-dark btn-sm qty-minus" data-id="1">−</button>
  <span class="qty-value" id="qty-1">0</span>
  <button class="btn btn-dark btn-sm qty-plus" data-id="1">+</button>
</div>
      </div>
    </div>
    <?php endfor; ?>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
