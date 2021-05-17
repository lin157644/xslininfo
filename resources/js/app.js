require('./bootstrap');
require('particles.js/particles');
import 'particles.js/particles';
const particlesJS = window.particlesJS;
particlesJS.load('particles-js', 'js/particles.json', function() {
    console.log('callback - particles.js config loaded');
});