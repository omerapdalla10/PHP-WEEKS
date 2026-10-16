<?php
$name = "";
$message = "";
$gender = "";
$result = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $submittedName = $_POST["fullname"] ?? "";
    $submittedMessage = $_POST["message"] ?? "";
    $submittedGender = $_POST["gender"] ?? "";
    $password = $_POST["password"] ?? "";

    $name = is_string($submittedName) ? trim($submittedName) : "";
    $message = is_string($submittedMessage) ? trim($submittedMessage) : "";
    $gender = is_string($submittedGender) ? $submittedGender : "";
    $password = is_string($password) ? $password : "";

    if ($name !== "" && $password !== "") {
        $result = "Thanks for registering, " . htmlspecialchars($name, ENT_QUOTES, "UTF-8") . "!";
    } else {
        $result = "Please enter your full name and password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <main class="page">
        <section class="form-card" aria-labelledby="form-title">
            <div class="card-heading">
                <h1 id="form-title">Registration Form</h1>
                <p class="intro">Please enter your information below.</p>
            </div>

            <form method="post" action="Form.php">
                <div class="field">
                    <label for="fullname">Full name</label>
                    <input
                        type="text"
                        id="fullname"
                        name="fullname"
                        placeholder="Full name"
                        value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>"
                        autocomplete="name"
                        required>
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Password"
                        autocomplete="new-password"
                        required>
                </div>

                <div class="field">
                    <label for="message">Message <span class="optional">(optional)</span></label>
                    <textarea
                        id="message"
                        name="message"
                        placeholder="Tell us a little about yourself..."
                        rows="4"><?php echo htmlspecialchars($message, ENT_QUOTES, "UTF-8"); ?></textarea>
                </div>

                <fieldset class="gender-field">
                    <legend>Gender <span class="optional">(optional)</span></legend>
                    <div class="gender-options">
                        <label class="choice" for="male">
                            <input type="radio" id="male" name="gender" value="male"<?php echo $gender === "male" ? " checked" : ""; ?>>
                            <span>Male</span>
                        </label>
                        <label class="choice" for="female">
                            <input type="radio" id="female" name="gender" value="female"<?php echo $gender === "female" ? " checked" : ""; ?>>
                            <span>Female</span>
                        </label>
                    </div>
                </fieldset>

                <div class="buttons">
                    <button type="reset" class="reset-btn">Reset</button>
                    <button type="submit" class="register-btn">Register</button>
                </div>
            </form>

            <?php if ($result !== "") { ?>
                <section class="result" role="status">
                    <h2><?php echo htmlspecialchars($result, ENT_QUOTES, "UTF-8"); ?></h2>
                    <?php if ($name !== "" && $password !== "") { ?>
                        <dl>
                            <div>
                                <dt>Full name</dt>
                                <dd><?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></dd>
                            </div>
                            <?php if ($gender !== "") { ?>
                                <div>
                                    <dt>Gender</dt>
                                    <dd><?php echo htmlspecialchars(ucfirst($gender), ENT_QUOTES, "UTF-8"); ?></dd>
                                </div>
                            <?php } ?>
                            <?php if ($message !== "") { ?>
                                <div>
                                    <dt>Message</dt>
                                    <dd><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, "UTF-8")); ?></dd>
                                </div>
                            <?php } ?>
                        </dl>
                    <?php } ?>
                </section>
            <?php } ?>
        </section>
    </main>
</body>
</html>
