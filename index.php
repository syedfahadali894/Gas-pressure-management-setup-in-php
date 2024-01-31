<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYmFF+ckl4G5EQu7ePQmMVAxhM" crossorigin="anonymous">
    <title>Centered Form</title>
    <!-- Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    form {
        width: 22rem;
    }
</style>
<?php

function printSheet($input) {
    if ($input >= 0 && $input <= 100) {
        header("Location:viewpage/low.php") ;
    } elseif ($input > 100 && $input <= 300) {
        header("Location:viewpage/medium.php") ;
    } elseif ($input > 300 && $input <= 500) {
        header("Location:viewpage/high.php") ;
    } else {
        header("Location:Error.php");
    }
}

if (isset($_POST['submit'])) {
    // Assuming the form is submitted via POST
    $inputValue = isset($_POST['value']) ? intval($_POST['value']) : 0;

    // Call the printSheet function and get the result
    $result = printSheet($inputValue);

    // Display the result
    echo $result;
}

?>

<body>
    <form method="post">
        <!-- Value input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="number" name="value" id="form5Example1" class="form-control" />
            
        </div>
        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" name="submit" class="btn btn-secondary btn-block mb-4">Submit</button>
    </form>
</body>



</body>
<!-- Bootstrap 5 CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8/J+K64E5LO6ENXeN9aSX5pdSf58GEFcfF5+pkZgFfFp2SFXKvn8WbFX5E9a" crossorigin="anonymous"></script>
</html>