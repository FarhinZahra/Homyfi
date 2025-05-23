
<?php
include '../Control/addUser.php';

include '../Control/deleteUser.php';
include '../Control/updateUser.php';
include '../Control/getUser.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Management</title>
  <link rel="stylesheet" href="../css/usermanage.css">
</head>
<body>

  <div class="user-management">
    <h2>User Management</h2>

    <div class="form-section">
      <div class="form-group">
        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" />
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" id="phone" />
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender">
          <option value="">Select</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" />
      </div>
      <div class="form-group">
        <label for="nid">NID</label>
        <input type="text" id="nid" />
      </div>
      <div class="form-group">
        <label for="role">Role</label>
        <select id="role">
          <option value="">Select</option>
          <option>Admin</option>
          <option>Customer</option>
         
        </select>
      </div>
    </div>

    <div class="buttons">
      <button type="button" onclick="addUser()">➕ Add</button>
      <button onclick="updateUser()">🔁 Update</button>
      <button onclick="deleteUser()">❌ Delete</button>
      <button onclick="clearForm()">🔄 Clear</button>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Search user..." id="search" onkeyup="filterUsers()" />
    </div>

    <table id="userTable">
      <thead>
        <tr>
           <th>ID</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Gender</th>
          <th>Password</th>
          <th>NID</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        <tr onclick="selectUser(this)">
          <td id="id"></td>
          <td id="fullName"></td>
          <td id="email"></td>
          <td id="phone" ></td>
          <td id="gender"></td>
          <td id="password"></td>
          <td id="nid"></td>
          <td id="role"></td>
        </tr>
        <!-- More rows can be dynamically loaded -->
      </tbody>
    </table>
  </div>

 <!-- More rows can be dynamically loaded   <script>
    function selectUser(row) {
      const cells = row.getElementsByTagName("td");
      document.getElementById("fullName").value = cells[0].innerText;
      document.getElementById("email").value = cells[1].innerText;
      document.getElementById("phone").value = cells[2].innerText;
      document.getElementById("gender").value = cells[3].innerText;
      document.getElementById("password").value = cells[4].innerText;
      document.getElementById("NID").value = cells[5].innerText;
      document.getElementById("role").value = cells[6].innerText;
    }

    function clearForm() {
      document.querySelectorAll('.form-group input, .form-group select').forEach(el => el.value = '');
    }

    function filterUsers() {
      const input = document.getElementById("search").value.toLowerCase();
      const rows = document.querySelectorAll("#userTable tbody tr");
      rows.forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(input) ? '' : 'none';
      });
    }

    function addUser() { alert("Add functionality here"); }
    function updateUser() { alert("Update functionality here"); }
    function deleteUser() { alert("Delete functionality here"); }
  </script>--> 
 <script src="../JSS/usermanage.js"></script>
</body>
</html>
