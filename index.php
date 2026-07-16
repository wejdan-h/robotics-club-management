<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Smart Robotics Club Dashboard</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>


    <header class="hero">

        <h1>Smart Robotics Club</h1>

        <h3>Innovation • Creativity • Technology</h3>

        <p>

            Welcome to the Smart Robotics Club! Explore our community,
            discover active members, and be part of the future of innovation.

        </p>

    </header>

    <!-- About Club  -->

    <section class="card">

        <h2>About Smart Robotics Club</h2>

            <p>

                Smart Robotics Club is a student community dedicated to exploring
                Robotics, Artificial Intelligence, Arduino, Embedded Systems,
                and Smart Automation.

            </p>

            <p>

                Our mission is to encourage innovation through hands-on projects,
                technical workshops, collaborative learning, and real-world problem solving.

            </p>

    </section>

      <!-- What We Explore -->

    <section class="card">

        <h2>What We Explore</h2>


            <div class="services">

            <div class="service">

        <h3>Robotics</h3>

                <p>
                   Designing and building intelligent robotic systems.
                </p>

            </div>


        <div class="service">

            <h3>Arduino</h3>

                <p>
                    Developing smart electronic projects using Arduino boards.
                </p>

        </div>

        <div class="service">

            <h3>Artificial Intelligence</h3>

                <p>
                   Learning machine learning and AI applications.
                </p>

        </div>

        <div class="service">

            <h3>IoT & Sensors</h3>

                <p>
                    Creating connected smart devices using modern sensors.
                </p>

        </div>

        </div>

    </section>


    <div class="dashboard">

    <!-- Add Member -->

    <section class="card">

        <h2>Add New Member</h2>

            <form method="post">
            <label>Member Name</label>

            <br>

            <input
                type="text"
                name="name"
                placeholder="Enter member name"
                required>

            <br><br>

            <label>Age</label>

            <br>

            <input
                type="number"
                name="age"
                placeholder="Enter age"
                required>

            <br><br>

            <button type="submit" name="add">

                Add Member

            </button>

        </form>

    </section>


    <!-- Table -->

    <section class="card">

        <h2>Club Members</h2>

        <table id="membersTable">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Name</th>

                    <th>Age</th>

                    <th>Status</th>

                    <th>Action</th>

                </tr>

            </thead>

            <tbody>

                <?php

                    while($row = mysqli_fetch_assoc($result)){

                ?>

            <tr>

                <td><?php echo $row["id"]; ?></td>

                <td><?php echo $row["name"]; ?></td>

                <td><?php echo $row["age"]; ?></td>

                <td>

                    <?php

                        if($row["status"] == 1){

                            echo "Active";

                        }

                        else{

                            echo "Inactive";

                        }

                    ?>

                </td>

                <td>

                    <button type="button" class="toggleBtn" data-id="<?php echo $row["id"]; ?>">
                        Toggle
                    </button>

                </td>

            </tr>

            <?php

                    }

            ?>

        </tbody>


        </table>

    </section>


    </div>

     <!-- Contact -->

    <section class="card">

        <h2>Contact Us</h2>

            <p>

                roboticsclub@email.com

            </p>

            <p>

                Jazan University

            </p>

    </section>

    <footer>
        
        <p>

            © 2026 Smart Robotics Club | Developed by Wejdan Hakami

        </p>

        <p>

           <a href="https://github.com/Wejdan-H" target="_blank">GitHub</a> |

           <a href="https://www.linkedin.com/in/wejdan-hakami-28774940b" target="_blank">LinkedIn</a>

        </p>

    </footer>
    <script src="script.js"></script>
</body>
</html>