<!--==========================
  Contact Section
============================-->
<section id="contact" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Contact Us</h2>
      <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Address</h3>
          <address>A108 Adam Street, NY 535022, USA</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Phone Number</h3>
          <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:info@example.com">info@example.com</a></p>
        </div>
      </div>

    </div>
  </div>

<iframe src="https://snazzymaps.com/embed/78587" width="100%" height="600px" style="border:none;"></iframe>









  <div class="container mt-5">
    <form class="" action="/" method="post">
        {{ csrf_field() }}

        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
          </div>

          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
          </div>
        </div>

        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>
        </div>

        <div class="form-group">
          <textarea class="form-control" name="message" rows="5"placeholder="Message"></textarea>
        </div>


        <button type="submit" id="sendmessage" style="color: #00cc99;border: 1px solid #00cc99;text-align: center;padding: 15px;font-weight: 600;margin-bottom: 15px;">Submit</button>
    </form>


  </div>
</section><!-- #contact -->
