<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name       = $_POST['full_name'];
    $father_name     = $_POST['father_name'];
    $mother_name     = $_POST['mother_name'];
    $dob             = $_POST['dob'];
    $email           = $_POST['email'];
    $guardian_mobile = $_POST['guardian_mobile'];
    $address         = $_POST['address'];
    $mobile          = $_POST['mobile'];
    $technology      = $_POST['technology'];
    $exam            = $_POST['exam'];
    $passing_year    = $_POST['passing_year'];
    $group           = $_POST['group'];
    $board           = $_POST['board'];
    $roll            = $_POST['roll'];
    $reg             = $_POST['reg'];
    $gpa             = $_POST['gpa'];

    // Upload files
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $marksheet = $uploadDir . basename($_FILES['marksheet']['name']);
    $photo     = $uploadDir . basename($_FILES['photo']['name']);

    move_uploaded_file($_FILES['marksheet']['tmp_name'], $marksheet);
    move_uploaded_file($_FILES['photo']['tmp_name'], $photo);

    // Send email (optional)
    $to = "rpimanikganj@gmail.com";
    $subject = "New Admission Application - $full_name";
    $message = "New Admission Application:\n\n";
    $message .= "Name: $full_name\nFather: $father_name\nMother: $mother_name\nDOB: $dob\nEmail: $email\nGuardian Mobile: $guardian_mobile\nAddress: $address\nMobile: $mobile\nTechnology: $technology\nExam: $exam\nPassing Year: $passing_year\nGroup: $group\nBoard: $board\nRoll: $roll\nReg: $reg\nGPA: $gpa\n";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Show success message
    echo "<h2 style='text-align:center;color:green;'>✅ Application Submitted Successfully!</h2>";
    echo "<p style='text-align:center;'><a href='admission.php'>Back to Admission Form</a></p>";
}
?>
