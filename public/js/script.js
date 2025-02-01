document.addEventListener("DOMContentLoaded", () => {
  const hamburgerBtn = document.getElementById("hamburger-btn")
  const mobileMenu = document.getElementById("mobile-menu")
  const profileBtn = document.getElementById("profile-btn")
  const profileCard = document.getElementById("profile-card")
  const editBtn = document.getElementById("edit-btn")
  const logoutBtn = document.getElementById("logout-btn")
  const profileInfo = document.getElementById("profile-info")
  const profileEdit = document.getElementById("profile-edit")

  // Toggle mobile menu
  hamburgerBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden")
  })

  // Toggle profile card
  profileBtn.addEventListener("click", () => {
    profileCard.classList.toggle("hidden")
  })

  // Close profile card when clicking outside
  document.addEventListener("click", (event) => {
    if (!profileBtn.contains(event.target) && !profileCard.contains(event.target)) {
      profileCard.classList.add("hidden")
    }
  })

  // Close mobile menu when a link is clicked
  mobileMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      mobileMenu.classList.add("hidden")
    })
  })

  // Edit profile functionality
  editBtn.addEventListener("click", () => {
    if (editBtn.textContent === "Edit") {
      profileInfo.classList.add("hidden")
      profileEdit.classList.remove("hidden")
      editBtn.textContent = "Save"

      // Populate edit fields with current values
      document.getElementById("edit-username").value = document.getElementById("username").textContent
      document.getElementById("edit-email").value = document.getElementById("email").textContent
      document.getElementById("edit-phone").value = document.getElementById("phone").textContent
      document.getElementById("edit-age").value = document.getElementById("age").textContent
      document.getElementById("edit-gender").value = document.getElementById("gender").textContent
      document.getElementById("edit-location").value = document.getElementById("location").textContent
    } else {
      // Save functionality (you would typically send this data to a server)
      document.getElementById("username").textContent = document.getElementById("edit-username").value
      document.getElementById("email").textContent = document.getElementById("edit-email").value
      document.getElementById("phone").textContent = document.getElementById("edit-phone").value
      document.getElementById("age").textContent = document.getElementById("edit-age").value
      document.getElementById("gender").textContent = document.getElementById("edit-gender").value
      document.getElementById("location").textContent = document.getElementById("edit-location").value

      profileInfo.classList.remove("hidden")
      profileEdit.classList.add("hidden")
      editBtn.textContent = "Edit"
    }
  })

  // Logout functionality (you would typically handle this on the server)
  logoutBtn.addEventListener("click", () => {
    alert("Logout functionality would be implemented here.")
    profileCard.classList.add("hidden")
  })
})

