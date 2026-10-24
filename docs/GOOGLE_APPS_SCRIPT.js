/**
 * =========================================================================
 * Saatvik Agro - Google Sheets Lead Capture Engine
 * Spreadsheet: "Website Leads"
 * =========================================================================
 * Supported Tabs:
 *   1. "Contact-Us"
 *   2. "Products-Download"
 *
 * HOW TO DEPLOY:
 *   1. In your Google Sheet ("Website Leads"), click: Extensions > Apps Script
 *   2. Paste this entire code into the editor (replace existing Code.gs content)
 *   3. Click "Save" (Ctrl + S)
 *   4. Click "Deploy" > "New deployment"
 *   5. Click gear icon next to "Select type" > Choose "Web app"
 *   6. Set:
 *      - Description: "Saatvik Agro Form API"
 *      - Execute as: "Me"
 *      - Who has access: "Anyone" (CRITICAL: Do NOT choose "Only myself")
 *   7. Click "Deploy" and Authorize access with your Google account.
 *   8. Copy the "Web app URL" (ends in /exec)
 *   9. Paste this URL into: assets/js/form-handler.js (line 15: GOOGLE_SCRIPT_URL)
 */

function doPost(e) {
  var lock = LockService.getScriptLock();
  // Try to acquire lock for up to 10 seconds to handle concurrent submissions safely
  lock.tryLock(10000);

  try {
    var ss = SpreadsheetApp.getActiveSpreadsheet();
    var data = {};

    // Support both FormData (e.parameter) and JSON requests
    if (e.postData && e.postData.type === "application/json") {
      data = JSON.parse(e.postData.contents);
    } else if (e.parameter) {
      data = e.parameter;
    }

    var sheetName = data.sheetName;
    // Auto-detect sheet name if not explicitly passed
    if (!sheetName) {
      if (data.product || data.productName) {
        sheetName = "Products-Download";
      } else {
        sheetName = "Contact-Us";
      }
    }

    var sheet = ss.getSheetByName(sheetName);
    if (!sheet) {
      return ContentService
        .createTextOutput(JSON.stringify({
          result: "error",
          error: "Tab '" + sheetName + "' not found in spreadsheet."
        }))
        .setMimeType(ContentService.MimeType.JSON);
    }

    // Format timestamp in Indian Standard Time (IST)
    var timestamp = new Date();
    var formattedDate = Utilities.formatDate(timestamp, "Asia/Kolkata", "dd-MMM-yyyy hh:mm:ss a");

    var row = [];

    if (sheetName === "Contact-Us") {
      row = [
        formattedDate,                                  // A: Timestamp
        data.fullName || data.name || "",               // B: Full Name
        data.company || "",                            // C: Company
        data.email || "",                              // D: Email
        data.phone || data.phoneNumber || "",          // E: Phone Number
        data.location || "",                           // F: Location
        data.requirement || "",                        // G: Requirement
        data.quantity || "",                           // H: Quantity (Tonnes)
        data.message || ""                             // I: Message
      ];
    } else if (sheetName === "Products-Download") {
      row = [
        formattedDate,                                  // A: Timestamp
        data.product || data.productName || "",         // B: Product Name
        data.fullName || data.name || "",               // C: Full Name
        data.email || "",                              // D: Email
        data.phone || data.phoneNumber || ""           // E: Phone Number
      ];
    } else {
      row = [formattedDate, JSON.stringify(data)];
    }

    sheet.appendRow(row);

    return ContentService
      .createTextOutput(JSON.stringify({ result: "success", sheet: sheetName }))
      .setMimeType(ContentService.MimeType.JSON);

  } catch (error) {
    return ContentService
      .createTextOutput(JSON.stringify({ result: "error", error: error.toString() }))
      .setMimeType(ContentService.MimeType.JSON);
  } finally {
    lock.releaseLock();
  }
}

// Health check endpoint (for testing in browser)
function doGet(e) {
  return ContentService
    .createTextOutput(JSON.stringify({
      result: "active",
      message: "Saatvik Agro Google Apps Script Web App is running!"
    }))
    .setMimeType(ContentService.MimeType.JSON);
}
