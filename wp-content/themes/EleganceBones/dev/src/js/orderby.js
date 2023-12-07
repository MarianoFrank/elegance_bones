document.addEventListener('DOMContentLoaded', function () {
  var customSelect = document.querySelector('.custom-select');

  customSelect.addEventListener('click', function (e) {
      e.stopPropagation(); // Evita que se cierre el menú al hacer clic en él
      var selectedOptions = this.querySelector('.custom-selected-options');
      selectedOptions.style.display = (selectedOptions.style.display === 'block') ? 'none' : 'block';
  });

  document.addEventListener('click', function (e) {
      var customSelectClicked = customSelect.contains(e.target);
      if (!customSelectClicked) {
          var selectedOptions = customSelect.querySelector('.custom-selected-options');
          selectedOptions.style.display = 'none';
      }
  });
});
