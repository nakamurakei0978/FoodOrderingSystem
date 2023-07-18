document.addEventListener('click', e => {
  // Get the current dropdown element by using the data-dropdown attribute
  const currentDropdown = document.querySelector('[data-dropdown]');
  // Check if the clicked element is the trigger element by using the matches() method
  const isDropdownButton = e.target.matches('[data-dropdown-button]');
  // Check if the clicked element is a descendant of the dropdown menu by using the closest() method
  const isInsideDropdown = e.target.closest('[data-dropdown]') != null;
  // If the clicked element is the trigger element, toggle the active class on the current dropdown element
  if (isDropdownButton) {
    currentDropdown.classList.toggle('active');
  }
  // If the clicked element is not a descendant of the dropdown menu, remove the active class from all the dropdown elements
  if (!isInsideDropdown) {
    document.querySelectorAll('[data-dropdown].active').forEach(dropdown => {
      dropdown.classList.remove('active');
    });
  }
});

const moreBtn=document.querySelector('.more-btn');
console.log(moreBtn);

