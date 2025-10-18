document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("registerForm");
  const clearBtn = document.getElementById("clearBtn");

  // Handle form submission
  form.addEventListener("submit", (event) => {
    event.preventDefault();

    // Collect data
    const studentData = {
      firstName: document.getElementById("firstName").value.trim(),
      lastName: document.getElementById("lastName").value.trim(),
      email: document.getElementById("email").value.trim(),
      password: document.getElementById("password").value.trim(),
      age: document.getElementById("age").value.trim(),
      address: document.getElementById("address").value.trim(),
      course: document.getElementById("course").value
    };

    // Save data to localStorage
    localStorage.setItem("studentData", JSON.stringify(studentData));

    // Redirect to display page
    window.location.href = "DISPLAY.html";
  });

  // Clear form fields
  clearBtn.addEventListener("click", () => {
    form.reset();
    localStorage.removeItem("studentData");
  });
});
