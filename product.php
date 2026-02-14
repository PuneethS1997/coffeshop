<?php include 'includes/header.php'; ?>

<body class="plp-page">

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
  </div>
</section>

<!-- ===== Top Banner + Search ===== -->
<section class="plp-hero">
    <div class="plp-search">
        <input type="text" id="productSearch" placeholder="Search coffee...">
        <select id="sortSelect">
            <option value="default">Sort</option>
            <option value="lowhigh">Price Low → High</option>
            <option value="highlow">Price High → Low</option>
        </select>

        <!-- Mobile Filter Button -->
        <button class="mobile-filter-btn" id="openFilter">
            Filters
        </button>
    </div>
</section>


<section class="plp-container ">

    <!-- ===== Sidebar Filters (Desktop) ===== -->
    <aside class="plp-sidebar" id="filterSidebar">

        <h4>Filters</h4>

        <!-- Price -->
        <div class="filter-group">
            <h5>Price Range</h5>
            <input type="range" id="priceRange" min="100" max="2000" step="50">
            <span id="priceValue">₹2000</span>
        </div>

        <!-- Roast -->
        <div class="filter-group">
            <h5>Roast Level</h5>
            <label><input type="checkbox" class="roast-filter" value="Light"> Light</label>
            <label><input type="checkbox" class="roast-filter" value="Medium"> Medium</label>
            <label><input type="checkbox" class="roast-filter" value="Dark"> Dark</label>
        </div>

        <button id="clearFilters">Clear Filters</button>

    </aside>

    <!-- ===== Product Grid ===== -->
    <div class="plp-products ">

        <div class="product-grid" id="productGrids">
            <!-- JS renders products -->
        </div>

    </div>

</section>

<!-- Mobile overlay -->
<div class="filter-overlay" id="filterOverlay"></div>

</body>
<?php include 'includes/footer.php'; ?>
