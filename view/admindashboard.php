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
<li onclick="loadContent('profile')">Profile Dashboard</li>
<li onclick="loadContent('user')">User Management</li>
<li onclick="loadContent('property')">Property Management</li>
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
    profile: "profile",
    user: "User Management",
    property: "Property Management",
    bookings: "Booking Management",
    payments: "Payment Records",
    reports: "Reports"
  }[section];

  document.getElementById("page-title").innerText = pageTitle;

  fetch(`${section}management.php`)
    .then(res => res.text())
    .then(html => {
      const contentArea = document.getElementById("content-area");
      contentArea.innerHTML = html;

      if (section === 'user') {
        loadScript("../JSS/usermanage.js");
      }
      else if (section === 'property') {
        loadScript("../JSS/propertymanage.js");
      }
      else if (section === 'profile') {
        const existing = document.getElementById("page-title").innerText = pageTitle;
        if (existing) existing.remove(); // Remove if already exists
        document.body.appendChild(contentArea);
      }
    });
}

// Helper function to dynamically load external scripts
function loadScript(src) {
  const existing = document.querySelector(`script[src="${src}"]`);
  if (existing) existing.remove(); // Remove if already exists

  const script = document.createElement("script");
  script.src = src;
  script.onload = function () {
    if (typeof window.onload === "function") {
      window.onload(); // Manually call onload from usermanage.js
    }
  };
  document.body.appendChild(script);
}
</script>
<!-- <script src="../JSS/admindash.js"></script> -->
</body>
</html>