<?php require('header.php'); ?>
<div id="login" class="container py-5">
  <div class="auth-container">
    <form action="">
      <h3 class="fw-semibold mb-4">লগইন করুন!</h3>
      <div class="row align-items-start">
        <div class="col-md-12">
          <div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">আপনার মোবাইল</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="আপনার মোবাইল লিখুন" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
              <label for="passwordField" class="form-label">পাসওয়ার্ড
              </label>
              <div class="position-relative d-flex align-items-center justify-content-between">
                <input type="password" class="form-control" id="passwordField" placeholder="******" />
                <div onclick="togglePasswordVisibility()" id="password-visibility-controller" class="visibility-controller">
                  <i class="fa-solid fa-eye"></i>
                </div>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
              <a href="forgotpass.php">পাসওয়ার্ড ভুলে গেছেন?</a>
              <a href="register.php">নতুন একাউন্ট খুলুন</a>
            </div>
            <div>
              <button type="submit" class="form-btn">লগইন</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  function togglePasswordVisibility() {
    const passwordField = document.getElementById('passwordField');
    const toggleVisibility = document.getElementById(
      'password-visibility-controller'
    );
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      toggleVisibility.innerHTML = `<i class="fa-solid fa-eye-slash"></i>`;
    } else {
      passwordField.type = 'password';
      toggleVisibility.innerHTML = `<i class="fa-solid fa-eye"></i>`;
    }
  }
</script>
<?php require_once('footer.php'); ?>