

const DEFAULT_PRODUCT_DETAILS = {
  description: "Bold, smoky, full-bodied coffee crafted for strong brew lovers.",
  flavors: ["Chocolate", "Nutty", "Smoky"],
  brewing: ["Espresso", "French Press", "Moka Pot"],
  reviews: [
    { name: "Shiva", rating: 5, text: "Absolutely bold and smooth!" },
    { name: "Rahim", rating: 4, text: "Strong and rich flavor." }
  ],
  faq: [
    { q: "Is it whole bean?", a: "Yes, available in whole bean and ground." },
    { q: "How fresh is it?", a: "Roasted within 3 days of shipping." }
  ]
};


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
  10: { name: "Arabica Beans", price: 599, img: "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=200&q=80" },
  "101": {
    id: "101",
    name: "Espresso",
    price: 120,
    img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=200&q=80"
  },
  "102": {
    id: "102",
    name: "Latte",
    price: 150,
    img: "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=200&q=80"
  },
  15: {
    name: "Espresso",
    price: 399,
    img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
  },
  150: {
    name: "Flash Espresso",
    price: 399,
    img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
  },
  16: {
    name: "Cold Brew",
    price: 399,
    img: "https://images.unsplash.com/photo-1521302080334-4bebac2763a6?auto=format&fit=crop&w=400&q=80"
  },
  160: {
    name: "Flash Cold Brew",
    price: 299,
    img: "https://images.unsplash.com/photo-1521302080334-4bebac2763a6?auto=format&fit=crop&w=400&q=80"
  },
  17: {
    name: "Ispressoss",
    price: 399,
    img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80"
  },
  18: {
    name: "Chilled Brew",
    price: 299,
    img: "https://images.unsplash.com/photo-1521302080334-4bebac2763a6?auto=format&fit=crop&w=400&q=80"
  },
  180: {
    name: "Midnight Espresso",
    price: 99,
    img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93"
  },
  181: {
    name: "Strong Filter Coffee",
    price: 49,
    img: "https://images.unsplash.com/photo-1495474472287-4d71bcdd2085"
  },
  182: {
    name: "Energy Booster Packs",
    price: 99,
    img: "https://images.unsplash.com/photo-1507914372368-b2b085b925a1"
  },
  183: {
    name: "Special Combo Offers",
    price: 99,
    img: "https://images.unsplash.com/photo-1485808191679-5f86510681a2"
  },
  184: {
    name: "Iftar Special Blends",
    price: 99,
    img: "https://images.unsplash.com/photo-1498804103079-a6351b050096"
  },
  185: {
    name: "Premium Dates & Coffee",
    price: 99,
    img: "https://images.unsplash.com/photo-1511920170033-f8396924c348"
  },
  186: {
    name: "Arabic Kahwa",
    price: 99,
    img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93"
  },
  187: {
    name: "Gift Hampers",
    price: 99,
    img: "https://images.unsplash.com/photo-1461023058943-07fcbe16d735"
  },
  21: { name: "Dark Roast", price: 499, img: "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80" },
  22: { name: "Medium Roast", price: 459, img: "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=200&q=80" },
  23: { name: "Light Roast", price: 429, img: "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=200&q=80" },
  24: { name: "Espresso Blend", price: 549, img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=200&q=80" },
  25: { name: "Arabica Beans", price: 599, img: "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=200&q=80" },
  26: { name: "Dark Roast", price: 499, img: "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80" },
  27: { name: "Medium Roast", price: 459, img: "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=200&q=80" },
  28: { name: "Light Roast", price: 429, img: "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=200&q=80" },
  29: { name: "Espresso Blend", price: 549, img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=200&q=80" },
  20: { name: "Arabica Beans", price: 599, img: "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=200&q=80" },

};



// Extend all products with default details
Object.keys(PRODUCTS).forEach(id => {
  PRODUCTS[id] = {
    id: id,
    ...DEFAULT_PRODUCT_DETAILS,
    ...PRODUCTS[id]
  };
});


// ================= CART =================
const CART_VERSION = "v5"; // change when cart logic structure changes

let cart = JSON.parse(localStorage.getItem("cart_" + CART_VERSION));

if (!cart || typeof cart !== "object") {
  cart = {};
}

// ================= HELPERS =================
function saveCart() {
  localStorage.setItem("cart_" + CART_VERSION, JSON.stringify(cart));
}


// function getTotalCount() {
//   return Object.values(cart).reduce((a, b) => {
//     return a + (typeof b === "number" ? b : 0);
//   }, 0);
// }

function getTotalCount() {
  return Object.values(cart).reduce((a, b) => a + b, 0);
}



// function getTotalPrice() {
//   let total = 0;

//   for (let id in cart) {
//     const product = PRODUCTS[id];

//     if (!product) continue; // 🔥 prevent crash

//     total += product.price * cart[id];
//   }

//   return total;
// }

function getTotalPrice() {

  let total = 0;

  for (let id in cart) {

    const product = PRODUCTS[id];
    const qty = parseInt(cart[id]);

    if (product && qty > 0) {
      total += product.price * qty;
    }
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

    const wrapper = document.getElementById("cart-action-" + id);
    const qtyEl = document.getElementById("qty-" + id);

    if (!wrapper) continue;

    const addBtn = wrapper.querySelector(".add-to-cart-btn");
    const qtyBox = wrapper.querySelector(".qty-box, .quick-qty");

    const qty = cart[id] || 0;

    if (qty > 0) {
      addBtn?.classList.add("d-none");
      qtyBox?.classList.remove("d-none");
      if (qtyEl) qtyEl.innerText = qty;
    } else {
      addBtn?.classList.remove("d-none");
      qtyBox?.classList.add("d-none");
      if (qtyEl) qtyEl.innerText = 0;
    }
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

  const addBtn = e.target.closest(".add-to-cart-btn");
  const plus = e.target.closest(".qty-plus");
  const minus = e.target.closest(".qty-minus");

  if (!addBtn && !plus && !minus) return;

  let id;

  if (addBtn) {
    id = String(addBtn.dataset.id).trim();
    if (!PRODUCTS[id]) return;   // 🔥 prevent invalid id
    cart[id] = 1;
  }

  if (plus) {
    id = String(plus.dataset.id).trim();
    if (!PRODUCTS[id]) return;
    cart[id] = (cart[id] || 0) + 1;
  }

  if (minus) {
    id = String(minus.dataset.id).trim();
    if (!PRODUCTS[id]) return;

    if (!cart[id]) return;
    cart[id]--;
    if (cart[id] === 0) delete cart[id];
  }

  saveCart(); // use your helper instead of repeating

  updateQtyUI();
  updateNavbarCartCount();
  updateMobileCartBar();
  renderCartDrawer();
  renderCartPage();
  renderRecommendations();
});



// ================= INIT =================
document.addEventListener("DOMContentLoaded", function () {

    // 🔥 remove old cart structure
    localStorage.removeItem("cart");

  updateQtyUI();
  updateNavbarCartCount();
  updateMobileCartBar();
  renderCartDrawer();
  renderCartPage();
  renderRecommendations();
  renderProducts();  
  
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

    // ✅ Save total for checkout
    localStorage.setItem("checkout_total", total);

  } else {
    summary.classList.add("d-none");
    empty.classList.remove("d-none");

    localStorage.removeItem("checkout_total");
  }

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


// cart logic ends here

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
// const priceRange = document.getElementById("priceRange");
// const priceVal = document.getElementById("priceVal");

// if (priceRange) {
//   priceRange.addEventListener("input", () => {
//     priceVal.textContent = priceRange.value;
//   });
// }

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
  applyFilters(saved);
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
  if (!box) return;  // 🔥 stop if not present

  box.innerHTML = "";

  if (filters.price !== "all") {
    box.innerHTML += `<span class="chip">Price: ${filters.price}</span>`;
  }

  filters.roasts.forEach(r => {
    box.innerHTML += `<span class="chip">${r}</span>`;
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

// 🔥 Deal Countdown Timer
document.addEventListener("DOMContentLoaded", function () {

  const countdown = document.getElementById("countdown");

  // 🚫 Stop if countdown doesn't exist on page
  if (!countdown) return;

  // Set deal end time (1 hour from now)
  const endTime = new Date().getTime() + (60 * 60 * 1000);

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = endTime - now;

    if (distance <= 0) {
      countdown.innerHTML = "<div>Expired</div>";
      return;
    }

    const hours = Math.floor(distance / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    countdown.innerHTML = `
      <div>${hours}h</div>
      <div>${minutes}m</div>
      <div>${seconds}s</div>
    `;
  }

  updateCountdown();
  setInterval(updateCountdown, 1000);
});



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

  // 🚫 Stop if no slides exist
  if (slides.length === 0) return;

  let current = 0;

  function nextSlide() {
    slides[current].classList.remove("active");

    current = (current + 1) % slides.length;

    slides[current].classList.add("active");
  }

  setInterval(nextSlide, 4000);
});


const container = document.querySelector('.bean-particles');

for (let i = 0; i < 20; i++) {
  const bean = document.createElement('div');
  bean.classList.add('bean');

  bean.style.left = Math.random() * 100 + 'vw';
  bean.style.animationDuration = (15 + Math.random() * 20) + 's';
  bean.style.animationDelay = Math.random() * 10 + 's';
  bean.style.opacity = 0.05 + Math.random() * 0.15;

  if (container) {
    for (let i = 0; i < 20; i++) {
      const bean = document.createElement('div');
      container.appendChild(bean);
    }
  }
}


document.addEventListener("DOMContentLoaded", function () {

  const track = document.querySelector('.testimonial-track');
  const items = document.querySelectorAll('.testimonial-item');
  const dotsContainer = document.querySelector('.testimonial-dots');

  // Stop if elements don't exist
  if (!track || !items.length || !dotsContainer) return;

  let currentIndex = 0;
  const total = items.length;

  // Create dots
  for (let i = 0; i < total; i++) {
    const dot = document.createElement('span');
    
    dot.addEventListener('click', () => {
      currentIndex = i;
      updateSlider();
    });

    dotsContainer.appendChild(dot);
  }

  const dots = dotsContainer.querySelectorAll('span');

  function updateSlider() {
    track.style.transform = `translateX(-${currentIndex * 100}%)`;

    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentIndex].classList.add('active');
  }

  // Auto slide
  setInterval(() => {
    currentIndex = (currentIndex + 1) % total;
    updateSlider();
  }, 5000);

  updateSlider();
});

// =============================
// PRODUCT LISTING PAGE LOGIC
// =============================

let filteredProducts = [];

// Convert PRODUCTS object → array safely
function getProductArray() {
  if (Array.isArray(PRODUCTS)) return PRODUCTS;
  return Object.keys(PRODUCTS).map(id => ({
    id: id,
    ...PRODUCTS[id]
  }));
}

// =============================
// RENDER PRODUCTS
// =============================

function renderProducts(productList) {

  const grid = document.getElementById("productGrids");
  if (!grid) return;

  grid.innerHTML = "";

  if (!Array.isArray(productList) || productList.length === 0) {
    grid.innerHTML = "<p class='no-products'>No products found</p>";
    return;
  }

  productList.forEach(product => {

    const card = document.createElement("div");
    // card.className = "product-card product-item";

   

    card.innerHTML = `

    <div class="product-card text-center">

    <div class="product-img">
    <a href="showproduct?id=${product.id}">
    <img src="${product.img}" alt="${product.name}">
    </a>

        </div>

        <h6 class="mt-2 mb-1">${product.name}</h6>
        <p class="fw-semibold mb-2">₹${product.price}</p>

   

        <div class="quick-action" id="cart-action-${product.id}">

          <!-- Add Button -->
          <button class="btn btn-dark btn-sm add-to-cart-btn"
                  data-id="${product.id}">
            Add to Cart
          </button>

          <!-- Quantity Box -->
          <div class="quick-qty d-none align-items-center gap-2">
            <button class="btn btn-outline-dark btn-sm qty-minus"
                    data-id="${product.id}">−</button>

            <span id="qty-${product.id}">0</span>

            <button class="btn btn-dark btn-sm qty-plus"
                    data-id="${product.id}">+</button>
          </div>

          </div>

      </div>
      `;

    grid.appendChild(card);
  });

  updateQtyUI(); // keep your cart UI working
}

// =============================
// APPLY FILTERS (SEARCH + PRICE + SORT)
// =============================

function applyFilters() {

  const searchValue =
    document.getElementById("productSearch")?.value.toLowerCase() || "";

  const maxPrice =
    Number(document.getElementById("priceRange")?.value) || Infinity;

  const sortValue =
    document.getElementById("sortSelect")?.value || "";

  let products = getProductArray();

  // SEARCH
  products = products.filter(p =>
    p.name.toLowerCase().includes(searchValue)
  );

  // PRICE FILTER
  products = products.filter(p =>
    Number(p.price) <= maxPrice
  );

  // SORTING
  if (sortValue === "lowhigh") {
    products.sort((a, b) => a.price - b.price);
  }

  if (sortValue === "highlow") {
    products.sort((a, b) => b.price - a.price);
  }

  filteredProducts = products;

  renderProducts(filteredProducts);
}

// =============================
// EVENT LISTENERS
// =============================

document.addEventListener("DOMContentLoaded", function () {

  filteredProducts = getProductArray();
  renderProducts(filteredProducts);

  document.getElementById("productSearch")
    ?.addEventListener("input", applyFilters);

  document.getElementById("priceRange")
    ?.addEventListener("input", function () {
      const priceValue = document.getElementById("priceValue");
      if (priceValue) priceValue.textContent = "₹" + this.value;
      applyFilters();
    });

  document.getElementById("sortSelect")
    ?.addEventListener("change", applyFilters);

});




document.addEventListener("click", function (e) {

  const btn = e.target.closest("#buy-now-btn");
  if (!btn) return;

  const id = String(btn.dataset.id).trim();
  if (!PRODUCTS[id]) return;

  // Get quantity from span
  const qtySpan = document.getElementById("qty-" + id);

  let qty = 1;
  if (qtySpan) {
    qty = parseInt(qtySpan.innerText);
    if (isNaN(qty) || qty <= 0) qty = 1;
  }

  // 🔥 Backup existing cart
  const existingCart = localStorage.getItem("cart_" + CART_VERSION);
  if (existingCart) {
    localStorage.setItem("temp_cart_backup", existingCart);
  }

  // 🔥 Replace cart with only this product
  const buyNowCart = {};
  buyNowCart[id] = qty;

  localStorage.setItem("cart_" + CART_VERSION, JSON.stringify(buyNowCart));
  localStorage.setItem("buy_now_mode", "true");

  window.location.href = "checkout.php";
});







