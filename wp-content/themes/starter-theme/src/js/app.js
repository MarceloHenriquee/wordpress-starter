try {
   window.Popper = require('popper.js').default;
   window.$ = window.jquery = require('jquery');
   
   require('bootstrap');

} catch (e) {}