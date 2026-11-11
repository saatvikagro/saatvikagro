<?php
/**
 * Template Part: Career Application & Resume Submission Modal
 * Description: Captures job applicant details, encodes resume to Base64, and pushes to Google Apps Script
 * Location: parts/modal-career.php
 */
?>
<!-- CAREER APPLICATION / RESUME MODAL -->
<div class="modal-overlay" id="careerModal" aria-hidden="true">
  <div class="modal-box">
    <button class="modal-close" id="careerModalClose" type="button" aria-label="Close modal">&times;</button>
    <div class="modal-header-block">
      <span class="careers-eyebrow" style="margin-bottom: 6px;">JOIN OUR TEAM</span>
      <h3 class="modal-title">Submit Your Resume</h3>
      <p class="modal-subtitle">Fill in your details and our talent acquisition team will connect with you.</p>
    </div>

    <form id="careerForm">
      <div id="careerAlert" class="form-alert" style="display: none;"></div>

      <div class="form-group">
        <label class="form-label" for="careerRoleInput">Applying for Role</label>
        <input type="text" id="careerRoleInput" name="careerProfile" class="form-control"
          placeholder="e.g. Production Executive / General Application" required />
      </div>

      <div class="form-group">
        <label class="form-label" for="careerFullNameInput">Full Name</label>
        <input type="text" id="careerFullNameInput" name="fullName" class="form-control" placeholder="Your Full Name"
          required />
      </div>

      <div class="form-group">
        <label class="form-label" for="careerEmailInput">Email Address</label>
        <input type="email" id="careerEmailInput" name="email" class="form-control" placeholder="name@domain.com"
          required />
      </div>

      <div class="form-group">
        <label class="form-label" for="careerPhoneInput">Phone Number</label>
        <input type="tel" id="careerPhoneInput" name="phone" class="form-control" placeholder="+91 XXXXX XXXXX"
          required />
      </div>

      <div class="form-group">
        <label class="form-label" for="careerResumeInput">Attach Resume / CV</label>
        <div class="file-upload-box">
          <input type="file" id="careerResumeInput" name="resumeFile" class="file-input"
            accept=".pdf,.doc,.docx,.png,.jpg,.jpeg" required />
          <label for="careerResumeInput" class="file-label">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
              <polyline points="17 8 12 3 7 8"></polyline>
              <line x1="12" y1="3" x2="12" y2="15"></line>
            </svg>
            <span id="fileUploadText">Choose File (PDF, DOC, DOCX, JPG, PNG)</span>
          </label>
        </div>
        <span class="file-hint">Accepted formats: PDF, DOC, DOCX, JPG, PNG (Max 10MB)</span>
      </div>

      <button type="submit" class="btn btn--accent" id="careerSubmitBtn"
        style="width: 100%; border: none; border-radius: 0 !important; font-weight: 600; height: 48px;">
        <span class="btn-text">Submit Application</span>
        <span class="btn-loader" style="display: none;">
          <span class="btn-spinner"></span> Submitting...
        </span>
      </button>
    </form>
  </div>
</div>

