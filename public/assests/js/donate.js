document.addEventListener("DOMContentLoaded", function () {
  // Donation type buttons
  const sponsorBtn = document.getElementById("sponsorBtn");
  const donatorBtn = document.getElementById("donatorBtn");
  const donationTypeSelect = document.getElementById("donationType");

  //Sponsor Must be User
  sponsorBtn.addEventListener("click", () => {
    // alert("Your Are About to Become A Sponsor ");
    //Signing Up/Logging The Sponsor
    login = window.location.href = "login.php";
    if (!login) {
      window.location.href = "sign_up.php";
    }
  });

  if (sponsorBtn && donationTypeSelect) {
    sponsorBtn.addEventListener("click", function () {
      donationTypeSelect.value = "sponsor";
      highlightDonationOption("sponsor");
    });
  }

  if (donatorBtn && donationTypeSelect) {
    donatorBtn.addEventListener("click", function () {
      donationTypeSelect.value = "donator";
      highlightDonationOption("donator");
    });
  }

  function highlightDonationOption(type) {
    const optionCards = document.querySelectorAll(".option-card");
    optionCards.forEach((card) => {
      card.style.borderColor = "transparent";
    });

    if (type === "sponsor") {
      optionCards[0].style.borderColor = "var(--primary)";
    } else {
      optionCards[1].style.borderColor = "var(--secondary)";
    }
  }

  // Form submission
  const donationForm = document.getElementById("donationForm");
  const successMessage = document.getElementById("successMessage");
  const successText = document.getElementById("successText");
  const submitBtn = donationForm.querySelector(".submit-btn");

  if (donationForm) {
    donationForm.addEventListener("submit", function (e) {
      e.preventDefault();

      // Show loading state
      submitBtn.classList.add("loading");
      submitBtn.disabled = true;

      // Simulate API call
      setTimeout(function () {
        // Get form data
        const formData = new FormData(donationForm);
        const amount = document.getElementById("customAmount").value;
        const type = document.getElementById("donationType").value;

        // Update success message
        const successMessages = {
          sponsor: `Thank you for becoming a sponsor with a donation of Ksh ${amount}! Your recurring support will help us create lasting change.`,
          donator: `Thank you for your generous donation of Ksh ${amount}! Your one-time contribution will make a real difference.`,
        };

        successText.textContent =
          successMessages[type] || successText.textContent;

        // Show success message
        successMessage.classList.add("active");
        donationForm.reset();

        // Reset button
        submitBtn.classList.remove("loading");
        submitBtn.disabled = false;

        // Scroll to success message
        successMessage.scrollIntoView({ behavior: "smooth" });

        // Hide success message after 8 seconds
        setTimeout(function () {
          successMessage.classList.remove("active");
        }, 8000);
      }, 1500);
    });
  }

  // Format currency input
  const customAmount = document.getElementById("customAmount");
  if (customAmount) {
    customAmount.addEventListener("input", function (e) {
      let value = e.target.value;
      value = value.replace(/[^\d]/g, "");
      e.target.value = value;
    });
  }
});
