console.log("FifthGen UI Loaded");



// ================= PRODUCTS =================
const PRODUCTS = {
  1: { name: "Dark Roast", price: 499, img: "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80" },
  2: { name: "Medium Roast", price: 459, img: "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=200&q=80" },
  3: { name: "Light Roast", price: 429, img: "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=200&q=80" },
  4: { name: "Espresso Blend", price: 549, img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=200&q=80" },
  5: { name: "Arabica Beans", price: 599, img: "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=200&q=80" },
  6: { name: "Dark Roast", price: 499, img: "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80" },
  7: { name: "Medium Roast", price: 459, img: "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=200&q=80" },
  8: { name: "Light Roast", price: 429, img: "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=200&q=80" },
  9: { name: "Espresso Blend", price: 549, img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=200&q=80" },
  10: { name: "Arabica Beans", price: 599, img: "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=200&q=80" }
};

// ================= CART =================
let cart = JSON.parse(localStorage.getItem("cart")) || {};

// ================= HELPERS =================
function saveCart() {
  localStorage.setItem("cart", JSON.stringify(cart));
}

function getTotalCount() {
  return Object.values(cart).reduce((a, b) => a + b, 0);
}

function getTotalPrice() {
  let total = 0;
  for (let id in cart) {
    total += PRODUCTS[id].price * cart[id];
  }
  return total;
}

// ================= UI UPDATES =================
function updateNavbarCartCount() {
  const el = document.getElementById("cart-count");
  if (el) el.innerText = getTotalCount();
}

function updateQtyUI() {
  for (let id in PRODUCTS) {
    const el = document.getElementById("qty-" + id);
    if (el) el.innerText = cart[id] || 0;
  }
}



function updateMobileCartBar() {
  const bar = document.getElementById("mobile-cart-bar");
  if (!bar) return;

  const items = getTotalCount();
  if (items === 0) {
    bar.classList.add("d-none");
    return;
  }

  bar.classList.remove("d-none");
  document.getElementById("cart-items").innerText = items + " items";
  document.getElementById("cart-total").innerText = getTotalPrice();
}

// ================= SCROLL =================
function scrollRow(direction) {
  const row = document.getElementById("bestSellerRow");
  if (!row) return;
  row.scrollBy({ left: direction === "left" ? -250 : 250, behavior: "smooth" });
}

// ================= CLICK HANDLER =================
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



  // SAVE
  localStorage.setItem("cart", JSON.stringify(cart));

  // 🔥 IMPORTANT UI SYNC
  updateQtyUI();            // home cards
  updateNavbarCartCount();  // navbar
  updateMobileCartBar();    // mobile sticky
  renderCartDrawer();
  renderCartPage();         // 🛒 CART PAGE LIVE UPDATE

  // 👉 ADD THIS LINE
  renderRecommendations();
});

// ================= INIT =================
document.addEventListener("DOMContentLoaded", function () {
  updateQtyUI();
  updateNavbarCartCount();
  updateMobileCartBar();
  renderCartDrawer();
  renderCartPage();
  renderRecommendations();
});




// cart page
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
        <div class="cart-item d-flex align-items-center gap-3 border-bottom py-3">
          <img src="${product.img}" class="cart-img">
  
          <div class="flex-grow-1">
            <strong>${product.name}</strong>
            <div class="text-muted small">₹${product.price}</div>
          </div>
  
          <div class="qty-box d-flex align-items-center gap-2">
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
function getCart() {
  const cart = JSON.parse(localStorage.getItem("cart"));
  return Array.isArray(cart) ? cart : [];
}

