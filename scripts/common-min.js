function addScrollClass(a,l){var s=document.querySelector(l);s.classList?s.classList.add(a):s.className+=" "+a}smoothScroll.init({speed:350,easing:"easeInOutQuart",updateURL:!1,callbackBefore:function(a,l){addScrollClass("is-scrolling",l)},callbackAfter:function(a,l){addScrollClass("is-ready",l)}});