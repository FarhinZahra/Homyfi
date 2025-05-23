window.onload = function () {
    var xhr = new XMLHttpRequest();
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
        } else {
            console.error("Failed to load user data.");
        }
    };
    xhr.send();
};
