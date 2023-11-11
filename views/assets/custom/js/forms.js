
//validar registro de usurio con html bootstrap
// Disable form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
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

  //validar email repetido

  function validateEmailAvailable(event, type){
    if(type == "email"){
      var data = new FormData();
      data.append("dataEmail", event.target.value);
      $.ajax({
        url: "ajax/ajax-validate-user.php",
        method: "POST",
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        dataType: "JSON",
        success: function(response) {
          if (response["email"] != "") {
            console.log(response["email"]);
            $(event.target).parent().addClass("was-validated");
            $(event.target).parent().children(".invalid-feedback").html("The email " + response['email'] + " is already taken");
            event.target.value = "";
          }
      }
  });
} 
}

function validateUserAvailable(event, type){
  if(type == "text"){
    var data = new FormData();
    data.append("dataUser", event.target.value);

    $.ajax({
      url: "ajax/ajax-validate-user.php",
      method: "POST",
      data: data,
      contentType: false,
      cache: false,
      processData: false,
      dataType: "JSON",
      success: function(response) {
        if (response["usuario"] != "") {
          console.log(response["usuario"]);
          $(event.target).parent().addClass("was-validated");
          $(event.target).parent().children(".invalid-feedback").html("The username " + response['usuario'] + " is already taken");
          event.target.value = "";
        }
    }
});
} 
}

 //mostrar password del inpout passwod login 
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
togglePassword.addEventListener('click', () => {
  // Toggle the type attribute using
  // getAttribure() method
  const type = password
      .getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // Toggle the eye and bi-eye icon
  this.classList.toggle('eyelogin');
});


//validar email del login
function validateEmail(event, type){
  if(type == "email"){
    var pattern = /^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$/; 
      if(!pattern.test(event.target.value)){
        $(event.target).parent().addClass("was-validated");
        $(event.target).parent().children(".invalid-feedback").html("The email does not have a correct format");
       }
    }
}

//validar password del login
function validatePass(event, type){
  if(type == "password"){
    var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/; 
      if(!pattern.test(event.target.value)){
        $(event.target).parent().addClass("was-validated");
        $(event.target).parent().children(".invalid-feedback").html("The password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters");
       }
    }
}

  