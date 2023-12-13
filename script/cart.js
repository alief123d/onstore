
$(document).ready(function() {
  // Send product details to the server when the "Add to Cart" button is clicked
  $(".addItemBtn").click(function(e) {
      e.preventDefault();

      var $form = $(this).closest(".form-submit");
      var pid = $form.find(".pid").val();
      var pname = $form.find(".pname").val();
      var pharga = $form.find(".pharga").val();
      var pfoto = $form.find(".pfoto").val();

      $.ajax({
          url: '../pages/menu/action.php', // Ganti dengan path yang sesuai
          method: 'post',
          cache: false,
          data: {
              pid: pid,
              pname: pname,
              pharga: pharga,
              pfoto: pfoto
          },
          success: function(response) {
              console.log(response); // Output respon dari server ke konsol
          }
      });
  });

  // Load the total number of items added in the cart and display in the navbar
  load_cart_item_number();

  function load_cart_item_number() {
      $.ajax({
          url: '../pages/menu/action.php', // Ganti dengan path yang sesuai
          method: 'get',
          data: {
              cartItem: "cart_item"
          },
          success: function(response) {
              $("#cart-item").html(response);
          }
      });
  }
});