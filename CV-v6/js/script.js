const side = document.querySelectorAll('.sidenav')
M.Sidenav.init(side);

const slide = document.querySelectorAll('.slider')
M.Slider.init(slide, {
    height: 450,
    interval: 3000,
    transition: 2000
});

const paralax = document.querySelectorAll('.parallax')
M.Parallax.init(paralax);

const scroll = document.querySelectorAll('.scrollspy')
M.ScrollSpy.init(scroll, {
    scrollOffset: 50
});

const modal = document.querySelectorAll('.modal');
M.Modal.init(modal);