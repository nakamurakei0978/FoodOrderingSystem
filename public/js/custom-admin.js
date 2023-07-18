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

// let btnToggle=document.querySelector('.close');
// btnToggle=btnToggle.children[0];
// let container=document.getElementById('container');
// console.log(btnToggle,container);

// btnToggle.addEventListener('click',function(){
//   container.classList.toggle('toggleMenu');
// });



let btnToggle = document.querySelector('.close');
btnToggle = btnToggle.children[0];
let container = document.getElementById('container');
console.log(btnToggle, container);

// Check the localStorage for the menu state
let menuState = localStorage.getItem('menuState');
if (menuState === 'open') {
  // If the menu was open, add the toggleMenu class
  container.classList.add('toggleMenu');
} else {
  // If the menu was closed, remove the toggleMenu class
  container.classList.remove('toggleMenu');
}

btnToggle.addEventListener('click', function () {
  // Toggle the menu class
  container.classList.toggle('toggleMenu');
  // Update the localStorage with the new menu state
  if (container.classList.contains('toggleMenu')) {
    // If the menu is open, set the menuState to 'open'
    localStorage.setItem('menuState', 'open');
  } else {
    // If the menu is closed, set the menuState to 'closed'
    localStorage.setItem('menuState', 'closed');
  }
});
