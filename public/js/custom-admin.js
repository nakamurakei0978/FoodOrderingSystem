// let user_dropdown = document.getElementById('user-dropdown');

// function toggleMenu(){
//     user_dropdown.classList.toggle('open-menu')
// }

// document.addEventListener('click', e => {
//     let isDropdownButton = e.target.matches('[data-dropdown-button]')
//     if (!isDropdownButton && e.target.closest('[data-dropdown]') != null) return
//     let currentDropdown

//     if (isDropdownButton) {
//         currentDropdown = e.target.closest('[data-dropdown]')
//         currentDropdown.classList.toggle('active')

//         document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
//             if (dropdown === currentDropdown) return
//             dropdown.classList.remove('active')
//         })
//     }
// })

// document.addEventListener('click', e => {
//     const currentDropdown = document.querySelector('[data-dropdown]');
//     const isInsideDropdown = currentDropdown.contains(e.target);
//     if (!isInsideDropdown) {
//       currentDropdown.classList.remove('active');
//     }
//   });
  
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
      console.log(currentDropdown);
    }
    // If the clicked element is not a descendant of the dropdown menu, remove the active class from all the dropdown elements
    if (!isInsideDropdown) {
      document.querySelectorAll('[data-dropdown].active').forEach(dropdown => {
        dropdown.classList.remove('active');
      });
    }

    // admin users more button
  });