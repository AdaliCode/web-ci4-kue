const card = document.querySelectorAll(".card");
card.forEach((element) => {
  element.onmouseover = function () {
    element.classList.add("border");
    element.classList.add("border-secondary");
    element.style.cursor = "pointer";
  };
  element.onmouseleave = function () {
    element.classList.remove("border");
    element.classList.remove("border-secondary");
  };
});
