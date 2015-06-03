$(document).ready(function(){
  
  $('.carousel').slick({
    dots: true,
  	arrows: false,
  	pauseOnHover: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000
  });

  // var login = function () {
  // 	return '/auth/login';
  // }


  // $(document).on('click', '.nav-login', login);
  // $(document).on('click', '.login', login);

$('.nav-login').click(function() {
	location.href="auth/login.blade.php";
})



});