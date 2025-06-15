$(document).ready(function () {
  let productsLoaded = false;

  $('#productsDropdown').hover(function () {
    if (!productsLoaded) {
      $.ajax({
        url: 'products.json',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
          const menu = $('#productsMenu');
          menu.empty();
          data.forEach(item => {
            menu.append(`<a class="dropdown-item" href="${item.link}">${item.name}</a>`);
          });
          productsLoaded = true;
        },
        error: function () {
          $('#productsMenu').html('<div class="text-danger">Failed to load products</div>');
        }
      });
    }
  });
});
