// Add hovered class to the selected navigation item
let listItems = document.querySelectorAll(".Navigation li");

function activeLink() {
    listItems.forEach((item) => { 
        item.classList.remove("hovered"); 
    });
    this.classList.add("hovered");
}

listItems.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu toggle functionality
let toggle = document.querySelector(".toggle");
let Navigation = document.querySelector(".Navigation");
let main = document.querySelector(".main");

if (toggle && Navigation && main) {
    toggle.onclick = function() {
        Navigation.classList.toggle("active");  
        main.classList.toggle("active");
    };
}

// If you have a separate toggle element (remove if not needed)
let myToggle = document.getElementById("myToggle");
if (myToggle) {
    myToggle.addEventListener("click", function() {
        this.classList.toggle("active");

        
    });
}