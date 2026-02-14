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
<!-- FLASH DEAL BANNER -->


<section class="container my-4">
  <div class="deal-card">

    <!-- LEFT CONTENT -->
    <div class="deal-left">
      <span class="deal-tag">🔥 LIMITED TIME</span>

      <h2 class="deal-title">Espresso Coffee</h2>

      <p class="deal-offer">Flat <span>30% OFF</span></p>

      <!-- PRICE -->
      <div class="deal-price">
        ₹299 <del>₹399</del>
      </div>

      <!-- Countdown -->
      <div id="countdown" class="countdown"></div>

      <!-- Quantity + Cart -->
      <div class="cart-action" id="cart-action-101">

        <button class="btn btn-dark add-to-cart-btn"
                data-id="101">
          Add to Cart
        </button>

        <div class="qty-box d-none align-items-center gap-2">
          <button class="btn btn-outline-dark btn-sm qty-minus"
                  data-id="101">−</button>

          <span class="qty-value" id="qty-101">0</span>

          <button class="btn btn-dark btn-sm qty-plus"
                  data-id="101">+</button>
        </div>

      </div>
    </div>

    <!-- RIGHT PRODUCT IMAGE -->
    <div class="deal-right">
      <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=600&q=80"
           alt="Espresso">
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

          <!-- Cart Action -->
          <div class="quick-action" id="cart-action-<?= $p['id']; ?>">

            <!-- Add Button -->
            <button class="btn btn-dark btn-sm add-to-cart-btn align-items-center gap-2"
                    data-id="<?= $p['id']; ?>">
              Add to Cart
            </button>

            <!-- Quantity Box -->
            <div class="quick-qty d-none align-items-center gap-2">
              <button class="btn btn-outline-dark btn-sm qty-minus"
                      data-id="<?= $p['id']; ?>">−</button>

              <span id="qty-<?= $p['id']; ?>">0</span>

              <button class="btn btn-dark btn-sm qty-plus"
                      data-id="<?= $p['id']; ?>">+</button>
            </div>

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

        <!-- Cart Action -->
        <div class="cart-action mt-2" id="cart-action-15">

          <!-- Add Button -->
          <button class="btn btn-dark btn-sm add-to-cart-btn"
                  data-id="15">
            Add to Cart
          </button>

          <!-- Quantity Box -->
          <div class="qty-box d-none align-items-center justify-content-center gap-2">

            <button class="btn btn-outline-dark btn-sm qty-minus"
                    data-id="15">−</button>

            <span class="qty-value" id="qty-15">0</span>

            <button class="btn btn-dark btn-sm qty-plus"
                    data-id="15">+</button>

          </div>

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

        <!-- Cart Action -->
        <div class="cart-action mt-2" id="cart-action-16">

          <!-- Add Button -->
          <button class="btn btn-dark btn-sm add-to-cart-btn"
                  data-id="16">
            Add to Cart
          </button>

          <!-- Quantity Box -->
          <div class="qty-box d-none align-items-center justify-content-center gap-2">

            <button class="btn btn-outline-dark btn-sm qty-minus"
                    data-id="16">−</button>

            <span class="qty-value" id="qty-16">0</span>

            <button class="btn btn-dark btn-sm qty-plus"
                    data-id="16">+</button>

          </div>

        </div>
      </div>

       <!-- ========= ESPRESSO ========= -->
    <div class="flash-card">
        <span class="discount-badge">30% OFF</span>
        <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80">
        <h6>Espresso</h6>

        <p class="price">
          <span class="new">₹399</span>
          <span class="old">₹549</span>
        </p>

        <!-- Cart Action -->
        <div class="cart-action mt-2" id="cart-action-17">

          <!-- Add Button -->
          <button class="btn btn-dark btn-sm add-to-cart-btn"
                  data-id="17">
            Add to Cart
          </button>

          <!-- Quantity Box -->
          <div class="qty-box d-none align-items-center justify-content-center gap-2">

            <button class="btn btn-outline-dark btn-sm qty-minus"
                    data-id="17">−</button>

            <span class="qty-value" id="qty-17">0</span>

            <button class="btn btn-dark btn-sm qty-plus"
                    data-id="17">+</button>

          </div>

        </div>
      </div>



    <!-- ========= COLD BREW ========= -->
    <div class="flash-card">
        <span class="discount-badge">25% OFF</span>
        <img src="https://images.unsplash.com/photo-1521302080334-4bebac2763a6?auto=format&fit=crop&w=400&q=80" loading="lazy">
        <h6>Cold Brew</h6>

        <p class="price">
          <span class="new">₹299</span>
          <span class="old">₹399</span>
        </p>

        <!-- Cart Action -->
        <div class="cart-action mt-2" id="cart-action-18">

          <!-- Add Button -->
          <button class="btn btn-dark btn-sm add-to-cart-btn"
                  data-id="18">
            Add to Cart
          </button>

          <!-- Quantity Box -->
          <div class="qty-box d-none align-items-center justify-content-center gap-2">

            <button class="btn btn-outline-dark btn-sm qty-minus"
                    data-id="18">−</button>

            <span class="qty-value" id="qty-18">0</span>

            <button class="btn btn-dark btn-sm qty-plus"
                    data-id="18">+</button>

          </div>

        </div>
      </div>


  </div>
