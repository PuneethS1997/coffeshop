<?php include 'includes/header.php'; ?>

<!-- HERO SECTION -->
<section class="hero-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-white">
        <h1 class="fw-bold">Freshly Roasted Coffee</h1>
        <p class="lead">Premium beans delivered fast</p>
        <a href="product" class="btn btn-warning btn-lg">Shop Now</a>
      </div>

      <div class="col-md-6 text-center">
        <img
          src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=900&q=80"
          class="hero-img img-fluid"
          alt="Fresh Coffee">
      </div>
    </div>
  </div>
</section>

<!-- Category  -->
<section class="container my-4">
  <h5 class="fw-bold mb-3">☕ Shop by Category</h5>

  <?php
  $categories = [
    ["slug"=>"beans","name"=>"Coffee Beans","img"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
    ["slug"=>"ground","name"=>"Ground Coffee","img"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
    ["slug"=>"espresso","name"=>"Espresso","img"=>"https://images.unsplash.com/photo-1512568400610-62da28bc8a13"],
    ["slug"=>"coldbrew","name"=>"Cold Brew","img"=>"https://images.unsplash.com/photo-1521302080334-4bebac2763a6"],
    ["slug"=>"accessories","name"=>"Accessories","img"=>"https://images.unsplash.com/photo-1495474472287-4d71bcdd2085"],
    ["slug"=>"beans","name"=>"Coffee Beans","img"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
    ["slug"=>"ground","name"=>"Ground Coffee","img"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
    ["slug"=>"espresso","name"=>"Espresso","img"=>"https://images.unsplash.com/photo-1512568400610-62da28bc8a13"],
    ["slug"=>"coldbrew","name"=>"Cold Brew","img"=>"https://images.unsplash.com/photo-1521302080334-4bebac2763a6"],
    ["slug"=>"accessories","name"=>"Accessories","img"=>"https://images.unsplash.com/photo-1495474472287-4d71bcdd2085"],
    ["slug"=>"beans","name"=>"Coffee Beans","img"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
    ["slug"=>"ground","name"=>"Ground Coffee","img"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
    ["slug"=>"espresso","name"=>"Espresso","img"=>"https://images.unsplash.com/photo-1512568400610-62da28bc8a13"],
    ["slug"=>"coldbrew","name"=>"Cold Brew","img"=>"https://images.unsplash.com/photo-1521302080334-4bebac2763a6"],
    ["slug"=>"accessories","name"=>"Accessories","img"=>"https://images.unsplash.com/photo-1495474472287-4d71bcdd2085"]
  ];
  ?>

  <div class="category-scroll">
    <?php foreach($categories as $cat): ?>
      <a href="category?type=<?= $cat['slug']; ?>" class="category-card">
        <img src="<?= $cat['img']; ?>?auto=format&fit=crop&w=300&q=80">
        <span><?= $cat['name']; ?></span>
      </a>
    <?php endforeach; ?>
  </div>
</section>

<section class="container my-4">
  <div class="ad-slider" id="adSlider">

    <div class="ad-slide active">
      <div class="ad-content">
        <h3>☕ Flat 30% OFF</h3>
        <p>On Freshly Roasted Coffee</p>
        <a href="category?type=beans" class="btn btn-light btn-sm">
          Order Now
        </a>
      </div>
      <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=900&q=80">
    </div>

    <div class="ad-slide">
      <div class="ad-content">
        <h3>🚀 Express Delivery</h3>
        <p>Coffee at your door in minutes</p>
        <a href="category?type=espresso" class="btn btn-light btn-sm">
          Explore
        </a>
      </div>
      <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=900&q=80">
    </div>

    <div class="ad-slide">
      <div class="ad-content">
        <h3>🔥 Best Sellers</h3>
        <p>Top rated by coffee lovers</p>
        <a href="category?type=coldbrew" class="btn btn-light btn-sm">
          Shop Now
        </a>
      </div>
      <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=900&q=80">
    </div>

  </div>

  <!-- DOTS -->
  <div class="ad-dots text-center mt-2">
    <span class="dot active"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
</section>



<!-- BEST SELLERS -->
<section class="container my-5">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="fw-bold">🔥 Best Sellers</h4>

    <div class="d-none d-md-block">
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

  <div class="scroll-row d-flex gap-3" id="bestSellerRow">
    <?php foreach ($products as $product): ?>
      <div class="product-card text-center">

        <div class="product-img">
          <img src="<?= $product['img']; ?>" alt="<?= $product['name']; ?>">
        </div>

        <h6 class="mt-2 mb-1"><?= $product['name']; ?></h6>
        <p class="fw-semibold mb-2">₹<?= $product['price']; ?></p>

        <!-- Quantity Control -->
        <div class="qty-box d-flex align-items-center justify-content-center gap-2">
          <button
            class="btn btn-outline-dark btn-sm qty-minus"
            data-id="<?= $product['id']; ?>">
            −
          </button>

          <span
            class="qty-value"
            id="qty-<?= $product['id']; ?>">
            0
          </span>

          <button
            class="btn btn-dark btn-sm qty-plus"
            data-id="<?= $product['id']; ?>">
            +
          </button>
        </div>

      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
