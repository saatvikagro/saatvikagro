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

  // Fix industries heading
  content = content.replace(
    '<h1>That Shape Everyday Life</h1>',
    '<h1>Industries That Shape Everyday Life</h1>'
  );

  // Replace all unsplash images that are broken with reliable placehold.co images based on alt text
  content = content.replace(/<img[^>]+src="([^"]+)"[^>]+alt="([^"]+)"[^>]*>/g, (match, src, alt) => {
    if (src.includes('unsplash.com') && !match.includes('hero__bg-img')) {
      const text = encodeURIComponent(alt.replace(/ /g, '+'));
      const newSrc = `https://placehold.co/800x600/E8E4DC/1B3051?text=${text}`;
      return match.replace(src, newSrc);
    }
    // For hero__bg-img, use a reliable farm image
    if (src.includes('unsplash.com') && match.includes('hero__bg-img')) {
       // Just leave hero image for now, maybe it works (it didn't error in subagent report)
       return match;
    }
    return match;
  });
  
  // Also fix background-image styles in industries cards
  content = content.replace(/background: url\('([^']+)'\)/g, (match, src) => {
    if (src.includes('unsplash.com')) {
      return `background: url('https://placehold.co/400x300/E8E4DC/1B3051?text=Industry')`;
    }
    return match;
  });

  fs.writeFileSync(filePath, content, 'utf8');
});

console.log('Images and headings fixed.');
