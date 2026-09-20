
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

<form method="POST">

    Name
    <input type="text" name="name">
    <br><br>

    Email
    <input type="email" name="email">
    <br><br>

    Gender
    Male
    <input type="radio" name="gender" value="Male">

    Female
    <input type="radio" name="gender" value="Female">

    Other
    <input type="radio" name="gender" value="Other">
    <br><br>

    PHP
    <input type="checkbox" name="php" value="PHP">
    <br><br>

    Qualifications
    <select name="qualification">
        <option value="">Select qualification</option>
        <option value="School">School</option>
        <option value="UG">UG</option>
        <option value="PG">PG</option>
    </select>
    <br><br>

    Experience
    <select name="experience">
        <option value="">Select experience</option>
        <option value="1">1 year</option>
        <option value="2">2 years</option>
        <option value="3+">3+ years</option>
    </select>
    <br><br>

    <button type="submit">Submit</button>

</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";

   
    if (isset($_POST["php"]))
    {
        $php = $_POST["php"];
       
    }
    else
        {
            $php="not selected";
        }

   
    if (isset($_POST["gender"]))
    {
        $gender = $_POST["gender"];
        echo "Selected Gender: " . $gender . "<br>";
    }
    else
    {
        echo "<script>alert('Select a gender')</script>";
    }

   
    if (isset($_POST["qualification"]) && $_POST["qualification"] != "")
    {
        $qualification = $_POST["qualification"];
        echo "Selected Qualification: " . $qualification . "<br>";
    }
    else
    {
        echo "<script>alert('Select a qualification')</script>";
    }

    
    if (isset($_POST["experience"]) && $_POST["experience"] != "")
    {
        $experience = $_POST["experience"];
        echo "Selected Experience: " . $experience . "<br>";
    }
    else
    {
        echo "<script>alert('Select experience')</script>";
    }
}

?>

</body>
</html>

