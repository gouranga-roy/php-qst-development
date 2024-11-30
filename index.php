<?php
if(file_exists(__DIR__ . "/autoload.php")) {
    require_once __DIR__ . "/autoload.php";
}

/**
 * Devs form manage
 */

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["devs_form_submit"])) {
    // get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $cell = $_POST["cell"];
    $age = $_POST["age"];
    $skill = $_POST["skill"];

    if (!empty($name)) {

        store('devs', [
            "name"      => $name,
            "email"     => $email,
            "email"     => $email,
            "cell"      => $cell,
            "age"       => $age,
            "skill"     => $skill,
        ]);
        
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quire String Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header text-center mb-4">
                            <h2>Query String Development</h2>
                        </div>
                        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="cell" class="form-label">Cell</label>
                                <input type="text" class="form-control" name="cell" id="cell">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age</label>
                                <input type="text" class="form-control" name="age" id="age">
                            </div>
                            <div class="mb-3">
                                <label for="skill" class="form-label">Skill</label>
                                <input type="text" class="form-control" name="skill" id="skill">
                            </div>

                            <button type="submit" class="btn btn-primary" name="devs_form_submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>