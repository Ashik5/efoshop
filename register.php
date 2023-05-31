<?php require('header.php'); ?>
<div id="registerNewAccount" class="container py-5">
  <div class="auth-container">
    <form action="">
      <h3 class="fw-semibold mb-4">রেজিস্টার করুন!</h3>
      <div class="row align-items-start">
        <div class="col-md-12">
          <div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">আপনার মোবাইল</label>
              <input type="email" class="form-control" placeholder="আপনার মোবাইল লিখুন" />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">আপনার নাম</label>
              <input type="email" class="form-control" placeholder="আপনার নাম লিখুন" />
            </div>
            <div class="">
              <label for="exampleInputPassword1" class="form-label">আপনার ঠিকানা</label>
              <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="form-select form-group mb-4">
                    <select class="form-control" aria-label="Default select example">
                      <option selected>বিভাগ</option>
                      <option value="1">ঢাকা</option>
                      <option value="1">বরিশাল</option>
                      <option value="1">সিলেট</option>
                      <option value="1">রাজশাহি</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-select form-group mb-4">
                    <select class="form-control" aria-label="Default select example">
                      <option selected>জেলা</option>
                      <option value="1">ঢাকা</option>
                      <option value="1">বরিশাল</option>
                      <option value="1">সিলেট</option>
                      <option value="1">রাজশাহি</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="form-select form-group mb-4">
                    <select class="form-control" aria-label="Default select example">
                      <option selected>থানা</option>
                      <option value="1">ঢাকা</option>
                      <option value="1">বরিশাল</option>
                      <option value="1">সিলেট</option>
                      <option value="1">রাজশাহি</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-12">
                  <div class="form-group mb-4">
                    <label for="">বাসার এড্রেস</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="form-group mb-4">
                    <label for="exampleInputPassword1" class="form-label">পাসওয়ার্ড</label>
                    <div class="position-relative d-flex align-items-center justify-content-between">
                      <input type="password" class="form-control" id="passwordField" placeholder="******" />
                      <div onclick="togglePasswordVisibility()" class="visibility-controller" id="password-visibility-controller">
                        <i class="fa-solid fa-eye"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="form-group mb-4">
                    <label for="exampleInputPassword1" class="form-label">কনফার্ম পাসওয়ার্ড</label>
                    <div class="position-relative d-flex align-items-center justify-content-between">
                      <input id="confirmPasswordField" type="password" class="form-control" placeholder="******" />
                      <div onclick="toggleConfirmPasswordVisibility()" id="confirm-password-visibility-controller" class="visibility-controller">
                        <i class="fa-solid fa-eye"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
              <a href="login.php">লগইন করুন</a>
            </div>
            <div>
              <button type="submit" class="btn form-btn">রেজিস্টার করুন</button>
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

  function toggleConfirmPasswordVisibility() {
    const passwordField = document.getElementById('confirmPasswordField');
    const toggleVisibility = document.getElementById(
      'confirm-password-visibility-controller'
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