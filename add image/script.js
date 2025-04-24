document.addEventListener("DOMContentLoaded", function () {
  const tempDisplay = document.getElementById("temperature");
  const temperature = Math.floor(28 + Math.random() * 5);
  tempDisplay.innerHTML = `🌡 Current Temperature: ${temperature}°C`;

  const popupImages = document.querySelectorAll('.popup-image');
  const modal = document.getElementById('imgModal');
  const modalImg = document.getElementById('modalImage');

  popupImages.forEach(img => {
    img.addEventListener('click', function () {
      modal.style.display = "block";
      modalImg.src = this.src;
    });
  });

  modal.addEventListener('click', function (e) {
    if (e.target !== modalImg) {
      modal.style.display = "none";
    }
  });

  // ✅ Optional: auto-close any accordion when another is clicked
  const accordions = document.querySelectorAll(".accordion-btn");
  accordions.forEach(btn => {
    btn.addEventListener("click", function () {
      const target = document.getElementById(this.dataset.target);
      if (target.style.display === "block") {
        target.style.display = "none";
      } else {
        document.querySelectorAll(".accordion-content").forEach(c => c.style.display = "none");
        target.style.display = "block";
      }
    });
  });
});

function closeModal() {
  document.getElementById("imgModal").style.display = "none";
}

// ✅ Accordion toggle used in admissions & courses
function toggleAccordion(id) {
  const el = document.getElementById(id);
  el.style.display = el.style.display === "block" ? "none" : "block";
}

// ✅ Login/Register Toggle Function
function showAuthForm(type) {
  const loginForm = document.getElementById('login-form');
  const registerForm = document.getElementById('register-form');
  if (type === 'login') {
    loginForm.style.display = 'block';
    registerForm.style.display = 'none';
  } else {
    loginForm.style.display = 'none';
    registerForm.style.display = 'block';
  }
}

// Handle Register Form Submission
document.getElementById("registerForm").addEventListener("submit", function (e) {
  e.preventDefault(); // prevent actual submission

  const password = this.password.value.trim();
  const confirmPassword = this.confirm_password.value.trim();

  if (password !== confirmPassword) {
    alert("❌ Passwords do not match");
    return;
  }

  // Simulate successful registration
  document.getElementById("registerSuccess").style.display = "block";

  // Optional: clear form fields after successful registration
  this.reset();
});
