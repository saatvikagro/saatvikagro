const fs = require('fs');
const path = require('path');

const files = [
  'index.html',
  'pages/about.html',
  'pages/products.html',
  'pages/industries.html',
  'pages/contact.html',
  'pages/404.html'
];

files.forEach(file => {
  const filePath = path.join(__dirname, file);
  if (!fs.existsSync(filePath)) return;
  
  let content = fs.readFileSync(filePath, 'utf8');
  
  // Extract title and description
  const titleMatch = content.match(/<title>(.*?)<\/title>/);
  const descMatch = content.match(/<meta name="description" content="(.*?)"/);
  
  const title = titleMatch ? titleMatch[1] : 'Saatvik Agro';
  const desc = descMatch ? descMatch[1] : '';

  // Add OG tags if not present
  if (!content.includes('og:title')) {
    const ogTags = `
  <meta property="og:title" content="${title}" />
  <meta property="og:description" content="${desc}" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.saatvikagro.com/" />
  <meta name="twitter:card" content="summary_large_image" />`;
    content = content.replace(/(<meta name="description"[^>]+>)/, `$1${ogTags}`);
  }

  // Add loading=lazy to all imgs EXCEPT the one with class hero__bg-img and logo
  content = content.replace(/<img([^>]+)>/g, (match, p1) => {
    if (match.includes('hero__bg-img') || match.includes('logo.svg') || match.includes('loading="lazy"')) {
      return match;
    }
    return `<img${p1} loading="lazy" decoding="async">`;
  });

  fs.writeFileSync(filePath, content, 'utf8');
});
console.log('SEO and Performance optimizations applied.');
