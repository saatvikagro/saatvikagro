<?php
/**
 * Template Name: Careers Hub
 * Description: Work culture, 7 sections, active job openings accordion, and resume submission modal
 * Location: page-careers.php
 */

$page_css = 'assets/css/careers.css';
get_header();
?>
<main class="careers-page">

    <!-- ================= SECTION 1: HERO SPLIT ================= -->
    <section class="careers-hero-split">
      <div class="careers-hero-split-grid">
        <div class="careers-hero-img-col">
          <img src="/wp-content/uploads/2026/11/careers-hero.png" alt="Saatvik Agro Team at Manufacturing Plant"
            class="careers-hero-img" loading="eager" decoding="async" />
        </div>
        <div class="careers-hero-text-col">
          <div class="careers-hero-text-box">
            <h1 class="careers-hero-title">Grow with Saatvik<br />Agro</h1>
            <p class="careers-hero-desc">
              Join the team transforming maize into ingredients that shape everyday life — across food, nutrition and
              industry.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 2: WHY JOIN SAATVIK AGRO ================= -->
    <section class="careers-join-section">
      <div class="container">
        <div class="careers-join-grid">
          <div class="careers-join-content">
            <span class="careers-eyebrow">WHY JOIN SAATVIK AGRO</span>
            <h2 class="careers-join-heading">Great Ingredients Start with<br />Great People</h2>
            <div class="careers-join-paragraphs">
              <p>
                At Saatvik Agro, our people bring quality and consistency to every ingredient we make. We value
                collaboration, accountability and continuous learning, with room to share ideas, strengthen skills and
                take ownership of your work.
              </p>
              <p>
                Across manufacturing, quality, engineering and sales, every contribution matters. Join a team turning
                maize into ingredients that serve everyday needs—and bring your own strengths to the journey.
              </p>
            </div>
          </div>
          <div class="careers-join-img-col">
            <div class="careers-join-img-wrapper">
              <img src="/wp-content/uploads/2026/11/careers-second.jpeg" alt="Collaboration and Teamwork at Saatvik Agro"
                class="careers-join-img" loading="lazy" decoding="async" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 3: WHY PEOPLE LIKE TO WORK AT SAATVIK? ================= -->
    <section class="careers-perks-section">
      <div class="container">
        <div class="careers-perks-header">
          <h2 class="careers-perks-heading">Why People Like To Work<br />At Saatvik?</h2>
        </div>

        <div class="careers-perks-grid">
          <!-- Item 1: People-centric environment -->
          <div class="perk-card">
            <div class="perk-icon-wrap" aria-hidden="true">
              <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M29.629 38.8887V35.185C29.629 33.2204 28.8486 31.3363 27.4595 29.9472C26.0703 28.558 24.1862 27.7776 22.2216 27.7776H11.1105C9.14597 27.7776 7.26186 28.558 5.8727 29.9472C4.48355 31.3363 3.70312 33.2204 3.70312 35.185V38.8887"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M24.0736 12.9628C24.0736 17.0538 20.7572 20.3702 16.6662 20.3702C12.5752 20.3702 9.25879 17.0538 9.25879 12.9628C9.25879 8.87183 12.5752 5.55542 16.6662 5.55542C20.7572 5.55542 24.0736 8.87183 24.0736 12.9628Z"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M40.741 38.8887V35.185C40.7398 33.5438 40.1935 31.9494 39.188 30.6523C38.1824 29.3551 36.7746 28.4287 35.1854 28.0184M29.6299 5.79614C31.2232 6.20411 32.6355 7.13077 33.644 8.43005C34.6526 9.72933 35.2 11.3273 35.2 12.9721C35.2 14.6168 34.6526 16.2148 33.644 17.5141C32.6355 18.8134 31.2232 19.74 29.6299 20.148"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
              </svg>

            </div>
            <h3 class="perk-title">People-centric<br />environment</h3>
          </div>

          <!-- Item 2: Merit-based growth & progress -->
          <div class="perk-card">
            <div class="perk-icon-wrap" aria-hidden="true">
              <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.7411 12.9629L25.0004 28.7036L15.7411 19.4444L3.7041 31.4814" stroke-width="2.96296"
                  stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path d="M29.6299 12.9629H40.741V24.074" stroke-width="2.96296" stroke-linecap="round"
                  stroke-linejoin="round" stroke="#EA7124" />
              </svg>


            </div>
            <h3 class="perk-title">Merit-based growth &amp;<br />progress</h3>
          </div>

          <!-- Item 3: Collaborative & open culture -->
          <div class="perk-card">
            <div class="perk-icon-wrap" aria-hidden="true">
              <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M20.3691 31.4815L24.0728 35.1852C24.4376 35.55 24.8707 35.8393 25.3473 36.0368C25.8239 36.2342 26.3347 36.3358 26.8506 36.3358C27.3665 36.3358 27.8773 36.2342 28.3539 36.0368C28.8306 35.8393 29.2636 35.55 29.6284 35.1852C29.9932 34.8204 30.2825 34.3874 30.48 33.9107C30.6774 33.4341 30.779 32.9233 30.779 32.4074C30.779 31.8915 30.6774 31.3807 30.48 30.9041C30.2825 30.4275 29.9932 29.9944 29.6284 29.6296"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M25.9259 25.926L30.5555 30.5556C31.2923 31.2923 32.2915 31.7062 33.3333 31.7062C34.3752 31.7062 35.3744 31.2923 36.1111 30.5556C36.8478 29.8189 37.2617 28.8197 37.2617 27.7778C37.2617 26.736 36.8478 25.7368 36.1111 25.0001L28.9259 17.8149C27.8842 16.7745 26.4722 16.1901 25 16.1901C23.5278 16.1901 22.1157 16.7745 21.0741 17.8149L19.4444 19.4445C18.7077 20.1812 17.7085 20.5951 16.6667 20.5951C15.6248 20.5951 14.6256 20.1812 13.8889 19.4445C13.1522 18.7078 12.7383 17.7086 12.7383 16.6667C12.7383 15.6249 13.1522 14.6257 13.8889 13.889L19.0926 8.68525C20.7819 7.00033 22.985 5.92701 25.353 5.6352C27.7211 5.34339 30.1188 5.84975 32.1667 7.07414L33.037 7.59266C33.8255 8.06856 34.763 8.23361 35.6667 8.05562L38.8889 7.40747"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path d="M38.888 5.55542L40.7398 25.9258H37.0361" stroke-width="2.96296" stroke-linecap="round"
                  stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M5.55498 5.55542L3.70312 25.9258L15.7402 37.9628C16.4769 38.6995 17.4761 39.1134 18.5179 39.1134C19.5598 39.1134 20.559 38.6995 21.2957 37.9628C22.0324 37.2261 22.4463 36.2269 22.4463 35.185C22.4463 34.1432 22.0324 33.144 21.2957 32.4073"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path d="M5.55469 7.40747H20.3695" stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round"
                  stroke="#EA7124" />
              </svg>


            </div>
            <h3 class="perk-title">Collaborative &amp; open<br />culture</h3>
          </div>

          <!-- Item 4: Clear internal communication channels -->
          <div class="perk-card">
            <div class="perk-icon-wrap" aria-hidden="true">
              <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M25.9253 16.6666C25.9253 17.6489 25.5351 18.5909 24.8406 19.2855C24.146 19.9801 23.2039 20.3703 22.2216 20.3703H11.1105L3.70312 27.7777V7.40732C3.70312 6.42503 4.09334 5.48298 4.78791 4.7884C5.48249 4.09382 6.42455 3.70361 7.40683 3.70361H22.2216C23.2039 3.70361 24.146 4.09382 24.8406 4.7884C25.5351 5.48298 25.9253 6.42503 25.9253 7.40732V16.6666Z"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M33.3334 16.6665H37.0371C38.0194 16.6665 38.9614 17.0567 39.656 17.7513C40.3506 18.4459 40.7408 19.3879 40.7408 20.3702V40.7406L33.3334 33.3332H22.2223C21.24 33.3332 20.2979 32.943 19.6033 32.2484C18.9088 31.5538 18.5186 30.6117 18.5186 29.6295V27.7776"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
              </svg>


            </div>
            <h3 class="perk-title">Clear internal<br />communication channels</h3>
          </div>

          <!-- Item 5: Progressive ecosystem -->
          <div class="perk-card">
            <div class="perk-icon-wrap" aria-hidden="true">
              <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.9639 37.0371H18.5194M18.5194 37.0371H31.4824M18.5194 37.0371C28.7046 32.4074 20.0009 25.1852 24.075 18.5186"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M17.5934 17.4074C19.6304 18.8889 20.9267 21.4815 21.8526 24.2592C18.1489 25 15.3712 25 12.9638 23.7037C10.7415 22.5926 8.7045 20.1852 7.4082 15.9259C12.5934 15 15.5564 15.9259 17.5934 17.4074Z"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M26.1113 11.1112C24.6994 13.3178 23.9892 15.9003 24.0742 18.5186C27.5927 18.3334 30.1853 17.4075 32.0372 15.926C33.889 14.0741 35.0001 11.6667 35.1853 7.40747C30.1853 7.59266 27.7779 9.25932 26.1113 11.1112Z"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
              </svg>


            </div>
            <h3 class="perk-title">Progressive<br />ecosystem</h3>
          </div>

          <!-- Item 6: Work-life balance focus -->
          <div class="perk-card">
            <div class="perk-icon-wrap" aria-hidden="true">
              <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M29.6299 29.6295L35.1854 14.8147L40.741 29.6295C39.1299 30.8332 37.1854 31.4814 35.1854 31.4814C33.1854 31.4814 31.241 30.8332 29.6299 29.6295Z"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M3.7041 29.6295L9.25966 14.8147L14.8152 29.6295C13.2041 30.8332 11.2597 31.4814 9.25966 31.4814C7.25966 31.4814 5.31521 30.8332 3.7041 29.6295Z"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path
                  d="M12.9631 38.8888H22.2223M22.2223 38.8888H31.4816M22.2223 38.8888V9.25912M22.2223 5.55542V9.25912M22.2223 9.25912C18.5186 11.111 12.9631 12.9628 9.25937 12.9628H5.55566M22.2223 9.25912C25.926 11.111 31.4816 12.9628 35.1853 12.9628H38.889"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
              </svg>


            </div>
            <h3 class="perk-title">Work-life balance<br />focus</h3>
          </div>

          <!-- Item 7: Learning Management System — Gyankosh -->
          <!-- <div class="perk-card">
            <div class="perk-icon-wrap" aria-hidden="true">
              <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.2217 12.9631V38.8891" stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round"
                  stroke="#EA7124" />
                <path
                  d="M5.55498 33.3332C5.06384 33.3332 4.59281 33.1381 4.24552 32.7908C3.89823 32.4435 3.70313 31.9725 3.70312 31.4813V7.40727C3.70312 6.91613 3.89823 6.4451 4.24552 6.09781C4.59281 5.75053 5.06384 5.55542 5.55498 5.55542H14.8142C16.7788 5.55542 18.6629 6.33584 20.0521 7.725C21.4412 9.11416 22.2216 10.9983 22.2216 12.9628C22.2216 10.9983 23.0021 9.11416 24.3912 7.725C25.7804 6.33584 27.6645 5.55542 29.6291 5.55542H38.8883C39.3795 5.55542 39.8505 5.75053 40.1978 6.09781C40.5451 6.4451 40.7402 6.91613 40.7402 7.40727V31.4813C40.7402 31.9725 40.5451 32.4435 40.1978 32.7908C39.8505 33.1381 39.3795 33.3332 38.8883 33.3332H27.7772C26.3038 33.3332 24.8907 33.9185 23.8488 34.9604C22.807 36.0022 22.2216 37.4153 22.2216 38.8888C22.2216 37.4153 21.6363 36.0022 20.5945 34.9604C19.5526 33.9185 18.1395 33.3332 16.6661 33.3332H5.55498Z"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
              </svg>


            </div>
            <h3 class="perk-title">Learning Management<br />System — Gyankosh</h3>
          </div> -->

          <!-- Item 8: Welcome aboard — Aarambh -->
          <!-- <div class="perk-card">
            <div class="perk-icon-wrap" aria-hidden="true">
              <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M24.0742 7.40747H29.6298C30.6121 7.40747 31.5541 7.79768 32.2487 8.49226C32.9433 9.18684 33.3335 10.1289 33.3335 11.1112V37.0371"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
                <path d="M3.70312 37.0369H9.25868M24.0735 37.0369H40.7402" stroke-width="2.96296" stroke-linecap="round"
                  stroke-linejoin="round" stroke="#EA7124" />
                <path d="M18.5186 22.2222V22.24" stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round"
                  stroke="#EA7124" />
                <path
                  d="M24.0736 8.44802V38.3684C24.0735 38.6497 24.0094 38.9273 23.886 39.18C23.7626 39.4328 23.5833 39.6542 23.3616 39.8274C23.1399 40.0005 22.8817 40.1209 22.6065 40.1793C22.3314 40.2378 22.0465 40.2328 21.7736 40.1647L9.25879 37.0369V10.2999C9.25891 9.47396 9.53509 8.67179 10.0434 8.02085C10.5518 7.36991 11.2631 6.90756 12.0643 6.70728L19.4718 4.85542C20.0176 4.71899 20.5873 4.7087 21.1377 4.82534C21.6881 4.94198 22.2047 5.18248 22.6483 5.5286C23.0919 5.87471 23.4508 6.31733 23.6977 6.82286C23.9447 7.32839 24.0732 7.88539 24.0736 8.44802Z"
                  stroke-width="2.96296" stroke-linecap="round" stroke-linejoin="round" stroke="#EA7124" />
              </svg>


            </div>
            <h3 class="perk-title">Welcome aboard —<br />Aarambh</h3>
          </div> -->
        </div>
      </div>
    </section>

    <!-- ================= SECTION 4: FIND YOUR PLACE AT SAATVIK AGRO ================= -->
    <section class="careers-roles-section">
      <div class="container">
        <!-- Section Header Row -->
        <div class="careers-roles-header">
          <div class="careers-roles-header-left">
            <span class="careers-eyebrow">WHERE YOU COULD FIT IN</span>
            <h2 class="careers-roles-heading">Find Your Place at Saatvik Agro</h2>
            <p class="careers-roles-desc">
              Explore opportunities across our teams. Apply for a listed role or share your resume to be considered for
              future openings at Saatvik Agro.
            </p>
          </div>
          <div class="careers-roles-header-right">
            <a href="#careerModal" class="btn--resume" data-open-career-modal data-role="General Application">
              Submit Your Resume
            </a>
          </div>
        </div>

        <!-- 6 Roles Grid -->
        <div class="careers-roles-grid">
          <!-- Role 1: Manufacturing & Production -->
          <div class="role-card">
            <h3 class="role-title">Manufacturing &amp;<br />Production</h3>
            <p class="role-desc">
              Maize processing, production planning and plant operations, with a focus on safe, efficient and consistent
              manufacturing.
            </p>
          </div>

          <!-- Role 2: Quality Assurance & Control -->
          <div class="role-card">
            <h3 class="role-title">Quality Assurance &amp;<br />Control</h3>
            <p class="role-desc">
              Raw material testing, process checks and finished product evaluation to maintain quality, safety and
              consistency across our ingredient range.
            </p>
          </div>

          <!-- Role 3: Engineering & Maintenance -->
          <div class="role-card">
            <h3 class="role-title">Engineering &amp;<br />Maintenance</h3>
            <p class="role-desc">
              Mechanical, electrical and instrumentation functions focused on equipment reliability, preventive
              maintenance and smooth plant operations.
            </p>
          </div>

          <!-- Role 4: Sales & Marketing -->
          <div class="role-card">
            <h3 class="role-title">Sales &amp;<br />Marketing</h3>
            <p class="role-desc">
              B2B sales, business development, customer relationships and brand communication across our food, animal
              nutrition and industrial ingredient portfolio.
            </p>
          </div>

          <!-- Role 5: Supply Chain & Logistics -->
          <div class="role-card">
            <h3 class="role-title">Supply Chain &amp;<br />Logistics</h3>
            <p class="role-desc">
              Procurement, inventory management, warehousing and dispatch coordination to support dependable supply and
              timely deliveries.
            </p>
          </div>

          <!-- Role 6: Finance & Accounts -->
          <div class="role-card">
            <h3 class="role-title">Finance &amp;<br />Accounts</h3>
            <p class="role-desc">
              Accounting, budgeting, cost management, taxation and financial reporting to support daily operations and
              business decisions.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 5: CURRENT OPENINGS ACCORDION ================= -->
    <section class="careers-openings-section">
      <div class="container">
        <h2 class="openings-heading">Current Openings</h2>

        <div class="openings-accordion">
          <!-- Opening 1: Production Executive (Active / Expanded by default) -->
          <div class="opening-item active">
            <button class="opening-header" type="button" aria-expanded="true">
              <div class="opening-header-info">
                <h3 class="opening-title">Production Executive</h3>
                <span class="opening-meta">Experience: 1–3 years <span class="meta-separator">|</span> Full-time,
                  on-site</span>
              </div>
              <div class="opening-chevron" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 9l6 6 6-6" />
                </svg>
              </div>
            </button>
            <div class="opening-content">
              <div class="opening-body">
                <div class="opening-details">
                  <p class="opening-desc">
                    Support maize processing, monitor production activities and help maintain safe, efficient plant
                    operations.
                  </p>
                  <div class="opening-location">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    <span>Morena, Madhya Pradesh, India</span>
                  </div>
                </div>
                <div class="opening-action">
                  <a href="#careerModal" class="btn--opening-apply" data-role="Production Executive">
                    Apply Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Opening 2: Quality Control Executive -->
          <div class="opening-item">
            <button class="opening-header" type="button" aria-expanded="false">
              <div class="opening-header-info">
                <h3 class="opening-title">Quality Control Executive</h3>
                <span class="opening-meta">Experience: 1–3 years <span class="meta-separator">|</span> Full-time,
                  on-site</span>
              </div>
              <div class="opening-chevron" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 9l6 6 6-6" />
                </svg>
              </div>
            </button>
            <div class="opening-content">
              <div class="opening-body">
                <div class="opening-details">
                  <p class="opening-desc">
                    Conduct raw material, in-process and finished product testing to maintain ingredient quality and
                    consistency.
                  </p>
                  <div class="opening-location">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    <span>Morena, Madhya Pradesh, India</span>
                  </div>
                </div>
                <div class="opening-action">
                  <a href="#careerModal" class="btn--opening-apply" data-role="Quality Control Executive">
                    Apply Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Opening 3: Mechanical Maintenance Engineer -->
          <div class="opening-item">
            <button class="opening-header" type="button" aria-expanded="false">
              <div class="opening-header-info">
                <h3 class="opening-title">Mechanical Maintenance Engineer</h3>
                <span class="opening-meta">Experience: 2–5 years <span class="meta-separator">|</span> Full-time,
                  on-site</span>
              </div>
              <div class="opening-chevron" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 9l6 6 6-6" />
                </svg>
              </div>
            </button>
            <div class="opening-content">
              <div class="opening-body">
                <div class="opening-details">
                  <p class="opening-desc">
                    Manage preventive maintenance, troubleshoot machinery and support reliable operation of plant
                    equipment.
                  </p>
                  <div class="opening-location">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    <span>Morena, Madhya Pradesh, India</span>
                  </div>
                </div>
                <div class="opening-action">
                  <a href="#careerModal" class="btn--opening-apply" data-role="Mechanical Maintenance Engineer">
                    Apply Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Opening 4: Electrical & Instrumentation Engineer -->
          <div class="opening-item">
            <button class="opening-header" type="button" aria-expanded="false">
              <div class="opening-header-info">
                <h3 class="opening-title">Electrical &amp; Instrumentation Engineer</h3>
                <span class="opening-meta">Experience: 2–5 years <span class="meta-separator">|</span> Full-time,
                  on-site</span>
              </div>
              <div class="opening-chevron" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 9l6 6 6-6" />
                </svg>
              </div>
            </button>
            <div class="opening-content">
              <div class="opening-body">
                <div class="opening-details">
                  <p class="opening-desc">
                    Maintain electrical systems, instrumentation and process controls to support smooth manufacturing
                    operations.
                  </p>
                  <div class="opening-location">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    <span>Morena, Madhya Pradesh, India</span>
                  </div>
                </div>
                <div class="opening-action">
                  <a href="#careerModal" class="btn--opening-apply" data-role="Electrical & Instrumentation Engineer">
                    Apply Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Opening 5: Sales Executive – B2B Ingredients -->
          <div class="opening-item">
            <button class="opening-header" type="button" aria-expanded="false">
              <div class="opening-header-info">
                <h3 class="opening-title">Sales Executive – B2B Ingredients</h3>
                <span class="opening-meta">Experience: 1–4 years <span class="meta-separator">|</span> Full-time,
                  on-site</span>
              </div>
              <div class="opening-chevron" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 9l6 6 6-6" />
                </svg>
              </div>
            </button>
            <div class="opening-content">
              <div class="opening-body">
                <div class="opening-details">
                  <p class="opening-desc">
                    Develop business opportunities and manage customer relationships across food, animal nutrition and
                    industrial markets.
                  </p>
                  <div class="opening-location">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    <span>Morena, Madhya Pradesh, India</span>
                  </div>
                </div>
                <div class="opening-action">
                  <a href="#careerModal" class="btn--opening-apply" data-role="Sales Executive – B2B Ingredients">
                    Apply Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Opening 6: Logistics Executive -->
          <div class="opening-item">
            <button class="opening-header" type="button" aria-expanded="false">
              <div class="opening-header-info">
                <h3 class="opening-title">Logistics Executive</h3>
                <span class="opening-meta">Experience: 1–3 years <span class="meta-separator">|</span> Full-time,
                  on-site</span>
              </div>
              <div class="opening-chevron" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 9l6 6 6-6" />
                </svg>
              </div>
            </button>
            <div class="opening-content">
              <div class="opening-body">
                <div class="opening-details">
                  <p class="opening-desc">
                    Coordinate dispatches, transportation and shipment documentation to support timely product
                    deliveries.
                  </p>
                  <div class="opening-location">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    <span>Morena, Madhya Pradesh, India</span>
                  </div>
                </div>
                <div class="opening-action">
                  <a href="#careerModal" class="btn--opening-apply" data-role="Logistics Executive">
                    Apply Now
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Opening 7: Accounts Executive -->
          <div class="opening-item">
            <button class="opening-header" type="button" aria-expanded="false">
              <div class="opening-header-info">
                <h3 class="opening-title">Accounts Executive</h3>
                <span class="opening-meta">Experience: 1–3 years <span class="meta-separator">|</span> Full-time,
                  on-site</span>
              </div>
              <div class="opening-chevron" aria-hidden="true">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 9l6 6 6-6" />
                </svg>
              </div>
            </button>
            <div class="opening-content">
              <div class="opening-body">
                <div class="opening-details">
                  <p class="opening-desc">
                    Handle daily accounting, invoice processing, reconciliations and financial records to support
                    business operations.
                  </p>
                  <div class="opening-location">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                    <span>Morena, Madhya Pradesh, India</span>
                  </div>
                </div>
                <div class="opening-action">
                  <a href="#careerModal" class="btn--opening-apply" data-role="Accounts Executive">
                    Apply Now
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 6: OUR HIRING PROCESS ================= -->
    <section class="careers-process-section">
      <div class="container">
        <div class="careers-process-header">
          <span class="careers-eyebrow">HOW WE HIRE</span>
          <h2 class="careers-process-heading">Our Hiring Process</h2>
        </div>

        <div class="careers-process-grid">
          <!-- Step 01 -->
          <div class="process-card">
            <span class="process-number">01</span>
            <h3 class="process-title">Apply</h3>
            <p class="process-desc">
              Email your resume to hr@saatvikgroup.com with the role and preferred location in the subject line.
            </p>
          </div>

          <!-- Step 02 -->
          <div class="process-card">
            <span class="process-number">02</span>
            <h3 class="process-title">Screening</h3>
            <p class="process-desc">
              Our talent team reviews your profile against the role and reaches out within 5–7 working days.
            </p>
          </div>

          <!-- Step 03 -->
          <div class="process-card">
            <span class="process-number">03</span>
            <h3 class="process-title">Interviews</h3>
            <p class="process-desc">
              A technical/functional discussion followed by a conversation with the hiring manager — in person or on
              video.
            </p>
          </div>

          <!-- Step 04 -->
          <div class="process-card">
            <span class="process-number">04</span>
            <h3 class="process-title">Offer</h3>
            <p class="process-desc">
              Shortlisted candidates receive an offer with a transparent compensation structure and growth path.
            </p>
          </div>

          <!-- Step 05 -->
          <div class="process-card">
            <span class="process-number">05</span>
            <h3 class="process-title">Onboarding</h3>
            <p class="process-desc">
              A structured induction across plants and functions so you understand the full call-to-module journey.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= SECTION 7: OUR VALUES ================= -->
    <section class="careers-values-section">
      <div class="container">
        <div class="careers-values-header">
          <span class="careers-eyebrow">WHAT WE STAND FOR</span>
          <h2 class="careers-values-heading">Our Values</h2>
        </div>

        <div class="values-table">
          <!-- Table Header -->
          <div class="values-table-head">
            <div class="val-col-no">No</div>
            <div class="val-col-name">Name</div>
            <div class="val-col-content">Content</div>
          </div>

          <!-- Value 01 -->
          <div class="values-table-row">
            <div class="val-col-no">01</div>
            <div class="val-col-name">Customer First</div>
            <div class="val-col-content">
              We operate with empathy and transparency, focus on creating long-term value, and remain conscious of
              sustainability in every decision we make.
            </div>
          </div>

          <!-- Value 02 -->
          <div class="values-table-row">
            <div class="val-col-no">02</div>
            <div class="val-col-name">Quality</div>
            <div class="val-col-content">
              We commit to fitness-for-use, zero defects, and meeting standards consistently, ensuring reliability and
              lifetime value in everything we deliver.
            </div>
          </div>

          <!-- Value 03 -->
          <div class="values-table-row">
            <div class="val-col-no">03</div>
            <div class="val-col-name">Integrity</div>
            <div class="val-col-content">
              We act with honesty, trustworthiness, and ownership — doing the right thing even when no one is watching.
            </div>
          </div>

          <!-- Value 04 -->
          <div class="values-table-row">
            <div class="val-col-no">04</div>
            <div class="val-col-name">Innovation</div>
            <div class="val-col-content">
              We demonstrate ambition, a strong learning orientation, a futuristic mindset, and the courage to challenge
              assumptions as we build tomorrow's solutions.
            </div>
          </div>

          <!-- Value 05 -->
          <div class="values-table-row">
            <div class="val-col-no">05</div>
            <div class="val-col-name">Excellence</div>
            <div class="val-col-content">
              We pursue consistency, continuous improvement, and the discipline to exceed benchmarks — not occasionally,
              but every day.
            </div>
          </div>

          <!-- Value 06 -->
          <div class="values-table-row">
            <div class="val-col-no">06</div>
            <div class="val-col-name">Collaboration</div>
            <div class="val-col-content">
              We believe in synergy, teamwork, and interdependence, recognising that our strongest outcomes are created
              together.
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  

<!-- Accordion Toggle Script (Careers Page) -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var openingItems = document.querySelectorAll('.opening-item');
      openingItems.forEach(function (item) {
        var header = item.querySelector('.opening-header');
        if (header) {
          header.addEventListener('click', function () {
            var isActive = item.classList.contains('active');
            item.classList.toggle('active');
            header.setAttribute('aria-expanded', !isActive);
          });
        }
      });
    });
  </script>

  <!-- Career Application / Resume Modal -->
  <?php get_template_part('parts/modal-career'); ?>

<?php
get_footer();