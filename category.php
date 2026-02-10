<?php include 'includes/header.php'; ?>

<?php
$type = $_GET['type'] ?? 'beans';

$products = [
  ["id"=>1,"name"=>"Dark Roast","price"=>499,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
  ["id"=>2,"name"=>"Medium Roast","price"=>459,"cat"=>"beans","img"=>"https://images.unsplash.com/photo-1541167760496-1628856ab772"],
  ["id"=>3,"name"=>"Espresso Blend","price"=>549,"cat"=>"espresso","img"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
  ["id"=>4,"name"=>"Cold Brew Pack","price"=>399,"cat"=>"coldbrew","img"=>"https://images.unsplash.com/photo-1521302080334-4bebac2763a6"],
];
?>

<section class="container my-4">
  <div class="row">

    <!-- ================= SIDEBAR FILTER ================= -->
    <aside class="col-md-3 col-lg-2 d-none d-md-block">
      <div class="filter-sidebar p-3 bg-white rounded shadow-sm">
        <h6 class="fw-bold mb-3">Filters</h6>
        <button class="btn position-relative">
            Filters
            <span id="filter-count"
                    class="badge bg-danger position-absolute top-0 start-100 translate-middle d-none">
                0
            </span>
            </button>


        <!-- PRICE -->
        <div class="mb-3">
          <strong class="d-block mb-2">Price</strong>
          <div class="form-check">
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

        <!-- ROAST TYPE -->
        <div class="mb-3">
          <strong class="d-block mb-2">Roast Type</strong>
          <div class="form-check">
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

    <!-- <div id="active-filters" class="d-flex gap-2 flex-wrap mb-3"></div> -->

    <!-- ================= PRODUCTS ================= -->
    <main class="col-md-9 col-lg-10">

      <h5 class="fw-bold text-capitalize mb-3"><?= $type ?> products</h5>

      <!-- Sticky Category Tabs -->
      <div class="sticky-top bg-light py-2 mb-3" style="z-index:1020">
        <div class="d-flex gap-2 overflow-auto">
          <button class="cat-tab active" data-cat="all">All</button>
          <button class="cat-tab" data-cat="beans">Beans</button>
          <button class="cat-tab" data-cat="espresso">Espresso</button>
          <button class="cat-tab" data-cat="coldbrew">Cold Brew</button>
        </div>
      </div>

      <!-- Search -->
      <input
        type="text"
        id="searchInput"
        class="form-control mb-3"
        placeholder="Search coffee..."
      >

      <!-- only for mobile -->
      <button class="btn btn-dark w-100 d-md-none mb-3" onclick="openFilterDrawer()">
  🔍 Filters
        </button>

      <!-- Product Grid -->
      <div class="row g-3" id="productGrid">
        <?php foreach ($products as $p): ?>
          <?php if ($p['cat'] === $type): ?>
            <div
              class="col-6 col-md-4 col-lg-3 product-item"
              data-cat="<?= $p['cat']; ?>"
              data-name="<?= strtolower($p['name']); ?>"
              data-price="<?= $p['price']; ?>"
            >
              <div class="product-card h-100 p-2 bg-white rounded shadow-sm text-center">
                <div class="product-img mb-2">
                  <img
                    src="<?= $p['img']; ?>?auto=format&fit=crop&w=400&q=80"
                    class="img-fluid rounded"
                  >
                </div>

                <h6 class="mb-1"><?= $p['name']; ?></h6>
                <p class="fw-bold mb-2">₹<?= $p['price']; ?></p>

                <div class="qty-box d-flex justify-content-center gap-2">
                  <button
                    class="btn btn-outline-dark btn-sm qty-minus"
                    data-id="<?= $p['id']; ?>"
                  >−</button>

                  <span id="qty-<?= $p['id']; ?>">0</span>

                  <button
                    class="btn btn-dark btn-sm qty-plus"
                    data-id="<?= $p['id']; ?>"
                  >+</button>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <!-- ================= RECOMMENDATIONS ================= -->
      <h5 class="fw-bold mt-4">You may also like</h5>
      <div id="recommend-box" class="row g-3"></div>

    </main>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
