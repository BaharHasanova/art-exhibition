const usernameInput = document.querySelector("#username");
const eventSelect = document.querySelector("#event");
const dateInput = document.querySelector("#date");
// const totalPrice = document.querySelector("#total-price");
const submitBtn = document.querySelector(".submit");
const resultDiv = document.querySelector("#payment-result");

let eventPrice = 0;

// Add event listener to date input
dateInput.addEventListener("change", () => {
  updatePrice();
});

// Function to update the price based on event price and date
function updatePrice() {
  const date = new Date(dateInput.value);
  let price = eventPrice;
  if (date.getDay() === 5 || date.getDay() === 6) {
    price *= 1.1; // add 10% for weekend events
  }
  totalPrice.textContent = "RM" + price.toFixed(2);
}

// Add event listener to submit button
submitBtn.addEventListener("click", () => {
  const username = usernameInput.value;
  const eventName = eventSelect.value;
  const eventDate = dateInput.value;
  
  resultDiv.innerHTML = `Thank you, ${username}, for purchasing a ticket for ${eventName} on ${eventDate}.`;
  // Reset values
  usernameInput.value = "";
  eventPrice = 0;
  totalPrice.textContent = "RM0.00";
  eventSelect.selectedIndex = 0;
  dateInput.value = formattedDate;
});


// Go to previous page: Back button
const backButton = document.querySelector(".back");

backButton.addEventListener("click", () => {
  window.history.back();
});
