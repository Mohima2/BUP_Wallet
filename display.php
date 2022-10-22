<?php 

session_start();



include("connection.php");

$sql = "SELECT * FROM reg";

$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Wallet Admin Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="dashboard.css" />
  </head>
  <body>
    <!-- Navigation Bar  -->

    <nav class="custom_nav topnav d-flex justify-content-between py-2 px-5">
      <div class="topnav_list d-flex">
        <a class="active" href="#home" class="mx-3">Home</a>
        <a href="#about" class="mx-3">About Us</a>
        <a href="#contact" class="mx-3">Terms and Conditions</a>
        <a href="more" class="mx-3">More</a>
      </div>
      <div class="search-container">
        <form action="/action_page.php">
          <input type="text" placeholder="Search.." name="search" />
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </nav>

    <!-- Dashboard Part -->

    <div class="d-flex">
      <div class="dash d-flex flex-column justify-content-between">
        <div class="text-center">
          <h1 class="dashTitile px-2"><i class="fa-solid fa-bars" id="bar"></i> DASHBOARD</h1>
          <br />
          <h3 class="Item"><a href="#">Account Management</a></h3>
          
        </div>
        <div class="text-bottom mb-5 ms-5">
          <p class="botton-content"><i class="fa-solid fa-person-dress-simple"></i><a href="#">Admin Settings</a></p>
          <p class="botton-content"><i class="fa-solid fa-person-dress-simple"></i><a href="#">Sign Out</a></p>
        </div>
      </div>

      <div class="dashboard flex-grow-1">
        <div class="dash_headline d-flex bg-black pb-5">
          <img src="images/logo_bup.jpeg" alt="Bup Logo" />
          <p>E-Wallet Dashboard</p>
        </div>

        <div style="background-color: blue">
          <div class="dashboard_body container px-5 bg-white p-5 d-flex flex-column align-items-center">
            <div class="dash_list row">
            <h1>Student Information</h1>
            <table >
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Account Info</th>  
                </tr>

                <?php 
                
                while($info = $result->fetch_assoc())
                {
                ?>
                <tr>
                    <td>
                        <?php echo "{$info['username']}"; ?>
                    </td>
                    <td>
                    <?php echo "{$info['usertype']}"; ?>
                    </td>
                    <td>
                    <?php echo "{$info['email']}"; ?>
                    </td>

                </tr>
                <?php 
            }?>
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

       

    <script src="https://kit.fontawesome.com/605c1f1072.js" crossorigin="anonymous"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
