function validateForm() {
    var x = document.forms["register"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }