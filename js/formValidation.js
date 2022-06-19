function validateForm() {
    var x = document.forms["sentMessage"]["email"].value;
    if (x == null || x == "") {
      alert("Bitte fülle alle Felder aus!");
      return false;
    }
  }