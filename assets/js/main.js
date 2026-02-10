console.log("FifthGen UI Loaded");

const PRODUCTS = {
    1: {
      name: "Dark Roast",
      price: 499,
      img: "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80"
    },
    2: {
      name: "Medium Roast",
      price: 459,
      img: "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=200&q=80"
    },
    3: {
      name: "Light Roast",
      price: 429,
      img: "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=200&q=80"
    },
    4: {
      name: "Espresso Blend",
      price: 549,
      img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=200&q=80"
    },
    5: {
      name: "Arabica Beans",
      price: 599,
      img: "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=200&q=80"
    }
  };
  let cart = JSON.parse(localStorage.getItem("cart")) || {};
  
function scrollRow(direction) {
    const row = document.getElementById("bestSellerRow");
    const scrollAmount = 220;
  
    if (direction === "left") {
      row.scrollBy({ left: -scrollAmount, behavior: "smooth" });
    } else {
      row.scrollBy({ left: scrollAmount, behavior: "smooth" });
    }
  }
  function addItem(btn) {
    btn.parentElement.innerHTML = `
      <div class="qty-box">
        <button onclick="changeQty(this, -1)">−</button>
        <span class="qty">1</span>
        <button onclick="changeQty(this, 1)">+</button>
      </div>
    `;
  }
  
  function changeQty(btn, delta) {
    const qtySpan = btn.parentElement.querySelector(".qty");
    let qty = parseInt(qtySpan.innerText);
    qty += delta;
  
    if (qty <= 0) {
      btn.closest(".qty-wrapper").innerHTML = `
        <button class="btn btn-dark btn-sm add-btn" onclick="addItem(this)">
          Add
        </button>
      `;
    } else {
      qtySpan.innerText = qty;
    }
  }
//   let cart = JSON.parse(localStorage.getItem("cart")) || {};

// update navbar count
function updateCartCount() {
  let total = 0;
  Object.values(cart).forEach(qty => total += qty);
  document.getElementById("cart-count").innerText = total;
}

// increase qty
document.addEventListener("click", function (e) {
  if (e.target.classList.contains("qty-plus")) {
    let id = e.target.dataset.id;
    cart[id] = (cart[id] || 0) + 1;
    document.getElementById("qty-" + id).innerText = cart[id];
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
  }

  if (e.target.classList.contains("qty-minus")) {
    let id = e.target.dataset.id;
    if (cart[id]) {
      cart[id]--;
      if (cart[id] === 0) delete cart[id];
      document.getElementById("qty-" + id).innerText = cart[id] || 0;
      localStorage.setItem("cart", JSON.stringify(cart));
      updateCartCount();
    }
  }
});

// init on page load
updateCartCount();

