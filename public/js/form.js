let state = {
  slideIndex: 0
};
const slides = document.querySelectorAll("#slide");
const slidesArray = Array.from(slides);
const beforeButtons = document.querySelectorAll("#slide #btn-before");
const nextButtons = document.querySelectorAll("#slide #btn-next");

function load() {
  slides[state.slideIndex].classList.remove("d-none");
  const filtered = slidesArray.filter(
    (item, index) => index !== state.slideIndex
  );
  filtered.forEach((item) => item.classList.add("d-none"));
}

beforeButtons.forEach((item) => {
  item.addEventListener("click", () => {
    if (state.slideIndex == 0) return;
    state.slideIndex -= 1;
    load();
  });
});

nextButtons.forEach((item) => {
  item.addEventListener("click", () => {
    if (state.slideIndex > slidesArray.length) return;
    state.slideIndex += 1;
    load();
  });
});

load();
