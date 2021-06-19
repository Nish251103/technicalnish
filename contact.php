<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  </head>
  <body>
    <nav class="cnavbar">
        <div class="max-width">
            <div class="clogo"><a href="index.html">Technical<span>nish.</span></a></div>
            <ul class="cmenu">
                <li><a href="index.html" class="cmenu-btn">Home</a></li>
                <li><a href="blog.html" class="cmenu-btn">Blogs</a></li>
                <li><a href="project.html" class="cmenu-btn">Projects</a></li>
                <li><a href="coming-soon-page/index.html" class="cmenu-btn">Shop</a></li>
                <li><a href="about.html" class="cmenu-btn">About</a></li>
                <li><a href="contact.html" class="cmenu-btn">Contact</a></li>

            </ul>
            <div class="cmenu-btn">
                <i class="cfas fa-bars"></i>
            </div>
        </div>
    </nav>
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Don't be shy.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Nishchal</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Gurgaon, India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">technicalnish@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="contactform.php" method="post" >
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>

    <footer>
      <div class="wrapper">
         <div class="icon facebook"><a href="https://www.facebook.com" class="btn" id="b">
            <div class="tooltip">
               Facebook
            </div>
            <span><i class="fab fa-facebook-f"></i></span>
         </div>
         <div class="icon twitter"><a href="https://www.twitter.com" class="btn" id="b">
            <div class="tooltip">
               Twitter
            </div>
            <span><i class="fab fa-twitter"></i></span>
         </div>
         <div class="icon instagram"><a href="https://www.instagram.com" class="btn" id="b">
            <div class="tooltip">
               Instagram
            </div>
            <span><i class="fab fa-instagram"></i></span>
         </div>
         <div class="icon github">
            <div class="tooltip">
               Github
            </div>
            <span><i class="fab fa-github"></i></span><a href="https://www.github.com" class="btn" id="b">
         </div>
         <div class="icon youtube">
            <div class="tooltip">
               YouTube
            </div>
            <span><i class="fab fa-youtube"></i></span><a href="https://www.youtube.com" class="btn" id="b">
         </div>
      </div>

    </footer>


  </body>
</html>
