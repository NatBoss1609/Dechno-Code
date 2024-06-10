document.addEventListener("DOMContentLoaded", function() {
    const navToggler = document.querySelector(".toggler-container button");
    const navigation = document.querySelector(".navigation");

    navToggler.addEventListener("click", toggleNav);

    function toggleNav(){
      navigation.classList.toggle("active");
    }
});