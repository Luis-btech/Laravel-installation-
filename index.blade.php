<?php
// Database connection details
$servername = "localhost"; // or your server address
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "mydb"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Query to select data from the users table
$sql = "SELECT fullname,
phone,
address,
email_address,
tertiary_education,
tertiary_address,
tertiary_year,
secondary_education,
secondary_address,
secondary_year,
junior_education,
junior_address,
junior_year,
primary_education,
primary_address,
primary_year,
age,
birth_date,
birth_place,
gender,
civil_status,
father_name,
mother_name FROM information;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


$fullname = '';
$phone = '';
$address = '';
$email_address = '';
$tertiary_education = '';
$tertiary_address = '';
$tertiary_year = '';
$secondary_education = '';
$secondary_address = '';
$secondary_year = '';
$junior_education = '';
$junior_address = '';
$junior_year = '';
$primary_education = '';
$primary_address = '';
$primary_year = '';
$age = '';
$birth_date = '';
$birth_place = '';
$gender = '';
$civil_status = '';
$father_name = '';
$mother_name = '';

// Check if there are results
if ($resultCheck > 0) {
    // Loop through each row and append to the output string
    while($row = mysqli_fetch_assoc($result)) {
        $fullname = $row['fullname'];
        $phone = $row['phone'];
        $address = $row['address'];
        $email_address = $row['email_address'];
        $tertiary_education = $row['tertiary_education'];
        $tertiary_address = $row['tertiary_address'];
        $tertiary_year = $row['tertiary_year'];
        $secondary_education = $row['secondary_education'];
        $secondary_address = $row['secondary_address'];
        $secondary_year = $row['secondary_year'];
        $junior_education = $row['junior_education'];
        $junior_address = $row['junior_address'];
        $junior_year = $row['junior_year'];
        $primary_education = $row['primary_education'];
        $primary_address = $row['primary_address'];
        $primary_year = $row['primary_year'];
        $age = $row['age'];
        $birth_date = $row['birth_date'];
        $birth_place = $row['birth_place']; 
        $gender = $row['gender'];
        $civil_status = $row['civil_status'];
        $father_name = $row['father_name'];
        $mother_name = $row['mother_name'];
    }
} else {
    $fullname = "No results found.";
}

