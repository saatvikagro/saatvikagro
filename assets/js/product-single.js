// =========================================================
// SINGLE PRODUCT DYNAMIC ENGINE
// =========================================================
document.addEventListener("DOMContentLoaded", () => {
  // 1. Get Product ID from URL Parameter (defaults to starch-food-grade)
  const urlParams = new URLSearchParams(window.location.search);
  const productId = urlParams.get("id") || "starch-food-grade";

  // 2. Fetch Product from SAATVIK_PRODUCTS store
  const product = getProductById(productId);

  // 3. Populate Page Metadata & Breadcrumbs
  document.title = `${product.name} | Saatvik Agro`;
  
  const breadcrumbCategory = document.getElementById("breadcrumbCategory");
  const breadcrumbCategoryLink = document.getElementById("breadcrumbCategoryLink");
  const breadcrumbTitle = document.getElementById("breadcrumbTitle");
  const productTitle = document.getElementById("productTitle");
  
  if (breadcrumbCategory) breadcrumbCategory.textContent = product.category;
  if (breadcrumbTitle) breadcrumbTitle.textContent = product.name;
  if (productTitle) productTitle.textContent = product.name;

  // 4. Populate Product Image & Zoom
  const productImage = document.getElementById("productImage");
  if (productImage) {
    productImage.src = product.image;
    productImage.alt = product.name;
  }

  // 5. Populate Specs & Description
  const specGrade = document.getElementById("specGrade");
  const specForm = document.getElementById("specForm");
  const specPackSize = document.getElementById("specPackSize");
  const specFunction = document.getElementById("specFunction");
  const productDescription = document.getElementById("productDescription");

  if (specGrade) specGrade.textContent = product.grade || "Food Grade";
  if (specForm) specForm.textContent = product.form || "Powder";
  if (specPackSize) specPackSize.textContent = product.packFormat || product.packSize || "";
  if (specFunction) specFunction.textContent = product.function || "";
  if (productDescription) productDescription.textContent = product.description;

  // 6. Populate Key Features (2-column grid with gray circular bullet dots)
  const featuresGrid = document.getElementById("featuresGrid");
  if (featuresGrid && product.features) {
    featuresGrid.innerHTML = product.features.map(feat => `
      <div class="feature-bullet-item">
        <span class="feature-bullet-dot"></span>
        <span class="feature-text">${feat}</span>
      </div>
    `).join("");
  }

  // 7. Populate Applications (gray rectangular tags matching Image 1)
  const appsPills = document.getElementById("appsPills");
  if (appsPills && product.applications) {
    appsPills.innerHTML = product.applications.map(app => `
      <span class="app-gray-tag">${app}</span>
    `).join("");
  }

  // 8. Populate Related Products Grid
  const relatedGrid = document.getElementById("relatedProductsGrid");
  if (relatedGrid) {
    let otherProducts = SAATVIK_PRODUCTS.filter(p => p.id !== product.id);
    const sameCat = otherProducts.filter(p => p.category === product.category);
    const diffCat = otherProducts.filter(p => p.category !== product.category);
    const selected = [...sameCat, ...diffCat].slice(0, 3);

    relatedGrid.innerHTML = selected.map(rel => `
      <div class="clean-related-card">
        <a href="product-single.html?id=${rel.id}" class="clean-related-img-box">
          <img src="${rel.image}" alt="${rel.name}">
        </a>
        <span class="clean-related-cat">${rel.category}</span>
        <h3 class="clean-related-title">
          <a href="product-single.html?id=${rel.id}">${rel.name}</a>
        </h3>
      </div>
    `).join("");
  }

  // 9. Photo Zoom Lightbox Engine
  const zoomBtn = document.getElementById("productZoomBtn");
  const lightbox = document.getElementById("imageLightbox");
  const lightboxImg = document.getElementById("lightboxImg");
  const lightboxClose = document.getElementById("lightboxClose");

  if (zoomBtn && lightbox && lightboxImg) {
    zoomBtn.addEventListener("click", () => {
      lightboxImg.src = productImage.src;
      lightbox.classList.add("active");
    });

    if (lightboxClose) {
      lightboxClose.addEventListener("click", () => {
        lightbox.classList.remove("active");
      });
    }

    lightbox.addEventListener("click", (e) => {
      if (e.target === lightbox) {
        lightbox.classList.remove("active");
      }
    });
  }

  // 10. Brochure Download Modal Engine
  const modal = document.getElementById("brochureModal");
  const modalClose = document.getElementById("modalClose");
  const modalTitle = document.getElementById("modalProductName");
  const productInput = document.getElementById("productInput");
  const brochurePdfInput = document.getElementById("brochurePdfInput");
  const downloadBtn = document.getElementById("downloadBrochureBtn");
  const brochureForm = document.getElementById("brochureForm");

  function openBrochureModal(prodName) {
    if (!modal) return;
    const targetProduct = (prodName && SAATVIK_PRODUCTS.find(p => p.name === prodName || p.title === prodName || p.id === prodName)) || product;
    const displayName = (targetProduct && targetProduct.name) || prodName || product.name;
    const brochurePath = (targetProduct && targetProduct.brochure) || product.brochure || "";

    if (modalTitle) modalTitle.textContent = displayName;
    if (productInput) productInput.value = displayName;
    if (brochurePdfInput) brochurePdfInput.value = brochurePath;
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
});
