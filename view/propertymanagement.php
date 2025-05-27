<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Property Management</title>
  <link rel="stylesheet" href="../css/usermanage.css">
</head>
<body>

  <div class="Property Management">
    <h2>Property Management</h2>
    <div class="form-group">
        <label for="propertyid">Property ID </label>
        <input type="text" id="propertyid" readonly/>
    </div>
    
    <div class="form-group">
        <label for="catogory">Catogory</label>
        <select id="catogory">
            <option value="">Select</option>
            <option>Sublet</option>
            <option>Bachelor</option>
            <option>Family</option>
            <option>Office</option>
            <option>Hostel</option>
            <option>Shop</option>
        </select>
    </div>
      
      <div class="form-group">
        <label for="propertytype">Property Type</label>
        <select id="propertytype">
          <option value="">Select</option>
          <option>Room</option>
          <option>Flat</option>
           <option>Building</option>
        </select>
      </div>
      <div class="form-group">
        <label for="uploadFile">Property Image</label>
        <input type="file" id="uploadFile" name="uploadFile" />
      </div>
      <div class="form-group">
        <label for="availablefrom">Available from (Month & Date)</label>
        <input type="text" id="availablefrom" />
      </div>
      <div class="form-group">
        <label for="updatedate">Update date</label>
        <input type="date" id="updatedate"  />
      </div>
      
    </div>

    <div class="buttons">
      <!-- <button onclick="addUser()">➕ Add</button> -->
      <button id="addBtn">➕ Add</button>
      <button onclick="updateProperty()">🔁 Update</button>
      <button onclick="deleteProperty()">❌ Delete</button>
      <button onclick="clearForm()">🔄 Clear</button>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Search user..." id="search" onkeyup="filterUsers()" />
    </div>

    <table id="propertyTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Property Image</th>
          <th>Catagory</th>
          <th>Property Type</th>
          <th>Update Date</th>
          <th>Available From</th>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
 <!-- <script src="../JSS/usermanage.js"></script> -->

  <script>
    document.getElementById("addBtn").onclick = addProperty;


window.onload = function () {
    var xhr = new XMLHttpRequest();//ajax
    xhr.open("GET", "../Control/propertymanagecontrol.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log("Raw response:", xhr.responseText); // DEBUG
            var properties = JSON.parse(xhr.responseText);
            console.log("Parsed users:", properties); // DEBUG

            var tableBody = '';

            properties.forEach(function(property) {
                tableBody += `
                    <tr>
                        <td>${property.propertyid}</td>
                        <td>${property.propertyimage}</td>
                        <td>${property.catogory}</td>
                        <td>${property.propertytype}</td>
                        <td>${property.updatedat}</td>
                        <td>${property.avaiablefrom}</td>
                    </tr>
                `;
            });

            document.querySelector("#propertyTable tbody").innerHTML = tableBody;
            document.querySelectorAll("#propertyTable tbody tr").forEach(function (row) {
            row.onclick = function () {
                document.getElementById("propertyid").value = row.cells[0].innerText;
                document.getElementById("catogory").value = row.cells[2].innerText;
                document.getElementById("propertytype").value = row.cells[3].innerText;
                document.getElementById("updatedate").value = row.cells[4].innerText;
                document.getElementById("availablefrom").value = row.cells[5].innerText;
            };
        });
        } else {
            console.error("Failed to load property data.");
        }
    };
    xhr.send();
};

function addProperty()
{
    console.log("Add Property clicked");

    const Catagory = document.getElementById("catogory").value;
    const propertytype = document.getElementById("propertytype").value;
    const updatedate = document.getElementById("updatedate").value;
    const availablefrom = document.getElementById("availablefrom").value;
    const propertyImage = document.getElementById("uploadFile").files[0];

    const formData = new FormData();
    formData.append("action", "add");
    formData.append("catogory", Catagory);
    formData.append("propertytype", propertytype);
    formData.append("updatedate", updatedate);
    formData.append("availablefrom", availablefrom);
    formData.append("propertyImage", propertyImage);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../Control/propertymanagecontrol.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            alert("Property added successfully!");
            window.onload(); 
        } else {
            alert("Failed to add Property.");
        }
    };

    xhr.send(formData);

}

function updateProperty() {

    console.log("update Property clicked");

    const propertyid = document.getElementById("propertyid").value;
    const Catagory = document.getElementById("catogory").value;
    const propertytype = document.getElementById("propertytype").value;
    const updatedate = document.getElementById("updatedate").value;
    const availablefrom = document.getElementById("availablefrom").value;

    const formData = new FormData();
    formData.append("action", "update");
    formData.append("propertyid", propertyid);
    formData.append("catogory", Catagory);
    formData.append("propertytype", propertytype);
    formData.append("updatedate", updatedate);
    formData.append("availablefrom", availablefrom);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../Control/propertymanagecontrol.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            alert("Property updated successfully!");
            window.onload(); 
        } else {
            alert("Failed to update Property.");
        }
    };

    xhr.send(formData);
}


function deleteProperty() {//////////////////////////////////////////////////////////////////////////////

    console.log("delete Property clicked");

    const propertyid = document.getElementById("propertyid").value;///////////////////////////////////

    if (!propertyid) {
        alert("Please select a row of property to delete.");
        return;
    }

    if (!confirm("Are you sure you want to delete this property?")) return;

    const formData = new FormData();
    formData.append("action", "delete");
    formData.append("propertyid", propertyid);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../Control/propertymanagecontrol.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            alert("Property deleted successfully!");
            window.onload();
        } else {
            alert("Failed to delete Property.");
        }
    };

    xhr.send(formData);
}


function clearForm() {
    console.log("clear Property clicked");
    document.getElementById("propertyid").value = "";
    document.getElementById("catogory").value = "";
    document.getElementById("propertytype").value = "";
    document.getElementById("updatedate").value = "";
    document.getElementById("availablefrom").value = "";
    document.getElementById("uploadFile").value = "";
}

document.querySelectorAll("#propertyTable tbody tr").forEach(function (row) {
    row.onclick = function () {
        document.getElementById("propertyid").value = row.cells[0].innerText;
        document.getElementById("catogory").value = row.cells[2].innerText;
        document.getElementById("propertytype").value = row.cells[3].innerText;
        document.getElementById("updatedate").value = row.cells[4].innerText;
        document.getElementById("availablefrom").value = row.cells[5].innerText;
    };
});
</script>
</body>
</html>