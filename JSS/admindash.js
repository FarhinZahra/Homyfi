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
      const contentArea = document.getElementById("content-area");
      contentArea.innerHTML = html;

      // Dynamically load JS if User Management is selected
      if (section === 'user') {
        loadScript("../JSS/usermanage.js");
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