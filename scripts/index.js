var navBar = document.getElementById("navBar");
window.onscroll = function () {
  if (window.scrollY > 22) {
    navBar.classList.add("scrolled");
  } else {
    navBar.classList.remove("scrolled");
  }
};


//typing animation

const texts = ['Forums', 'Discussions', 'Blogs', 'Content', 'Offers'];
let count = 0;
let index = 0;
let currentText = '';
let letter = '';

(function type() {
  if (count === texts.length) {
    count = 0;
  }
  currentText = texts[count];
  letter = currentText.slice(0, ++index);

  document.querySelector('.typing').textContent = letter;
  if (letter.length === currentText.length) {
    count++;
    index = 0;
  }
  setTimeout(type, 400)
}());


function acceptCookies() {
  document.getElementById('cookieBanner').style.display = 'none';
  setCookie('cookiesAccepted', 'true', 365); // Set cookie to remember user's choice
}

function rejectCookies() {
  document.getElementById('cookieBanner').style.display = 'none';
}

// Check if user has previously accepted cookies
if (getCookie('cookiesAccepted') !== 'true') {
  document.getElementById('cookieBanner').style.display = 'block';
}

function setCookie(name, value, days) {
  var expires = '';
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = '; expires=' + date.toUTCString();
  }
  document.cookie = name + '=' + (value || '') + expires + '; path=/';
}

function getCookie(name) {
  var nameEQ = name + '=';
  var ca = document.cookie.split(';');
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) === ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}
