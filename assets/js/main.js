import { initNavbar } from './modules/navbar.js';
import { initScrollReveal } from './modules/scroll-reveal.js';
// Add other imports when modules are created

document.addEventListener('DOMContentLoaded', () => {
  // Initialize all components
  initNavbar();
  initScrollReveal();
  
  console.log('Saatvik Agro — App Initialized');
});
