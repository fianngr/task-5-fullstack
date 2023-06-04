document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.navlink');

    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            navLinks.forEach(function(nav) {
                nav.classList.remove('active');
            });
            this.classList.add('active');
        });
    });

    // Mendapatkan URL saat ini
    var currentURL = window.location.href;

    // Memeriksa setiap tautan dan menambahkan kelas "active" pada yang sesuai dengan URL saat ini
    navLinks.forEach(function(link) {
        if (link.href === currentURL) {
            link.classList.add('active');
        }
    });

    // Memeriksa apakah ada tautan default yang aktif dan menambahkan kelas "active" jika tidak ada tautan yang aktif
    var defaultLink = document.querySelector('.default-link');
    if (!document.querySelector('.navlink.active') && defaultLink) {
        defaultLink.classList.add('active');
    }
});



window.addEventListener('DOMContentLoaded', function() {
    var navbarToggler = document.querySelector('.navbar-toggler');
    
    navbarToggler.addEventListener('click', function() {
        var navbarCollapse = document.querySelector('.navbar-collapse');
        if (!navbarCollapse.classList.contains('show')) {
            navbarCollapse.classList.add('show')
        } else{
            navbarCollapse.classList.remove('show')
        };
        
      }
    );
  });
