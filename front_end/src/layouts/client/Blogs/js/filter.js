// alert("ok");
// const filter = document.getElementById("filter-button");
// const close = document.getElementById("close");

// filter.addEventListener("click", function () {
//   const show = document.getElementById("filters-value");
//   show.classList.add("aktif");
//   show.classList.remove("d-none");
// });

// close.addEventListener("click", function () {
//   const show = document.getElementById("filters-value");
//   show.classList.add("d-none");
//   show.classList.remove("aktif");
// });

const filterBtn = () => {
  const show = document.getElementById("filters-value");
  show.classList.add("aktif");
  show.classList.remove("d-none");
};
const closeBtn = () => {
  const show = document.getElementById("filters-value");
  show.classList.add("d-none");
  show.classList.remove("aktif");
};
