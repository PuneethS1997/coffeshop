<?php include 'includes/header.php'; ?>

<?php $id = $_GET['id'] ?? ''; ?>

<style>
    .quick-qty {
    display: flex;
    justify-content: start !important;
    margin-left: 1.4rem;

    align-items: center;
    gap: 8px;
    padding-bottom: 12px;
}
</style>

<div class="pdp-container">

  <!-- LEFT: Product Image -->
  <div class="pdp-image">
    <img id="pdp-img" src="" alt="Product">
  </div>

  <!-- RIGHT: Product Info -->
  <div class="pdp-info">

    <h1 id="pdp-title"></h1>
    <div id="pdp-price" class="price"></div>

    <!-- Roast Level -->
    <div class="roast-level">
      <span class="label">Roast:</span>
      <span class="roast-badge medium">Medium</span>
    </div>

    <!-- Description -->
    <p id="pdp-desc" class="description"></p>

    <!-- Flavors -->
    <div class="section">
      <h3>Flavor Notes</h3>
      <div id="pdp-flavors" class="flavors"></div>
    </div>

    <!-- Brewing -->
    <div class="section">
      <h3>Best For Brewing</h3>
      <div id="pdp-brewing" class="brewing"></div>
    </div>

    <!-- Quantity + Add -->
    <!-- <div class="cart-section">

      <div class="qty-wrapper">
        <button id="qty-minus">−</button>
        <span id="qty-value">1</span>
        <button id="qty-plus">+</button>
      </div>

      <button id="add-to-cart-btn" class="add-btn">
        Add to Cart
      </button>

    </div> -->


<div class="quick-action" id="cart-action-<?= $id; ?>">

  <button class="btn btn-dark btn-sm add-to-cart-btn"
          data-id="<?= $id; ?>">
    Add to Cart
  </button>

  <button class="btn btn-warning btn-sm mt-2"
        id="buy-now-btn"
        data-id="<?= $id; ?>">
  Buy Now
</button>


  <div class="quick-qty d-none align-items-center gap-2">

    <button class="btn btn-outline-dark btn-sm qty-minus"
            data-id="<?= $id; ?>">−</button>

    <span id="qty-<?= $id; ?>">0</span>

    <button class="btn btn-dark btn-sm qty-plus"
            data-id="<?= $id; ?>">+</button>

  </div>

</div>


  </div>
</div>

<!-- Reviews -->
<div class="review-section">
  <h2>Customer Reviews</h2>
  <div id="pdp-reviews" class="reviews"></div>
</div>

<!-- FAQ -->
<div class="faq-section">
  <h2>Frequently Asked Questions</h2>
  <div id="pdp-faq"></div>
</div>

<!-- Sticky Mobile Bar -->
<!-- <div class="sticky-cart">
  <div class="sticky-price" id="sticky-price"></div>
  <button id="sticky-add-btn">Add to Cart</button>
</div> -->


<script>
    // Get Product from URL
    function getProductId() {
  const params = new URLSearchParams(window.location.search);
  return params.get("id");
}

// Load Product
document.addEventListener("DOMContentLoaded", function () {

const id = getProductId();
const product = PRODUCTS[id];

if (!product) {
  document.getElementById("pdp-container").innerHTML = "<h2>Product Not Found</h2>";
  return;
}

renderProduct(product);
});

// Render Product
function renderProduct(product) {

document.getElementById("pdp-img").src = product.img;
document.getElementById("pdp-title").textContent = product.name;
document.getElementById("pdp-price").textContent = "₹" + product.price;
document.getElementById("pdp-desc").textContent = product.description;

renderFlavors(product.flavors);
renderBrewing(product.brewing);
renderReviews(product.reviews);
renderFAQ(product.faq);

// setupQuantity(product);
}



// function setupQuantity(product) {

// let qty = 1;

// const minus = document.getElementById("qty-minus");
// const plus = document.getElementById("qty-plus");
// const value = document.getElementById("qty-value");

// minus.addEventListener("click", function () {
//   if (qty > 1) {
//     qty--;
//     value.textContent = qty;
//   }
// });

// plus.addEventListener("click", function () {
//   qty++;
//   value.textContent = qty;
// });

// document.getElementById("add-to-cart-btn")
//   .addEventListener("click", function () {

//     const cartKey = "cart_" + CART_VERSION;
//     let cart = JSON.parse(localStorage.getItem(cartKey)) || {};

//     if (cart[product.id]) {
//       cart[product.id].qty += qty;
//     } else {
//       cart[product.id] = {
//         id: product.id,
//         name: product.name,
//         price: product.price,
//         img: product.img,
//         qty: qty
//       };
//     }

//     localStorage.setItem(cartKey, JSON.stringify(cart));

//     updateNavbarCartCount();

//     alert(qty + " item(s) added to cart!");

//     qty = 1;
//     value.textContent = 1;
//   });
// }

// render other section
function renderFlavors(flavors) {
  const container = document.getElementById("pdp-flavors");
  container.innerHTML = "";

  flavors.forEach(f => {
    const span = document.createElement("span");
    span.className = "flavor-badge";
    span.textContent = f;
    container.appendChild(span);
  });
}

function renderBrewing(methods) {
  const container = document.getElementById("pdp-brewing");
  container.innerHTML = "";

  methods.forEach(m => {
    const div = document.createElement("div");
    div.className = "brew-card";
    div.textContent = m;
    container.appendChild(div);
  });
}

function renderReviews(reviews) {
  const container = document.getElementById("pdp-reviews");
  container.innerHTML = "";

  reviews.forEach(r => {
    const div = document.createElement("div");
    div.className = "review-card";
    div.innerHTML = `
      <strong>${r.name}</strong>
      <div>${"★".repeat(r.rating)}</div>
      <p>${r.text}</p>
    `;
    container.appendChild(div);
  });
}


function renderFAQ(faqs) {
  const container = document.getElementById("pdp-faq");
  container.innerHTML = "";

  faqs.forEach(item => {
    const div = document.createElement("div");
    div.className = "faq-item";
    div.innerHTML = `
      <button class="faq-question">${item.q}</button>
      <div class="faq-answer">${item.a}</div>
    `;
    container.appendChild(div);
  });

  document.querySelectorAll(".faq-question").forEach(btn => {
    btn.addEventListener("click", function () {
      this.nextElementSibling.classList.toggle("open");
    });
  });
}

</script>

<?php include 'includes/footer.php'; ?>
