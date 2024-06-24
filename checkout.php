<?php
include('layouts/header.php');


if (!empty($_SESSION['cart'])) {
} else {
  header('location:payment.php');
}



?>
<?php




?>



<!--Checkout-->
<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">
      --Check Out--
    </h2>
    <hr class="mx-auto">

  </div>

  <div class="mx-auto container">
    <form id="checkout-form" method="POST" action="server/place_order.php">
      <p class="text-center" style="color:red;">
        <?php if (isset($_GET['message'])) {
          echo $_GET['message'];
        } ?>
        <?php if (isset($_GET['message'])) { ?>
          <a class="btn btn-primary" href="login.php">Login</a>
        <?php } ?>
      </p>
      <div class="form-group checkout-small-element">
        <label for="">Name</label>
        <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Username" required>
      </div>
      <div class="form-group checkout-small-element">
        <label for="">Email</label>
        <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group checkout-small-element">
        <label for="">Phone</label>
        <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="phone number" required>
      </div>
      <div class="form-group checkout-small-element">
        <label for="">City</label>
        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City Name" required>
      </div>
      <div class="form-group checkout-large-element">
        <label for="">Address</label>
        <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
      </div>

      <div class="form-group checkout-btn-container">
        <p>Total amount: MDL. <?php echo $_SESSION['total']; ?></p>
        <input type="submit" class="btn" id="checkout-btn" name="place_order" value="Place Order">
      </div>

    </form>
  </div>

</section>






<?php
include('layouts/footer.php');
?>