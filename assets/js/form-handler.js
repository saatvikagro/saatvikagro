/**
 * =========================================================================
 * Saatvik Agro - Google Sheets Form Submission & Brochure Handler
 * =========================================================================
 * Handles:
 *  1. Contact Us Form (#contactForm) -> Saves to "Contact-Us" Tab
 *  2. Download Brochure Form (#brochureForm) -> Saves to "Products-Download" Tab
 *     AND automatically triggers direct PDF download to user's system!
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

/**
 * Map product identifier (id, title, or name) to brochure PDF path in assets/brochure/
 */
function getBrochurePdfPath(identifier) {
  if (!identifier) {
    return "assets/brochure/Saatvik Agro Shakti Maize Starch Powder – Food Grade Brochure-01.pdf";
  }

  // If already a valid PDF path
  if (typeof identifier === "string" && identifier.endsWith(".pdf")) {
    return identifier;
  }

  // Check if SAATVIK_PRODUCTS store is available globally
  if (typeof SAATVIK_PRODUCTS !== "undefined" && Array.isArray(SAATVIK_PRODUCTS)) {
    const raw = String(identifier).trim().toLowerCase();
    const found = SAATVIK_PRODUCTS.find(
      (p) =>
        p.id.toLowerCase() === raw ||
        p.name.toLowerCase() === raw ||
        p.title.toLowerCase() === raw
    );
    if (found && found.brochure) return found.brochure;
  }

  const clean = String(identifier).trim().toLowerCase();

  // Keyword / partial matching
  if (clean.includes("glucose")) {
    return "assets/brochure/Saatvik Agro Shakti Liquid Glucose-01.pdf";
  }
  if (clean.includes("maltodex")) {
    return "assets/brochure/Saatvik Agro Shakti Maltodextrin Powder-01.pdf";
  }
  if (clean.includes("gluten")) {
    return "assets/brochure/Saatvik Agro Shakti Maize Gluten Meal-01.pdf";
  }
  if (clean.includes("germ")) {
    return "assets/brochure/Saatvik Agro Shakti Maize Germ-01.pdf";
  }
  if (clean.includes("fiber") || clean.includes("fibre")) {
    return "assets/brochure/Saatvik Agro Shakti Maize Dry Fiber-01.pdf";
  }
  if (clean.includes("industrial")) {
    return "assets/brochure/Saatvik Agro Shakti Maize Starch Powder – Industrial Grade Brochure-01.pdf";
  }
  if (clean.includes("food") || clean.includes("starch")) {
    return "assets/brochure/Saatvik Agro Shakti Maize Starch Powder – Food Grade Brochure-01.pdf";
  }

  return "assets/brochure/Saatvik Agro Shakti Maize Starch Powder – Food Grade Brochure-01.pdf";
}

/**
 * Trigger programmatic browser file download for a brochure PDF
 */
function triggerBrochureDownload(fileUrl, preferredFilename) {
  if (!fileUrl) return;
  try {
    const link = document.createElement("a");
    link.href = encodeURI(fileUrl);
    const filename = preferredFilename || fileUrl.split("/").pop() || "Product-Brochure.pdf";
    link.setAttribute("download", filename);
    link.setAttribute("target", "_blank");
    link.rel = "noopener noreferrer";
    document.body.appendChild(link);
    link.click();
    setTimeout(() => {
      if (link && link.parentNode) {
        link.parentNode.removeChild(link);
      }
    }, 400);
  } catch (err) {
    console.error("Auto download trigger error:", err);
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
      const brochurePdfInput = brochureForm.querySelector('[name="brochurePdf"]');

      const formData = new FormData(brochureForm);
      const productName = productInput ? productInput.value : formData.get("product") || "Product";
      const payload = {
        sheetName: "Products-Download",
        product: productName,
        fullName: formData.get("fullName") || "",
        email: formData.get("email") || "",
        phone: formData.get("phone") || "",
      };

      // Determine PDF file path for this product
      const pdfUrl = (brochurePdfInput && brochurePdfInput.value)
        ? brochurePdfInput.value
        : getBrochurePdfPath(productName);

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

        // Trigger automatic PDF download to user's system
        triggerBrochureDownload(pdfUrl);

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
        if (brochureAlert) {
          brochureAlert.className = "form-alert success";
          const filename = pdfUrl.split("/").pop();
          brochureAlert.innerHTML = `
            <strong>✓ Thank you!</strong> Your brochure download has started.<br>
            <span style="font-size: 0.85rem; display: block; margin-top: 6px;">
              If the download didn't start automatically, 
              <a href="${encodeURI(pdfUrl)}" download="${filename}" target="_blank" style="text-decoration: underline; font-weight: 700; color: inherit;">click here to download manually</a>.
            </span>
          `;
          brochureAlert.style.display = "block";
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
          if (brochureAlert) {
            brochureAlert.style.display = "none";
            brochureAlert.innerHTML = "";
            brochureAlert.className = "form-alert";
          }
        }, 2500);
      } catch (err) {
        console.error("Brochure submission error:", err);
        // Fallback: Still trigger the brochure download so user is never blocked
        triggerBrochureDownload(pdfUrl);

        if (brochureAlert) {
          brochureAlert.className = "form-alert success";
          const filename = pdfUrl.split("/").pop();
          brochureAlert.innerHTML = `
            <strong>✓ Thank you!</strong> Your brochure download has started.<br>
            <span style="font-size: 0.85rem; display: block; margin-top: 6px;">
              If the download didn't start automatically, 
              <a href="${encodeURI(pdfUrl)}" download="${filename}" target="_blank" style="text-decoration: underline; font-weight: 700; color: inherit;">click here to download manually</a>.
            </span>
          `;
          brochureAlert.style.display = "block";
        }
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.classList.remove("is-loading");
          submitBtn.style.backgroundColor = "#10b981";
          submitBtn.style.color = "#ffffff";
        }
        if (btnText && btnLoader) {
          btnText.style.display = "inline";
          btnLoader.style.display = "none";
          btnText.textContent = "✓ Download Started!";
        }
        setTimeout(() => {
          if (brochureModal) {
            brochureModal.classList.remove("active");
          }
          brochureForm.reset();
          if (submitBtn) {
            submitBtn.style.backgroundColor = "";
            submitBtn.style.color = "";
          }
          if (btnText) btnText.textContent = "Download Now";
          if (brochureAlert) {
            brochureAlert.style.display = "none";
            brochureAlert.innerHTML = "";
            brochureAlert.className = "form-alert";
          }
        }, 2500);
      }
    });
  }
});
