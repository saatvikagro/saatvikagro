/**
 * =========================================================================
 * Saatvik Agro - Google Sheets Form Submission Handler
 * =========================================================================
 * Handles:
 *  1. Contact Us Form (#contactForm) -> Saves to "Contact-Us" Tab
 *  2. Download Brochure Form (#brochureForm) -> Saves to "Products-Download" Tab
 *
 * NOTE FOR SETUP:
 * Paste your deployed Google Apps Script Web App URL below in GOOGLE_SCRIPT_URL.
 */

// >>>>>> PASTE YOUR GOOGLE APPS SCRIPT WEB APP URL HERE <<<<<<
const GOOGLE_SCRIPT_URL = "https://script.google.com/macros/s/AKfycbwZVOZPHbwtUXR_RTzSWuCqTCUXuefOTJnE62T1qCAN4FXJRIr4pqiH0F8YuQWz-tBh/exec";

/**
 * Send payload to Google Apps Script Web App
 */
async function sendToGoogleSheet(payload) {
  // If the user hasn't replaced the placeholder yet, simulate submission in local dev
  if (!GOOGLE_SCRIPT_URL || GOOGLE_SCRIPT_URL.includes("YOUR_GOOGLE_APPS_SCRIPT")) {
    console.warn(
      "⚠️ [Saatvik Agro] Google Apps Script URL is not set yet.\n" +
      "Payload to be sent:", payload
    );
    // Simulate network delay for testing UX/loader
    await new Promise((resolve) => setTimeout(resolve, 900));
    return { success: true, simulated: true };
  }

  const formData = new FormData();
  Object.keys(payload).forEach((key) => {
    formData.append(key, payload[key] != null ? payload[key] : "");
  });

  try {
    // Attempt standard fetch first
    await fetch(GOOGLE_SCRIPT_URL, {
      method: "POST",
      body: formData,
    });
    return { success: true };
  } catch (err) {
    // If standard fetch encounters CORS on Google redirect, fallback to no-cors mode
    try {
      await fetch(GOOGLE_SCRIPT_URL, {
        method: "POST",
        body: formData,
        mode: "no-cors",
      });
      return { success: true };
    } catch (fallbackError) {
      console.error("Submission failed:", fallbackError);
      throw fallbackError;
    }
  }
}

document.addEventListener("DOMContentLoaded", () => {
  // =========================================================================
  // 1. Contact Us Form Handler (#contactForm)
  // =========================================================================
  const contactForm = document.getElementById("contactForm");
  const contactAlert = document.getElementById("contactFormAlert");

  if (contactForm) {
    contactForm.addEventListener("submit", async (e) => {
      e.preventDefault();

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const btnText = submitBtn ? submitBtn.querySelector(".btn-text") : null;
      const btnLoader = submitBtn ? submitBtn.querySelector(".btn-loader") : null;

      // Extract form values
      const formData = new FormData(contactForm);
      const payload = {
        sheetName: "Contact-Us",
        fullName: formData.get("fullName") || "",
        company: formData.get("company") || "",
        email: formData.get("email") || "",
        phone: formData.get("phone") || "",
        location: formData.get("location") || "",
        requirement: formData.get("requirement") || "",
        quantity: formData.get("quantity") || "",
        message: formData.get("message") || "",
      };

      // Reset alert
      if (contactAlert) {
        contactAlert.style.display = "none";
        contactAlert.className = "form-alert";
      }

      // Enter loading state
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.classList.add("is-loading");
      }
      if (btnText && btnLoader) {
        btnText.style.display = "none";
        btnLoader.style.display = "inline-flex";
        btnLoader.style.alignItems = "center";
        btnLoader.style.justifyContent = "center";
      }

      try {
        await sendToGoogleSheet(payload);

        // Success state
        if (contactAlert) {
          contactAlert.className = "form-alert success";
          contactAlert.textContent =
            "✓ Thank you! Your message has been sent successfully. Our team will get back to you shortly.";
          contactAlert.style.display = "block";
          contactAlert.scrollIntoView({ behavior: "smooth", block: "nearest" });
        }

        contactForm.reset();
      } catch (err) {
        // Error state
        if (contactAlert) {
          contactAlert.className = "form-alert error";
          contactAlert.textContent =
            "⚠️ Submission failed. Please check your internet connection or connect with us on WhatsApp.";
          contactAlert.style.display = "block";
        }
      } finally {
        // Exit loading state
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.classList.remove("is-loading");
        }
        if (btnText && btnLoader) {
          btnText.style.display = "inline";
          btnLoader.style.display = "none";
        }
      }
    });
  }

  // =========================================================================
  // 2. Download Brochure Modal Form (#brochureForm)
  // =========================================================================
  const brochureForm = document.getElementById("brochureForm");
  const brochureModal = document.getElementById("brochureModal");
  const brochureAlert = document.getElementById("brochureAlert");

  if (brochureForm) {
    brochureForm.addEventListener("submit", async (e) => {
      e.preventDefault();

      const submitBtn = brochureForm.querySelector('button[type="submit"]');
      const btnText = submitBtn ? submitBtn.querySelector(".btn-text") : null;
      const btnLoader = submitBtn ? submitBtn.querySelector(".btn-loader") : null;
      const productInput = brochureForm.querySelector('[name="product"]');

      const formData = new FormData(brochureForm);
      const payload = {
        sheetName: "Products-Download",
        product: productInput ? productInput.value : formData.get("product") || "Product",
        fullName: formData.get("fullName") || "",
        email: formData.get("email") || "",
        phone: formData.get("phone") || "",
      };

      if (brochureAlert) {
        brochureAlert.style.display = "none";
        brochureAlert.className = "form-alert";
      }

      // Enter loading state
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.classList.add("is-loading");
      }
      if (btnText && btnLoader) {
        btnText.style.display = "none";
        btnLoader.style.display = "inline-flex";
        btnLoader.style.alignItems = "center";
        btnLoader.style.justifyContent = "center";
      }

      try {
        await sendToGoogleSheet(payload);

        // Success state
        if (btnText && btnLoader) {
          btnLoader.style.display = "none";
          btnText.style.display = "inline";
          btnText.textContent = "✓ Download Started!";
        }
        if (submitBtn) {
          submitBtn.style.backgroundColor = "#10b981";
          submitBtn.style.color = "#ffffff";
        }

        setTimeout(() => {
          if (brochureModal) {
            brochureModal.classList.remove("active");
          }
          brochureForm.reset();

          // Reset button to initial state
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.classList.remove("is-loading");
            submitBtn.style.backgroundColor = "";
            submitBtn.style.color = "";
          }
          if (btnText) {
            btnText.textContent = "Download Now";
          }
        }, 1100);
      } catch (err) {
        if (brochureAlert) {
          brochureAlert.className = "form-alert error";
          brochureAlert.textContent = "⚠️ Could not process download. Please try again.";
          brochureAlert.style.display = "block";
        }
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.classList.remove("is-loading");
        }
        if (btnText && btnLoader) {
          btnText.style.display = "inline";
          btnLoader.style.display = "none";
        }
      }
    });
  }
});
