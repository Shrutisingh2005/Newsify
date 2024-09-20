<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>News Website</title>
      <!-- favicon -->
      <link rel="icon" type="image/png" href="favicon.png" sizes="32x32" />
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Local CSS -->
      <link rel="stylesheet" href="style.css" />
    </head>

    <body>
      <!-- This is Bootsratp Nav bar -->
      <nav id="navbar">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="logo.png" width="150px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" onclick="getNews('all')">Home</a>
                </li>
                <li><a class="nav-link " aria-current="page" href="subscription.php">Subscribe</a></li>
                <li><a class="nav-link " aria-current="page" href="#aboutus">About Us</a></li>
                <li><a class="nav-link " href="#contactme">Contact Me</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Category
                  </a>
                  <ul id="webList" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li onclick="sendCategory(this.id)" id="0">
                      <a class="dropdown-item" href="#">National</a>
                    </li>
                    <li onclick="sendCategory(this.id)" id="1">
                      <a class="dropdown-item" href="#">Business</a>
                    </li>
                    <li onclick="sendCategory(this.id)" id="2">
                      <a class="dropdown-item" href="#">Sport</a>
                    </li>
                    <li onclick="sendCategory(this.id)" id="3">
                      <a class="dropdown-item" href="#">World</a>
                    </li>
                    <li onclick="sendCategory(this.id)" id="4">
                      <a class="dropdown-item" href="#">Politics</a>
                    </li>
                    <li onclick="sendCategory(this.id)" id="5">
                      <a class="dropdown-item" href="#">Technology</a>
                    <li onclick="sendCategory(this.id)" id="7">
                      <a class="dropdown-item" href="#">Entertainment</a>
                    </li>
                    <li onclick="sendCategory(this.id)" id="8">
                      <a class="dropdown-item" href="#">Miscellaneous</a>
                    </li>
                    <li onclick="sendCategory(this.id)" id="10">
                      <a class="dropdown-item" href="#">Science</a>
                    </li>
                  </ul>
                </li>
              </ul>
                  <div class="form-check form-switch">
                    <input type="checkbox" id="darkModeToggle">
                    <label class="form-check-label" for="darkModeToggle">
                      <svg class="moon"  xmlns="http://www.w3.org/2000/svg"
                      width="16" height="16"
                        viewBox="0 0 512 512">
                        <path fill="#fff"
                          d="M268.279,496c-67.574,0-130.978-26.191-178.534-73.745S16,311.293,16,243.718A252.252,252.252,0,0,1,154.183,18.676a24.44,24.44,0,0,1,34.46,28.958,220.12,220.12,0,0,0,54.8,220.923A218.746,218.746,0,0,0,399.085,333.2h0a220.2,220.2,0,0,0,65.277-9.846,24.439,24.439,0,0,1,28.959,34.461A252.256,252.256,0,0,1,268.279,496ZM153.31,55.781A219.3,219.3,0,0,0,48,243.718C48,365.181,146.816,464,268.279,464a219.3,219.3,0,0,0,187.938-105.31,252.912,252.912,0,0,1-57.13,6.513h0a250.539,250.539,0,0,1-178.268-74.016,252.147,252.147,0,0,1-67.509-235.4Z"
                          class="ci-primary"></path>
                      </svg>
                      <svg class="sun"  xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-sun" viewBox="0 0 16 16">
                        <path
                          d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
                          fill="#fff9e5"></path>
                      </svg>
                    </label>
            </div>
          </div>
        </nav>
      </nav>
      <button class="login-button" onclick="openLogin()">Login</button>
      
      <button class="Subscribe-button" id="subscribebtn" onclick="openLogout()" >Logout</button>
      <!-- This is basic header of website -->
      <div class="head container">
        <h3>
          Top News <span class="badge text-bg-secondary"></span>
        </h3>
        <span class="line"></span>
      </div>
      <!-- This is div where all the News are Fetched from API -->
      <div id="newsBox"></div>
      <div id="spinner" class="mySpin spinner-border text-warning"></div>
      <section id="aboutus" class="aboutus" >
        <h2>ABOUT US</h2>
        <br><br>
        <div class="abtus-section">
            <div class="img">
                <div class="abtus-img"></div>
            </div>
            <div class="abtus-text">
                <p><b>Newsify: Your Ultimate News Hub</b>
                  <br>
                  Welcome to Newsify, your one-stop destination for all things news. We've got you covered with: </p>
                <p>1.World Updates: Stay in the loop with global affairs, politics, and breaking news from every corner of the planet.</p>
                <p>2. Sports Buzz: Catch up on the latest scores, highlights, and analyses from the world of sports.</p>
                <p>3.Entertainment Scene: Get the scoop on celebrity gossip, movie releases, music updates, and more.</p>
                <p>4.Tech Trends: Stay ahead of the curve with insights into the latest gadgets, software releases, and tech innovations.</p>
                <p>5.Health and Wellness: Discover tips for a healthier lifestyle, including fitness advice, nutrition insights, and mental wellness tips.</p>
                <p>6.Business Buzz: Stay informed about market trends, company news, and entrepreneurship tips.</p>
                <p>7.Science and Innovation: Explore the wonders of science and groundbreaking research shaping our world.</p>
                <p>8.Lifestyle Picks: From travel inspiration to fashion trends, we've got your lifestyle and culture covered.</p>
                <p>Trust Newsify to keep you informed, entertained, and up-to-date with the world around you. Bookmark us for your daily news fix!</p>

            </div>
        </div>
    </section>
    <section id="contactme" class="contact">
      <h2>CONTACT ME</h2>
      <p>Use this form to get in touch. I would love to hear your feedback!</p>
      <form class="contact-form" action="https://api.web3forms.com/submit" method="POST">
          <div class="contact-detail">
              <input type="hidden" name="access_key" value="c2b5bac7-10fd-48ba-932a-6b33617444ca">
              <label for="yourname">Name</label>
              <input type="text" id="yourname" name="yourname" placeholder="Your Name" required>
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Reason for your message" required>
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" placeholder="Your Email Address" required>
          </div>
  
          <div class="message">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" required></textarea>
              <button type="submit">Submit</button>
          </div>
      </form>
  </section>
  
      <footer>
        <div class="container">
            <div class="copyright">
                This site &copy; 2024 Shruti Singh
            </div>
        <div class="social-media">
            <a href="https://www.linkedin.com/in/shruti-singh-94a7b3261/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.instagram.com/_shruti_2102?igsh=MWF2ajUwbnhzMGZ6Mg==" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
        </div>
    </footer>

      <!-- Bootsratp js -->
      <script src="app.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    </body>

</html>