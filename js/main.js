document.addEventListener("DOMContentLoaded", function () {
  const mailBtn = document.getElementById("mailToggle");
  const mailBox = document.getElementById("mailBox");

  if (mailBtn && mailBox) {
    mailBtn.addEventListener("click", function (e) {
      e.stopPropagation();
      mailBox.style.display = (mailBox.style.display === "none" || mailBox.style.display === "") ? "block" : "none";
    });

    document.addEventListener("click", function (e) {
      if (!mailBox.contains(e.target) && !mailBtn.contains(e.target)) {
        mailBox.style.display = "none";
      }
    });
  }
});
