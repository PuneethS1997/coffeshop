console.log("FifthGen UI Loaded");

// ================= PRODUCTS =================
const PRODUCTS = {
    1: { name: "Dark Roast", price: 499, img: "https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=200&q=80" },
    2: { name: "Medium Roast", price: 459, img: "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=200&q=80" },
    3: { name: "Light Roast", price: 429, img: "https://images.unsplash.com/photo-1512568400610-62da28bc8a13?auto=format&fit=crop&w=200&q=80" },
    4: { name: "Espresso Blend", price: 549, img: "https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=200&q=80" },
    5: { name: "Arabica Beans", price: 599, img: "https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?auto=format&fit=crop&w=200&q=80" }
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
});

// ================= INIT =================
document.addEventListener("DOMContentLoaded", function () {
    updateQtyUI();
    updateNavbarCartCount();
    updateMobileCartBar();
    renderCartPage();
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
