console.log('modal.js загружен')
const modal = document.querySelector('[data-modal]')
console.log(modal)

const modalImage = modal.querySelector('[data-modal-image]')
const modalCounter = modal.querySelector('[data-modal-counter]')

const modalClose = modal.querySelector('[data-modal-close]')

const modalPrev = modal.querySelector('[data-modal-prev]')
const modalNext = modal.querySelector('[data-modal-next]')

let modalImages = []   
let modalCurrent = 0  

document.querySelectorAll('[data-slider]').forEach(slider => {
    const slides = slider.querySelectorAll('[data-slide]')
    slides.forEach(slide => {
        slide.addEventListener('click', () => {
            modalImages = Array.from(slides).map(img => img.src)
            modalCurrent = 0
            openModal()
        })
    })
})

function openModal() {
    modal.style.display = 'flex'
    showModalImage()
    document.addEventListener('keydown', function(event) {
    console.log('1')
    if (event.key === 'Escape') {
        modal.style.display = 'none'
    }
})
}

function showModalImage() {
    modalImage.src = modalImages[modalCurrent]
    modalCounter.textContent = (modalCurrent + 1) + ' из ' + modalImages.length
}

modalClose.addEventListener('click', () => {
    modal.style.display = 'none'
})



modalNext.addEventListener('click', () => {
    modalCurrent++
    if (modalCurrent >= modalImages.length) {
        modalCurrent = 0
    }
    showModalImage()
})

modalPrev.addEventListener('click', () => {
    modalCurrent--
    if (modalCurrent < 0) {
        modalCurrent = modalImages.length - 1
    }
    showModalImage()
})