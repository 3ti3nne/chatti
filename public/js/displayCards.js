console.log("kikoo");
window.onload(() => {
  fetch("/")
    .then((r) => r.json())
    .then((data) => console.log(data));
});