</section>

<!-- PROMO BANNERS SECTION -->
<!-- PROMO BANNERS --><!-- COFFEE PROMO SECTION -->
<section class="container my-4">
<div class="d-flex justify-content-between align-items-center mb-3">
<h5 class="fw-bold">🔥 Todays Deals</h5>
    </div>
  <div class="promo-container p-3">

    <div class="promo-scroll">

      <!-- Card 1 -->
      <div class="promo-card text-center">
        <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=300&q=80"
             class="promo-img mb-2" alt="Fresh Coffee">

        <h6 class="fw-bold text-success">Fresh Brew Deals</h6>
       <a href="category?type=coldbrew"> <button class="btn-coffee mt-2" >
          Shop Now
        </button>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="promo-card text-center">
        <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=300&q=80"
             class="promo-img mb-2" alt="Coffee Beans">

        <h6 class="fw-bold">Buy 1</h6>
        <h6 class="fw-bold text-success">Get 1 Free</h6>
      </div>

      <!-- Card 3 -->
      <div class="promo-card text-center">
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=300&q=80"
             class="promo-img mb-2" alt="Coffee Combo">

        <h6 class="fw-bold">₹99 Coffee Corner</h6>
      </div>

    </div>

  </div>
</section>

<!-- ================= FESTIVAL SECTION ================= -->
<section class="festival-area container my-5">
<div class="d-flex justify-content-between align-items-center mb-3">
<h5 class="fw-bold">🔥 Festival Sale</h5>
    </div>


  <div class="container">


        <!-- ========= SHIVARATRI BLOCK ========= -->
    <div class="festival-wrapper shiva-theme">

<!-- Video -->
<div class="festival-video">
  <video autoplay muted loop playsinline>
    <source src="assets/videos/shivratri.mp4" type="video/mp4">
  </video>
  <div class="video-overlay"></div>
</div>

<!-- Content -->
<div class="festival-content">

  <h2 class="festival-title">🕉 Shivaratri Energy Brews</h2>

  <div class="row g-3 mt-3">

    <div class="col-6 col-md-3">
      <div class="festival-card shiva-card">
        <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93">
        <h6>Midnight Espresso</h6>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="festival-card shiva-card">
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085">
        <h6>Strong Filter Coffee</h6>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="festival-card shiva-card">
        <img src="https://images.unsplash.com/photo-1507914372368-b2b085b925a1">
        <h6>Energy Booster Packs</h6>
      </div>
    </div>

    <div class="col-6 col-md-3">
      <div class="festival-card shiva-card">
        <img src="https://images.unsplash.com/photo-1485808191679-5f86510681a2">
        <h6>Special Combo Offers</h6>
      </div>
    </div>

  </div>