// close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>

    <style>
        .page {
            width: 210mm;
            /* 210mm for A4 width */
            height: 297mm;
            /* 297mm for A4 height */
            border: 1px solid black;
            /* Optional: to visualize the container */
            margin: 30px auto;
            /* Center align */
            padding: 30px;
            /* Optional: add some padding */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* Optional: add shadow */
            background-color: #fff;
        }

        /* Row container */
        .top-row {
            display: flex;
            /* Use flexbox for row layout */
            height: 20%;
            /* Optional: make divs stretch vertically */
        }

        /* First div with 70% width */
        .info-div {
            width: 100%;
            height: 192px;
            /* 70% of the parent container */
            background-color: #fff;
            /* Optional: light blue background */
            padding: 10px;
            /* Optional: internal padding */
            box-sizing: border-box;
            /* Include padding and border in width calculation */
        }

        /* Second div with remaining 30% width */
        .picture-div {
            width: 250px;
            height: 192px;
            /* Remaining 30% */
            background-color: white;
            /* Optional: light coral background */
            border: 2px solid black;
            /* Optional: internal padding */
            box-sizing: border-box;
            /* Include padding and border in width calculation */
        }

        .resume-photo {
            width: 100%;
            /* Take full width of the container */
            height: 100%;
            /* Take full height of the container */
            object-fit: cover;
            /* Scale the image to cover the container without stretching */
        }

        .name {
            font-size: 18px;
            /* Larger font size for name */
            font-weight: bold;
            /* Bold text */
            margin-bottom: 0px;
            text-transform: uppercase;
        }

        .contact-item {
            padding: 5px;
            font-size: 18px;
            /* Optional: padding for spacing */
        }

        .divider {
            height: 2px;
            width: 210mm;
            margin: 0px 10px 5px 10px;
            background-color: black;
        }

        ul {
            margin-left: 30px;
            list-style-type: none;
            font-size: 20px,
                /* Circle bullets */
        }

        .bulleted-type {
            position: relative;
            /* Positioning for pseudo-element */
            padding-left: 25px;
            /* Space for custom bullet */
            line-height: 1.5;
            /* Adjust line height for vertical alignment */
        }

        .bulleted-type::before {
            display: block;
            /* Keep it as block */
            width: 12px;
            /* Bullet width */
            height: 12px;
            /* Bullet height */
            border-radius: 100%;
            /* Make it circular */
            background-color: #000000;
            /* Bullet color */
            position: absolute;
            /* Position it absolutely */
            left: 0;
            /* Align to the left */
            top: 50%;
            /* Position at the vertical center */
            transform: translateY(-50%);
            /* Adjust for vertical centering */
            margin-right: 8px;
            /* Space between bullet and text */
            content: '';
            /* Use empty content */
        }

        li {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .body-text {
            margin-left: 20px;
            font-size: 14px;
        }

        .personal-info-item-row {
            display: flex;
        }

        .personal-info-item {
            width: 105mm;
        }
    </style>
</head>

<body>


    <div class="page">
        <div class="top-row">
            <div class="info-div">
                <div class="name"> <?php echo $fullname; ?></div>
                <div style="margin: 25px;"> </div>
                <div class="contact-item">Address <?php echo $address; ?></div>
                <div class="contact-item">Contact No: <?php echo $phone; ?></div>
                <div class="contact-item">Email Address: <?php echo $email_address; ?></div>
            </div>
            <div class="picture-div">
                <img src="assets/edmark.jpg" class="resume-photo">
            </div>
        </div>
        <div class="divider"></div>
        <div style="margin: 30px;"> </div>
        <div class="name">Career Objectives</div>
        <ul>
            <li class="bulleted-type">
                <p class="body-text">I am open to constructive criticism to grow professionally and further develop my skills, knowledge and experience, enabling me to face and overcome my challenges of today's evolving work environment.</p>
            </li>
        </ul>
        <div class="name">Educational Attainment</div>
        <ul>
            <li class="bulleted-type">
                <p class="name">TERTIARY EDUCATION</p>
            </li>
            <li class="body-text">
            <?php echo $tertiary_education; ?>
            </li>
            <li class="body-text">
            <?php echo $tertiary_address; ?>
            </li>
            <li class="body-text">
            <?php echo $tertiary_year; ?>
            </li>
            <li class="bulleted-type">
                <P class="name">SECONDARY EDUCATION</P>
            </li>
            <li class="body-text">
            <?php echo $secondary_education; ?>
            </li>
            <li class="body-text">
            <?php echo $secondary_address; ?>
            </li>
            <li class="body-text">
            <?php echo $secondary_year; ?>
            </li>
            <li class="bulleted-type">
                <p class="name"> JUNIOR HIGH SCHOOL EDUCATION</p>
            </li>
            <li class="body-text">
            <?php echo $junior_education; ?>
            </li>
            <li class="body-text">
            <?php echo $junior_address; ?>
            </li>
            <li class="body-text">
            <?php echo $junior_year; ?>
            </li>
            <li class="bulleted-type">
                <p class="name">Primary Education</p>
            </li>
            <li class="body-text">
            <?php echo $primary_education; ?>
            </li>
            <li class="body-text">
            <?php echo $primary_address; ?>
            </li>
            <li class="body-text">
            <?php echo $primary_year; ?>
            </li>

        </ul>






        <P class="name">Personal information</P>
        <div style="margin: 25px;"> </div>
        <div class="personal-info-item-row">
            <div class="personal-info-item">Age</div>
            <div class="personal-info-item">:  <?php echo $age; ?> years old</div>
        </div>

        <div class="personal-info-item-row">
            <div class="personal-info-item">Birth Date</div>
            <div class="personal-info-item">:  <?php echo $birth_date; ?></div>
        </div>

        <div class="personal-info-item-row">
            <div class="personal-info-item">Birth Place</div>
            <div class="personal-info-item">:  <?php echo $birth_place; ?></div>
        </div>

        <div class="personal-info-item-row">
            <div class="personal-info-item">Gender</div>
            <div class="personal-info-item">:  <?php echo $gender; ?></div>
        </div>

        <div class="personal-info-item-row">
            <div class="personal-info-item">Civil Status</div>
            <div class="personal-info-item">:  <?php echo $civil_status; ?></div>
        </div>

        <div class="personal-info-item-row">
            <div class="personal-info-item">Father's Name</div>
            <div class="personal-info-item">:  <?php echo $father_name; ?></div>
        </div>

        <div class="personal-info-item-row">
            <div class="personal-info-item">Mother's Name</div>
            <div class="personal-info-item">:  <?php echo $mother_name; ?></div>
        </div>

        <div style="margin: 40px;"> </div>
        <div style="text-align: center;">
            <i>I hereby that all the above information is true and correct to the best of my knowledge and belief.</i>
        </div>
        <div style="margin: 40px;"> </div>
        <div class="personal-info-item-row">
            <div style="width: 120mm;"></div>
            <div style="width: 80mm; display: flex; 
            flex-direction: column;
            justify-content: center;
            align-items: center; ">
                <div class="name">
                <?php echo $fullname; ?>
                </div>
                <div style="margin: 5px;"> </div>
                <div style="height: 2px; width: 80mm; background-color: black;"> </div>
                <div style="font-size: 18; color: black; text-transform: uppercase;">
                    applicant
                </div>
            </div>
        </div>

    </div>

</body>

</html>