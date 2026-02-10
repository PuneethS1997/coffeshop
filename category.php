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
<div class="filter-bar mb-3">
  <button class="filter-btn active">All</button>
  <button class="filter-btn">Low Price</button>
  <button class="filter-btn">Premium</button>
</div>

<section class="container my-4">
  <h5 class="fw-bold text-capitalize mb-3"><?= $type ?> products</h5>

  <div class="row g-3">
    <?php foreach($products as $p): ?>
      <?php if($p['cat'] === $type): ?>
        <div class="col-6 col-md-3">
          <div class="product-card h-100">
            <div class="product-img">
              <img src="<?= $p['img']; ?>?auto=format&fit=crop&w=400&q=80">
            </div>
            <h6><?= $p['name']; ?></h6>
            <p>₹<?= $p['price']; ?></p>

            <div class="qty-box d-flex justify-content-center gap-2">
              <button class="btn btn-outline-dark btn-sm qty-minus" data-id="<?= $p['id']; ?>">−</button>
              <span id="qty-<?= $p['id']; ?>">0</span>
              <button class="btn btn-dark btn-sm qty-plus" data-id="<?= $p['id']; ?>">+</button>
            </div>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
