$(document).ready(inicio);

function inicio(){
    
  $(".navbar a").on("click", function(){
    $(".navbar a").removeClass("active");
    $(this).addClass("active");
 });

 $(".accordion-button").on("click", function(){
  $(".accordion-button").removeClass("active");
  $(this).addClass("active");
});

  var nav = document.querySelector('nav');

  window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
      nav.classList.add('bg-secondary', 'shadow', 'o-95');
      navlia.classList.add('bg-secondary');
    } else {
      nav.classList.remove('bg-secondary', 'shadow', 'o-95');
    }
  });

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});

  
}
