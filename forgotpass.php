<?php require('header.php'); ?>
<div class="container py-5">
  <div class="auth-container">
    <form action="">
      <h3 class="fw-semibold mb-4">পাসওয়ার্ড ভুলে গেছেন?</h3>
      <div class="row align-items-start">
        <div class="col-md-12">
          <div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">আপনার মোবাইল</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="আপনার মোবাইল লিখুন" aria-describedby="emailHelp" />
            </div>
            <div>
              <button type="submit" class="form-btn">সামনে আগান</button>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <a href="login.php">পিছনে যান</a>
      </div>
    </form>
  </div>
</div>
<?php require_once('footer.php'); ?>