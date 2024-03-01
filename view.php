<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>View Records</title>
</head>
<body>

    <header>
      <img src="logo.png" alt="logo" class="logo" />
      <nav>
        <ul class="nav_links">
          <li><a href="index.php" class="head-links">Entry</a></li>
          <li><a href="view.php" class="head-links">View</a></li>
        </ul>
      </nav>
    </header>
   <div class="table">
    <div class="table_section">
        <table>
            <thead>

                <tr>
                    <th>Roll Number</th>
                    <th>Name</th>
                    <th>Grade</th>
                    <th>Section</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
           
               
                
                    <?php
                    require("dbh.inc.php");
           $sql = "SELECT * FROM STUDENTS";
           $conn = $conn->query($sql); 

            while ($row = $conn->fetch_assoc()) { 
        ?>
            <tr>
            <td><?php echo $row['rollNo']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Grade']; ?></td> 
                <td><?php echo $row['Section']; ?></td> 
                <td><?php echo $row['Email']; ?></td> 
                <td><?php echo $row['Phone']; ?></td> 
                <td>

                  <a href="updatepage.php?id=<?=$row['rollNo'] ?>"><button><i class="fa-solid fa-pen-to-square"></i></button></a>
                  <a href="deleterecord.php?id=<?=$row['rollNo'] ?>"> <button><i class="fa-solid fa-trash"></i></button> </a>
                </td>
                    
                
            </tr>

           <?php
            }
           
            $conn->close();
            ?>
          
          
               
            </tbody>
        </table>
    </div>
   </div>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>Team Members</h4>
            <ul>
              <li><a href="#">Parbat Baniya</a></li>
              <li><a href="#">Shreya Maharjan</a></li>
              <li><a href="#">Johnny Maharjan</a></li>
              <li><a href="#">Shreejita Regmi</a></li>
              <li><a href="#">Sujan Adhikari</a></li>
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