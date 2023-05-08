const images = ["slide3.jpg", "logo.jpg", "slide4.jpg", "slide7.jfif"];
let currentIndex = 0;
const image = document.createElement("img");
const sliderContainer = document.getElementById("slideshow");
const show=true
function displayImage(currentIndex) {
  image.src = "./assets/" + images[currentIndex];
  image.className = "slide-bar-image";
  sliderContainer.appendChild(image);
  console.log(image.src);
}
displayImage(currentIndex);
function nextImageLoader() {
  currentIndex++;
  if (currentIndex === images.length) {
    currentIndex = 0;
  }
  displayImage(currentIndex);
}
function prevImageLoader() {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = images.length - 1;
  }
  displayImage(currentIndex);
}
