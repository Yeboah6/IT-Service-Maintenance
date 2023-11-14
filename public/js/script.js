

   
//   Dashboard ToggleEvent
  function closeDashboard() {
    document.getElementById("cardId").classList.toggle("toggleDashboard");
    document.getElementById("mySidenav").classList.toggle("sidenavToggle");
}

function inputToggle() {
  document.getElementById("inputId").classList.toggle("toggleInputWidth");
}

//   sideNav Dropdown
  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
