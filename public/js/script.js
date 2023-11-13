


var dashboardToggle = document.getElementsByClassName("cardId");
var t;

for(t=0; t < dashboardToggle.length; t++) {
    dashboardToggle[t].addEventListener("click", function() {
        this.classList.toggle("toggleDashboard");
        var toggleContent = this.nextElementSibling;
        if (toggleContent.style.width === "1137px") {
            toggleContent.style.width = "1150px";
        } else {
            toggleContent.style.width = "1137px";
        }
    });
}

// sideNav Toggle

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "0";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "250px";
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
