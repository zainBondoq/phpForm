document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("loginForm");
  
    loginForm.addEventListener("submit", (event) => {
      const username = document.getElementById("username").value.trim();
      const password = document.getElementById("password").value.trim();
  
      if (username === "" || password === "") {
        event.preventDefault();
        alert("Please fill in both the username and password fields.");
      }
    });
  });
  