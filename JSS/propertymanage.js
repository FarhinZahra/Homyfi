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

            document.querySelector("#userTable tbody").innerHTML = tableBody;
            document.querySelectorAll("#userTable tbody tr").forEach(function (row) {
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

// document.querySelectorAll("#userTable tbody tr").forEach(function (row) {
//     row.onclick = function () {
//         document.getElementById("propertyid").value = row.cells[0].innerText;
//         document.getElementById("catogory").value = row.cells[2].innerText;
//         document.getElementById("propertytype").value = row.cells[3].innerText;
//         document.getElementById("updatedate").value = row.cells[4].innerText;
//         document.getElementById("availablefrom").value = row.cells[5].innerText;
//     };
// });