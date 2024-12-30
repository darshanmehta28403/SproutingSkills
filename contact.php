<?php
require('head.php');
require('header.php')
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Contact Us</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-3 d-flex">
        <div class="bg-light align-self-stretch box p-4 text-center">
          <h3 class="mb-4">Address</h3>
          <p>198 West 21th Street, Suite 721 New York NY 10016</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="bg-light align-self-stretch box p-4 text-center">
          <h3 class="mb-4">Contact Number</h3>
          <p><a href="https://wa.me/+919925010033?text=<message>">+91 99250 10033</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="bg-light align-self-stretch box p-4 text-center">
          <h3 class="mb-4">Email Address</h3>
          <p><a href="mailto:stemaplus@sproutingskills.com">stemaplus@sproutingskills.com</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="bg-light align-self-stretch box p-4 text-center">
          <h3 class="mb-4">Website</h3>
          <p><a href="#">sproutingskills.org</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
  <div class="container">
    <div class="row d-flex align-items-stretch no-gutters">
      <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
        <form id="contactForm">
          <div class="form-group">
            <input type="text" id="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" id="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input type="text" id="subject" class="form-control" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
        <img src="images/image_1.jpg" alt="">
      </div>
    </div>
  </div>
</section>

<script>
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get form values
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    // Create mailto link with pre-filled subject and body
    const mailtoLink = `mailto:stemaplus@sproutingskills.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(message)}`;

    // Open the default email client
    window.location.href = mailtoLink;
  });
</script>
<?php
	require('footer.php');
	require('script.php');
	?>