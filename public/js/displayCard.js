let d = document;

let pictureSpace = d.querySelector("#catPhoto");
let nameSpace = d.querySelector("#catName");
let ageSpace = d.querySelector("#catAge");
let descriptionSpace = d.querySelector("#catDescription");

let likeBtn = d.querySelector("#likeBtn");
let dislikeBtn = d.querySelector("#dislikeBtn");

let catProfile;

likeBtn.addEventListener("click", async () => {
  let action = likeBtn.dataset.value;

  await sendAnswer(action, catProfile.cat_id);
  catProfile = await fetchCatProfile();
  displayCatProfile(catProfile);
});

dislikeBtn.addEventListener("click", async () => {
  let action = dislikeBtn.dataset.value;
  
  await sendAnswer(action, catProfile.cat_id);
  catProfile = await fetchCatProfile();
  displayCatProfile(catProfile);
});

/**
 * Main function
 */
async function run() {
  catProfile = await fetchCatProfile();
  displayCatProfile(catProfile);
}

/**
 * fetch cats from database
 * @returns Cat Profile Informations
 */
async function fetchCatProfile() {
  return await fetch("/", {
    method: "POST",
    body: JSON.stringify({ getProfile: true }),
  })
    .then((r) => {
      return r.json();
    })
    .then((data) => {
      return data;
    });
}

function displayCatProfile(profile) {
  pictureSpace.src = "data:image/jpeg;base64," + profile.photo;
  nameSpace.innerHTML = profile.name;
  ageSpace.innerHTML = profile.age;
}

/**
 * Send input and information to PHP
 *
 * @param  responseFromUser
 * @param  likedUser
 * @returns resolved promise
 */
function sendAnswer(responseFromUser, likedUser) {
  return fetch("/", {
    method: "POST",
    body: JSON.stringify({
      action: "like",
      response: responseFromUser,
      likedUser: likedUser,
    }),
  });
}
