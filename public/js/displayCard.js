let d = document;

let pictureSpace = d.querySelector("#catPhoto");
let nameSpace = d.querySelector("#catName");
let ageSpace = d.querySelector("#catAge");
let descriptionSpace = d.querySelector("#catDescription");

let profileCatIdSpace = d.querySelectorAll(".catId");

let likeBtn = d.querySelectorAll(".likeBtn");

let catProfile;

async function run() {
  catProfile = await fetchCatProfile();
  displayCatProfile(catProfile);

  await catAnswer();
  run();
}

async function fetchCatProfile() {
  return await fetch("/", {
    method: "POST",
    body: JSON.stringify({ getProfile: true }),
  }).then((r) => {
    return r.json();
  });
}

function displayCatProfile(profile) {
  pictureSpace.src = "data:image/jpeg;base64," + profile.photo;
  nameSpace.innerHTML = profile.name;
  ageSpace.innerHTML = profile.age;
}

function catAnswer() {
  return new Promise((resolve) => {
    likeBtn.forEach((btn) => {
      btn.addEventListener("click", () => {
        let action = btn.dataset.value;
        sendAnswer(action, catProfile.cat_id);
        return resolve();
      });
    });
  });

  function sendAnswer(responseFromUser, likedUser) {
    fetch("/", {
      method: "POST",
      body: JSON.stringify({
        action: "like",
        response: responseFromUser,
        likedUser: likedUser,
      }),
    });
  }
}
