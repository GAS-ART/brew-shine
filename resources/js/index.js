import 'swiper/css';
import 'swiper/css/navigation';

import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

const swiper = new Swiper('.reviews-slider', {
  modules: [Navigation],
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  centeredSlides: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    768: {
      slidesPerView: 2
    },
    1024: {
      slidesPerView: 3
    }
  }
});




// BURGER MENU
const burger = document.getElementById('burger');
const sideNav = document.getElementById('sideNav');

if (burger && sideNav) {
  const openMenu = () => {
    burger.classList.add('active');
    sideNav.classList.add('active');
  };
  const closeMenu = () => {
    burger.classList.remove('active');
    sideNav.classList.remove('active');
  };

  burger.addEventListener('click', () => {
    sideNav.classList.contains('active') ? closeMenu() : openMenu();
  });

  sideNav.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));

  // закрывать при клике вне меню (только на мобилке)
  document.addEventListener('click', (e) => {
    if (window.innerWidth <= 768 && sideNav.classList.contains('active')) {
      if (!sideNav.contains(e.target) && !burger.contains(e.target)) closeMenu();
    }
  });

  // при ресайзе >768 - принудительно закрываем мобильное меню
  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) closeMenu();
  });
}

//Popup
const popup = document.getElementById("popup");
const popupClose = document.getElementById("popupClose");
const orderBtns = document.querySelectorAll(".popup-btn .btn");

orderBtns.forEach(orderBtn => {
if (popup && popupClose && orderBtn) {
    orderBtn.addEventListener("click", (e) => {
        e.preventDefault();
        popup.style.display = "flex";
    });

    popupClose.addEventListener("click", () => {
        popup.style.display = "none";
    });

    popup.addEventListener("click", (e) => {
        if (e.target === popup) {
            popup.style.display = "none";
        }
    });
}
});


//Results section
document.querySelectorAll('.compare').forEach(compare => {
    const before = compare.querySelector('.compare-before');
    const slider = compare.querySelector('.compare-slider');

    slider.addEventListener('input', e => {
        const val = e.target.value;
        before.style.clipPath = `inset(0 ${100 - val}% 0 0)`;
    });
});


const heroConsalt = document.querySelector('.hero .consult');
const heroBtn = document.querySelector('.hero-actions .btn');

function setBtnWidth() {
  if (heroConsalt && heroBtn) {
    const styles = getComputedStyle(heroBtn);
    heroBtn.style.width =
    (heroConsalt.offsetWidth
     - parseFloat(styles.paddingLeft)
     - parseFloat(styles.paddingRight)) + 'px';
  }
}

setBtnWidth();

function setHeaderHeightVar() {
    const header = document.querySelector('.site-header');
    if (header) {
      const height = header.offsetHeight;
      document.documentElement.style.setProperty('--header-height', height + 'px');
    }
  }

  // Запускаем при загрузке
   window.addEventListener('load', () => {
    setBtnWidth();
    setHeaderHeightVar();
  });

   window.addEventListener('resize', () => {
    setBtnWidth();
    setHeaderHeightVar();
  });


  //Отправка формы
  const form = document.querySelector('.popup-form');
  const popupContent = document.querySelector('.popup-content');

  if (form) {
    const messages = {
    ru: {
      success: "✅ Ваша заявка отправлена, мы свяжемся с Вами в ближайшее время",
      error: "❌ Сбой при отправке данных, попробуйте еще раз или напишите нам в мессенджеры"
    },
    ro: {
      success: "✅ Cererea dvs. a fost trimisă, vă vom contacta în cel mai scurt timp",
      error: "❌ Eroare la trimiterea datelor, încercați din nou sau scrieți-ne pe mesagerii"
    },
    en: {
      success: "✅ Your request has been sent, we will contact you shortly",
      error: "❌ Failed to send data, please try again or message us via messengers"
    }
  };

  form.addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(form);
    const lang = form.dataset.lang || 'ru'; // по умолчанию русский
    const t = messages[lang] || messages['ru'];

    try {
      const response = await fetch(form.action, {
        method: form.method,
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
      });

      if (!response.ok) throw new Error("Network error");

      const result = await response.json();

      if (result.success) {
        popupContent.innerHTML = `
          <div class="popup-message success">${t.success}</div>
        `;
        // закрыть попап через 3 сек
        setTimeout(() => {
          document.getElementById('popup').style.display = 'none';
        }, 3000);
      } else {
        throw new Error("Server error");
      }

    } catch (error) {
      popupContent.innerHTML = `
        <div class="popup-message error">${t.error}</div>
      `;
      console.error(error);
    }
  });
  }

  