

// function validate() {
//  var value = document.getElementById('psw').value;
//  if (value.length < 3) {

//    return false;
//  }

//  return true;
// }





function validate() {

  if (document.myForm.name.value == "") {
    alert("Please provide your name!");
    document.myForm.name.focus();
    return false;
  }
  if (document.myForm.email.value == "") {
    alert("Please provide your Email!");
    document.myForm.email.focus();
    return false;
  }

  if (document.myForm.usertype.value == "-1") {
    alert("Please provide your country!");
    return false;
  }
  return (true);
}