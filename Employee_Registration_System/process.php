<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            margin: 0;
            padding: 30px 15px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background-color: #ffffff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #1f3c88;
            margin-top: 0;
        }
        .error-box {
            background-color: #fdecea;
            border: 1px solid #f5c2c0;
            color: #a12622;
            padding: 12px 18px;
            border-radius: 6px;
        }
        .success-box {
            background-color: #e8f6ec;
            border: 1px solid #b7e1c1;
            color: #1e6b35;
            padding: 12px 18px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }
        th, td {
            border: 1px solid #c8d3e6;
            padding: 9px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f5fa;
            width: 45%;
        }
        .section-row th {
            background-color: #1f3c88;
            color: #ffffff;
            text-align: center;
        }
        .back-link {
            display: inline-block;
            margin-top: 10px;
            padding: 9px 20px;
            background-color: #1f3c88;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="container">

<?php
// Check that the user came here by pressing the Submit button
if (isset($_POST['submit'])) {
    $empName = "";
    if (isset($_POST['emp_name'])) {
        $empName = $_POST['emp_name'];
    }

    $empId = "";
    if (isset($_POST['emp_id'])) {
        $empId = $_POST['emp_id'];
    }

    $gender = "";
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    }

    $department = "";
    if (isset($_POST['department'])) {
        $department = $_POST['department'];
    }

    $employmentType = "";
    if (isset($_POST['employment_type'])) {
        $employmentType = $_POST['employment_type'];
    }

    $basicSalary = "";
    if (isset($_POST['basic_salary'])) {
        $basicSalary = $_POST['basic_salary'];
    }

    $allowance = "";
    if (isset($_POST['allowance'])) {
        $allowance = $_POST['allowance'];
    }

    $deduction = "";
    if (isset($_POST['deduction'])) {
        $deduction = $_POST['deduction'];
    }

    $years = "";
    if (isset($_POST['years'])) {
        $years = $_POST['years'];
    }

    $errors = "";

    if (empty($empName)) {
        $errors .= "<li>Employee Full Name is required.</li>";
    }
    if (empty($empId)) {
        $errors .= "<li>Employee ID is required.</li>";
    }

    // Rule 2: Gender, Department and Employment Type must be selected
    if (empty($gender)) {
        $errors .= "<li>Please select a Gender.</li>";
    }
    if (empty($department)) {
        $errors .= "<li>Please select a Department.</li>";
    }
    if (empty($employmentType)) {
        $errors .= "<li>Please select an Employment Type.</li>";
    }

    // Rule 3: Basic Salary must be greater than zero
    if ($basicSalary == "") {
        $errors .= "<li>Basic Salary is required.</li>";
    } elseif ($basicSalary <= 0) {
        $errors .= "<li>Basic Salary must be greater than zero.</li>";
    }

    // Rule 4: Allowance cannot be negative (zero is valid).
    // empty() is not used here because empty("0") is true.
    if ($allowance == "") {
        $errors .= "<li>Allowance is required (enter 0 if none).</li>";
    } elseif ($allowance < 0) {
        $errors .= "<li>Allowance cannot be negative.</li>";
    }

    // Rule 4: Deduction cannot be negative (zero is valid)
    if ($deduction == "") {
        $errors .= "<li>Deduction is required (enter 0 if none).</li>";
    } elseif ($deduction < 0) {
        $errors .= "<li>Deduction cannot be negative.</li>";
    }

    // Rules 4 and 5: Years of Service cannot be negative
    // and must be a whole number (zero is valid)
    if ($years == "") {
        $errors .= "<li>Years of Service is required (enter 0 if none).</li>";
    } elseif ($years < 0) {
        $errors .= "<li>Years of Service cannot be negative.</li>";
    } elseif ($years != (int)$years) {
        $errors .= "<li>Years of Service must be a whole number.</li>";
    }

    // Rule 7: An employee document must be selected
    if (empty($_FILES['document']['name'])) {
        $errors .= "<li>Please select an employee document to upload.</li>";
    }




    if ($errors == "") {
        $grossSalary         = calculateGrossSalary($basicSalary, $allowance);
        $bonus               = calculateBonus($basicSalary);
        $serviceBenefit      = calculateServiceBenefit($basicSalary, $years);
        $employmentAllowance = calculateEmploymentAllowance($basicSalary, $employmentType);
        $totalBenefits       = calculateTotalBenefits($bonus, $serviceBenefit, $employmentAllowance);

        // Rule 6: Deduction cannot exceed Gross Salary plus Total Benefits
        if ($deduction > $grossSalary + $totalBenefits) {
            $errors .= "<li>Deduction cannot be more than Gross Salary plus Total Benefits ($"
                     . ($grossSalary + $totalBenefits) . ").</li>";
        } else {
            $netSalary    = calculateNetSalary($grossSalary, $totalBenefits, $deduction);
            $salaryStatus = checkSalaryStatus($netSalary);
            $annualSalary = calculateAnnualSalary($netSalary); 
        }
    }



    $uploadStatus = "";
    $uploaded = false;

    if ($errors == "") {
        // Retrieve the file information using $_FILES
        $fileName = $_FILES['document']['name'];
        $fileSize = $_FILES['document']['size'];
        $fileType = $_FILES['document']['type'];
        $fileTmp  = $_FILES['document']['tmp_name'];

        // Destination path inside the uploads folder
        $destination = "uploads/" . $fileName;

        // Maximum allowed size: 2 MB
        $maxSize = 2 * 1024 * 1024;

        if ($fileSize > $maxSize) {
            // Reject documents larger than 2 MB
            $errors .= "<li>Upload failed: the file " . $fileName
                     . " is too big. Maximum size is 2 MB.</li>";
        } elseif (file_exists($destination)) {
            // Do not overwrite a file with the same name
            $errors .= "<li>Upload failed: a file named " . $fileName
                     . " already exists. Please rename your file and try again.</li>";
        } elseif (move_uploaded_file($fileTmp, $destination)) {
            // Save the file from the temporary folder to the uploads folder
            $uploaded = true;
            $uploadStatus = "Uploaded Successfully";
        } else {
            $errors .= "<li>Upload failed: the document could not be saved. "
                     . "Make sure the uploads folder exists.</li>";
        }
    }


    // ------------------------------
    if ($errors != "") {
        // Validation or upload failed: show all error messages
        echo "<h2>Registration Failed</h2>";
        echo "<div class='error-box'>";
        echo "<strong>Please correct the following errors:</strong>";
        echo "<ul>" . $errors . "</ul>";
        echo "</div>";
    } elseif ($uploaded) {
        // Everything passed: show the results table
        echo "<h2>Employee Registration Result</h2>";
        echo "<div class='success-box'>Employee registered and document "
           . $fileName . " uploaded successfully.</div>";
?>
        <table>
            <!-- Employee information -->
            <tr class="section-row"><th colspan="2">Employee Information</th></tr>
            <tr><th>Employee Name</th><td><?php echo $empName; ?></td></tr>
            <tr><th>Employee ID</th><td><?php echo $empId; ?></td></tr>
            <tr><th>Gender</th><td><?php echo $gender; ?></td></tr>
            <tr><th>Department</th><td><?php echo $department; ?></td></tr>
            <tr><th>Employment Type</th><td><?php echo $employmentType; ?></td></tr>
            <tr><th>Years of Service</th><td><?php echo $years; ?></td></tr>

            <!-- Salary information -->
            <tr class="section-row"><th colspan="2">Salary Information</th></tr>
            <tr><th>Basic Salary</th><td>$<?php echo $basicSalary; ?></td></tr>
            <tr><th>Allowance</th><td>$<?php echo $allowance; ?></td></tr>
            <tr><th>Gross Salary</th><td>$<?php echo $grossSalary; ?></td></tr>
            <tr><th>Bonus</th><td>$<?php echo $bonus; ?></td></tr>
            <tr><th>Service Benefit</th><td>$<?php echo $serviceBenefit; ?></td></tr>
            <tr><th>Employment Allowance</th><td>$<?php echo $employmentAllowance; ?></td></tr>
            <tr><th>Total Benefits</th><td>$<?php echo $totalBenefits; ?></td></tr>
            <tr><th>Deduction</th><td>$<?php echo $deduction; ?></td></tr>
            <tr><th>Net Salary</th><td>$<?php echo $netSalary; ?></td></tr>
            <tr><th>Salary Status</th><td><?php echo $salaryStatus; ?></td></tr>
            <tr><th>Annual Salary</th><td>$<?php echo $annualSalary; ?></td></tr>

            <!-- Uploaded document information -->
            <tr class="section-row"><th colspan="2">Uploaded Document</th></tr>
            <tr><th>Document Name</th><td><?php echo $fileName; ?></td></tr>
            <tr><th>Document Type</th><td><?php echo $fileType; ?></td></tr>
            <tr><th>Document Size</th><td><?php echo $fileSize; ?> bytes</td></tr>
            <tr><th>Upload Status</th><td><?php echo $uploadStatus; ?></td></tr>
        </table>
<?php
    }

} else {
    // The page was opened without submitting the form
    echo "<h2>No Data Submitted</h2>";
    echo "<div class='error-box'>Please fill in the registration form first.</div>";
}
?>

    <!-- Link back to the form -->
    <a class="back-link" href="index.html">Back to Registration Form</a>

</div>
</body>
</html>