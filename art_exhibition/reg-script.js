document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});

const signInbackButton = document.querySelector(".signInback");

signInbackButton.addEventListener("click", () => {
  window.history.back();
});

const signUpbackButton = document.querySelector(".signUpback");

signUpbackButton.addEventListener("click", () => {
  document.querySelector('.cont').classList.toggle('s--signup');
});

const signUpButton = document.querySelector(".m--up");

signUpButton.addEventListener("click", () => {
  document.querySelector('.cont').classList.add('s--signup');
});
