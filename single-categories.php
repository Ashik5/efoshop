<?php
require('header-alt.php');
echo '<main>';
?>
    <div class="efoshop-breadcum">
        <a href="#">Home</a>
        <a href="#">Electronics</a>
        <a href="#">Phone</a>
    </div>
    <div class="efoshop-categories-main-section">
        <div class="efoshop-filter-section">
            <div class="filter-section-header flex-row-center" style="justify-content:space-between">
                <div>
                    <h5>Category</h5>
                    <a href="#"><p>Mobiles</p></a>
                </div>
                <div class="close-filter">
                    <i class="fa-solid fa-xmark fa-2xl" style="color: #6e0085;"></i>
                </div>
            </div>
            <div class="filter-single-section">
                <p>Brand</p>
                <div>
                    <input id="brand" type="checkbox" name=" Apple" value=" Apple">
                    <label for="vehicle1"> Apple</label><br>
                    <input id="brand" type="checkbox" name=" Samsung" value=" Samsung">
                    <label for="vehicle2"> Samsung</label><br>
                    <input id="brand" type="checkbox" name="Xiaomi" value="Xiaomi">
                    <label for="vehicle3">Xiaomi</label><br>
                    <input id="brand" type="checkbox" name="Motorola" value="Motorola">
                    <label for="vehicle3">Motorola</label><br>
                    <input id="brand" type="checkbox" name="BlackBerry" value="BlackBerry">
                    <label for="vehicle3">BlackBerry</label><br>
                    <input id="brand" type="checkbox" name="Htc" value="Htc">
                    <label for="vehicle3">Htc</label><br>
                </div>
            </div>
            <div class="filter-single-section">
                <p>Service</p>
                <div>
                    <input type="checkbox" name="Installment" value="Installment">
                    <label for="vehicle1">Installment</label><br>
                    <input type="checkbox" name="Cash on delivery" value="Cash on delivery">
                    <label for="vehicle2">Cash on delivery</label><br>
                    <input type="checkbox" name="Free shipping" value="Free shipping">
                    <label for="vehicle3">Free shipping</label><br>
                    <input type="checkbox" name="EFOSHOP Mall" value="EFOSHOP Mall">
                    <label for="vehicle3">EFOSHOP Mall</label><br>
                </div>
            </div>
            <div class="filter-single-section">
                <p>Location</p>
                <div>
                    <input type="checkbox" name="Bangladesh" value="Bangladesh">
                    <label for="vehicle1">Bangladesh</label><br>
                    <input type="checkbox" name="Dhaka" value="Dhaka">
                    <label for="vehicle2">Dhaka</label><br>
                    <input type="checkbox" name="Noakhali" value="Noakhali">
                    <label for="vehicle3">Noakhali</label><br>
                    <input type="checkbox" name="Chittagong" value="Chittagong">
                    <label for="vehicle3">Chittagong</label><br>
                </div>
            </div>
            <div class="filter-single-section">
                <p>Price</p>
                <div class="flex-row-center">
                    <input type="number" placeholder="Min"/>
                    <span>-</span>
                    <input type="number" placeholder="Max"/>
                </div>
            </div>
            <div class="filter-single-section">
                <p>Rating</p>
                <div style="justify-content:start;gap:5px" class="flex-row-center">
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                </div>
                <div style="justify-content:start; gap:5px" class="flex-row-center">
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <span>And up</span>
                </div>
                <div style="justify-content:start; gap:5px" class="flex-row-center">
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <span>And up</span>
                </div>
                <div style="justify-content:start; gap:5px" class="flex-row-center">
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <span>And up</span>
                </div>
                <div style="justify-content:start; gap:5px" class="flex-row-center">
                    <i class="fa-solid fa-star" style="color: #6e0085;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <i class="fa-solid fa-star" style="color: #d1d1d1;"></i>
                    <span>And up</span>
                </div>
            </div>
            <div class="filter-single-section">
                <p>Operating system</p>
                <div>
                    <input type="checkbox" name="ANdroid" value="ANdroid">
                    <label for="vehicle1">ANdroid</label><br>
                    <input type="checkbox" name="ios" value="ios">
                    <label for="vehicle2">ios</label><br>
                </div>
            </div>
            <div class="filter-single-section">
                <p>Warranty Type</p>
                <div>
                    <input type="checkbox" name="Brand warranty" value="Brand warranty">
                    <label for="vehicle1">Brand warranty</label><br>
                    <input type="checkbox" name="No warranty" value="No warranty">
                    <label for="vehicle2">No warranty</label><br>
                    <input type="checkbox" name="Seller warranty" value="Seller warranty">
                    <label for="vehicle3">Seller warranty</label><br>
                </div>
            </div>
            <div class="filter-single-section">
                <p>Warranty period</p>
                <div>
                    <input type="checkbox" name="1 year" value="1 year">
                    <label for="vehicle1">1 year</label><br>
                    <input type="checkbox" name="2 year" value="2 year">
                    <label for="vehicle2">2 year</label><br>
                </div>
            </div>
        </div>
        <div class="efoshop-product-section">
            <div class="product-section-header">
                <div>
                    <h5>Latest Mobile Price in Bangladesh (Updated 2023)</h5>
                    <p>349 items found in Smart Phones</p>
                </div>
                <div class="flex-row-center filter-button-section" style="justify-content:space-between;">
                    <div class="efoshop-mobile-filter-button">
                        <i class="fa-solid fa-filter" style="color: #6e0085;"></i>
                        <span>Filter</span>
                    </div>
                    <div class="flex-row-center" style="gap:10px">
                        <span>Sort by : </span>
                        <div class="custom-select">
                            <select>
                                <option value="best_match">Best Match</option>
                                <option value="price_low_to_high">Price low to High</option>
                                <option value="price_high_to_low">Price high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-section">
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
                <div class="efoshop-product">
                    <img src="img/products/phone.jpg" />
                    <a href="#">Infinix Hot 20i (4/128GB)</a>
                    <p>$ 300</p>
                    <span style="justify-content:start;gap:5px" class="flex-row-center"><del>320</del><span>-3%</span></span>
                    <div style="justify-content:space-between;gap:5px" class="flex-row-center">
                    <div style="justify-content:start;gap:5px" class="flex-row-center">
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <i class="fa-solid fa-star fa-2xs" style="color:#6e0085"></i>
                        <span>(5)</span>
                    </div>
                    <span>Bangladesh</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="efoshop-pagination flex-row-center" style="justify-content:end">
        <li><</li>
        <li class="current-page">1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>></li>
    </div>
<?php
echo '</main>';
require_once('footer.php'); 
?>