var li_items = document.querySelectorAll(".accordion_wrap ul li");
var ul = document.querySelector(".accordion_wrap ul");

li_items.forEach(function (item) {
  li_items[0].classList.add("active");
  item.addEventListener("click", function () {
    li_items.forEach(function (item) {
      item.classList.remove("active");
    })
    item.classList.add("active");
  });
});

li_items.forEach(function (item) {
  item.addEventListener("mouseover", function () {
    li_items.forEach(function (item) {
      item.classList.remove("active");
    })
    item.classList.add("active");
  });
});