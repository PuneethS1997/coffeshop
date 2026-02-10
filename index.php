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
          class="hero-img"
          alt="Fresh Coffee">
      </div>
    </div>
  </div>
</section>

<section class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="fw-bold">🔥 Best Sellers</h4>

    <div>
      <button class="btn btn-outline-dark btn-sm me-1" onclick="scrollRow('left')">‹</button>
      <button class="btn btn-outline-dark btn-sm" onclick="scrollRow('right')">›</button>
    </div>
  </div>

  <?php
  $products = [
    [
      "id" => 1,
      "name" => "Dark Roast",
      "price" => 499,
      "img" => "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 2,
      "name" => "Medium Roast",
      "price" => 459,
      "img" => "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 3,
      "name" => "Light Roast",
      "price" => 429,
      "img" => "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 4,
      "name" => "Espresso Blend",
      "price" => 549,
      "img" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 5,
      "name" => "Arabica Beans",
      "price" => 599,
      "img" => "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=400&q=80"
    ]
  ];
  ?>

  <div class="scroll-row" id="bestSellerRow">
    <?php foreach ($products as $product): ?>
      <div class="product-card">
        <div class="product-img">
          <img src="<?= $product['img']; ?>" alt="<?= $product['name']; ?>">
        </div>

        <h6><?= $product['name']; ?></h6>
        <p>₹<?= $product['price']; ?></p>

        <div class="qty-box d-flex align-items-center justify-content-center gap-2">
          <button class="btn btn-outline-dark btn-sm qty-minus" data-id="<?= $product['id']; ?>">−</button>
          <span class="qty-value" id="qty-<?= $product['id']; ?>">0</span>
          <button class="btn btn-dark btn-sm qty-plus" data-id="<?= $product['id']; ?>">+</button>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
