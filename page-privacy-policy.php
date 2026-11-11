<?php
/**
 * Template Name: Privacy Policy
 * Description: Legal privacy documentation & data protection guidelines
 * Location: page-privacy-policy.php
 */

$page_css = 'assets/css/legal.css';
get_header();
?>
<main>
    <!-- HERO BANNER -->
    <section class="legal-hero">
      <div class="container">
        <span class="legal-hero-kicker">Data Protection &amp; Trust</span>
        <h1>Privacy Policy</h1>
        <div class="legal-hero-meta">
          <span><strong>Effective Date:</strong> October 2026</span>
          <span><strong>Entity:</strong> Saatvik Agro Processors Private Limited</span>
          <span><strong>Compliance:</strong> DPDPA / IT Act</span>
        </div>
      </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="legal-section">
      <div class="container">
        <div class="legal-grid">

          <!-- Sticky Sidebar -->
          <aside class="legal-toc">
            <div class="legal-toc-title">Quick Navigation</div>
            <ul class="legal-toc-list">
              <li><a href="#overview">1. Overview &amp; Scope</a></li>
              <li><a href="#info-we-collect">2. Information We Collect</a></li>
              <li><a href="#how-we-collect">3. How We Collect Data</a></li>
              <li><a href="#purpose">4. Purpose of Processing</a></li>
              <li><a href="#legal-basis">5. Legal Basis</a></li>
              <li><a href="#cookies">6. Cookies &amp; Tracking</a></li>
              <li><a href="#disclosure">7. Third-Party Sharing</a></li>
              <li><a href="#security">8. Data Security &amp; Storage</a></li>
              <li><a href="#rights">9. Your Data Rights</a></li>
              <li><a href="#retention">10. Retention Period</a></li>
              <li><a href="#dpo">11. Privacy Contact &amp; DPO</a></li>
            </ul>
          </aside>

          <!-- Main Legal Content -->
          <div class="legal-content">
            <p class="legal-lead">
              At <strong>Saatvik Agro Processors Private Limited</strong> (&ldquo;Saatvik Agro&rdquo;, &ldquo;we&rdquo;,
              &ldquo;our&rdquo;, or &ldquo;us&rdquo;), we take your privacy and corporate confidentiality with utmost
              seriousness. This Privacy Policy outlines how we collect, process, store, and safeguard business and
              personal information gathered across our website, commercial contact portals, and customer correspondence.
            </p>

            <!-- 1 -->
            <div class="legal-block" id="overview">
              <h2>1. Overview &amp; Scope</h2>
              <p>
                This policy applies to information collected through our official website
                <strong>www.saatvikagro.com</strong>, procurement inquiries, product brochure downloads, commercial
                quotation forms, and sample dispatch requests.
              </p>
              <p>
                Saatvik Agro complies with relevant data protection legislation including the <em>Digital Personal Data
                  Protection Act, 2023 (DPDPA)</em> and the <em>Information Technology Act, 2000</em> of India.
              </p>
            </div>

            <!-- 2 -->
            <div class="legal-block" id="info-we-collect">
              <h2>2. Information We Collect</h2>
              <p>
                As an agro-ingredient manufacturer serving B2B enterprises, pharmaceutical formulators, food processors,
                and animal feed producers, the information we collect primarily relates to commercial and professional
                transactions:
              </p>
              <ul>
                <li><strong>Contact Identifiers:</strong> Full name, official corporate email address, business
                  telephone/mobile number, and job title/designation.</li>
                <li><strong>Company &amp; Procurement Details:</strong> Registered company name, corporate headquarters
                  address, GST/tax identification number, factory delivery location, and target application industry.
                </li>
                <li><strong>Product Interest &amp; Sample Data:</strong> Selected product requirements (e.g., Food Grade
                  Starch, Liquid Glucose, Maltodextrin, Animal Nutrition), target monthly volumes, sample delivery
                  consignee address, and technical specification requests.</li>
                <li><strong>Technical &amp; Analytical Data:</strong> IP address, browser type and version, device
                  operating system, referring URL, time spent per page, and general geolocation (city/country level).
                </li>
              </ul>
            </div>

            <!-- 3 -->
            <div class="legal-block" id="how-we-collect">
              <h2>3. How We Collect Data</h2>
              <p>
                We collect information through transparent, voluntary channels:
              </p>
              <ul>
                <li><strong>Direct Website Forms:</strong> When you submit our commercial inquiry form on <a
                    href="<?php echo esc_url(home_url('/contact-us/')); ?>" style="color: #ea7124; font-weight: 600;">Contact Us</a>.</li>
                <li><strong>Sample &amp; Brochure Portals:</strong> When you download product technical sheets,
                  Certificates of Analysis (COA), or request formulation samples on <a href="<?php echo esc_url(home_url('/products/')); ?>"
                    style="color: #ea7124; font-weight: 600;">Products</a>.</li>
                <li><strong>Direct Commercial Communications:</strong> When you call our commercial helpline, email our
                  marketing desk, or initiate a chat via our verified WhatsApp business channel.</li>
                <li><strong>Automated Server Logs:</strong> Standard web analytics and security logs collected as you
                  navigate our web pages.</li>
              </ul>
            </div>

            <!-- 4 -->
            <div class="legal-block" id="purpose">
              <h2>4. Purpose of Data Processing</h2>
              <p>
                The information collected is used strictly for legitimate commercial and business operations:
              </p>
              <div class="legal-table-wrap">
                <table class="legal-table">
                  <thead>
                    <tr>
                      <th>Data Category</th>
                      <th>Primary Business Purpose</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Contact &amp; Corporate Info</td>
                      <td>Responding to RFQs, sending formal price quotations, and client relationship management.</td>
                    </tr>
                    <tr>
                      <td>Delivery &amp; Sample Info</td>
                      <td>Dispatching certified laboratory samples via courier and issuing test batch documentation.
                      </td>
                    </tr>
                    <tr>
                      <td>Technical Specification Data</td>
                      <td>Ensuring plant production batches align with specific client viscosity, DE, and moisture
                        criteria.</td>
                    </tr>
                    <tr>
                      <td>Website Analytics</td>
                      <td>Enhancing page load speeds, maintaining cybersecurity, and optimizing user navigation.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <!-- 5 -->
            <div class="legal-block" id="legal-basis">
              <h2>5. Legal Basis for Processing</h2>
              <p>
                We process your personal and corporate information on one or more of the following lawful bases:
              </p>
              <ul>
                <li><strong>Consent:</strong> When you voluntarily submit forms, request sample dispatches, or opt in to
                  receive updates.</li>
                <li><strong>Contractual Performance:</strong> To fulfill pre-contractual commercial inquiries, supply
                  proforma invoices, and manage logistics dispatches.</li>
                <li><strong>Legal &amp; Regulatory Compliance:</strong> To satisfy statutory accounting, GST reporting,
                  food safety audits (FSSAI), and tax regulations.</li>
                <li><strong>Legitimate Interests:</strong> To protect our network security, prevent fraudulent quotation
                  requests, and enhance B2B services.</li>
              </ul>
            </div>

            <!-- 6 -->
            <div class="legal-block" id="cookies">
              <h2>6. Cookies &amp; Tracking Technologies</h2>
              <p>
                Our website utilizes essential and performance cookies to provide a smooth user experience.
              </p>
              <ul>
                <li><strong>Essential Cookies:</strong> Required for site navigation, form submission security, and CSRF
                  protection.</li>
                <li><strong>Analytics Cookies:</strong> Anonymized metrics helping our development team monitor site
                  health, traffic volume, and popular product categories.</li>
              </ul>
              <p>
                You can manage or disable cookies via your browser settings at any time. Disabling essential cookies may
                limit the responsiveness of interactive contact forms.
              </p>
            </div>

            <!-- 7 -->
            <div class="legal-block" id="disclosure">
              <h2>7. Third-Party Sharing &amp; Disclosure</h2>
              <div class="legal-callout">
                <h4>Strict No-Sale Policy</h4>
                <p>
                  Saatvik Agro Processors Private Limited does NOT sell, lease, rent, or trade your corporate or
                  personal data to marketing brokers or third-party advertisers under any circumstances.
                </p>
              </div>
              <p>
                Information may only be shared with trusted third parties under strict confidentiality agreements for
                essential operational workflows:
              </p>
              <ul>
                <li><strong>Logistics &amp; Courier Partners:</strong> Third-party express couriers (e.g., Blue Dart,
                  DTDC, DHL) solely for delivering physical product samples and test materials to your facility.</li>
                <li><strong>Cloud &amp; IT Service Providers:</strong> Trusted enterprise hosting and communication
                  platforms maintaining industry-standard encryption.</li>
                <li><strong>Regulatory &amp; Legal Authorities:</strong> Government bodies, FSSAI officials, or judicial
                  courts only when mandatory under applicable Indian law.</li>
              </ul>
            </div>

            <!-- 8 -->
            <div class="legal-block" id="security">
              <h2>8. Data Security &amp; Storage</h2>
              <p>
                We employ robust physical, administrative, and technical safeguards to prevent unauthorized access,
                loss, alteration, or disclosure of your information.
              </p>
              <ul>
                <li>All website communication is protected via 256-bit Secure Sockets Layer (SSL/TLS) encryption.</li>
                <li>Access to commercial lead databases and customer correspondence is restricted to authorized
                  marketing and procurement executives on a need-to-know basis.</li>
                <li>Data is hosted on secure, regularly audited enterprise servers with active firewall monitoring.</li>
              </ul>
            </div>

            <!-- 9 -->
            <div class="legal-block" id="rights">
              <h2>9. Your Data Rights &amp; Choices</h2>
              <p>
                Under applicable Indian data protection frameworks, you have specific rights regarding your personal
                data:
              </p>
              <ul>
                <li><strong>Right to Access:</strong> You may request a summary of the personal information we hold
                  concerning your inquiries.</li>
                <li><strong>Right to Correction:</strong> You may request rectification of inaccurate, incomplete, or
                  outdated business records.</li>
                <li><strong>Right to Erasure:</strong> You may request the deletion of your contact data from our
                  marketing mailing lists, subject to statutory retention obligations.</li>
                <li><strong>Right to Withdraw Consent:</strong> You may revoke consent for commercial communications at
                  any time by contacting our privacy desk.</li>
              </ul>
            </div>

            <!-- 10 -->
            <div class="legal-block" id="retention">
              <h2>10. Data Retention Period</h2>
              <p>
                We retain personal and commercial inquiry records only for as long as necessary to fulfill the business
                purposes for which they were collected, including satisfying commercial warranty, audit, tax, or legal
                reporting obligations. When no longer required, data is securely erased or anonymized.
              </p>
            </div>

            <!-- 11 -->
            <div class="legal-block" id="dpo">
              <h2>11. Privacy Contact &amp; Grievance Redressal</h2>
              <p>
                If you have questions regarding this Privacy Policy, wish to exercise your data rights, or have a
                grievance concerning how your information is handled, please contact our Data Protection Officer:
              </p>

              <div class="legal-contact-card">
                <h3>Data Protection &amp; Compliance Office</h3>
                <p>
                  Saatvik Agro Processors Private Limited welcomes all data security and compliance inquiries.
                </p>
                <div class="legal-contact-details">
                  <div class="legal-contact-col">
                    <h5>Official Grievance Email</h5>
                    <p><a href="mailto:marketing.agro@saatvikgroup.com">marketing.agro@saatvikgroup.com</a></p>
                  </div>
                  <div class="legal-contact-col">
                    <h5>Helpline</h5>
                    <p><a href="tel:+91 95910 33188">+91 95910 33188</a></p>
                  </div>
                  <div class="legal-contact-col">
                    <h5>Corporate Headquarters</h5>
                    <p>Unit 1418 - 1419, Tower A, Grandthum, Plot No 7, Techzone 4, Greater Noida West, UP - 201318</p>
                  </div>
                  <div class="legal-contact-col">
                    <h5>Manufacturing Operations</h5>
                    <p>Plot No. 32, 33, 40 &amp; 41, Sector-H, Sitapur, MPIDC, Phase 2, Morena, Banmore, MP - 476444</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>

  
<?php
get_footer();