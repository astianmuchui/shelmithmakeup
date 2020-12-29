<?php
    function Validate($name,$email,$phone,$message){
        if(empty($name) && empty($email) && empty($phone) && empty($message)){
            return false;
        }else{
            return true;
        }
        if(filter_var($email,FILTER_VALIDATE_EMAIL)=== TRUE){
            return true;
        }else{
            return false;
        }
        
    }
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        Validate($name,$email,$phone,$message);
        $headers = "from: .$name."<".$email.>"."\r\n";
        $headers .="MIME-Version: 1.0"."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
        $subject = "(Shelmith Makeup) Contact from website";
        $to = "shelmithmakeup@gmail.com";
        $code = "254";
        $link = "wa.me/";
        $final_tel = substr($phone,1);
        $final = $link.$code.$final_tel;
        $body = '
            <h1>Hi shelmith,</h1>
            <h2>Contact from '.$name.'</h2>
            <h3>'.$email.'</h3>
            <p>
                '.$message.'
            </p>
            <h2>Whatsapp link '.$final.'</h2>

        ';
        mail($to,$subject,$body,$headers);
        $reply_message = '
            <img src="./images/shemmy_logo-removebg-preview.png"> <br>
            <h1>
                hi '.$name.'
                We have received your message 
            </h1>
            <h2>We will get back to you as soon as possible</h2>
            <p>
            Should we take long to reply to your message  click on the link below <br>
            wa.me/254714568387 
            </p>
            <small>
            <a href="https://www.instagram.com/shelmithmakeup/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://web.facebook.com/Shelmith-Makeup-101810931543044" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/shelmithmakeup?s=20" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://api.whatsapp.com/send?phone=254714568387&text=&source=&data=&app_absent="><i class="fas fa-whatsapp"></i></a>
            </small>
            <p>You are receiving this email because you contacted us through our website</p>
            <h5>Shelmith makeup 2020 , All rights reserved</h5>
        ';
        $sub = "!!! We received your Email";
        $company = "Shelmith makeup";
        $head = "from:.$company."<".$to.>" ."\r\n";
        if(mail($to,$subject,$body,$headers)){
            mail($email,$sub,$reply_message,$head);
            return true;
        }else{
            return false;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your beauty is everything </title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="https://kit.fontawesome.com/84b6428a50.js" crossorigin="anonymous"></script>
</head>
<body>
    <header id="menu_wrap">
        <a href="index.php"><img src="images/shemmy_logo-removebg-preview.png" alt="" height="65" width="65"></a>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#gallery">Gallery</a></li>
        </ul>
    </nav>
    
    <div class="hamburger" id="hamburger">  
        <div id="openOne"></div>
        <div id="openTwo"></div>
    </div>

    </header>
    <menu id="menu" class="toggle">
        <ul>
            <br>
                <span id="closer"> &times; </span>
                <li><a href="index.php">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#gallery">Gallery</a></li>
        </ul>
    </menu>
    <div class="main" id="home">
        
        <div class="intro">
            <p> Your Beauty is Everything </p>
            <div class="icons">
                <a href="https://www.instagram.com/shelmithmakeup/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://web.facebook.com/Shelmith-Makeup-101810931543044" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/shelmithmakeup?s=20" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="border"></div>
        </div>
        <a href="https://api.whatsapp.com/send/?phone=254714568387&text&app_absent=0" id="button_one" class="btn">Get a makeup session</a>
    </div>
    <div class="services" id="services">
        <div class="makeup card" data-aos="flip-left"
        data-aos-easing="ease-out"
        data-aos-duration="2000">
            <img src="images/makeupp.jpg" alt="" width="396.3" height="264.2" > 
            <div class="desc">
                <h2>Makeup</h2> 
                    World class make up services <br>
                    to transform,make and keep you <br>
                    Beautiful at all times
                 <br> <br>
                 <div class="a"><a href="https://api.whatsapp.com/send/?phone=254714568387&text&app_absent=0" target="_blank">Book an appointment</a></div>
                 
            </div>
        </div>
        <div class="other-service card" data-aos="fade-right" data-aos-duration="2000" data-aos-easing="ease-out">
            <img src="images/camera_for_card (5).jpg" alt="" width="396.3" height="264.2"> 
            <div class="desc">
                <h2>Camera Work</h2> 
                Good camera work services <br>
                 to make Your shoots,music videos <br>
                 In high quality resolution
                <br> <br>
                <div class="a"><a href="https://api.whatsapp.com/send/?phone=254714568387&text&app_absent=0" target="_blank">Book session </a></div>
                 
                </div>
    </div>
    </div>
    <div class="bg-container">
     <div class="about-wrapper">
        <div class="about" id="about">
            <div class="contain">
                <h1 data-aos="fade" data-aos-duration="1000">About Us</h1>
                <div class="border" ></div>
               <p data-aos="fade-up" data-aos-duration="2000"> Shelmith makeup is a makeup agency located in  ruiru,Nairobi,Kenya.With customers from all over the country <br>
              We are dedicated to achieving excellence in the beauty industry 
              And more importantly giving you <br> a look that makes you feel good about 
              Yourself. 
              <br>
              At shelmith makeup we strive to revolutionize the beauty industry by raising the bar for beauty services <br> 
                we are mobile thus making our services even more efficient  <br> <br> 
                <h4>At shelmith makeup we are governed by three Main principles:</h4>
                <br>
                <ul>
                    <li data-aos="fade-right" data-aos-duration="1000"><i class="fas fa-handshake"></i> <br> Integrity</li> <br>
                    <li data-aos="fade-down" data-aos-duration="10010"><i class="fas fa-clock"></i> <br>Punctuality</li> <br>
                    <li data-aos="fade-left" data-aos-duration="10020"><i class="fas fa-fingerprint"></i> <br> Uniqueness</li> <br>
                </ul>
            </p>
              </div>
        </div>
      </div>
   
        <div class="contact" id="contact">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" data-aos="flip-up" data-aos-duration="1500" data-aos-easing="cubic-bezier(0.86, 0, 0.07, 1)">
            <h1>Talk to us</h1>
            <label for="name">Name</label> <br> <br>
            <input type="text" name="name" placeholder="sasha" required> <br> <br>
            <label for="email">Email</label> <br> <br>
            <input type="email" name="email" placeholder="someone@example.com" required> <br> <br>
            <label for="number">Phone Number</label> <br> <br>
            <input type="number" name="phone" placeholder="0712345678" required> <br> <br>
            <label>Message</label> <br> <br>
            <textarea name="message" cols="30" rows="10" placeholder="message" required></textarea> <br> <br>
            <input type="submit" value="Send message" id="submit">
        </form>
    </div>
</div>
    <div class="gallery" id="gallery">
        <center> <h1>Gallery</h1></center>
        <div>
            <img src="images/new_.jpg" alt="" height="450" width="287" data-aos="flip-left" data-aos-duration="1000">
            <img src="images/instagram (2).jpg" alt="" height="450" width="360" data-aos="flip-right" data-aos-duration="2000">
            <img src="images/c-2.jpg" alt=""  height="450" width="360" data-aos="flip-left" data-aos-duration="2000">
        </div>
        <br> <br> <br> <br> 
        
    </div>
    <div class="footer" data-aos="fade" data-aos-duration="1000">
        <div class="branding">
            <a href="index.php"><img src="images/rsz_white_transparent_logo.png" alt="" height="101.8" width="98"></a> 
            
        </div>
        <div class="links">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#gallery">Gallery</a></li>

                </ul>
            </nav>
        </div>
        <div class="contact_details">
            <ul>
                <li> <i class="fas fa-phone-alt"></i> 254 714 568 387</li> 
                <li> <i class="far fa-envelope"></i>shelmithmakeup@gmail.com</li> 
                <li><i class="fa fa-map-marker"></i> Ruiru,Nairobi kenya</li> 
            </ul>
        </div>
        <div class="social">
            <a href="https://twitter.com/shelmithmakeup?s=20" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="https://www.instagram.com/shelmithmakeup/" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://web.facebook.com/Shelmith-Makeup-101810931543044" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
            <br>
            <p>shelmith makeup 2020&copy; All rights reserved</p>  <br>
            <span>Developer - <a href="mailto:bookings.Iastian@gmail.com">bookings.Iastian@gmail.com</a></span>
        </div>
    </div>
    <script src="js/aos.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/main.js"></script>
</body>
</html>