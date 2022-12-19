window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle
    ('window-scroll', window.scrollY > 100)
})

AOS.init({
    delay: 0,
    duration: 900,
    once: true
})

