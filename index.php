<?php include 'includes/header.php'; ?>

<!-- HERO SLIDER -->
<section class="hero-slider">

  <!-- Slides -->
  <div class="hero-slide active"
       style="background-image: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=1400&q=80');">
  </div>

  <div class="hero-slide"
       style="background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1400&q=80');">
  </div>

  <div class="hero-slide"
       style="background-image: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=1400&q=80');">
  </div>

  <!-- Content -->
  <div class="hero-content text-center text-white">
    <h1 class="fw-bold">Freshly Roasted Coffee</h1>
    <p class="lead">Premium beans delivered fast</p>
    <a href="product" class="btn btn-warning btn-lg mt-3">Shop Now</a>
  </div>

  <!-- 🔥 Curved Bottom -->
  <div class="hero-curve">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
      <path d="M0,0 C480,120 960,120 1440,0 L1440,120 L0,120 Z"></path>
    </svg>
  </div>

</section>


<!-- time counter banner -->
<section class="container my-4">
  <div class="deal-banner p-4 rounded-4 d-flex align-items-center justify-content-between flex-wrap">
    
    <div class="deal-content">
      <span class="badge bg-danger mb-2">🔥 Limited Offer</span>
      <h5 class="fw-bold mb-1">Espresso – 30% OFF</h5>
      <p class="mb-2 text-muted">Grab it before the deal ends!</p>
      
      <div id="countdown" class="countdown-box"></div>

      <button class="btn btn-dark mt-3">Buy Now</button>
    </div>

    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
         class="deal-img"
         alt="Deal Product">
         <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
         class="deal-img"
         alt="Deal Product">

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

<!-- Quick Buy -->
<section class="container my-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold">⚡ Quick Buy</h5>
    <a href="category" class="small text-decoration-none">View All</a>
  </div>

  <?php
  $quickProducts = [
    [
      "id" => 1,
      "name" => "Dark Roast",
      "price" => 499,
      "img" => "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 2,
      "name" => "Cold Brew",
      "price" => 399,
      "img" => "https://images.unsplash.com/photo-1521302080334-4bebac2763a6?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 3,
      "name" => "Espresso",
      "price" => 549,
      "img" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 4,
      "name" => "Arabica",
      "price" => 599,
      "img" => "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=400&q=80"
    ]
  ];
  ?>

  <div class="quick-scroll">

    <?php foreach ($quickProducts as $p): ?>
      <div class="quick-card">
        <img src="<?= $p['img']; ?>" alt="<?= $p['name']; ?>">
        <div class="quick-info">
          <small class="fw-bold"><?= $p['name']; ?></small>
          <span>₹<?= $p['price']; ?></span>
        </div>

        <div class="quick-qty">
          <button class="btn btn-outline-dark btn-sm qty-minus" data-id="<?= $p['id']; ?>">−</button>
          <span id="qty-<?= $p['id']; ?>">0</span>
          <button class="btn btn-dark btn-sm qty-plus" data-id="<?= $p['id']; ?>">+</button>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>


<!-- 🔥 Flash Sale -->
<section class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold">🔥 Flash Sale</h5>
    <div id="flash-timer" class="flash-timer"></div>
  </div>

  <div class="flash-scroll">

    <!-- ========= ESPRESSO ========= -->
    <div class="flash-card">
      <span class="discount-badge">30% OFF</span>
      <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80">
      <h6>Espresso</h6>

      <p class="price">
        <span class="new">₹399</span>
        <span class="old">₹549</span>
      </p>

      <!-- Quantity Control -->
      <div class="qty-box d-flex align-items-center justify-content-center gap-2 mt-2">

        <button
          class="btn btn-outline-dark btn-sm qty-minus"
          data-id="15"
          data-name="Espresso"
          data-price="399"
          data-img="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80">
          −
        </button>

        <span class="qty-value" id="qty-3">0</span>

        <button
          class="btn btn-dark btn-sm qty-plus"
          data-id="15"
          data-name="Espresso"
          data-price="399"
          data-img="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80">
          +
        </button>

      </div>
    </div>


    <!-- ========= COLD BREW ========= -->
    <div class="flash-card">
      <span class="discount-badge">25% OFF</span>
      <img src="https://images.unsplash.com/photo-1521302080334-4bebac2763a6?auto=format&fit=crop&w=400&q=80">
      <h6>Cold Brew</h6>

      <p class="price">
        <span class="new">₹299</span>
        <span class="old">₹399</span>
      </p>

      <!-- Quantity Control -->
      <div class="qty-box d-flex align-items-center justify-content-center gap-2 mt-2">

        <button
          class="btn btn-outline-dark btn-sm qty-minus"
          data-id="16"
          data-name="Cold Brew"
          data-price="299"
          data-img="https://images.unsplash.com/photo-1521302080334-4bebac2763a6?auto=format&fit=crop&w=400&q=80">
          −
        </button>

        <span class="qty-value" id="qty-2">0</span>

        <button
          class="btn btn-dark btn-sm qty-plus"
          data-id="16"
          data-name="Cold Brew"
          data-price="299"
          data-img="https://images.unsplash.com/photo-1521302080334-4bebac2763a6?auto=format&fit=crop&w=400&q=80">
          +
        </button>

      </div>
    </div>

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
      "id" => 5,
      "name" => "Dark Roast",
      "price" => 499,
      "img" => "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 6,
      "name" => "Medium Roast",
      "price" => 459,
      "img" => "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 7,
      "name" => "Light Roast",
      "price" => 429,
      "img" => "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 8,
      "name" => "Espresso Blend",
      "price" => 549,
      "img" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 9,
      "name" => "Arabica Beans",
      "price" => 599,
      "img" => "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 10,
      "name" => "Dark Roast",
      "price" => 499,
      "img" => "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 11,
      "name" => "Medium Roast",
      "price" => 459,
      "img" => "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 12,
      "name" => "Light Roast",
      "price" => 429,
      "img" => "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 13,
      "name" => "Espresso Blend",
      "price" => 549,
      "img" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 14,
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
