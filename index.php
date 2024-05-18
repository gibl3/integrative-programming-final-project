<?php
include_once "includes/header.php";
?>

<main class="index-main">
  <section class="hero">
    <h1>Don'Study</h1>
    <!-- <h1>Tomorrow's Exam Is Today's Flashcards</h1> -->

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
      tempore doloribus excepturi labore dolorum, ut veritatis?
    </p>

    <div class="hero__btn-wrapper">
      <a href="login.php" class="hero__login-btn button --secondary-btn">Login</a>
      <a href="signup.php" class="button --primary-btn">Get started for free</a>
    </div>
  </section>
  
  <section class="features">
    <div class="features__card">
      <img src="https://via.placeholder.com/150" alt="" />
      <h3>Feature title</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum qui
        corrupti voluptatem.
      </p>
    </div>

    <div class="features__card">
      <img src="https://via.placeholder.com/150" alt="" />
      <h3>Feature title</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum qui
        corrupti voluptatem.
      </p>
    </div>

    <div class="features__card">
      <img src="https://via.placeholder.com/150" alt="" />
      <h3>Feature title</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum qui
        corrupti voluptatem.
      </p>
    </div>
  </section>

  <section class="sign-up">
    <div class="sign-up__left">
      <h2>Sign up today</h2>

      <p class="sign-up__description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis
        voluptate, sapiente voluptatem, labore voluptatum voluptate
      </p>

      <div class="sign-up__benefits">
        <p><span>&#10003;</span> Lorem ipsum dolor sit amet.</p>
        <p><span>&#10003;</span> Lorem ipsum dolor sit amet.</p>
        <p><span>&#10003;</span> Lorem ipsum dolor sit amet.</p>
      </div>

      <a href="signup.php" class="sign-up__btn button --primary-btn">Sign up</a>
    </div>

    <div class="sign-up__right">
      <img src="assets/images/pattern (13).png" alt="" />
    </div>
  </section>

  <section class="hiw">
    <h1>How it works</h1>

    <div class="hiw__steps-wrapper">
      <div class="hiw__step-card">
        <p class="hiw__step-number">1</p>

        <h3>Step title</h3>

        <p class="hiw__description">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem
          excepturi fugit aperiam assumenda voluptatem voluptate facere
          explicabo quod exercitationem incidunt.
        </p>
      </div>

      <div class="hiw__step-card">
        <p class="hiw__step-number">2</p>

        <h3>Step title</h3>

        <p class="hiw__description">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem
          excepturi fugit aperiam assumenda voluptatem voluptate facere
          explicabo quod exercitationem incidunt.
        </p>
      </div>

      <div class="hiw__step-card">
        <p class="hiw__step-number">3</p>

        <h3>Step title</h3>

        <p class="hiw__description">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem
          excepturi fugit aperiam assumenda voluptatem voluptate facere
          explicabo quod exercitationem incidunt.
        </p>
      </div>
    </div>

    <div class="hiw__btn-wrapper">
      <!-- <a href="#" class="hiw__sign-up-btn button --secondary-btn"
            >Sign up for free</a
          > -->
      <a href="demo.php" class="button --primary-btn">Try demo</a>
    </div>
  </section>

  <section class="testimonial">
    <div class="testimonial__header">
      <h1>Testimonial</h1>
      <div class="testimonial__win-circles">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

    <div class="testimonial__carousel">
      <div class="testimonial__carousel-left">
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>

        <p class="testimonial__author">
          - John Doe &#x25cf; January 1, 2022
        </p>

        <p class="testimonial__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
          voluptatibus cum veniam reiciendis velit ab, nam adipisci,
          quibusdam, harum rem itaque!
        </p>

        <div class="testimonial__btn-wrapper">
          <button type="button" class="testimonial__prev button --primary-btn">
            < </button>
              <button type="button" class="testimonial__next button --primary-btn">
                >
              </button>
        </div>
      </div>

      <div class="testimonial__carousel-right">
        <img src="https://via.placeholder.com/310" alt="" />
      </div>
    </div>
  </section>

  <section class="news-letter">
    <div class="news-letter__left">
      <h1>Don End Your Journey Here</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti
        blanditiis nihil nobis?
      </p>
    </div>

    <div class="news-letter__right">
      <form action="">
        <input type="text" placeholder="Email" class="news-letter__input" />
        <button class="news-letter__btn button --secondary-btn" type="submit">
          Subscribe
        </button>
      </form>
      <p>
        By subscribing, you agree to our
        <span><a href="">privacy policy</a></span>.
      </p>
    </div>
  </section>
</main>

<footer>
  <section class="banner-link">
    <h1><span>Tomorrow's</span> Exam Is <span>Today's</span> Flashcards</h1>

    <div class="banner-link__social">
      <img src="https://via.placeholder.com/50" alt="" />
      <img src="https://via.placeholder.com/50" alt="" />
      <img src="https://via.placeholder.com/50" alt="" />
      <img src="https://via.placeholder.com/50" alt="" />
      <img src="https://via.placeholder.com/50" alt="" />
      <img src="https://via.placeholder.com/50" alt="" />
    </div>

    <div class="banner-link__nav">
      <a href="index.php">Home</a>
      <a href="demo.php">Demo</a>
      <a href="about.php">About</a>
      <a href="contact.php">Contact</a>
    </div>
  </section>

  <section class="footer-info">
    <div class="footer-info__logo">
      <img src="assets/images/logo2.svg" alt="" />
    </div>

    <div class="footer-info__copyright">
      <p>© 2024 Don&#8217;Study. All rights reserved.</p>
    </div>

    <div class="footer-info__policy-and-terms">
      <p>Privacy Policy</p>
      <p>Terms of services</p>
    </div>
  </section>
</footer>

<script src="js/nav_indicator.js"></script>
</body>

</html>