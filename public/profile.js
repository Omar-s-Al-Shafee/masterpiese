// Get the popup elements
const popup = document.querySelector('.popup');
const popupContent = document.querySelector('.popup-content');
const closeBtns = document.querySelectorAll('.close-btn');
const editBtns = document.querySelectorAll('.edit-btn');
const addBtns = document.querySelectorAll('.add-btn');

// Open the popup
function openPopup(event) {
  event.preventDefault();
  const popupId = this.getAttribute('data-popup');
  const targetPopup = document.getElementById(popupId);
  targetPopup.style.display = 'block';
}

// Close the popup
function closePopup() {
  popup.style.display = 'none';
}

// Attach event listeners to close buttons
closeBtns.forEach(function (btn) {
  btn.addEventListener('click', closePopup);
});

// Attach event listeners to edit buttons
editBtns.forEach(function (btn) {
  btn.addEventListener('click', openPopup);
});

// Attach event listeners to add buttons
addBtns.forEach(function (btn) {
  btn.addEventListener('click', openPopup);
});
// Get all close buttons
const closeButtons = document.querySelectorAll('.close-btn');

// Add click event listeners to close buttons
closeButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const popupId = button.parentNode.parentNode.id;
    const popup = document.getElementById(popupId);
    popup.style.display = 'none';
  });
});

// Your existing code for opening the popups
const editButtons = document.querySelectorAll('.edit-btn');
const addButtons = document.querySelectorAll('.add-btn');

editButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const popupId = button.dataset.popup;
    const popup = document.getElementById(popupId);
    popup.style.display = 'block';
  });
});

addButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const popupId = button.dataset.popup;
    const popup = document.getElementById(popupId);
    popup.style.display = 'block';
  });
});




function openEditPopup() {
    document.getElementById("editProfilePopup").style.display = "flex";
}

function closeEditPopup() {
    document.getElementById("editProfilePopup").style.display = "none";
}