</div>
</div>

    <!-- ========= RAMADAN BLOCK ========= -->
    <div class="festival-wrapper ramadan-theme mb-5">

      <!-- Video -->
      <div class="festival-video">
        <video autoplay muted loop playsinline>
          <source src="assets/videos/ramadan.mp4" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
      </div>

      <!-- Content -->
      <div class="festival-content">

        <h2 class="festival-title">🌙 Ramadan Coffee Specials</h2>

        <div class="row g-3 mt-3">

          <div class="col-6 col-md-3">
            <div class="festival-card ramadan-card">
              <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096">
              <h6>Iftar Special Blends</h6>
            </div>
          </div>

          <div class="col-6 col-md-3">
            <div class="festival-card ramadan-card">
              <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348">
              <h6>Premium Dates & Coffee</h6>
            </div>
          </div>

          <div class="col-6 col-md-3">
            <div class="festival-card ramadan-card">
              <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93">
              <h6>Arabic Kahwa</h6>
            </div>
          </div>

          <div class="col-6 col-md-3">
            <div class="festival-card ramadan-card">
              <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735">
              <h6>Gift Hampers</h6>
            </div>
          </div>

        </div>

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
      "id" => 21,
      "name" => "Dark Roast",
      "price" => 499,
      "img" => "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 22,
      "name" => "Medium Roast",
      "price" => 459,
      "img" => "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 23,
      "name" => "Light Roast",
      "price" => 429,
      "img" => "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 24,
      "name" => "Espresso Blend",
      "price" => 549,
      "img" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 25,
      "name" => "Arabica Beans",
      "price" => 599,
      "img" => "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 26,
      "name" => "Dark Roast",
      "price" => 499,
      "img" => "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 27,
      "name" => "Medium Roast",
      "price" => 459,
      "img" => "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 28,
      "name" => "Light Roast",
      "price" => 429,
      "img" => "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 29,
      "name" => "Espresso Blend",
      "price" => 549,
      "img" => "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
    ],
    [
      "id" => 20,
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

   

        <div class="quick-action" id="cart-action-<?= $product['id']; ?>">

          <!-- Add Button -->
          <button class="btn btn-dark btn-sm add-to-cart-btn"
                  data-id="<?= $product['id']; ?>">
            Add to Cart
          </button>

          <!-- Quantity Box -->
          <div class="quick-qty d-none align-items-center gap-2">
            <button class="btn btn-outline-dark btn-sm qty-minus"
                    data-id="<?= $product['id']; ?>">−</button>

            <span id="qty-<?= $product['id']; ?>">0</span>

            <button class="btn btn-dark btn-sm qty-plus"
                    data-id="<?= $product['id']; ?>">+</button>
          </div>

          </div>

      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="why-section position-relative py-5 overflow-hidden">
  <!-- Floating Beans -->
<div class="bean-particles"></div>

<!-- Smoke Effect -->
<div class="smoke"></div>

  <div class="beans-bg"></div>

  <div class="container text-center position-relative">
    <h2 class="fw-bold mb-5 luxury-title">Why FifthGen?</h2>

    <div class="row g-4">
      <div class="col-md-3 col-6">
        <div class="why-card p-4">
          <div class="icon">☕</div>
          <h6 class="mt-3">Freshly Roasted</h6>
          <p>Roasted in small batches for peak freshness.</p>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="why-card p-4">
          <div class="icon">🌍</div>
          <h6 class="mt-3">Single Origin</h6>
          <p>Sourced from premium coffee regions.</p>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="why-card p-4">
          <div class="icon">🌱</div>
          <h6 class="mt-3">Ethically Sourced</h6>
          <p>Supporting farmers & sustainability.</p>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <div class="why-card p-4">
          <div class="icon">🔥</div>
          <h6 class="mt-3">Small Batch Craft</h6>
          <p>Precision roasting for perfect flavor.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="reviews-section py-5">
  <div class="container text-center">

    <h2 class="section-title mb-5">What Our Customers Say</h2>

    <div class="testimonial-slider">

      <div class="testimonial-track">

        <div class="testimonial-item">
          <div class="stars">★★★★★</div>
          <p>"The freshest beans I've ever tasted. FifthGen changed my mornings."</p>
          <h6>— Aarav M.</h6>
        </div>

        <div class="testimonial-item">
          <div class="stars">★★★★★</div>
          <p>"Roast date transparency is next level. True specialty coffee."</p>
          <h6>— Priya S.</h6>
        </div>

        <div class="testimonial-item">
          <div class="stars">★★★★★</div>
          <p>"Sustainable and delicious. My go-to brand now."</p>
          <h6>— Rohan K.</h6>
        </div>

      </div>

      <!-- Dots -->
      <div class="testimonial-dots"></div>

    </div>

  </div>
</section>

<section class="our-story-section">

  <div class="cinematic-bg"></div>
  <div class="story-overlay"></div>
  <div class="cinematic-smoke"></div>

  <div class="container text-center story-content">
    <h2 class="story-title">Crafted With Purpose</h2>

    <div class="gold-line"></div>

    <p class="story-text">
      From ethically sourced farms to precision roasting,
      every FifthGen batch tells a story of passion,
      transparency, and uncompromising quality.
    </p>

    <a href="<?= $BASE_URL ?>about-us.php" class="story-btn">
      View Our Story
    </a>
  </div>

</section>



<section class="subscription-section text-center py-5">
  <div class="container">

    <h2 class="mb-3">Never Run Out of Coffee</h2>
    <p class="mb-4">Freshly roasted beans delivered to your door. Cancel anytime.</p>

    <a href="#" class="btn-subscribe">Start Subscription</a>

  </div>
</section>




<?php include 'includes/footer.php'; ?>
