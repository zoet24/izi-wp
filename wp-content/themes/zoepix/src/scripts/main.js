// Carousel
import Flickity from './node_modules/flickity/dist/flickity.pkgd.min';

['DOMContentLoaded'].map((event) => 
	document.addEventListener(event, () => {
		const sliders = [...document.querySelectorAll('.carousel__sliders')];

		if (sliders.length) {
			sliders.map((slides) => {
				const slider = slides.querySelector('.carousel__slider');
				var flkty = new Flickity(slider, {
					cellAlign: 'left',
					adaptiveHeight: true,
					pageDots: false,
					draggable: true,
					prevNextButtons: true
				});

				// Resize slides after flkty init
				flkty.resize();
			});
		}
	})
);