<?php
/**
 * Template Part: Technical Brochure Download Lead Modal
 * Description: Modal form that captures lead details and auto-triggers PDF brochure download
 * Location: parts/modal-brochure.php
 */
?>
<!-- BROCHURE DOWNLOAD MODAL -->
<div class="modal-overlay" id="brochureModal" aria-hidden="true">
  <div class="modal-box">
    <button class="modal-close" id="modalClose" type="button" aria-label="Close modal">&times;</button>
    <h3>Download Brochure</h3>
    <p id="modalProductName" class="modal-product-name" style="font-size: 0.9rem; color: #666; margin-bottom: 20px; font-weight: 600;"></p>
    <form id="brochureForm">
      <input type="hidden" id="productInput" name="product" />
      <input type="hidden" id="brochureProductInput" name="brochureProduct" />
      <input type="hidden" id="brochurePdfInput" name="brochurePdf" />
      <div id="brochureAlert" class="form-alert"></div>
      <div class="form-group">
        <input type="text" name="fullName" class="form-control" placeholder="Full Name" required />
      </div>
      <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email Address" required />
      </div>
      <div class="form-group">
        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required />
      </div>
      <button type="submit" class="btn btn--accent" id="brochureSubmitBtn" style="width: 100%; border: none; border-radius: 0; font-weight: 600;">
        <span class="btn-text">Download Now</span>
        <span class="btn-loader" style="display: none;">
          <span class="btn-spinner"></span> Submitting...
        </span>
      </button>
    </form>
  </div>
</div>

