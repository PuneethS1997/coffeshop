<?php include 'includes/header.php'; ?>

<body class="plp-page">

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
