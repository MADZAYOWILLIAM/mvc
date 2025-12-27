// Modal functionality
const openBtn = document.getElementById("openDialogBtn");
const closeBtn = document.getElementById("closeDialogBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const overlay = document.getElementById("modalOverlay");
const serviceForm = document.getElementById("serviceForm");

// Open modal
openBtn.addEventListener("click", () => {
  overlay.style.display = "flex";
  document.body.style.overflow = "hidden"; // Prevent scrolling
});

// Close modal (multiple ways)
closeBtn.addEventListener("click", closeModal);
closeModalBtn.addEventListener("click", closeModal);

// Close when clicking outside modal
overlay.addEventListener("click", (event) => {
  if (event.target === overlay) {
    closeModal();
  }
});

// Close with Escape key
document.addEventListener("keydown", (event) => {
  if (event.key === "Escape" && overlay.style.display === "flex") {
    closeModal();
  }
});

// Form submission
serviceForm.addEventListener("submit", (event) => {
  event.preventDefault();

  // Get form values
  const name = document.getElementById("name").value;
  const service = document.getElementById("service").value;

  // Show success message (in a real app, you would send data to a server)
  alert(
    `Thank you, ${name}! Your request for ${service.replace(
      "_",
      " "
    )} has been received. We'll contact you shortly.`
  );

  // Close modal and reset form
  closeModal();
  serviceForm.reset();
});

function closeModal() {
  overlay.style.display = "none";
  document.body.style.overflow = "auto"; // Restore scrolling
}

// Add hover effect to service cards
document.querySelectorAll(".service-card").forEach((card) => {
  card.addEventListener("mouseenter", function () {
    this.style.transform = "translateY(-10px)";
  });

  card.addEventListener("mouseleave", function () {
    this.style.transform = "translateY(0)";
  });
});
