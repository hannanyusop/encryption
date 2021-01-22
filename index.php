<!DOCTYPE html>
<html lang="en">
<?php $main = true; ?>
<?php include('head.php') ?>

<body>

<?php include('header.php') ?>

  <section id="hero">
    <div class="hero-container">
      <h3>BITP 3423</h3>
      <h1>INFORMATION TECHNOLOGY SECURITY</h1>
      <h2>Mini Project</h2>
      <a href="team.php" class="btn-get-started scrollto">Our Hardworking Team</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h3>Introduction</h3>
          <p>Encryption tools is a software that use cryptography to fend off unauthorized access to digital information.
              Cryptography is used to protect digital information on computers as well as the digital information that is
              sent to other computers over the vast internet network. Encryption involves the use of mathematical algorithms
              that are used to encode user data so that only intended recipients can access the contents. The encryption tools
              work by converting plaintext into ciphertext. Moreover, tools for encryption does all this heavy lifting automatically,
              engaging cipher keys to both encrypt and decrypt any kind of data user want to transfer securely.</p>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>encryption algorithm</h2>
          <h3>Most common encryption algorithm</h3>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-key"></i></div>
              <h4 class="title"><a href="">Triple Data Encryption Algorithm</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-key"></i></div>
              <h4 class="title"><a href="">Advanced Encryption Standard</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-key"></i></div>
              <h4 class="title"><a href="">River-Shamir-Adleman (RSA)</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-key"></i></div>
              <h4 class="title"><a href="">Format Preserving Encryption</a></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Tools</h3>
          <p>For this mini project we explored 3 tools that using encryption method</p>
          <a class="cta-btn" href="keybase.php">View Tools</a>
        </div>

      </div>
    </section><!-- End Cta Section -->


      <section id="pricing" class="pricing">
          <div class="container">

              <div class="section-title">
                  <h2>CIA</h2>
                  <h3>Confidentiality, Integrity & Availability</h3>
              </div>

              <div class="row">

                  <div class="col-lg-4 col-md-6">
                      <div class="box">
                          <h3>Keybase.io</h3>
                          <ul>
                              <li><b>Confidentiality</b><br> Only authorized account who are registered by phone no. have full access to the application.</li>
                              <li><b>Integrity</b><br> The data can be share to other user from difference platform. But only the user with authorized account can share the data either sent the data or receive the data.  </li>
                              <li><b>Availability</b><br> Only authorized account can be achieved the data based on where the data is stored and how it can be reached.</li>
                          </ul>
                          <div class="btn-wrap">
                              <a href="keybase.php" class="btn-buy">View</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                      <div class="box recommended">
                          <h3>Unicode Cryptor</h3>
                          <ul>
                              <li><b>Confidentiality</b><br> Everyone can access the application as the application didn’t have user to register any account. </li>
                              <li><b>Integrity</b><br> The data for this application has no integrity at all as anyone can encrypt/decrypt using the application with no limit.</li>
                              <li><b>Availability</b><br> The data didn’t store at any platform as the application is like on/off application because user can insert any text and it will straightly decrypt.</li>
                          </ul>
                          <div class="btn-wrap">
                              <a href="unicode.php" class="btn-buy">View</a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                      <div class="box">
                          <h3>Boxcryptor</h3>
                          <ul>
                              <li><b>Confidentiality</b><br> The user need to login/sign up by email to have full access of the application.</li>
                              <li><b>Integrity</b><br> The application has full integrity as every folder need to set pin/password before can be shared. And the set of pin/password can be done only by authorized user.</li>
                              <li><b>Availability</b><br> The data is secure as if authorized user wants to achieved the data, the user need to enter correct pin/password to have access to the data.</li>
                          </ul>
                          <div class="btn-wrap">
                              <a href="box.php" class="btn-buy">View </a>
                          </div>
                      </div>
                  </div>

              </div>

          </div>
      </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h3>Conclusion</h3>
        </div>

        <p>Encryption is the way to keep our data safe. Data transfer encryption programs are constantly evolving, and it will be interesting to see what kind of security measures will be implement in the future.</p>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include('footer.php') ?>


</body>

</html>