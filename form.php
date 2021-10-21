<?php
/**
 * Here we are going to present html form
 */
//echo isset($_POST['comment']) ? $_POST['comment'] :'';

echo isset($_POST['comment']) ? strip_tags($_POST['comment'],'<a><p><div>'):'';
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <title>Contact us</title>
</head>
<body>

<link type="text/css">
<div class="container">
    <div class="row"><h3>Contact us</h3></div>

    <form class="" method="post" action="submit.php">
        <label>FirstName:</label>
        <input name="firstname" type="text" class="form-control">
        <label>LastName:</label>
        <input name="lastname" type=text" class="form-control">
        <label>Email:</label>
        <input name="email" type=email" class="form-control">
        <label>Gender:</label>
        <input name="gender" type="radio" value="male" class="form-control form-radio-input">Male
        <input name="gender" type="radio" value="female" class="form-control form-radio-input">Female
        <input name="gender" type="radio" value="other" class="form-control form-radio-input">Other
        <label>Comment:</label>
        <textarea name="comment" class="form-control">
        </textarea>
        <button type="submit" class="form-control btn-primary mt-5  ">Submit</button>
    </form>

</div>

