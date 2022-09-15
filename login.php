<?php require __DIR__ . '/data/autoload.php';

$loginpage = true;

include './partials/header.php';
session_unset();
session_destroy();
if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location:./login.php");
        exit();
    } else if ($username === "ssbuilder" && password_verify($password, '$2y$10$dtHOFhXrzv59BlaTdLWVnu8Apd9HlxSLnVno47k/w3cLvObCCJEW6')) {
        session_start();
        $_SESSION['uid'] = $username."$$";
        header("Location:./admin.php");
        exit();
    } else {
        header("Location:./login.php");
        exit();
    }
}

?>
<div class="mt-5 d-flex align-items-end">
    <div class="p-5 my-5 mx-auto w-25 border border-primary rounded border-1">
        <h2 class="mb-4">Log In</h2>
        <form method="POST" autocomplete="off">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1">Username</label>
                <input type="text" name="username" id="form1Example1" placeholder="joe..." class="form-control" required />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2">Password</label>
                <input name="password" type="password" id="form1Example2" placeholder="password..." class="form-control" required />

            </div>

            <!-- 2 column grid layout for inline styling -->
            <!--<div class="row mb-4">
                <div class="col d-flex ">
                    <!-- Checkbox -->
            <!--<div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                        <label class="form-check-label" for="form1Example3"> Remember me </label>
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" name="login_submit" class="btn btn-primary btn-block">Log in</button>
        </form>
    </div>
</div>