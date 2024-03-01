<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Student Records | BRAMM</title>
  </head>
  <body>
    <header>
      <img src="logo.png" alt="logo" class="logo" />
      <nav>
        <ul class="nav_links">
          <li><a href="#" class="head-links">Entry</a></li>
          <li><a href="view.php" class="head-links">View</a></li>
        </ul>
      </nav>
    </header>
    <div class="main-container">
      <div class="main">
        <div class="title">Data Entry</div>
        <form action="dbaddrecords.php" method="post">
          <div class="std-details">
            <div class="input-box">
              <div class="details">Full Name</div>
              <input type="text" placeholder="Enter student's name" name="name" required />
            </div>
            <div class="input-box">
              <div class="details">Grade</div>
              <input
                type="number"
                placeholder="Enter student's grade" name="grade"
                required
              />
            </div>
            <div class="input-box">
              <div class="details">Section</div>
              <input
                type="text"
                placeholder="Enter the student's section" name="section"
                required
              />
            </div>
            <div class="input-box">
              <div class="details">Roll Number</div>
              <input
                type="number"
                placeholder="Enter student's roll number" name="roll"
                required
              />
            </div>

            <div class="input-box">
              <div class="details">E-mail</div>
              <input
                type="email"
                placeholder="Enter student's e-mail" name="email"
                required
              />
            </div>
            <div class="input-box">
              <div class="details">Phone Number</div>
              <input
                type="number"
                placeholder="Enter student's phone number" name="phone"
                required
              />
            </div>
          </div>

          <div class="button">
            <input type="submit" name="" id="" value="Enter" />
          </div>
        </form>
      </div>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Team Members</h4>
            <ul>
              <li><a href="https://www.facebook.com/parbat.b.chhetri" target="_blank">Parbat Baniya</a></li>
              <li><a href="https://www.facebook.com/shreya.maharjan.1675" target="_blank">Shreya Maharjan</a></li>
              <li><a href="https://www.facebook.com/jonimhrzn" target="_blank">Johnny Maharjan</a></li>
              <li><a href="https://www.facebook.com/srijeeta.regmi.5" target="_blank">Shreejita Regmi</a></li>
              <li><a href="https://www.facebook.com/sujan.adhikari.11" target="_blank">Sujan Adhikari</a></li>
              -
            </ul>
          </div>
          <div class="footer-col">
            <h4>About Project</h4>
            <p class="txt">
              We, grade 12 students in section M11 collaborated on a "Student
              Record Management System" project, enhancing their understanding
              of CRUD operations for web applications and data management
              through teamwork.
            </p>
          </div>

          <div class="footer-col">
            <h4>Follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      src="https://kit.fontawesome.com/a4cce084e5.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


