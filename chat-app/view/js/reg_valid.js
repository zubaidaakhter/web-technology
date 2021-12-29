


function validateForm() {
  let x = document.forms["myForm"]["id"]["username"]["password"]["email"].value;
  if (x == "") {
    alert("form must be filled out");
    return false;
  }
}