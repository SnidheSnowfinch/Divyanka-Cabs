<?php include 'includes/header.php' ?>

<section class="banner-blue">
  <div class="head">
    <h2>BOOKING</h2>
    <p>Home>> <span class="og">BOOKING</span></p>
  </div>

</section>
<section class="div-container">
  <div class="container-form">

    <div class="left">

      <!-- Bus Info -->
      <div class="detail-div">
        <img src="bootstrap/images/ac-bus.jpg" alt="Bus" width="100%">
        <div>
          <h2>AC AIR BUS</h2>
          <div class="end-div">
            <div class="d-flex"><i class="bi bi-person mx-2"></i>
              <p>49 Seats</p>
            </div>
            <div class="d-flex"><i class="bi bi-wind mx-2"></i>
              <p>AC</p>
            </div>
            <div class="d-flex"><i class="bi bi-fuel-pump mx-2"></i>
              <p>CNG/Diesel</p>
            </div>
          </div>
          <ul class="features">
            <li><i class="bi bi-check-circle green me-2"></i>Extra km fare : ₹50/km after 200 kms</li>
            <li><i class="bi bi-check-circle green me-2"></i>Cancellation: Free till 24 hours of departure</li>
            <li><i class="bi bi-check-circle green me-2"></i>Reserve this bus at ₹ 4500 only </li>
            <li><i class="bi bi-check-circle green me-2"></i>Trained Drivers/Friendly Staff</li>
            <li><i class="bi bi-check-circle green me-2"></i>24×7 assistance and tracking</li>
          </ul>

        </div>
      </div>

      <div class="box">
        <h4>Images of selected vehicle category</h4>
        <div class="custom-tab">
          <button class="active" onclick="showImages('all')">All (6)</button>
          <button onclick="showImages('exterior')">Exterior (3)</button>
          <button onclick="showImages('interior')">Interior (2)</button>
          <button onclick="showImages('seat')">Seat (1)</button>
        </div>
        <div class="image-gallery">
          <img src="bootstrap/images/tab-img-1.jpg" data-type="exterior">
          <img src="bootstrap/images/tab-img-2.jpg" data-type="exterior">
          <img src="bootstrap/images/tab-img-3.jpg" data-type="exterior">
          <img src="bootstrap/images/tab-img-4.jpg" data-type="interior">
          <img src="bootstrap/images/tab-img-1.jpg" data-type="interior">
          <img src="bootstrap/images/tab-img-2.jpg" data-type="seat">
        </div>
      </div>


      <div class="box">
        <h4>Pick up Address & Date</h4>
        <div class="form-group">
          <div> <label for="">Pick up</label>
            <input type="text" placeholder="Pick up address">
          </div>
        </div>
        <div class="form-group">
          <div>
            <label for="">Date and time</label>
            <input type="date">
          </div>
          <div>
            <label for="">Number of days</label>
            <input type="number" placeholder="Number of days">

          </div>
        </div>

      </div>

      <div class="box">
        <h4>Traveller details</h4>
        <div class="form-group">

          <div> <label for="">Name</label>
            <input type="text" placeholder="Full name">
          </div>

          <div> <label for="">Email</label>
            <input type="email" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <div><label for="">Phone number</label>
            <input type="text" placeholder="Phone number">
          </div>
          <div>
            <label for="">Number of people (optional)</label>
            <input type="number" placeholder="Number of people">
          </div>
        </div>
        <div class="form-group">
          <div> <label for="">Message</label>
            <textarea rows="3" placeholder="Message"></textarea>
          </div>
        </div>
        <button class="submit-btn">Submit</button>
      </div>

    </div>

    <div class="right">
      <div class="payment-box">

        <!-- Total Amount -->
        <div class="total-amount border-bottom pb-2 mb-3">
          <h6>Total Amount <br><small class="text-muted">inc. of tolls and taxes</small></h6>
          <h5>₹11500</h5>
        </div>

        <!-- Payment Options -->
        <div class="payment-option">
          <input type="radio" id="part" name="payment" checked>
          <label for="part">
            Make part payment now
            <span>Pay the rest to the driver</span>
          </label>
          <div class="amount">₹ 5000</div>
        </div>

        <div class="payment-option">
          <input type="radio" id="full" name="payment">
          <label for="full">
            Make full payment now
          </label>
          <div class="amount">₹ 11500</div>
        </div>

        <!-- Confirm Button -->
        <button class="submit-btn">Pay & Confirm Now</button>
      </div>
    </div>
  </div>


</section>
<?php include 'includes/footer.php' ?>