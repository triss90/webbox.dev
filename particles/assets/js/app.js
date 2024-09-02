document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll("main h3, main h2");
  const navLinks = document.querySelectorAll(".sidebar nav ul li a");

  function activateLink() {
    let index = sections.length;

    while (--index && window.scrollY + 100 < sections[index].offsetTop) {}

    navLinks.forEach((link) => link.classList.remove("active"));
    navLinks[index].classList.add("active");
  }

  activateLink(); // highlight on page load
  window.addEventListener("scroll", activateLink);
});

function setTheme(theme) {
  const lightThemeLink = document.getElementById("prism-light");
  const darkThemeLink = document.getElementById("prism-dark");

  if (theme === "dark") {
    lightThemeLink.disabled = true;
    darkThemeLink.disabled = false;
  } else {
    lightThemeLink.disabled = false;
    darkThemeLink.disabled = true;
  }
}

// Automatically set the theme on load
document.addEventListener("DOMContentLoaded", () => {
  const userPrefersDark =
    window.matchMedia &&
    window.matchMedia("(prefers-color-scheme: dark)").matches;
  setTheme(userPrefersDark ? "dark" : "light");
});

// Optional: Handle user theme changes dynamically
window
  .matchMedia("(prefers-color-scheme: dark)")
  .addEventListener("change", (e) => {
    setTheme(e.matches ? "dark" : "light");
  });

document.addEventListener("DOMContentLoaded", (event) => {
  // Your custom Prism.js initialization code here, if needed
  // Example: registering a custom button in the toolbar
  Prism.plugins.toolbar.registerButton("copy-to-clipboard", function (env) {
    var button = document.createElement("button");
    button.textContent = "Copy";
    button.addEventListener("click", function () {
      Prism.plugins.copyToClipboard.copy(env.code);
    });
    return button;
  });
});
