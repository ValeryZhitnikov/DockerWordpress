import Swiper from "swiper";
import { Navigation } from 'swiper/modules';

const vacanciesSlider = () => {
  const vacanciesRow = document.querySelector('.vacancies__row');
  const cards = Array.from(vacanciesRow.querySelectorAll('.vacancies__row .swiper-slide'));
  const showMoreBtn = document.querySelector('.vacancies__button_next');

  if (window.innerWidth < 1440) {
    let visibleCount = 3;
    cards.forEach((card, i) => {
      card.style.display = i < visibleCount ? '' : 'none';
    });

    if (showMoreBtn) {
      showMoreBtn.addEventListener('click', () => {
        visibleCount += 3;
        cards.forEach((card, i) => {
          card.style.display = i < visibleCount ? '' : 'none';
        });
        if (visibleCount >= cards.length) {
          showMoreBtn.style.display = 'none';
        }
      });
    }
    return;
  }

  new Swiper('.vacancies__row.swiper', {
    modules: [Navigation],
    slidesPerView: 3,
    slidesPerGroup: 3,
    direction: 'horizontal',
    loop: false,
    navigation: {
      nextEl: ".vacancies__row .vacancies__button_next",
      prevEl: ".vacancies__row .vacancies__button_prev",
    },
    spaceBetween: 20,
  });
};

// Тут еще можно добавить обработку resize

export default vacanciesSlider;