$(document).ready(function() {
  $('.image-gallery').slick({
    dots: true, // Affiche les points de navigation
    arrows: true, // Affiche les flèches de navigation
    infinite: true, // Permet une navigation infinie
    slidesToShow: 1, // Affiche une seule image à la fois
    slidesToScroll: 1 // Défile une seule image à la fois
  });
});



