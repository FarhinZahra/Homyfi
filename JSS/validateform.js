function validateForm() {
    let firstName = document.getElementById("txtFname").value.trim();
    let lastName = document.getElementById("txtLname").value.trim();
    let email = document.getElementById("txtEmail").value.trim();
    let pass = document.getElementById("txtPass").value.trim();
    let conPass = document.getElementById("txtConfirmPass").value.trim();
    let phone = document.getElementById("txtPhone").value.trim();
  
    let propertyType = document.getElementById("propertyType").value;
    let propAdd = document.getElementById("txtPropAdd").value.trim();
    let totalUnits = document.getElementById("totalUnits").value;
    let bedrooms = document.getElementById("bedrooms").value;
    let propertyDescription = document.getElementById("propertyDescription").value.trim();
  
    let companyName = document.getElementById("txtCompanyName").value.trim();
    let taxNum = document.getElementById("txtTAXNum").value.trim();
    let licenseNum = document.getElementById("txtLincenseNum").value.trim();
    let termsAgreed = document.getElementById("termsAgreed").checked;
  
    if (firstName === "") {
        document.getElementById("error").innerHTML ="Please enter your first name";
        document.getElementById("txtFname").focus();
        return false;
    }
  
    if (lastName === "") {
      document.getElementById("error").innerHTML ="Please enter your last name";
        document.getElementById("txtLname").focus();
        return false;
    }
  
    if (email === "") {
        document.getElementById("error").innerHTML ="Please enter your email address.";
        document.getElementById("txtEmail").focus();
        return false;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById("error").innerHTML ="Please enter your email address.";
        document.getElementById("txtEmail").focus();
        return false;
    }
  
    if (pass === "") {
        document.getElementById("error").innerHTML ="Please enter a password.";
        document.getElementById("txtPass").focus();
        return false;
    }
    if (pass.length < 8) {
        document.getElementById("error").innerHTML ="Password must be at least 8 characters long.";
        document.getElementById("txtPass").focus();
        return false;
    }
    if (conPass !== pass) {
        alert("Passwords do not match.");
        document.getElementById("txtConfirmPass").focus();
        return false;
    }
  
    if (phone === "") {
        alert("Please enter your phone number.");
        document.getElementById("txtPhone").focus();
        return false;
    }
    if (!/^\d{10}$/.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        document.getElementById("txtPhone").focus();
        return false;
    }
  
    if (propertyType === "") {
        alert("Please select a property type.");
        document.getElementById("propertyType").focus();
        return false;
    }
  
    if (propAdd === "") {
        alert("Please enter your property address.");
        document.getElementById("txtPropAdd").focus();
        return false;
    }
  
    if (totalUnits === "" || parseInt(totalUnits) < 1) {
        alert("Please enter a valid number of units (minimum 1).");
        document.getElementById("totalUnits").focus();
        return false;
    }
  
    if (bedrooms === "" || parseInt(bedrooms) < 1) {
        alert("Please enter a valid number of bedrooms (minimum 1).");
        document.getElementById("bedrooms").focus();
        return false;
    }
  
    if (propertyDescription === "") {
        alert("Please describe your property.");
        document.getElementById("propertyDescription").focus();
        return false;
    }
  
    if (companyName === "") {
      document.getElementById("txtCompanyName").innerHTML = "Please enter your Company name";
      document.getElementById("txtCompanyName").focus();
      return false;
    }
  
    if (taxNum === "") {
        alert("Please enter your tax identification number.");
        document.getElementById("txtTAXNum").focus();
        return false;
    }
  
    if (licenseNum === "") {
        alert("Please enter your rental license number.");
        document.getElementById("txtLincenseNum").focus();
        return false;
    }
  
    if (!termsAgreed) {
        alert("You must agree to the Terms of Service and Privacy Policy.");
        document.getElementById("termsAgreed").focus();
        return false;
    }
    return true;
  }
  
  function validateTenantForm() {
  
      let fullName = document.getElementById("txtFname").value.trim();
      let email = document.getElementById("txtEmail").value.trim();
      let pass = document.getElementById("txtPass").value.trim();
      let conPass = document.getElementById("txtConfirmPass").value.trim();
      let phone = document.getElementById("txtPhone").value.trim();
      let nationalId = document.getElementById("txtNationalID").value.trim();
    
      if (fullName === "") {
          alert("Please enter your full name.");
          document.getElementById("txtFname").focus();
          return false;
      }
    
      if (email === "") {
          alert("Please enter your email address.");
          document.getElementById("txtEmail").focus();
          return false;
      }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
          alert("Please enter a valid email address.");
          document.getElementById("txtEmail").focus();
          return false;
      }
    
      if (pass === "") {
          alert("Please enter a password.");
          document.getElementById("txtPass").focus();
          return false;
      }
      if (pass.length < 8) {
          alert("Password must be at least 8 characters long.");
          document.getElementById("txtPass").focus();
          return false;
      }
      if (conPass !== pass) {
          alert("Passwords do not match.");
          document.getElementById("txtConfirmPass").focus();
          return false;
      }
    
      if (phone === "") {
          alert("Please enter your phone number.");
          document.getElementById("txtPhone").focus();
          return false;
      }
      if (!/^\d{11}$/.test(phone)) {
          alert("Please enter a valid 11-digit phone number.");
          document.getElementById("txtPhone").focus();
          return false;
      }
    
      if (nationalId === "") {
          alert("Please enter your national ID number.");
          document.getElementById("txtNationalID").focus();
          return false;
      }
      return true;
    }
  