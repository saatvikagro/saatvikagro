/**
 * ARTICLE SINGLE CONTROLLER
 * Reads URL query param ?id=... and dynamically hydrates the article details
 */

document.addEventListener("DOMContentLoaded", () => {
  if (typeof articlesData === "undefined") {
    console.error("articlesData is not loaded.");
    return;
  }

  const articleKeys = Object.keys(articlesData);
  const urlParams = new URLSearchParams(window.location.search);
  let articleId = urlParams.get("id");

  // Fallback to first article if not specified or not found
  if (!articleId || !articlesData[articleId]) {
    articleId = articleKeys[0];
  }

  const article = articlesData[articleId];

  // 1. Update document title
  document.title = `${article.title} | Saatvik Agro`;

  // 2. Update Breadcrumb
  const breadcrumbElem = document.getElementById("articleBreadcrumb");
  if (breadcrumbElem) {
    breadcrumbElem.textContent = article.breadcrumb || article.title;
  }

  // 3. Update Kicker, Title, Lead
  const kickerElem = document.getElementById("articleKicker");
  if (kickerElem) kickerElem.textContent = article.kicker || "INGREDIENT INSIGHTS";

  const titleElem = document.getElementById("articleTitle");
  if (titleElem) titleElem.textContent = article.title;

  const leadElem = document.getElementById("articleLead");
  if (leadElem) leadElem.textContent = article.lead;

  // 4. Update Meta Bar
  const dateElem = document.getElementById("articleDate");
  if (dateElem) dateElem.textContent = article.date || "October 2026";

  const readTimeElem = document.getElementById("articleReadTime");
  if (readTimeElem) readTimeElem.textContent = article.readTime || "3 min read";

  // 5. Update Featured Image
  const imgElem = document.getElementById("articleFeaturedImg");
  if (imgElem) {
    imgElem.src = article.image;
    imgElem.alt = article.imageAlt || article.title;
  }

  // 6. Render Body Sections
  const bodyElem = document.getElementById("articleBodySections");
  if (bodyElem && article.sections) {
    bodyElem.innerHTML = article.sections
      .map(
        (sec) => `
        <div class="article-block">
          <h2>${sec.heading}</h2>
          <p>${sec.content}</p>
        </div>
      `
      )
      .join("");
  }

  // 7. Render Key Points
  const keypointsWrap = document.getElementById("articleKeypointsWrap");
  const keypointsList = document.getElementById("articleKeypointsList");
  if (keypointsList && article.keyPoints && article.keyPoints.length > 0) {
    keypointsList.innerHTML = article.keyPoints
      .map((pt) => `<li>${pt}</li>`)
      .join("");
    if (keypointsWrap) keypointsWrap.style.display = "block";
  } else if (keypointsWrap) {
    keypointsWrap.style.display = "none";
  }

  // 8. Prev & Next Navigation
  const currentIndex = articleKeys.indexOf(articleId);
  const prevIndex = (currentIndex - 1 + articleKeys.length) % articleKeys.length;
  const nextIndex = (currentIndex + 1) % articleKeys.length;

  const prevArticle = articlesData[articleKeys[prevIndex]];
  const nextArticle = articlesData[articleKeys[nextIndex]];

  const prevCard = document.getElementById("prevArticleCard");
  const prevTitle = document.getElementById("prevArticleTitle");
  if (prevCard && prevTitle && prevArticle) {
    prevCard.href = `article-single.html?id=${prevArticle.id}`;
    prevTitle.textContent = prevArticle.title;
  }

  const nextCard = document.getElementById("nextArticleCard");
  const nextTitle = document.getElementById("nextArticleTitle");
  if (nextCard && nextTitle && nextArticle) {
    nextCard.href = `article-single.html?id=${nextArticle.id}`;
    nextTitle.textContent = nextArticle.title;
  }

  // 9. Render Related Articles Grid (the other 2 articles)
  const relatedGrid = document.getElementById("relatedArticlesGrid");
  if (relatedGrid) {
    const otherKeys = articleKeys.filter((k) => k !== articleId);
    relatedGrid.innerHTML = otherKeys
      .map((k) => {
        const item = articlesData[k];
        return `
          <a href="article-single.html?id=${item.id}" class="article-related-card">
            <div class="article-related-img">
              <img src="${item.image}" alt="${item.imageAlt || item.title}" loading="lazy" />
            </div>
            <div class="article-related-content">
              <h4>${item.title}</h4>
              <p>${item.lead}</p>
              <span class="article-related-link">Read Full Insight &rarr;</span>
            </div>
          </a>
        `;
      })
      .join("");
  }
});
