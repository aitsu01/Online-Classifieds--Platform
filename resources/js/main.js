var swiper = new Swiper(".mySwiper", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});

document.addEventListener('DOMContentLoaded', function () {
  const modalElement = document.getElementById('exampleModal');
  
  if (modalElement && window.sessionSuccess === true) {
      const myModal = new bootstrap.Modal(modalElement);
      myModal.show();

      setTimeout(() => {
        myModal.hide();
      }, 2000);

  }

  

});


const searchToggleBtn = document.getElementById('searchToggleBtn');
const searchForm = document.querySelector('.searchForm');
const searchBar = document.getElementById('searchBar');

searchToggleBtn.addEventListener('click', () => {
    if (searchBar.classList.contains('d-none')) {
        // Se la barra è nascosta, la mostro
        searchBar.classList.remove('d-none');
        searchBar.focus(); // Bonus: mette subito il cursore dentro!
    } else {
        // Se la barra è visibile, invio il form
        searchForm.submit();
    }
});






  const menuToggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');

  menuToggle.addEventListener('click', () => {
    menu.classList.toggle('show');
    
  });



  Livewire.on('article-created', (message) => {
    const modalElement = document.getElementById('exampleModal');
    const successMessageElement = document.getElementById('successMessage');
  
    if (modalElement && successMessageElement) {
        successMessageElement.textContent = message || '';
  
        const myModal = new bootstrap.Modal(modalElement);
        myModal.show();
  
        setTimeout(() => {
            myModal.hide();
        }, 2000);
    }
  });