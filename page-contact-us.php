<?php
/**
 * Template Name: Contact Us
 * Description: Factory & Office locations, direct phone & email links, and interactive Google Sheets inquiry form
 * Location: page-contact-us.php
 */

$page_css = 'assets/css/contact.css';
get_header();
?>

<main class="main-container">
<section class="contact-header">
    <div class="container">
      <h1>General inquiries</h1>
      <div class="contact-grid">
        <div class="contact-col">
          <h4>Corporate Office</h4>
          <p>Saatvik Agro Processors Private Limite Unit 1418 - 1419, <br> Tower A, Grandthum, Plot No 7, <br> Techzone
            4,
            Greater Noida West,<br>Uttar Pradesh - 201318</p>
        </div>
        <div class="contact-col">
          <h4>Marketed & Manufactured by</h4>
          <p>Saatvik Agro Processors Private Limited Plot No. 32, 33, <br> 40 AND 41, Sector-H,Sitapur,<br> MPIDC, Phase
            2, Morena, Banmore, Madhya Pradesh - 476444</p>
        </div>
        <!-- <div class="contact-col">
          <h4>Socials</h4>
          <a href="https://www.linkedin.com/company/saatvik-agro-processors-private-limited/posts/?viewAsMember=true"
            target="_blank" rel="noopener noreferrer">LinkedIn</a>
          <a href="https://www.instagram.com/saatvikagro/" target="_blank" rel="noopener noreferrer">Instagram</a>
        </div> -->
        <div class="contact-col">
          <h4>General Inquiries</h4>
          <a href="mailto:marketing.agro@saatvikgroup.com">marketing.agro@saatvikgroup.com</a>
          <a href="mailto:info@saatvikgroup.com">info@saatvikgroup.com</a>
          <p style="margin-top: 10px;"><a href="tel:+91 95910 33188">+91 95910 33188</a></p>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-form-section">
    <div class="container contact-form-container">
      <div class="contact-form-box">
        <h2>Have questions? Get in touch!</h2>
        <div id="contactFormAlert" class="form-alert"></div>
        <form class="contact-custom-form" id="contactForm">
          <!-- Row 1: Full Name & Company -->
          <div class="form-row">
            <div class="form-field">
              <label for="contact-name" class="field-label">Full Name *</label>
              <input type="text" id="contact-name" name="fullName" class="form-input" placeholder="Your full name"
                required />
            </div>
            <div class="form-field">
              <label for="contact-company" class="field-label">Company *</label>
              <input type="text" id="contact-company" name="company" class="form-input" placeholder="Company name"
                required />
            </div>
          </div>

          <!-- Row 2: Email & Phone Number -->
          <div class="form-row">
            <div class="form-field">
              <label for="contact-email" class="field-label">Email *</label>
              <input type="email" id="contact-email" name="email" class="form-input" placeholder="Email address"
                required />
            </div>
            <div class="form-field">
              <label for="contact-phone" class="field-label">Phone Number *</label>
              <input type="tel" id="contact-phone" name="phone" class="form-input" placeholder="Include country code"
                required />
            </div>
          </div>

          <!-- Row 3: Location & Requirement -->
          <div class="form-row">
            <div class="form-field">
              <label for="contact-location" class="field-label">Location *</label>
              <input type="text" id="contact-location" name="location" class="form-input"
                placeholder="City, state and country" required />
            </div>
            <div class="form-field">
              <label for="contact-requirement" class="field-label">Requirement *</label>
              <select id="contact-requirement" name="requirement" class="form-select" required>
                <option value="" disabled selected>Select product or Not Sure Yet</option>
                <option value="Food Grade Maize Starch">Food Grade Maize Starch</option>
                <option value="Liquid Glucose">Liquid Glucose</option>
                <option value="Maltodex SD">Maltodex SD</option>
                <option value="Maltodex HD">Maltodex HD</option>
                <option value="Maltodex LD">Maltodex LD</option>
                <option value="Industrial Maize Starch">Industrial Maize Starch</option>
                <option value="Maize Dry Fibre">Maize Dry Fibre</option>
                <option value="Maize Gluten Meal">Maize Gluten Meal</option>
                <option value="Maize Germ">Maize Germ</option>
                <option value="Not Sure Yet">Not Sure Yet</option>
              </select>
            </div>
          </div>

          <!-- Row 4: Quantity in Tonnes & Message -->
          <div class="form-row">
            <div class="form-field">
              <label for="contact-quantity" class="field-label">Quantity in Tonnes</label>
              <input type="text" id="contact-quantity" name="quantity" class="form-input"
                placeholder="Estimated quantity" />
            </div>
            <div class="form-field">
              <label for="contact-message" class="field-label">Message *</label>
              <textarea id="contact-message" name="message" class="form-textarea"
                placeholder="Application, specification or question" rows="3" required></textarea>
            </div>
          </div>

          <!-- Privacy Policy Checkbox -->
          <div class="privacy-checkbox-wrap">
            <label class="privacy-checkbox-label">
              <input type="checkbox" id="contact-privacy" name="privacy" required />
              <span>I have read the Privacy Policy and understand that these details will be used to respond to my
                enquiry.</span>
            </label>
          </div>

          <!-- Action Buttons (Send Message & WhatsApp) -->
          <div class="form-actions">
            <button type="submit" class="btn btn--submit-full" id="contactSubmitBtn">
              <span class="btn-text">Send Message</span>
              <span class="btn-loader" style="display: none;">
                <span class="btn-spinner"></span> Sending Message...
              </span>
            </button>
            <a href="https://wa.me/919591033188" target="_blank" rel="noopener noreferrer"
              class="btn btn--whatsapp-full">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M12.031 2C6.496 2 2 6.496 2 12.031c0 1.838.497 3.565 1.365 5.064L2.05 22l5.086-1.306A9.97 9.97 0 0 0 12.03 22c5.535 0 10.03-4.496 10.03-10.031C22.062 6.496 17.566 2 12.031 2zm0 18.344a8.277 8.277 0 0 1-4.223-1.154l-.303-.18-3.136.806.837-3.037-.197-.319a8.267 8.267 0 0 1-1.272-4.429c0-4.577 3.725-8.303 8.302-8.303 4.577 0 8.303 3.726 8.303 8.303 0 4.578-3.726 8.313-8.308 8.313zm4.551-6.223c-.249-.125-1.474-.727-1.703-.81-.229-.083-.396-.125-.562.125-.166.25-.645.81-.79 1.018-.146.208-.291.229-.541.104-.25-.125-1.055-.389-2.01-1.24a7.488 7.488 0 0 1-1.389-1.724c-.146-.25-.015-.385.109-.509.112-.112.25-.291.375-.437.125-.146.166-.25.25-.416.083-.166.042-.312-.021-.437-.062-.125-.562-1.352-.77-1.851-.203-.487-.41-.421-.563-.429l-.479-.008c-.166 0-.437.062-.666.312-.229.25-.874.853-.874 2.08s.895 2.413 1.02 2.58c.125.166 1.761 2.689 4.267 3.771.596.257 1.061.41 1.424.526.599.191 1.144.164 1.575.1.48-.072 1.474-.603 1.682-1.185.208-.583.208-1.082.146-1.186-.063-.104-.229-.166-.479-.291z" />
              </svg>
              <span>Connect on WhatsApp</span>
            </a>
          </div>
        </form>
      </div>
    </div>
  </section>


  
</main>

<?php
get_footer();