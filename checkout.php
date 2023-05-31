<?php require('header.php'); ?>
<div class="container py-5">
  <div class="row">
    <div class="col-md-5">
      <form action="" class="bg-white p-4">
        <p class="mb-4 lh-base">
          অর্ডারটি কনফার্ম করতে আপনার নাম, ঠিকানা, মোবাইল নাম্বার, লিখে
          অর্ডার কনফার্ম করুন বাটনে ক্লিক করুন
        </p>
        <div class="row align-items-start">
          <div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">আপনার মোবাইল</label>
              <input type="email" class="form-control" placeholder="আপনার মোবাইল লিখুন" />
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">আপনার নাম</label>
              <input type="email" class="form-control" placeholder="আপনার নাম লিখুন" />
            </div>
            <div class="d-flex mb-3">
              <div class="">
                <label for="exampleInputPassword1" class="form-label">আপনার ঠিকানা</label>
                <div class="position-relative d-flex align-items-center justify-content-between">
                  <div class="row">
                    <select class="form-select form-control col-lg-3 col-md-6 col-6" aria-label="Default select example">
                      <option selected>বিভাগ</option>
                      <option value="1">ঢাকা</option>
                      <option value="1">বরিশাল</option>
                      <option value="1">সিলেট</option>
                      <option value="1">রাজশাহি</option>
                    </select>
                    <select class="form-select form-control col-lg-3 col-md-6 col-6" aria-label="Default select example">
                      <option selected>জেলা</option>
                      <option value="1">ঢাকা</option>
                      <option value="1">বরিশাল</option>
                      <option value="1">সিলেট</option>
                      <option value="1">রাজশাহি</option>
                    </select>
                    <select class="form-select form-control col-lg-3 col-md-6 col-6" aria-label="Default select example">
                      <option selected>থানা</option>
                      <option value="1">ঢাকা</option>
                      <option value="1">বরিশাল</option>
                      <option value="1">সিলেট</option>
                      <option value="1">রাজশাহি</option>
                    </select>
                    <select class="form-select form-control col-lg-3 col-md-6 col-6" aria-label="Default select example">
                      <option selected>বাসার এড্রেস</option>
                      <option value="1">ঢাকা</option>
                      <option value="1">বরিশাল</option>
                      <option value="1">সিলেট</option>
                      <option value="1">রাজশাহি</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">পাসওয়ার্ড
              </label>
              <div class="position-relative d-flex align-items-center justify-content-between">
                <input type="password" class="form-control" id="passwordField" placeholder="******" />
                <div onclick="togglePasswordVisibility()" class="visibility-controller" id="password-visibility-controller">
                  <i class="fa-solid fa-eye"></i>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">কনফার্ম পাসওয়ার্ড
              </label>
              <div class="position-relative d-flex align-items-center justify-content-between">
                <input id="confirmPasswordField" type="password" class="form-control" placeholder="******" />
                <div onclick="toggleConfirmPasswordVisibility()" id="confirm-password-visibility-controller" class="visibility-controller">
                  <i class="fa-solid fa-eye"></i>
                </div>
              </div>
            </div>
            <div class="mb-3 d-flex justify-content-between">
              <a href="login.php">লগইন করুন</a>
            </div>
            <div>
              <button type="submit" class="form-btn">
                অর্ডার কনফার্ম করুন
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-7">
      <div class="card">
        <div class="card-header fw-bold fs-2">আপনার অর্ডার</div>
        <div class="card-body overflow-auto">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr class="">
                <td class="d-flex align-items-center">
                  <img class="img-fluid cart_img me-3" src="https://eliteshops24.com/uploads/62c938ccc465b_800x800.jpg" alt="" />
                  <a href="">
                    <p>Painting Projection Table</p>
                  </a>
                </td>
                <!-- <td>
                      <div class="qty">
                        <button><i class="fa-solid fa-minus"></i></button>
                        <div class="count">0</div>
                        <button><i class="fa-solid fa-plus"></i></button>
                      </div>
                    </td> -->
                <td>1050</td>
                <td>1050</td>
              </tr>
              <tr>
                <td></td>
                <td class="fw-bold">Subtotal</td>
                <td><span id="subtotal"></span></td>
              </tr>
              <tr>
                <td></td>
                <td class="fw-bold">Shipping Cost</td>
                <td><span id="shippingCost"></span></td>
              </tr>
              <tr>
                <td></td>
                <td class="fw-bold">Total</td>
                <td><span id="totalPrice"></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
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

  // checkout calculation
  const shippingCost = 50;
  const products = [{
      image: 'https://eliteshops24.com/uploads/62c938ccc465b_800x800.jpg',
      name: 'Painting Projection Table',
      price: 1050,
      qty: 1,
    },
    {
      image: 'https://eliteshops24.com/uploads/62c938ccc465b_800x800.jpg',
      name: 'Painting Projection Table',
      price: 1010,
      qty: 1,
    },
  ];
  // mapp products array
  const mapProdcut = products.map(
    (product) => `<tr class="">
                    <td class="d-flex align-items-center">
                      <img
                        class="img-fluid cart_img me-3"
                        src="https://eliteshops24.com/uploads/62c938ccc465b_800x800.jpg"
                        alt=""
                      />
                      <a href="">
                        <p>Painting Projection Table</p>
                      </a>
                    </td>
                    <!-- <td>
                      <div class="qty">
                        <button><i class="fa-solid fa-minus"></i></button>
                        <div class="count">0</div>
                        <button><i class="fa-solid fa-plus"></i></button>
                      </div>
                    </td> -->
                    <td>1050</td>
                    <td>1050</td>
                  </tr>`
  );
  console.log(mapProdcut);
  const subtotal = products.reduce(
    (sum, product) => sum + product.price,
    0
  );
  const totalPrice = subtotal + shippingCost;
  document.getElementById('subtotal').innerText = subtotal;
  document.getElementById('totalPrice').innerText = totalPrice;
  document.getElementById('shippingCost').innerText = shippingCost;
</script>
<?php require_once('footer.php'); ?>