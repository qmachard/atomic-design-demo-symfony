/* components/organisms/carousel/carousel.js */
import $ from 'jquery';
import slick from 'slick-carousel';

import 'slick-carousel/slick/slick.css';

$('.carousel').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
});