function scrollRow(direction) {
    const row = document.getElementById("bestSellerRow");
    const scrollAmount = 250;
  
    if (direction === "left") {
      row.scrollLeft -= scrollAmount;
    } else {
      row.scrollLeft += scrollAmount;
    }
  }
  
  // Quantity buttons
  document.addEventListener("click", function (e) {
    if (e.target.classList.contains("qty-plus")) {
      const id = e.target.dataset.id;
      const qtyEl = document.getElementById("qty-" + id);
      qtyEl.innerText = parseInt(qtyEl.innerText) + 1;
    }
  
    if (e.target.classList.contains("qty-minus")) {
      const id = e.target.dataset.id;
      const qtyEl = document.getElementById("qty-" + id);
      let val = parseInt(qtyEl.innerText);
      if (val > 0) qtyEl.innerText = val - 1;
    }
  });
  
  function updateMobileCartBar() {
    const bar = document.getElementById("mobile-cart-bar");
    if (!bar) return;
  
    let items = 0;
    let total = 0;
  
    for (let id in cart) {
      items += cart[id];
      total += PRODUCTS[id].price * cart[id];
    }
  
    if (items > 0) {
      bar.classList.remove("d-none");
      document.getElementById("cart-items").innerText = items + " items";
      document.getElementById("cart-total").innerText = total;
    } else {
      bar.classList.add("d-none");
    }
  }
  
  
  // Call after every cart update
  renderCartDrawer();
  updateMobileCartBar();
  function openCartDrawer() {
    document.getElementById("cart-drawer").classList.add("show");
    document.getElementById("cart-backdrop").classList.remove("d-none");
    renderCartDrawer();
  }
  
  function closeCartDrawer() {
    document.getElementById("cart-drawer").classList.remove("show");
    document.getElementById("cart-backdrop").classList.add("d-none");
  }
  
  function renderCartDrawer() {
    const list = document.getElementById("cart-items-list");
    const totalEl = document.getElementById("drawer-total");
    if (!list || !totalEl) return;
  
    list.innerHTML = "";
    let total = 0;
  
    for (let id in cart) {
      const product = PRODUCTS[id];
      if (!product) continue;
  
      const qty = cart[id];
      const price = product.price * qty;
      total += price;
  
      list.innerHTML += `
        <div class="cart-item">
          <img src="${product.img}" class="cart-img" alt="${product.name}">
          
          <div class="flex-grow-1 ms-2">
            <strong>${product.name}</strong>
            <div class="text-muted small">₹${product.price}</div>
          </div>
  
          <div class="qty-box d-flex align-items-center gap-1">
            <button class="btn btn-outline-dark btn-sm qty-minus" data-id="${id}">−</button>
            <span>${qty}</span>
            <button class="btn btn-dark btn-sm qty-plus" data-id="${id}">+</button>
          </div>
        </div>
      `;
    }
  
    totalEl.innerText = total;
  }
  document.addEventListener("click", function (e) {
    const plus = e.target.closest(".qty-plus");
    const minus = e.target.closest(".qty-minus");
    if (!plus && !minus) return;
  
    const id = (plus || minus).dataset.id;
  
    if (plus) {
      cart[id] = (cart[id] || 0) + 1;
    }
  
    if (minus) {
      if (!cart[id]) return;
      cart[id]--;
      if (cart[id] === 0) delete cart[id];
    }
  
    localStorage.setItem("cart", JSON.stringify(cart));
  
    updateNavbarCartCount();
    updateMobileCartBar();
    renderCartDrawer();
  });
  function updateNavbarCartCount() {
    const el = document.getElementById("cart-count");
    if (!el) return;
  
    let count = 0;
    Object.values(cart).forEach(q => count += q);
    el.innerText = count;
  }
  function openCartDrawer() {
    document.getElementById("cart-drawer").classList.add("show");
    document.getElementById("cart-backdrop").classList.remove("d-none");
    renderCartDrawer();
  }
  
  function closeCartDrawer() {
    document.getElementById("cart-drawer").classList.remove("show");
    document.getElementById("cart-backdrop").classList.add("d-none");
  }
  function renderCartPage() {
    const container = document.getElementById("cart-page-items");
    const summary = document.getElementById("cart-summary");
    const empty = document.getElementById("empty-cart");
    const totalEl = document.getElementById("cart-page-total");
  
    if (!container || !summary || !empty || !totalEl) return;
  
    container.innerHTML = "";
  
    let total = 0;
    let hasItems = false;
  
    for (let id in cart) {
      const product = PRODUCTS[id];
      if (!product) continue;
  
      hasItems = true;
      const qty = cart[id];
      const price = product.price * qty;
      total += price;
  
      container.innerHTML += `
        <div class="cart-item border-bottom pb-3 mb-3">
          <img src="${product.img}" class="cart-img me-3">
  
          <div class="flex-grow-1">
            <strong>${product.name}</strong>
            <div class="text-muted small">₹${product.price}</div>
          </div>
  
          <div class="qty-box d-flex gap-1">
            <button class="btn btn-outline-dark btn-sm qty-minus" data-id="${id}">−</button>
            <span>${qty}</span>
            <button class="btn btn-dark btn-sm qty-plus" data-id="${id}">+</button>
          </div>
        </div>
      `;
    }
  
    if (hasItems) {
      summary.classList.remove("d-none");
      empty.classList.add("d-none");
      totalEl.innerText = total;
    } else {
      summary.classList.add("d-none");
      empty.classList.remove("d-none");
    }
  }
  document.addEventListener("DOMContentLoaded", function () {
    renderCartPage();
    updateNavbarCartCount();
    updateMobileCartBar();
  });
    