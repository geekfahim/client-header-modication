document.getElementById("darkmode").addEventListener("click", function() {
    // check if dark mode is enabled
    if (localStorage.getItem("darkModeEnabled") === "true") {
        // if enabled, disable it
        localStorage.setItem("darkModeEnabled", "false");
        // remove the css class with darkmode style
        document.body.classList.remove("dark-mode");
        
    } else {
        // if disabled, enable it
        localStorage.setItem("darkModeEnabled", "true");
        // add the css class with darkmode style
        document.body.classList.add("dark-mode");
        //add the class dark-mode to the body
        var mainElement = document.querySelector('.main');
        // If the element exists, add the 'dark' class to it
        if (mainElement) {
            mainElement.classList.add('dark');
        }

    }
    //et on change la class du i pour changer l'icone par fas fa-sun avec une douce transition
});

// check if dark mode is saved in localstorage and add the class dark-mode
if (localStorage.getItem("darkModeEnabled") === "true") {
    document.body.classList.add("dark-mode");
}