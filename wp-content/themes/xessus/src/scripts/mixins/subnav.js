document.addEventListener('click', (e) => {
    if (!e.target.closest('.header__navbar--link--haschildren')) return;
  
    const subnav = e.target.closest('.header__navbar--link--haschildren');
    const subnavArrow = subnav.querySelector('.header__navbar--arrow');
    const subnavMenu = subnav.querySelector('.header__navbar--subnav');
  
    subnavArrow.classList[subnavArrow.matches('.header__navbar--arrow--is-active') ? 'remove' : 'add']('header__navbar--arrow--is-active');
    subnavMenu.classList[subnavMenu.matches('.header__navbar--subnav--is-active') ? 'remove' : 'add']('header__navbar--subnav--is-active');
  });
  