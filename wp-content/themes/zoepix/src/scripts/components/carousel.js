import Flickity from 'flickity';
require('flickity-fullscreen');

['DOMContentLoaded'].map((event) => 
    document.addEventListener(event, () => {
      const sliders = [...document.querySelectorAll('.carousel__slider')];

      var flkty;

      if (sliders.length) {
        sliders.map((slides) => {
          if ([...slides.querySelectorAll('.carousel__slide')].length > 1) {
            flkty = new Flickity(slides, {
              cellAlign: 'center',
              adaptiveHeight: false,
              pageDots: false,
              draggable: true,
              prevNextButtons: false,
              contain: true,
              wrapAround: true,
              fullscreen: true,
            });
          }

          // Resize slides after flkty init
          flkty.resize();

          // Go to next slide
          document.addEventListener('click', (e) => {
            if (!e.target.closest('.carousel__next')) return false;

            // Update slide number
            var currentSlide = e.target.closest('.carousel__controls').querySelector('.carousel__slide-number--index');
            flkty.on('change', (index) => {
              currentSlide.innerHTML = (index + 1);
            });

            flkty.next();
          });

          // Go to previous slide
          document.addEventListener('click', (e) => {
            if (!e.target.closest('.carousel__prev')) return false;

            // Update slide number
            var currentSlide = e.target.closest('.carousel__controls').querySelector('.carousel__slide-number--index');
            flkty.on('change', (index) => {
              currentSlide.innerHTML = (index + 1);
            }); 

            flkty.previous();
          });
        });
      }
    })
);
