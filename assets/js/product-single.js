// =========================================================
// SINGLE PRODUCT DYNAMIC ENGINE
// =========================================================
document.addEventListener("DOMContentLoaded", () => {
  // 1. Get Product ID from URL Parameter
  const urlParams = new URLSearchParams(window.location.search);
  const productId = urlParams.get("id") || "starch-food-grade";

  // 2. Fetch Product from SAATVIK_PRODUCTS store
  const product = getProductById(productId);

  // 3. Populate Page Metadata & Header
  document.title = `${product.name} | Saatvik Agro`;
  
  const breadcrumbCategory = document.getElementById("breadcrumbCategory");
  const breadcrumbTitle = document.getElementById("breadcrumbTitle");
  if (breadcrumbCategory) breadcrumbCategory.textContent = product.category;
  if (breadcrumbTitle) breadcrumbTitle.textContent = product.name;

  // 4. Populate Left Showcase Card
  const categoryBadge = document.getElementById("productCategoryBadge");
  const productTitle = document.getElementById("productTitle");
  const productSubtitle = document.getElementById("productSubtitle");
  const productImage = document.getElementById("productImage");

  if (categoryBadge) categoryBadge.textContent = product.category;
  if (productTitle) productTitle.textContent = product.title;
  if (productSubtitle) productSubtitle.textContent = product.subtitle;
  if (productImage) {
    productImage.src = product.image;
    productImage.alt = product.name;
  }

  // 5. Populate Specs & Description
  const specGrade = document.getElementById("specGrade");
  const specPackSize = document.getElementById("specPackSize");
  const specFunction = document.getElementById("specFunction");
  const productDescription = document.getElementById("productDescription");

  if (specGrade) specGrade.textContent = product.grade;
  if (specPackSize) specPackSize.textContent = product.packSize;
  if (specFunction) specFunction.textContent = product.function;
  if (productDescription) productDescription.textContent = product.description;

  // 6. Populate Key Features Grid (matching Slide 1 & 2 [✓])
  const featuresGrid = document.getElementById("featuresGrid");
  if (featuresGrid && product.features) {
    featuresGrid.innerHTML = product.features.map(feat => `
      <div class="feature-item">
        <div class="feature-check-box">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12"></polyline>
          </svg>
        </div>
        <span class="feature-text">${feat}</span>
      </div>
    `).join("");
  }

  // 7. Populate Applications Tags (orange pills)
  const appsPills = document.getElementById("appsPills");
  if (appsPills && product.applications) {
    appsPills.innerHTML = product.applications.map(app => `
      <span class="app-tag-pill">${app}</span>
    `).join("");
  }

  // 8. Populate Related Products Grid (3 items from same or other categories)
  const relatedGrid = document.getElementById("relatedProductsGrid");
  if (relatedGrid) {
    const otherProducts = SAATVIK_PRODUCTS
      .filter(p => p.id !== product.id)
      .slice(0, 3);

    relatedGrid.innerHTML = otherProducts.map(rel => `
      <div class="shop-card">
        <a href="product-single.html?id=${rel.id}" class="shop-card__image-link">
          <div class="shop-card__image">
            <img src="${rel.image}" alt="${rel.name}">
          </div>
        </a>
        <span class="shop-card-category">${rel.category}</span>
        <h3><a href="product-single.html?id=${rel.id}">${rel.name}</a></h3>
        <p>${rel.subtitle}</p>
        <div class="card-action-row">
          <a href="product-single.html?id=${rel.id}" class="btn-view-details">View Details</a>
          <button class="btn-download-trigger" data-product="${rel.name}">Brochure</button>
        </div>
      </div>
    `).join("");
  }

  // 9. Brochure Download Modal Engine
  const modal = document.getElementById("brochureModal");
  const modalClose = document.getElementById("modalClose");
  const modalTitle = document.getElementById("modalProductName");
  const productInput = document.getElementById("productInput");
  const downloadBtn = document.getElementById("downloadBrochureBtn");
  const brochureForm = document.getElementById("brochureForm");

  function openBrochureModal(prodName) {
    if (!modal) return;
    if (modalTitle) modalTitle.textContent = prodName || product.name;
    if (productInput) productInput.value = prodName || product.name;
    modal.classList.add("active");
  }

  function closeBrochureModal() {
    if (!modal) return;
    modal.classList.remove("active");
  }

  if (downloadBtn) {
    downloadBtn.addEventListener("click", () => {
      openBrochureModal(product.name);
    });
  }

  if (modalClose) {
    modalClose.addEventListener("click", closeBrochureModal);
  }

  if (modal) {
    modal.addEventListener("click", (e) => {
      if (e.target === modal) closeBrochureModal();
    });
  }

  // Also bind brochure buttons in related cards
  document.addEventListener("click", (e) => {
    if (e.target && e.target.classList.contains("btn-download-trigger")) {
      const pName = e.target.getAttribute("data-product");
      openBrochureModal(pName);
    }
  });

  // Handle Form Submission with instant user feedback
  if (brochureForm) {
    brochureForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const submitBtn = brochureForm.querySelector('button[type="submit"]');
      if (submitBtn) {
        submitBtn.textContent = "Downloading Brochure...";
        submitBtn.style.backgroundColor = "#28a745";
      }

      setTimeout(() => {
        alert(`Thank you! The brochure for ${productInput.value || product.name} is downloading.`);
        closeBrochureModal();
        brochureForm.reset();
        if (submitBtn) {
          submitBtn.textContent = "Download Now";
          submitBtn.style.backgroundColor = "";
        }
      }, 800);
    });
  }
});