function renderCartDrawer() {
  const container = document.getElementById("cart-drawer-items");
  const totalEl = document.getElementById("cart-drawer-total");

  if (!container || !totalEl) return;

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
        <div class="cart-item d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex gap-2 align-items-center">
            <img src="${product.img}"
                 width="50"
                 height="50"
                 style="object-fit:cover;border-radius:6px">
  
            <div>
              <strong>${product.name}</strong><br>
              <small>₹${product.price} × ${qty}</small>
            </div>
          </div>
  
          <div class="d-flex gap-1">
            <button class="btn btn-outline-dark btn-sm qty-minus" data-id="${id}">−</button>
            <button class="btn btn-dark btn-sm qty-plus" data-id="${id}">+</button>
          </div>
        </div>
      `;
  }

  if (!hasItems) {
    container.innerHTML =
      `<p class="text-center mt-4">Your cart is empty ☕</p>`;
    totalEl.innerText = "0";
    return;
  }

  totalEl.innerText = total;
}



function updateCart(product, change) {
  let cart = getCart();

  const index = cart.findIndex(item => item.id === product.id);

  if (index > -1) {
    cart[index].qty += change;
    if (cart[index].qty <= 0) cart.splice(index, 1);
  } else if (change > 0) {
    cart.push({ ...product, qty: 1 });
  }

  localStorage.setItem("cart", JSON.stringify(cart));

  renderCartDrawer();
  updateCartCount();
}

function openCartDrawer() {
  const drawer = document.getElementById("cart-drawer");
  const backdrop = document.getElementById("cart-backdrop");

  if (!drawer || !backdrop) return;

  drawer.classList.add("show");
  backdrop.classList.remove("d-none");

  renderCartDrawer();
}


function closeCartDrawer() {
  const drawer = document.getElementById("cart-drawer");
  const backdrop = document.getElementById("cart-backdrop");

  if (!drawer || !backdrop) return;

  drawer.classList.remove("show");
  backdrop.classList.add("d-none");
}
function removeFromCart(id) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart = cart.filter(item => item.id !== id);

  localStorage.setItem("cart", JSON.stringify(cart));
  renderCartDrawer();
  updateCartCount?.();
}
const catTabs = document.querySelectorAll(".cat-tab");

if (catTabs.length) {
  catTabs.forEach(tab => {
    tab.addEventListener("click", () => {
      catTabs.forEach(t => t.classList.remove("active"));
      tab.classList.add("active");

      const category = tab.dataset.cat;
      filterProducts(category);
    });
  });
}



const searchInput = document.getElementById("searchInput");

if (searchInput) {
  searchInput.addEventListener("input", function () {
    const keyword = this.value.toLowerCase();

    document.querySelectorAll(".product-item").forEach(item => {
      const name = item.dataset.name;
      item.style.display = name.includes(keyword) ? "block" : "none";
    });
  });
}

function filterProducts(category) {
  document.querySelectorAll(".product-item").forEach(item => {
    const itemCat = item.dataset.cat;
    item.style.display =
      category === "all" || itemCat === category ? "block" : "none";
  });
}
document.querySelectorAll(".filter-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    const type = btn.dataset.filter;

    document.querySelectorAll(".product-item").forEach(item => {
      const price = parseInt(item.dataset.price);

      if (type === "low") {
        item.style.display = price <= 500 ? "block" : "none";
      }

      if (type === "premium") {
        item.style.display = price > 500 ? "block" : "none";
      }
    });
  });
});
function renderRecommendations() {
  const recommendBox = document.getElementById("recommend-box");
  if (!recommendBox) return;

  recommendBox.innerHTML = "";

  const categories = new Set();

  for (let id in cart) {
    if (PRODUCTS[id]) {
      categories.add(PRODUCTS[id].cat);
    }
  }

  if (!categories.size) {
    recommendBox.innerHTML = "<p class='text-muted'>Add items to see recommendations</p>";
    return;
  }

  document.querySelectorAll(".product-item").forEach(item => {
    if (categories.has(item.dataset.cat)) {
      recommendBox.appendChild(item.cloneNode(true));
    }
  });
}

function applySidebarFilters() {
  const price = document.querySelector(".price-filter:checked")?.value || "all";
  const roastChecks = document.querySelectorAll(".roast-filter:checked");
  const roasts = Array.from(roastChecks).map(r => r.value);

  document.querySelectorAll(".product-item").forEach(item => {
    let show = true;
    const itemPrice = parseInt(item.dataset.price);
    const itemRoast = item.dataset.roast;

    // Price filter
    if (price === "low" && itemPrice > 500) show = false;
    if (price === "premium" && itemPrice <= 500) show = false;

    // Roast filter
    if (roasts.length && !roasts.includes(itemRoast)) show = false;

    item.style.display = show ? "block" : "none";
  });
}
document.querySelectorAll(".price-filter, .roast-filter").forEach(input => {
  input.addEventListener("change", applySidebarFilters);
});

function openFilterDrawer() {
  document.getElementById("filterDrawer").classList.add("open");
}

function closeFilterDrawer() {
  document.getElementById("filterDrawer").classList.remove("open");
}
const priceRange = document.getElementById("priceRange");
const priceVal = document.getElementById("priceVal");

if (priceRange) {
  priceRange.addEventListener("input", () => {
    priceVal.textContent = priceRange.value;
  });
}

const FILTER_KEY = "categoryFilters";

function applyFilters() {
  const maxPrice = Number(document.getElementById("priceRange").value);

  const selectedRoasts = Array.from(
    document.querySelectorAll(".roast-filter:checked")
  ).map(cb => cb.value);

  // ✅ SAVE FILTERS
  const filters = {
    price: maxPrice,
    roasts: selectedRoasts
  };

  localStorage.setItem(FILTER_KEY, JSON.stringify(filters));

  // APPLY FILTERS
  document.querySelectorAll(".product-item").forEach(item => {
    const price = Number(item.dataset.price);
    const roast = item.dataset.roast || "";

    let show = price <= maxPrice;

    if (selectedRoasts.length) {
      show = show && selectedRoasts.includes(roast);
    }

    item.style.display = show ? "block" : "none";
  });

  closeFilterDrawer();
}

document.addEventListener("DOMContentLoaded", () => {
  restoreFilters();
});
function restoreFilters() {
  const saved = JSON.parse(localStorage.getItem(FILTER_KEY));
  if (!saved) return;

  // Restore price
  const priceRange = document.getElementById("priceRange");
  const priceVal = document.getElementById("priceVal");

  if (priceRange && saved.price) {
    priceRange.value = saved.price;
    priceVal.textContent = saved.price;
  }

  // Restore roast checkboxes
  document.querySelectorAll(".roast-filter").forEach(cb => {
    cb.checked = saved.roasts?.includes(cb.value);
  });

  // Auto-apply after restore
  applyFiltersSilently(saved);
}
function restoreFilters() {
  const saved = JSON.parse(localStorage.getItem(FILTER_KEY));
  if (!saved) return;

  // Restore price
  const priceRange = document.getElementById("priceRange");
  const priceVal = document.getElementById("priceVal");

  if (priceRange && saved.price) {
    priceRange.value = saved.price;
    priceVal.textContent = saved.price;
  }

  // Restore roast checkboxes
  document.querySelectorAll(".roast-filter").forEach(cb => {
    cb.checked = saved.roasts?.includes(cb.value);
  });

  // Auto-apply after restore
  applyFiltersSilently(saved);
}
function clearFilters() {
  localStorage.removeItem(FILTER_KEY);

  document.getElementById("priceRange").value = 1000;
  document.getElementById("priceVal").textContent = 1000;

  document.querySelectorAll(".roast-filter").forEach(cb => cb.checked = false);

  document.querySelectorAll(".product-item").forEach(item => {
    item.style.display = "block";
  });

  closeFilterDrawer();
}
function getCurrentFilters() {
  const price =
    document.querySelector(".price-filter:checked")?.value || "all";

  const roasts = [...document.querySelectorAll(".roast-filter:checked")]
    .map(cb => cb.value);

  return { price, roasts };
}
function saveAndSyncFilters() {
  const filters = getCurrentFilters();
  localStorage.setItem("categoryFilters", JSON.stringify(filters));
  syncUI(filters);
  applyFilters();
}
document.querySelectorAll(".price-filter,.roast-filter")
  .forEach(el => el.addEventListener("change", saveAndSyncFilters));
function syncUI(filters) {
  document.querySelectorAll(".price-filter").forEach(r => {
    r.checked = r.value === filters.price;
  });

  document.querySelectorAll(".roast-filter").forEach(cb => {
    cb.checked = filters.roasts.includes(cb.value);
  });

  updateFilterBadge(filters);
  renderFilterChips(filters);
}
document.addEventListener("DOMContentLoaded", () => {
  const saved = JSON.parse(localStorage.getItem("categoryFilters"));
  if (saved) syncUI(saved);
});
function updateFilterBadge(filters) {
  let count = 0;
  if (filters.price !== "all") count++;
  count += filters.roasts.length;

  const badge = document.getElementById("filter-count");

  if (count > 0) {
    badge.textContent = count;
    badge.classList.remove("d-none");
  } else {
    badge.classList.add("d-none");
  }
}
function renderFilterChips(filters) {
  const box = document.getElementById("active-filters");
  box.innerHTML = "";

  if (filters.price !== "all") {
    box.appendChild(createChip(`Price: ${filters.price}`, () => {
      clearPriceFilter();
    }));
  }

  filters.roasts.forEach(r => {
    box.appendChild(createChip(r, () => {
      removeRoast(r);
    }));
  });
}
function renderFilterChips(filters) {
  const box = document.getElementById("active-filters");
  box.innerHTML = "";

  if (filters.price !== "all") {
    box.appendChild(createChip(`Price: ${filters.price}`, () => {
      clearPriceFilter();
    }));
  }

  filters.roasts.forEach(r => {
    box.appendChild(createChip(r, () => {
      removeRoast(r);
    }));
  });
}
function clearPriceFilter() {
  document.querySelector('.price-filter[value="all"]').checked = true;
  saveAndSyncFilters();
}

function removeRoast(roast) {
  document.querySelector(`.roast-filter[value="${roast}"]`).checked = false;
  saveAndSyncFilters();
}
// ================= AD SLIDER =================
let slideIndex = 0;
const slides = document.querySelectorAll(".ad-slide");
const dots = document.querySelectorAll(".dot");

function showSlide(i) {
  slides.forEach((s, idx) => {
    s.classList.toggle("active", idx === i);
    dots[idx].classList.toggle("active", idx === i);
  });
}

setInterval(() => {
  slideIndex = (slideIndex + 1) % slides.length;
  showSlide(slideIndex);
}, 4000);


// 🔥 Deal Countdown Timer

function startCountdown(endTime) {
  const countdownEl = document.getElementById("countdown");

  function updateTimer() {
    const now = new Date().getTime();
    const distance = endTime - now;

    if (distance < 0) {
      countdownEl.innerHTML = "<span>Deal Expired</span>";
      return;
    }

    const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((distance / 1000 / 60) % 60);
    const seconds = Math.floor((distance / 1000) % 60);

    countdownEl.innerHTML = `
      <span>${hours.toString().padStart(2, "0")}</span> :
      <span>${minutes.toString().padStart(2, "0")}</span> :
      <span>${seconds.toString().padStart(2, "0")}</span>
    `;
  }

  updateTimer();
  setInterval(updateTimer, 1000);
}

// Set deal for next 6 hours
const dealEndTime = new Date().getTime() + (6 * 60 * 60 * 1000);
startCountdown(dealEndTime);


// 🔥 Flash Sale Timer (3 hours)
function startFlashTimer() {
  const timerEl = document.getElementById("flash-timer");
  if (!timerEl) return;

  const endTime = new Date().getTime() + (3 * 60 * 60 * 1000);

  function update() {
    const now = new Date().getTime();
    const distance = endTime - now;

    if (distance < 0) {
      timerEl.innerHTML = "Expired";
      return;
    }

    const hours = Math.floor((distance / (1000 * 60 * 60)));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    timerEl.innerHTML = `Ends in ${hours}h ${minutes}m ${seconds}s`;
  }

  update();
  setInterval(update, 1000);
}

startFlashTimer();
// 🔥 Flash Sale Timer (3 hours)
function startFlashTimer() {
  const timerEl = document.getElementById("flash-timer");
  if (!timerEl) return;

  const endTime = new Date().getTime() + (3 * 60 * 60 * 1000);

  function update() {
    const now = new Date().getTime();
    const distance = endTime - now;

    if (distance < 0) {
      timerEl.innerHTML = "Expired";
      return;
    }

    const hours = Math.floor((distance / (1000 * 60 * 60)));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    timerEl.innerHTML = `Ends in ${hours}h ${minutes}m ${seconds}s`;
  }

  update();
  setInterval(update, 1000);
}

startFlashTimer();

document.addEventListener("DOMContentLoaded", function () {

  const slides = document.querySelectorAll(".hero-slide");
  let current = 0;

  function nextSlide() {
    slides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("active");
  }

  setInterval(nextSlide, 4000);

});


