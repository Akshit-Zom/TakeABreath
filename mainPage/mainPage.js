const toggleBtn = document.querySelector(".toggle_btn");
const toggleBtnIcon = document.querySelector(".toggle_btn i");
const dropDownMenu = document.querySelector(".dropdown_menu");

toggleBtn.onclick = function () {
  dropDownMenu.classList.toggle("open");
  const isOpen = dropDownMenu.classList.contains("open");
  console.log("open");

  toggleBtnIcon.classList = isOpen ? "fa-solid fa-xmark" : "fa-solid fa-bars";
};

// Get the hero text element
const heroText = document.querySelector("#hero h1");

// Set the initial values for x and y
let heroTextX = 0;
let heroTextY = 0;

// Update the CSS variables
heroText.style.setProperty("--hero-text-x", heroTextX + "px");
heroText.style.setProperty("--hero-text-y", heroTextY + "px");

// Dynamically adjust the position
function moveHeroText(x, y) {
  heroTextX = x;
  heroTextY = y;
  heroText.style.setProperty("--hero-text-x", heroTextX + "px");
  heroText.style.setProperty("--hero-text-y", heroTextY + "px");
}

// Example: Move the hero text to 10% from the left and 80% from the top
moveHeroText(10, 80);

/* Animation */
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  var backgroundBar = document.querySelector(".background_bar");
  if (window.scrollY > 0) {
    navbar.style.height = "70px"; // Change navbar height on scrolling down
    backgroundBar.style.height = "70px"; // Change background bar height on scrolling down
    backgroundBar.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)"; // Add shadow when scrolling down
  } else {
    navbar.style.height = "90px"; // Restore original navbar height on scrolling back to the top
    backgroundBar.style.height = "90px"; // Restore original background bar height on scrolling back to the top
    backgroundBar.style.boxShadow = "0 2px 4px rgba(0, 0, 0, 0.1)"; // Restore original shadow
  }
});
