$(document).ready(function () {
    "use strict";

    pageLoader();
    var button = 1;
    var $container = $('#gallery-content-center');

    //Select the item to be doing the filtering
    $container.isotope({itemSelector : '.project-list'});
    //Use filter isotopes
    $("#filter-all").click(function() { $container.isotope({ filter: '.ALL' }); });
    $("#filter-php").click(function() {  $container.isotope({ filter: '.PHP' }); });
    $("#filter-javascript").click(function() {  $container.isotope({ filter: '.JavaScript' });  });
    $("#filter-css3").click(function() {  $container.isotope({ filter: '.CSS' });   });
    $("#filter-mern").click(function() {  $container.isotope({ filter: '.MERN' });   });
    $("#filter-asp").click(function() {  $container.isotope({ filter: '.ASP' });   });

});