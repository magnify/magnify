// Add class after scrolling
function addScrollStartClass() {
  var el = document.getElementsByClassName('js-scroll');

  if (el.classList) {
    el[0].classList.add('is-scrolling');
  } else {
    el[0].className += ' ' + 'is-scrolling';
  }
}

// Add class after scrolling
function addScrollEndClass() {
  var el = document.getElementsByClassName('js-scroll');

  if (el.classList) {
    el[0].classList.add('is-ready');
  } else {
    el[0].className += ' ' + 'is-ready';
  }
}

// Init smoothScroll
smoothScroll.init({
  speed: 350, // How fast to complete the scroll in milliseconds
  easing: 'easeInOutQuart', // Easing pattern to use
  updateURL: false, // Boolean. Whether or not to update the URL with the anchor hash on scroll
  callbackBefore: addScrollStartClass,
  callbackAfter: addScrollEndClass
});
