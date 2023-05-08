const navLinks = [
  { label: "Home", link: "Layout.html" },
  { label: "About Us", link: "#" },
  { label: "Our Services", link: "#" },
  { label: "Contact Us", link: "#" },
  { label: "Login", link: "LoginForm.html" },
];

const navBarContainer = document.getElementById("nav-item");

for (let navLink = 0; navLink < navLinks.length; navLink++) {
  const a = document.createElement("a");
  a.className = "nav-link";
  a.innerHTML = navLinks[navLink].label;
  a.href = navLinks[navLink].link;
  navBarContainer.appendChild(a);
}
