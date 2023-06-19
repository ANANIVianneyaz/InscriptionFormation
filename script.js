document.getElementById("inscription-form").addEventListener("submit", function(event) {
    var emailInput = document.getElementById("email");
    if (!validateEmail(emailInput.value)) {
      event.preventDefault();
      alert("Veuillez entrer une adresse email valide.");
    }
  });
  
  function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }
  