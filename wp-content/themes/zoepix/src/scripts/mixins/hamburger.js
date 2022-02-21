document.addEventListener('click', (e) => {
  if (!e.target.closest('.hamburger')) return;

  const hamburger = e.target.closest('.hamburger');
  const navbar = e.target.closest('.header__container').querySelector('.header__navbar');

  hamburger.classList[hamburger.matches('.hamburger--is-active') ? 'remove' : 'add']('hamburger--is-active');
  navbar.classList[navbar.matches('.header__navbar--is-active') ? 'remove' : 'add']('header__navbar--is-active');
  document.body.classList[document.body.matches('.menu-is-open') ? 'remove' : 'add']('menu-is-open');
});
