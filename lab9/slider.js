const sliders = document.querySelectorAll('[data-slider]')
console.log('Найдено слайдеров:', sliders.length)

sliders.forEach(slider => {
    const slides = slider.querySelectorAll('[data-slide]')
    const prevBtn = slider.querySelector('[data-prev]')
    const nextBtn = slider.querySelector('[data-next]')
    const counter = slider.querySelector('[data-counter]')
    let current = 0

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = (i === index) ? '' : 'none'
        })
        if (counter) {
            counter.textContent = (index + 1) + '/' + slides.length
        }
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            current++
            if (current >= slides.length) {
                current = 0
            }
            showSlide(current)
        })
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            current--
            if (current < 0) {
                current = slides.length - 1
            }
            showSlide(current)
        })
    }
})