<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Home Rental Dashboard</title>
<link rel="stylesheet" href="../css/admindash.css"  />
</head>
<body>
<div class="container">
<aside class="sidebar">
<div class="logo">🏠 RentalAdmin</div>
<nav>
<ul>
<li onclick="loadContent('dashboard')">Dashboard</li>
<li onclick="loadContent('user')">User Management</li>
<li onclick="loadContent('properties')">Property Management</li>
<li onclick="loadContent('bookings')">Booking Management</li>
<li onclick="loadContent('payments')">Payment Records</li>
<li onclick="loadContent('reports')">Reports</li>
<li class="logout">Log Out</li>
</ul>
</nav>
</aside>
 
    <main class="main-content">
<header class="header">
<h2 id="page-title">Dashboard</h2>
</header>
<section id="content-area" class="content">
<p>Welcome to the Home Rental Management Dashboard.</p>
</section>
</main>
</div>
 
  <script>
    function loadContent(section) {
  const pageTitle = {
    dashboard: "Dashboard",
    user: "User Management",
    properties: "Property Management",
    bookings: "Booking Management",
    payments: "Payment Records",
    reports: "Reports"
  }[section];
 
  document.getElementById("page-title").innerText = pageTitle;
 
  fetch(`${section}management.php`)
    .then(res => res.text())
    .then(html => {
      document.getElementById("content-area").innerHTML = html;
    });
}
</script>
</body>
</html>