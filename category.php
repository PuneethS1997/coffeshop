<?php include 'includes/header.php'; ?>

<?php
$type = $_GET['type'] ?? 'beans';

$products = [
  ["id"=>1,"name"=>"Dark Roast","price"=>499,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
  ["id"=>2,"name"=>"Medium Roast","price"=>459,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1541167760496-1628856ab772"],
  ["id"=>3,"name"=>"Espresso Blend","price"=>549,"cat"=>"espresso","img"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
  ["id"=>4,"name"=>"Cold Brew Pack","price"=>399,"cat"=>"coldbrew","img"=>"https://images.unsplash.com/photo-1521302080334-4bebac2763a6"],
  ["id"=>5,"name"=>"Dark Roast","price"=>499,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
  ["id"=>6,"name"=>"Medium Roast","price"=>459,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1541167760496-1628856ab772"],
  ["id"=>7,"name"=>"Espresso Blend","price"=>549,"cat"=>"espresso","img"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
  ["id"=>8,"name"=>"Cold Brew Pack","price"=>399,"cat"=>"coldbrew","img"=>"https://images.unsplash.com/photo-1521302080334-4bebac2763a6"],
  ["id"=>9,"name"=>"Dark Roast","price"=>499,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
  ["id"=>10,"name"=>"Medium Roast","price"=>459,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1541167760496-1628856ab772"],
  ["id"=>11,"name"=>"Espresso Blend","price"=>549,"cat"=>"espresso","img"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
  ["id"=>12,"name"=>"Cold Brew Pack","price"=>399,"cat"=>"coldbrew","img"=>"https://images.unsplash.com/photo-1521302080334-4bebac2763a6"],
  ["id"=>13,"name"=>"Dark Roast","price"=>499,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
  ["id"=>14,"name"=>"Medium Roast","price"=>459,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1541167760496-1628856ab772"],
  ["id"=>15,"name"=>"Espresso Blend","price"=>549,"cat"=>"espresso","img"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
  ["id"=>16,"name"=>"Cold Brew Pack","price"=>399,"cat"=>"coldbrew","img"=>"https://images.unsplash.com/photo-1521302080334-4bebac2763a6"],
];
?>

<style>
  /* =============== CATEGORY LAYOUT =============== */

.category-section {
  margin-top: 2rem;
}

/* Sidebar */
.filter-card {
  background: #fff;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  position: sticky;
  top: 100px;
}

/* Grid */
.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 20px;
}

/* Product Card */
.product-card {
  background: #fff;
  padding: 15px;
  border-radius: 14px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  text-align: center;
  transition: 0.3s ease;
  height: 100%;
}

.product-card:hover {
  transform: translateY(-5px);
}

.product-img {
  height: 180px;
  overflow: hidden;
  border-radius: 12px;
  margin-bottom: 10px;
}

.product-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.price {
  font-weight: 600;
  margin-bottom: 10px;
}

/* Quick action spacing */
.quick-action {
  margin-top: 10px;
}

/* Mobile Improvements */
@media (max-width: 768px) {

  .product-grid {
    grid-template-columns: repeat(2, 1fr);
  }

  .product-img {
    height: 150px;
  }
}

/* Mobile */
@media (max-width: 767px) {
  .product-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
.category-scroll {
  display: flex;
  gap: 15px;
  overflow-x: auto;
  padding-bottom: 10px;
}

.cat-card {
  min-width: 90px;
  text-align: center;
  text-decoration: none;
  color: #000;
}

.cat-card img {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  object-fit: cover;
}

</style>


<section class="category-hero container " style="margin-top:8rem !important;">
  <div class="hero-banner">
    <div class="hero-text">
      <h3>☕ Fresh Coffee Delivered</h3>
      <p>Up to 30% OFF today</p>
      <a href="category?type=beans" class="btn btn-dark btn-sm">
        Shop Now
      </a>
    </div>
    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=900&q=80">
  </div>
</section>

<section class="container my-4">
  <h5 class="fw-bold mb-3">Shop by Category</h5>

  <div class="category-scroll">
    <a href="category?type=beans" class="cat-card">
      <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348">
      <span>Beans</span>
    </a>

    <a href="category?type=espresso" class="cat-card">
      <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93">
      <span>Espresso</span>
    </a>

    <a href="category?type=coldbrew" class="cat-card">
      <img src="https://images.unsplash.com/photo-1521302080334-4bebac2763a6">
      <span>Cold Brew</span>
    </a>

    <a href="category?type=filter" class="cat-card">
      <img src="https://images.unsplash.com/photo-1512568400610-62da28bc8a13">
      <span>Filter</span>
    </a>

    <a href="category?type=beans" class="cat-card">
      <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348">
      <span>Beans</span>
    </a>

    <a href="category?type=espresso" class="cat-card">
      <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93">
      <span>Espresso</span>
    </a>

    <a href="category?type=coldbrew" class="cat-card">
      <img src="https://images.unsplash.com/photo-1521302080334-4bebac2763a6">
      <span>Cold Brew</span>
    </a>

    <a href="category?type=filter" class="cat-card">
      <img src="https://images.unsplash.com/photo-1512568400610-62da28bc8a13">
      <span>Filter</span>
    </a>

    <a href="category?type=beans" class="cat-card">
      <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348">
      <span>Beans</span>
    </a>

    <a href="category?type=espresso" class="cat-card">
      <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93">
      <span>Espresso</span>
    </a>

    <a href="category?type=coldbrew" class="cat-card">
      <img src="https://images.unsplash.com/photo-1521302080334-4bebac2763a6">
      <span>Cold Brew</span>
    </a>

    <a href="category?type=filter" class="cat-card">
      <img src="https://images.unsplash.com/photo-1512568400610-62da28bc8a13">
      <span>Filter</span>
    </a>

    <a href="category?type=beans" class="cat-card">
      <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348">
      <span>Beans</span>
    </a>

    <a href="category?type=espresso" class="cat-card">
      <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93">
      <span>Espresso</span>
    </a>

    <a href="category?type=coldbrew" class="cat-card">
      <img src="https://images.unsplash.com/photo-1521302080334-4bebac2763a6">
      <span>Cold Brew</span>
    </a>

    <a href="category?type=filter" class="cat-card">
      <img src="https://images.unsplash.com/photo-1512568400610-62da28bc8a13">
      <span>Filter</span>
    </a>

  </div>
</section>

<section class="container my-4">
  <h5 class="fw-bold mb-3">🔥 Top Deals</h5>

  <div class="deal-scroll">
    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=500&q=80">
    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=500&q=80">
    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=500&q=80">
    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=500&q=80">
    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=500&q=80">
    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=500&q=80">
    <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=500&q=80">
    <img src="https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=500&q=80">
    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=500&q=80">
  </div>
</section>


<section class="container my-4 category-section">

  <div class="row">

    <!-- ================= FILTER SIDEBAR ================= -->
    <aside class="col-lg-3 d-none d-lg-block">
      <div class="filter-card">

        <h6 class="fw-bold mb-3">Filters</h6>

        <div class="mb-4">
          <strong>Price</strong>

          <div class="form-check mt-2">
            <input class="form-check-input price-filter" type="radio" name="price" value="all" checked>
            <label class="form-check-label">All</label>
          </div>

          <div class="form-check">
            <input class="form-check-input price-filter" type="radio" name="price" value="low">
            <label class="form-check-label">Below ₹500</label>
          </div>

          <div class="form-check">
            <input class="form-check-input price-filter" type="radio" name="price" value="premium">
            <label class="form-check-label">Above ₹500</label>
          </div>
        </div>

        <div>
          <strong>Roast Type</strong>

          <div class="form-check mt-2">
            <input class="form-check-input roast-filter" type="checkbox" value="light">
            <label class="form-check-label">Light</label>
          </div>

          <div class="form-check">
            <input class="form-check-input roast-filter" type="checkbox" value="medium">
            <label class="form-check-label">Medium</label>
          </div>

          <div class="form-check">
            <input class="form-check-input roast-filter" type="checkbox" value="dark">
            <label class="form-check-label">Dark</label>
          </div>
        </div>

      </div>
    </aside>


    <!-- ================= PRODUCTS ================= -->
    <main class="col-lg-9">

      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold text-capitalize mb-0"><?= $type ?> Products</h5>

        <button class="btn btn-outline-dark d-lg-none"
                onclick="openFilterDrawer()">
          Filters
        </button>
      </div>

      <!-- Search -->
      <input
        type="text"
        id="searchInput"
        class="form-control mb-4"
        placeholder="Search coffee..."
      >

      <!-- PRODUCT GRID -->
      <div class="product-grid" id="productGrid">

        <?php foreach ($products as $p): ?>
          <?php if ($p['cat'] === $type): ?>

          <div class="product-item"
               data-cat="<?= $p['cat']; ?>"
               data-name="<?= strtolower($p['name']); ?>"
               data-price="<?= $p['price']; ?>">

            <div class="product-card">

              <div class="product-img">
              <a href="showproduct?id=<?= $p['id']; ?>">
                <img src="<?= $p['img']; ?>?auto=format&fit=crop&w=400&q=80">
              </a>
              </div>

              <h6><?= $p['name']; ?></h6>
              <p class="price">₹<?= $p['price']; ?></p>

              <div class="quick-action" id="cart-action-<?= $p['id']; ?>">

                <button class="btn btn-dark btn-sm add-to-cart-btn"
                        data-id="<?= $p['id']; ?>">
                  Add to Cart
                </button>

                <div class="quick-qty d-none align-items-center gap-2">
                  <button class="btn btn-outline-dark btn-sm qty-minus"
                          data-id="<?= $p['id']; ?>">−</button>

                  <span id="qty-<?= $p['id']; ?>">0</span>

                  <button class="btn btn-dark btn-sm qty-plus"
                          data-id="<?= $p['id']; ?>">+</button>
                </div>

              </div>

            </div>

          </div>

          <?php endif; ?>
        <?php endforeach; ?>

      </div>

    </main>
  </div>
</section>


<?php include 'includes/footer.php'; ?>
