(function(){const t=document.querySelector("[data-map]");t&&new YmapsInitializer(t)})();(function(){document.querySelector("#tel")&&IMask(document.getElementById("tel"),{mask:"+{7}(000)000-00-00"})})();(function(){var t=document.querySelector(".header__burger"),o=document.querySelector(".header__cross"),a=document.querySelector(".nav__cross"),n=document.querySelector(".nav"),d=document.querySelector("body"),s=function(c){c.preventDefault(),n.classList.remove("hidden"),d.classList.add("overflow-hidden"),t.classList.add("hidden"),o.classList.remove("hidden"),a.classList.remove("hidden")},i=function(c){c.preventDefault(),n.classList.add("hidden"),d.classList.remove("overflow-hidden"),t.classList.remove("hidden"),a.classList.add("hidden"),o.classList.add("hidden")};t.addEventListener("click",s),a.addEventListener("click",i),o.addEventListener("click",i),document.addEventListener("click",function(c){c.target.closest(".overlay")&&i(c)})})();(function(){if(document.querySelector(".modal")){let o=function(n){n.preventDefault(),n.target.closest(".open-modal")&&document.querySelector('[data-modal-content="'+n.target.getAttribute("data-modal")+'"]').classList.remove("modal--closed")},a=function(n){n.target.closest(".modal__button-close")&&console.log("close")};document.addEventListener("click",o),document.addEventListener("click",a)}})();(function(){var t=document.querySelector(".modal");if(t)for(var o=27,a=13,n=document.querySelectorAll(".open-modal"),d=document.querySelectorAll(".modal"),s=function(e){e.classList.add("modal--closed"),e.classList.remove("modal--active")},i=function(e){e.classList.remove("modal--closed"),e.classList.add("modal--active"),e.querySelector(".modal__button-close").addEventListener("click",function(){s(e)}),e.querySelector(".modal__overlay").addEventListener("click",function(){s(e)}),e.querySelector(".modal__container").addEventListener("click",function(l){l.stopPropagation()}),document.addEventListener("keydown",function(l){l.keyCode===o&&s(e)})},c=0;c<n.length;c++)n[c].addEventListener("click",function(e){e.preventDefault();for(var l=e.target.closest("a").getAttribute("data-modal"),r=0;r<n.length;r++){var u=d[r].getAttribute("data-modal-content");l===u&&i(d[r])}},!1),n[c].addEventListener("keydown",function(e){if(e.keyCode===a){var l=e.target.closest("a").getAttribute("data-modal");e.preventDefault();for(var r=0;r<n.length;r++){var u=d[r].getAttribute("data-modal-content");if(l===u){i(d[r]);return}}}})})();(function(){document.querySelectorAll(".pay-input").forEach(function(o){o.addEventListener("change",function(){document.querySelector(".delivery").classList.remove("hidden")})})})();(function(){let t=new Date,o=t.getFullYear()+"-"+(t.getMonth()+1)+"-"+t.getDate();const a=document.querySelector(".date");a&&(a.setAttribute("min",o),a.setAttribute("value",o))})();
