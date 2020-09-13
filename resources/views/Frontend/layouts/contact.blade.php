
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Brighter Myanmar</h3>
              <div class="social-links">
                <a href="https://www.twitter.com" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="https://www.facebook.com/Brighter-Myanmar-2105127203059856" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://www.instagram.com" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="https://www.linkedin.com" class="linkedin"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>San Yeik Nyein 6th Street<br>Hledan , Yangon</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>BrighterMyanmar@gmail.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+959 400 400 085</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12">
            <form action=" {{url('/admin/dashboard/contact')}} " method="post">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required />
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
              </div>
              <input type="submit" value="Submit" class="btn btn-md text-light" style = "background: #7EBBE7; border-radius: 25px;" >
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->