document.querySelectorAll(".hero-btn").forEach((button) => {
  button.addEventListener("click", () => {
    window.location.href = "./donate.php";
  });
});

document.querySelectorAll(".program-card").forEach((card) => {
  card.addEventListener("click", () => {
    // Adding the scrolling logic from left to right and vice verse
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const ctaButton = document.getElementById("ctaButton");
  const bulkSmsCard = document.getElementById("bulkSmsCard");
  const techAcademyCard = document.getElementById("techAcademyCard");
  const webDevCard = document.getElementById("webDevCard");

  // Define the actual URLs (Replace '#' with your real page links)
  const links = {
    ctaButton: "services.php",
    bulkSmsCard: "services.php",
    techAcademyCard: "services.php",
    webDevCard: "services.php",
  };

  // Set the actual links on load
  ctaButton.href = links.ctaButton;
  bulkSmsCard.href = links.bulkSmsCard;
  techAcademyCard.href = links.techAcademyCard;
  webDevCard.href = links.webDevCard;

  // Optional: Log clicks for demonstration (Remove in production)
  function handleLinkClick(event) {
    // event.preventDefault(); // Uncomment this to stop actual navigation
    console.log(`Navigating to: ${event.currentTarget.href}`);
    // In a Single Page Application (SPA) you might use:
    // router.navigate(event.currentTarget.getAttribute('href'));
  }

  ctaButton.addEventListener("click", handleLinkClick);
  bulkSmsCard.addEventListener("click", handleLinkClick);
  techAcademyCard.addEventListener("click", handleLinkClick);
  webDevCard.addEventListener("click", handleLinkClick);
});

document.querySelectorAll(".btn").forEach((button) => {
  button.addEventListener("click", () => {
    window.location.href = "../donate.php";
  });
});

document.querySelector(".burger-menu").addEventListener("click", () => {
  const navbar = document.querySelector(".links");

  // Mobile menu modal toggle
  const existingOverlay = document.querySelector(".mobile-menu-overlay");
  if (existingOverlay) {
    existingOverlay.remove();
    return;
  }

  const linksHtml = document.querySelector(".links").innerHTML;

  // Inject styles for the modal (only once)
  if (!document.getElementById("mobile-menu-styles")) {
    const style = document.createElement("style");
    style.id = "mobile-menu-styles";
    style.textContent = `
                .mobile-menu-overlay{
                    position: fixed;
                    inset: 0;
                    background: rgba(0,0,0,0.45);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 2000;
                    animation: mpe-fade .15s ease;
                }
                .mobile-menu{
                    position: relative;
                    width: 95%;
                    max-width: 360px;
                    background: #fff;
                    border-radius: 12px;
                    padding: 1rem;
                    box-shadow: 0 12px 40px rgba(0,0,0,0.25);
                    transform: translateY(-8px);
                    animation: mpe-slide .2s cubic-bezier(.2,.8,.2,1) forwards;
                    font-family: inherit;
                }
                .mobile-menu .close-btn{
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    background: transparent;
                    border: none;
                    font-size: 1.1rem;
                    cursor: pointer;
                    color: #333;
                }
                .mobile-menu .menu-title{
                    font-weight: 700;
                    margin: 0 0 0.5rem 0;
                    color: #1f2c79;
                    text-align: center;
                }
                .mobile-menu ul{
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    display: flex;
                    flex-direction: column;
                    gap: 0.5rem;
                }
                .mobile-menu ul li a{
                    display: block;
                    padding: 0.65rem 0.85rem;
                    border-radius: 8px;
                    color: green;
                    text-decoration: none;
                    font-weight: 600;
                    transition: background .15s, color .15s;
                }
                .mobile-menu ul li a:hover{
                    background: linear-gradient(135deg, #ffd700 0%, #1f2c79ff 100%);
                    color: #fff;
                }
                .mobile-menu .donate-row{
                    margin-top: 0.75rem;
                    text-align: center;
                }
                .mobile-menu .donate-btn{
                    display: inline-block;
                    background: linear-gradient(135deg, #ffd700 0%, #1f2c79ff 100%);
                    color: #333;
                    padding: 0.6rem 1.1rem;
                    border-radius: 999px;
                    font-weight: 700;
                    text-decoration: none;
                }
                @keyframes mpe-slide { to { transform: translateY(0); } }
                @keyframes mpe-fade { from { opacity: 0 } to { opacity: 1 } }
                `;
    document.head.appendChild(style);
  }

  // Build overlay and menu
  const overlay = document.createElement("div");
  overlay.className = "mobile-menu-overlay";
  overlay.innerHTML = `
                <div class="mobile-menu" role="dialog" aria-modal="true">
                    <button class="close-btn" aria-label="Close menu">&times;</button>
                    <h3 class="menu-title">Empoweredge Club</h3>
                    <div class="mobile-links">
                        ${linksHtml}
                    </div>
                    <div class="donate-row">
                        <a class="donate-btn" href="../donate.php">Donate</a>
                    </div>
                </div>
            `;

  // Close when clicking backdrop
  overlay.addEventListener("click", (e) => {
    if (e.target === overlay) overlay.remove();
  });

  // Close button
  overlay
    .querySelector(".close-btn")
    .addEventListener("click", () => overlay.remove());

  // Close when any link is clicked (and follow link)
  overlay.querySelectorAll(".mobile-links a").forEach((a) => {
    a.addEventListener("click", () => overlay.remove());
  });

  // Append and focus first link for accessibility
  document.body.appendChild(overlay);
  const firstLink = overlay.querySelector(".mobile-links a");
  if (firstLink) firstLink.focus();
});

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
