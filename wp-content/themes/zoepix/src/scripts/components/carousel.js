import Flickity from 'flickity';
// require('flickity-imagesloaded');

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
              wrapAround: false
            });
          }

          // Resize slides after flkty init
          flkty.resize();
        });
      }
    })
);
