/*  ========================================================================  *\

    S C R I P T S  F O R   C O N T A C T   F O R M   W I T H   F E T C H

\*  ========================================================================  */

document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();  // Megakadályozza az űrlap elküldését és az oldal újratöltését (alapértelmezett viselkedés)
  
    var formData = new FormData(this);
  
    fetch("contact.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => alert(data))
    .catch(error => console.error("Hiba:", error));
});