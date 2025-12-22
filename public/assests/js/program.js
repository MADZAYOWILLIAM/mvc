// Modal functionality
const openBtn = document.getElementById("openDialogBtn");
const closeBtn = document.getElementById("closeDialogBtn");
const closeModalBtn = document.getElementById("closeModalBtn");
const overlay = document.getElementById("modalOverlay");
const programForm = document.getElementById("programForm");

// Open modal
openBtn.addEventListener("click", () => {
  overlay.style.display = "flex";
  document.body.style.overflow = "hidden";
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
programForm.addEventListener("submit", (event) => {
  event.preventDefault();

  // Get form values
  const name = document.getElementById("name").value;
  const program = document.getElementById("program").value;
  const programText =
    document.getElementById("program").options[
      document.getElementById("program").selectedIndex
    ].text;

  // Show success message
  alert(
    `Thank you, ${name}! Your registration for "${programText}" has been received. We'll contact you shortly Or Send.`
  );

  // Close modal and reset form
  closeModal();
  programForm.reset();
});

function closeModal() {
  overlay.style.display = "none";
  document.body.style.overflow = "auto";
}

// Scroll functionality for cards
const cardsContainer = document.getElementById("cardsContainer");
const indicators = document.querySelectorAll(".indicator");

function scrollLeft() {
  cardsContainer.scrollBy({
    left: -350,
    behavior: "smooth",
  });
  updateIndicators();
}

function scrollRight() {
  cardsContainer.scrollBy({
    left: 350,
    behavior: "smooth",
  });
  updateIndicators();
}

// Update active indicator based on scroll position
function updateIndicators() {
  const scrollPosition = cardsContainer.scrollLeft;
  const cardWidth = 350 + 30; // card width + gap
  const activeIndex = Math.round(scrollPosition / cardWidth);

  indicators.forEach((indicator, index) => {
    if (index === activeIndex) {
      indicator.classList.add("active");
    } else {
      indicator.classList.remove("active");
    }
  });
}

// Update indicators on scroll
cardsContainer.addEventListener("scroll", updateIndicators);

// Click on indicator to scroll to that card
indicators.forEach((indicator) => {
  indicator.addEventListener("click", function () {
    const index = parseInt(this.getAttribute("data-index"));
    const cardWidth = 350 + 30; // card width + gap
    cardsContainer.scrollTo({
      left: index * cardWidth,
      behavior: "smooth",
    });

    // Update active indicator
    indicators.forEach((ind) => ind.classList.remove("active"));
    this.classList.add("active");
  });
});

// Card hover effects
document.querySelectorAll(".card").forEach((card) => {
  card.addEventListener("mouseenter", function () {
    this.style.transform = "translateY(-15px)";
  });

  card.addEventListener("mouseleave", function () {
    this.style.transform = "translateY(0)";
  });

  // Click on card to open modal
  card.addEventListener("click", function () {
    const programName = this.querySelector("h3").textContent;
    document.getElementById("program").value = programName
      .toLowerCase()
      .replace(" ", "_");
    overlay.style.display = "flex";
    document.body.style.overflow = "hidden";
  });
});

// Auto-scroll for cards (optional)
let autoScrollInterval;

function startAutoScroll() {
  autoScrollInterval = setInterval(() => {
    // Check if we're at the end
    if (
      cardsContainer.scrollLeft + cardsContainer.clientWidth >=
      cardsContainer.scrollWidth - 10
    ) {
      // Scroll back to start
      cardsContainer.scrollTo({
        left: 0,
        behavior: "smooth",
      });
    } else {
      scrollRight();
    }
  }, 5000); // Scroll every 5 seconds
}

function stopAutoScroll() {
  clearInterval(autoScrollInterval);
}

// Start auto-scroll when page loads
window.addEventListener("load", () => {
  startAutoScroll();

  // Pause auto-scroll when user interacts with cards
  cardsContainer.addEventListener("mouseenter", stopAutoScroll);
  cardsContainer.addEventListener("mouseleave", startAutoScroll);
  cardsContainer.addEventListener("touchstart", stopAutoScroll);
});
