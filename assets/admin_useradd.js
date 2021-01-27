
$(document).ready(function() {
     $("#pass span").on('click', function(event) {
        event.preventDefault();
        if($('#pass input').attr("type") == "text"){
            $('#pass input').attr('type', 'password');
            $('#pass i').addClass( "fa-eye-slash" );
            $('#pass i').removeClass( "fa-eye" );
        }else if($('#pass input').attr("type") == "password"){
            $('#pass input').attr('type', 'text');
            $('#pass i').removeClass( "fa-eye-slash" );
            $('#pass i').addClass( "fa-eye" );
        }
    });
});

(function() {
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('user-add');

      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();