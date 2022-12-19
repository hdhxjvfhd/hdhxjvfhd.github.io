const images = ["teacher1.png", "teacher2.png", "teacher3.png", "teacher4.png",];
const heading = ["Amanda Beck", "Tomas Mosley", "Juanita Nelson", "Dalton Myers"];
const texts = [
  "Prior to her doctoral studies, Amanda Beck was a special education teacher in both public schools and youth prisons. Currently, she is an Associate Professor in the Graduate School of Education at Panda School. The ways teachers may be supported in moving towards equitable and effective teaching environments. ", 
  "Committed teacher. Midnight Believer. A Slow Jam in a Hip Hop world. Cerebral and silly, outgoing and a homebody. Vernacular and grounded but academic and idealistic too. Convinced that Donny Hathaway is the most compelling artist of the entire soul and funk era, and that we still don't give Patrice Rushen enough love. ", 
  "Mathematics teaching and learning - in particular, how different teaching approaches impact students' learning, how to teach mathematics for a “growth mindset”, and how equity is promoted in mathematics classrooms. The role of groupwork and mathematical discussions in the development of understanding.", 
  "Dalton Myers is a professor in the Panda School of Education. He is also a research associate in the program on education at the National Bureau of Economic Research. Bettinger is the Director of the Center for Educational Policy Analysis and a Co-Director at the Lemann Center for Brazilian Education at Stanford."
];
let h1 = document.getElementById("name");
let p = document.getElementById("text");
let img = document.querySelector(".img");
let details = document.querySelector(".details");
let index = 0;
window.onload = () => {
  h1.textContent = heading[index];
  p.textContent = texts[index];
  img.src = `${images[index]}`;
};
//Animation function
function animate() {
  details.classList.add("animate");
  img.classList.add("animate");
  setTimeout(() => {
    details.classList.remove("animate");
    img.classList.remove("animate");
  }, 600);
}
function forward() {
  index++;
  if (index > images.length - 1) {
    index = 0;
  }
  h1.textContent = heading[index];
  p.textContent = texts[index];
  img.src = `${images[index]}`;
  //Animation
  animate();
}
function previous() {
  index--;
  if (index < 0) {
    index = images.length - 1;
  }
  h1.textContent = heading[index];
  p.textContent = texts[index];
  img.src = `${images[index]}`;
  //Animation
  animate();
}
