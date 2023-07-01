new Vue({
    el: '#app',
    data: {
      collapsed: true
    }
  });

  const sectionFourScroll = document.querySelector('.section-four-scroll');
  const prevButton = document.querySelector('.prev');
  const nextButton = document.querySelector('.next');
  
  prevButton.addEventListener('click', () => {
    sectionFourScroll.scrollBy({
      left: -sectionFourScroll.offsetWidth,
      behavior: 'smooth',
    });
  });
  
  nextButton.addEventListener('click', () => {
    sectionFourScroll.scrollBy({
      left: sectionFourScroll.offsetWidth,
      behavior: 'smooth',
    });
  });
  
  
  function toggleMenu() {
    var menu = document.getElementById('menu');
    menu.classList.toggle('active');
  }



