// Add class when scrolling
function addScrollClass(scrollClass, toggle) {
  var el = document.querySelector(toggle);

  if (el.classList) {
    el.classList.add(scrollClass);
  } else {
    el.className += ' ' + scrollClass;
  }
}

// Init smoothScroll
smoothScroll.init({
  speed: 350, // How fast to complete the scroll in milliseconds
  easing: 'easeInOutQuart', // Easing pattern to use
  updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
  callbackBefore: function (anchor, toggle) {
    addScrollClass('is-scrolling', toggle);
  },
  callbackAfter: function (anchor, toggle) {
    addScrollClass('is-ready', toggle);
  },
});
