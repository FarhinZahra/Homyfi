// function validateForm()
// {
//     // let x =  document.forms["myForm"].getElementById("txtFName").value;
//     // if (x == "") {
//     //     alert("Name must be filled out");
//     //     return false
//     // }
// }
function validateForm() {
    let x = document.getElementById("txtFName");
    if (x == "") {
      document.getElementById("txtFName").innerHTML = x.validationMessage;
    } else {
      document.getElementById("txtFName").innerHTML = "Input OK";
    } 
  }