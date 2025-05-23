
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
        
      </tbody>
    </table>
  </div>
 <script src="../JSS/usermanage.js"></script>
</body>
</html>
