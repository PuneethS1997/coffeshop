<?php include 'includes/header.php'; ?>

<section class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-white">
        <h1 class="fw-bold">Freshly Roasted Coffee</h1>
        <p>Premium beans delivered fast</p>
        <a href="product" class="btn btn-warning">Shop Now</a>
      </div>
      <div class="col-md-6 text-center">
      <img 
            src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80" 
            class="hero-img "
            alt="Fresh Coffee">
      </div>
    </div>
  </div>
</section>

<section class="container my-5">
  <h4 class="fw-bold mb-3">🔥 Best Sellers</h4>
  <div class="scroll-row">
    <?php for($i=1;$i<=4;$i++): ?>
    <div class="product-card">
    <img src="https://source.unsplash.com/400x400/?coffee,beans">
      <h6>Dark Roast</h6>
      <p>₹499</p>
      <a href="cart" class="btn btn-dark btn-sm">Add</a>
    </div>
    <?php endfor; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
