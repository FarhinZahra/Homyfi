document.getElementById("addBtn").onclick = addUser;


window.onload = function () {
    var xhr = new XMLHttpRequest();//ajax
    xhr.open("GET", "../Control/usermanagecontrol.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log("Raw response:", xhr.responseText); // DEBUG
            var users = JSON.parse(xhr.responseText);
            console.log("Parsed users:", users); // DEBUG

            var tableBody = '';

            users.forEach(function(user) {
                tableBody += `
                    <tr>
                        <td>${user.id}</td>
                        <td>${user.fullName}</td>
                        <td>${user.email}</td>
                        <td>${user.phone}</td>
                        <td>${user.gender}</td>
                        <td>${user.password}</td>
                        <td>${user.NID}</td>
                        <td>${user.role}</td>
                    </tr>
                `;
            });

            document.querySelector("#userTable tbody").innerHTML = tableBody;
            document.querySelectorAll("#userTable tbody tr").forEach(function (row) {
            row.onclick = function () {
                document.getElementById("fullName").value = row.cells[1].innerText;
                document.getElementById("email").value = row.cells[2].innerText;
                document.getElementById("phone").value = row.cells[3].innerText;
                document.getElementById("gender").value = row.cells[4].innerText;
                document.getElementById("password").value = row.cells[5].innerText;
                document.getElementById("role").value = row.cells[7].innerText;
            };
        });
        } else {
            console.error("Failed to load user data.");
        }
    };
    xhr.send();
};

function addUser()
{
    console.log("Add User clicked");

    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const gender = document.getElementById("gender").value;
    const password = document.getElementById("password").value;
    const role = document.getElementById("role").value;
    const nidFile = document.getElementById("uploadFile").files[0];

    const formData = new FormData();
    formData.append("action", "add");
    formData.append("fullName", fullName);
    formData.append("email", email);
    formData.append("phone", phone);
    formData.append("gender", gender);
    formData.append("password", password);
    formData.append("role", role);
    formData.append("nid", nidFile);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../Control/usermanagecontrol.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            alert("User added successfully!");
            window.onload(); // Reload table
        } else {
            alert("Failed to add user.");
        }
    };

    xhr.send(formData);

}

function updateUser() {

    console.log("update User clicked");

    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const gender = document.getElementById("gender").value;
    const password = document.getElementById("password").value;

    const formData = new FormData();
    formData.append("action", "update");
    formData.append("fullName", fullName);
    formData.append("email", email);
    formData.append("phone", phone);
    formData.append("gender", gender);
    formData.append("password", password);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../Control/usermanagecontrol.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            alert("User updated successfully!");
            window.onload(); // reload user list
        } else {
            alert("Failed to update user.");
        }
    };

    xhr.send(formData);
}


function deleteUser() {
    console.log("delete User clicked");
    const email = document.getElementById("email").value;

    if (!email) {
        alert("Please enter the email of the user to delete.");
        return;
    }

    if (!confirm("Are you sure you want to delete this user?")) return;

    const formData = new FormData();
    formData.append("action", "delete");
    formData.append("email", email);

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../Control/usermanagecontrol.php", true);

    xhr.onload = function () {
        if (xhr.status === 200) {
            alert("User deleted successfully!");
            window.onload();
        } else {
            alert("Failed to delete user.");
        }
    };

    xhr.send(formData);
}


function clearForm() {
    console.log("clear User clicked");
    document.getElementById("fullName").value = "";
    document.getElementById("email").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("gender").value = "";
    document.getElementById("password").value = "";
    document.getElementById("uploadFile").value = "";
    document.getElementById("role").value = "";
}

document.querySelectorAll("#userTable tbody tr").forEach(function (row) {
    row.onclick = function () {
        document.getElementById("fullName").value = row.cells[1].innerText;
        document.getElementById("email").value = row.cells[2].innerText;
        document.getElementById("phone").value = row.cells[3].innerText;
        document.getElementById("gender").value = row.cells[4].innerText;
        document.getElementById("password").value = row.cells[5].innerText;
        document.getElementById("role").value = row.cells[7].innerText;
    };
});