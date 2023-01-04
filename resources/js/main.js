'use strict';
(function() {
  var header = document.querySelector('.header');
  var main = document.querySelector('.main');
  if (!header.classList.contains('.header--index') && header) {
    var sticky = header.offsetHeight;
    window.addEventListener('scroll', function() {

      if (window.pageYOffset > sticky) {
        header.classList.add("header--scroll");
        main.style.paddingTop = sticky + 'px';
      } else {
        header.classList.remove("header--scroll");
        main.style.paddingTop = '0';
      }
    });
  }
})();
'use strict';
(function() {
  let yMap;
  const mapElement = document.querySelector('[data-map]');
  if (mapElement) {
    yMap = new YmapsInitializer(mapElement);
  }
})();
'use strict';
(function() {
  let tel = document.querySelector('#tel');
  if (tel) {
    var phoneMask = IMask(
      document.getElementById('tel'), {
        mask: '+{7}(000)000-00-00'
      });
  }
})()

'use strict';
(function() {
  var openBtn = document.querySelector('.header__burger');
  var headerCloseBtn = document.querySelector('.header__cross');
  var closeBtn = document.querySelector('.nav__cross');
  var nav = document.querySelector('.nav');
  var body = document.querySelector('body');


  var openMenu = function(evt) {
    evt.preventDefault();
    nav.classList.remove('hidden');
    body.classList.add('overflow-hidden');
    openBtn.classList.add('hidden');
    headerCloseBtn.classList.remove('hidden');
    closeBtn.classList.remove('hidden');
  };

  var closeMenu = function(evt) {
    evt.preventDefault();
    nav.classList.add('hidden');
    body.classList.remove('overflow-hidden');
    openBtn.classList.remove('hidden');
    closeBtn.classList.add('hidden');
    headerCloseBtn.classList.add('hidden');
  };

  openBtn.addEventListener('click', openMenu);
  closeBtn.addEventListener('click', closeMenu);
  headerCloseBtn.addEventListener('click', closeMenu);
  document.addEventListener('click', function(evt) {
    if (evt.target.closest('.overlay')) {
      closeMenu(evt);
    }


  });
})();
'use strict';
(function() {
  //кнопка открытия - <div><a href="#" class="(классы для стилей) open-modal" data-modal="1" и т.д. (data-modal="2" ...)></div>

  //сами модалки <section class="modal modal--closed" data-modal-content="1"> и т.д. (data-modal-сontent="2" (соответствует кнопке открытия))>
  let modal = document.querySelector('.modal');
  if (modal) {
    let ESC_KEYCODE = 27;
    let ENTER_KEYCODE = 13;
    let openModal = function(evt) {
      evt.preventDefault();
      if (evt.target.closest('.open-modal')) {
        document.querySelector('[data-modal-content="' + evt.target.getAttribute('data-modal') + '"]').classList.remove('modal--closed');
      }
    }
    let closeModal = function(evt) {
      if (evt.target.closest('.modal__button-close')) {
        console.log('close');
      }
    }

    document.addEventListener('click', openModal);
    document.addEventListener('click', closeModal);
  }
})();
'use strict';
(function() {
  //кнопка открытия - <div><a href="#" class="(классы для стилей) open-modal" data-modal="1" и т.д. (data-modal="2" ...)></div>

  //сами модалки <section class="modal modal--closed" data-modal-content="1"> и т.д. (data-modal-сontent="2" (соответствует кнопке открытия))>
  var modal = document.querySelector('.modal');
  if (modal) {
    var ESC_KEYCODE = 27;
    var ENTER_KEYCODE = 13;
    var btnOpen = document.querySelectorAll('.open-modal');
    var modals = document.querySelectorAll('.modal');

    var closeModal = function(modal) {
      modal.classList.add('modal--closed');
      modal.classList.remove('modal--active');
    };
    var openModal = function(modal) {
      modal.classList.remove('modal--closed');
      modal.classList.add('modal--active');

      modal.querySelector('.modal__button-close').addEventListener('click', function() {
        closeModal(modal)
      });

      //обработчик клика по оверлею

      modal.querySelector('.modal__overlay').addEventListener('click', function() {
        closeModal(modal);
      });

      modal.querySelector('.modal__container').addEventListener('click', function(evt) {
        evt.stopPropagation();
      });

      //обработчик клика по ESC

      document.addEventListener('keydown', function(evt) {
        if (evt.keyCode === ESC_KEYCODE) {
          closeModal(modal);
        };
      });
    };

    for (var i = 0; i < btnOpen.length; i++) {
      //клики по кнопкам открытия
      btnOpen[i].addEventListener("click", function(e) {
        e.preventDefault();
        var activeModalAttr = e.target.closest('a').getAttribute('data-modal');
        for (var j = 0; j < btnOpen.length; j++) {
          var contentAttr = modals[j].getAttribute('data-modal-content');

          if (activeModalAttr === contentAttr) {
            openModal(modals[j]);
          }
        };
      }, false);

      // открытие по Enter

      btnOpen[i].addEventListener("keydown", function(e) {
        if (e.keyCode === ENTER_KEYCODE) {
          var activeModalAttr = e.target.closest('a').getAttribute("data-modal");
          e.preventDefault();
          for (var j = 0; j < btnOpen.length; j++) {
            var contentAttr = modals[j].getAttribute("data-modal-content");
            if (activeModalAttr === contentAttr) {
              openModal(modals[j]);
              return;
            };
          };
        };
      });
    };

  };
})();
'use strict';
(function() {
  const payInputs = document.querySelectorAll('.pay-input');
  payInputs.forEach(function(input) {
    input.addEventListener('change', function() {
      document.querySelector('.delivery').classList.remove('hidden');
    });
  });
})();
'use strict';
(function() {
  let today = new Date();
  let currentDate = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
  const dateInput = document.querySelector('.date');
  if (dateInput) {

    dateInput.setAttribute('min', currentDate);
    dateInput.setAttribute('value', currentDate);
  }
})();