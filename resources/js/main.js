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