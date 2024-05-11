const body = document.querySelector("body"),
    modeToggle = body.querySelector(".mode-toggle"),
    sidebar = body.querySelector("nav"),
    sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if (getMode && getMode === "dark") {
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if (getStatus && getStatus === "close") {
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () => {
    body.classList.toggle("dark");
    if (body.classList.contains("dark")) {
        localStorage.setItem("mode", "dark");
    } else {
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if (sidebar.classList.contains("close")) {
        localStorage.setItem("status", "close");
    } else {
        localStorage.setItem("status", "open");
    }
});

// Fetch and update feed every 5 seconds
setInterval(fetchReportsAndUpdateFeed, 5000);

function updateTotalReported() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "get_total_reported.php", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = JSON.parse(xhr.responseText);
        document.getElementById("totalReported").textContent = response.totalReported;
      } else {
        console.error("Error fetching data:", xhr.status, xhr.statusText);
      }
    }
  };
  xhr.send();
}

// Call the function initially and periodically
updateTotalReported();
setInterval(updateTotalReported, 5000);
