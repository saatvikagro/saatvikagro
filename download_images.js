const fs = require('fs');
const path = require('path');
const https = require('https');

const imageUrls = {
  'hero.jpg': 'https://images.unsplash.com/photo-1595180620317-09f193eb7061?q=80&w=1200&auto=format&fit=crop',
  'farm1.jpg': 'https://images.unsplash.com/photo-1500595046743-cd271d694d30?q=80&w=800&auto=format&fit=crop',
  'factory.jpg': 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1920&auto=format&fit=crop',
  'powder.jpg': 'https://images.unsplash.com/photo-1626074961596-cb407d4c0dcb?q=80&w=800&auto=format&fit=crop',
  'team1.jpg': 'https://images.unsplash.com/photo-1595878715977-2e8f8df18ea8?q=80&w=800&auto=format&fit=crop',
  'team2.jpg': 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=800&auto=format&fit=crop',
  'gluten.jpg': 'https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?q=80&w=800&auto=format&fit=crop',
  'fibre.jpg': 'https://images.unsplash.com/photo-1586201375761-83865001e31c?q=80&w=800&auto=format&fit=crop',
  'germ.jpg': 'https://images.unsplash.com/photo-1627997931392-563630f9d997?q=80&w=800&auto=format&fit=crop',
  'glucose.jpg': 'https://images.unsplash.com/photo-1596649299486-4cdea56fd59d?q=80&w=800&auto=format&fit=crop',
  'white-dex.jpg': 'https://images.unsplash.com/photo-1611162458324-aae1eb4129a4?q=80&w=800&auto=format&fit=crop',
  'team3.jpg': 'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?q=80&w=600&auto=format&fit=crop',
  'team4.jpg': 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600&auto=format&fit=crop',
  'test1.jpg': 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=200&auto=format&fit=crop',
  'test2.jpg': 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=200&auto=format&fit=crop',
  'test3.jpg': 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200&auto=format&fit=crop',
  'food.jpg': 'https://images.unsplash.com/photo-1556767576-5ec41e3239ea?q=80&w=800&auto=format&fit=crop',
  'paper.jpg': 'https://images.unsplash.com/photo-1587582423116-ec07293f0395?q=80&w=800&auto=format&fit=crop',
  'pharma.jpg': 'https://images.unsplash.com/photo-1584308666744-24d5e468088f?q=80&w=800&auto=format&fit=crop'
};

const imgDir = path.join(__dirname, 'assets', 'images', 'content');
if (!fs.existsSync(imgDir)) {
  fs.mkdirSync(imgDir, { recursive: true });
}

function download(url, dest) {
  return new Promise((resolve, reject) => {
    const file = fs.createWriteStream(dest);
    https.get(url, (response) => {
      response.pipe(file);
      file.on('finish', () => {
        file.close(resolve);
      });
    }).on('error', (err) => {
      fs.unlink(dest, () => reject(err));
    });
  });
}

async function main() {
  for (const [name, url] of Object.entries(imageUrls)) {
    const dest = path.join(imgDir, name);
    if (!fs.existsSync(dest)) {
      console.log('Downloading ' + name + '...');
      try {
        await download(url, dest);
      } catch (e) {
        console.log('Failed:', e.message);
      }
    }
  }

  console.log('Replacing URLs in HTML files...');
  const replaceMap = {
    'https://images.unsplash.com/photo-1595180620317-09f193eb7061?q=80&w=1200&auto=format&fit=crop': 'assets/images/content/hero.jpg',
    'https://images.unsplash.com/photo-1595180620317-09f193eb7061?q=80&w=1920&auto=format&fit=crop': 'assets/images/content/hero.jpg',
    'https://images.unsplash.com/photo-1500595046743-cd271d694d30?q=80&w=800&auto=format&fit=crop': 'assets/images/content/farm1.jpg',
    'https://images.unsplash.com/photo-1500595046743-cd271d694d30?q=80&w=1920&auto=format&fit=crop': 'assets/images/content/farm1.jpg',
    'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=1920&auto=format&fit=crop': 'assets/images/content/factory.jpg',
    'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=800&auto=format&fit=crop': 'assets/images/content/factory.jpg',
    'https://images.unsplash.com/photo-1626074961596-cb407d4c0dcb?q=80&w=800&auto=format&fit=crop': 'assets/images/content/powder.jpg',
    'https://images.unsplash.com/photo-1595878715977-2e8f8df18ea8?q=80&w=800&auto=format&fit=crop': 'assets/images/content/team1.jpg',
    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=800&auto=format&fit=crop': 'assets/images/content/team2.jpg',
    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=600&auto=format&fit=crop': 'assets/images/content/team2.jpg',
    'https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?q=80&w=800&auto=format&fit=crop': 'assets/images/content/gluten.jpg',
    'https://images.unsplash.com/photo-1586201375761-83865001e31c?q=80&w=800&auto=format&fit=crop': 'assets/images/content/fibre.jpg',
    'https://images.unsplash.com/photo-1627997931392-563630f9d997?q=80&w=800&auto=format&fit=crop': 'assets/images/content/germ.jpg',
    'https://images.unsplash.com/photo-1596649299486-4cdea56fd59d?q=80&w=800&auto=format&fit=crop': 'assets/images/content/glucose.jpg',
    'https://images.unsplash.com/photo-1611162458324-aae1eb4129a4?q=80&w=800&auto=format&fit=crop': 'assets/images/content/white-dex.jpg',
    'https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?q=80&w=600&auto=format&fit=crop': 'assets/images/content/team3.jpg',
    'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=600&auto=format&fit=crop': 'assets/images/content/team4.jpg',
    'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=200&auto=format&fit=crop': 'assets/images/content/test1.jpg',
    'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=200&auto=format&fit=crop': 'assets/images/content/test2.jpg',
    'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=200&auto=format&fit=crop': 'assets/images/content/test3.jpg',
    'https://images.unsplash.com/photo-1556767576-5ec41e3239ea?q=80&w=800&auto=format&fit=crop': 'assets/images/content/food.jpg',
    'https://images.unsplash.com/photo-1587582423116-ec07293f0395?q=80&w=800&auto=format&fit=crop': 'assets/images/content/paper.jpg',
    'https://images.unsplash.com/photo-1584308666744-24d5e468088f?q=80&w=800&auto=format&fit=crop': 'assets/images/content/pharma.jpg'
  };

  function processFile(filePath, level) {
    if (!fs.existsSync(filePath)) return;
    let content = fs.readFileSync(filePath, 'utf8');
    for (const [url, localPath] of Object.entries(replaceMap)) {
      const correctLocal = level === 1 ? '../' + localPath : './' + localPath;
      content = content.split(url).join(correctLocal);
    }
    fs.writeFileSync(filePath, content, 'utf8');
  }

  processFile(path.join(__dirname, 'index.html'), 0);
  processFile(path.join(__dirname, 'pages/about.html'), 1);
  processFile(path.join(__dirname, 'pages/contact.html'), 1);
  processFile(path.join(__dirname, 'pages/products.html'), 1);
  processFile(path.join(__dirname, 'pages/industries.html'), 1);

  console.log('All images localized and HTML updated!');
}

main();
