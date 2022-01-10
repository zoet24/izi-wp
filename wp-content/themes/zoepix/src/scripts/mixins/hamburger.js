document.addEventListener('click', (e) => {
    if (!e.target.closest('.hamburger')) return;
    const hamburger = e.target.closest('.hamburger');
    hamburger.classList[hamburger.matches('.hamburger__is-active') ? 'remove' : 'add']('hamburger__is-active');
    document.body.classList[document.body.matches('.menu-is-open') ? 'remove' : 'add']('menu-is-open');
  });
  