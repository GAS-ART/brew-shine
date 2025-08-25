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


