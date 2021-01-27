$(document).ready(function() {
    $("#password span").on('click', function(event) {
        event.preventDefault();
        if($('#password input').attr("type") == "text"){
            $('#password input').attr('type', 'password');
            $('#password i').addClass( "fa-eye-slash" );
            $('#password i').removeClass( "fa-eye" );
        }else if($('#password input').attr("type") == "password"){
            $('#password input').attr('type', 'text');
            $('#password i').removeClass( "fa-eye-slash" );
            $('#password i').addClass( "fa-eye" );
        }
    });
     $("#cpassword span").on('click', function(event) {
        event.preventDefault();
        if($('#cpassword input').attr("type") == "text"){
            $('#cpassword input').attr('type', 'password');
            $('#cpassword i').addClass( "fa-eye-slash" );
            $('#cpassword i').removeClass( "fa-eye" );
        }else if($('#cpassword input').attr("type") == "password"){
            $('#cpassword input').attr('type', 'text');
            $('#cpassword i').removeClass( "fa-eye-slash" );
            $('#cpassword i').addClass( "fa-eye" );
        }
    });
});

(function() {
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('user');

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