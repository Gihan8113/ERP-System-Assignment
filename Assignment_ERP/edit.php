<?php 
include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact_no = $_POST['contact_no'];
    $district = $_POST['district'];

    $sql = "UPDATE `customer` SET 
    `id`='[value-1]',`title`='$title',`first_name`='$first_name',`last_name`='$last_name',`contact_no`='$contact_no',`district`='$district' 
    WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php?msg=Data updated successfullly");
    }
    else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <!-- Font Awasome -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <title>ERP System</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color: #00ff5573;">
        ERP System
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3> Edit Customer Information </h3>
            <p class="text-muted"> Click update after changing any Information</p>
        </div>

        <?php 
        $sql = "SELECT * FROM `customer` WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">

            <div class="form-group mb-3">
                    <label> Title: </label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="title"
                    id="Mr" value="Mr">
                    <label for="Mr" class="form-input-label"> Mr </label>

                    &nbsp;
                    <input type="radio" class="form-check-input" name="title"
                    id="Mrs" value="Mrs">
                    <label for="Mrs" class="form-input-label"> Mrs </label>

                    &nbsp;
                    <input type="radio" class="form-check-input" name="title"
                    id="Miss" value="Miss">
                    <label for="Miss" class="form-input-label"> Miss </label>

                    &nbsp;
                    <input type="radio" class="form-check-input" name="title"
                    id="Dr" value="Dr">
                    <label for="Dr" class="form-input-label"> Dr </label>

            </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label"> First Name:</label>
                        <input type="text" class="form-control" name="first_name"
                        placeholder="Gihan">
                    </div>

                    <div class="col">
                        <label class="form-label"> Last Name:</label>
                        <input type="text" class="form-control" name="last_name"
                        placeholder="Nayanajith">
                    </div>  
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label"> Contact Number:</label>
                        <input type="text" class="form-control" name="contact_no"
                        placeholder="07784578953">
                    </div>

                    <div class="col">
                        <label class="form-label"> District:</label>
                        <input type="text" class="form-control" name="district"
                        placeholder="colombo">
                </div>  
            </div>
                

                <div>
                    <button type="submit" class="btn btn-success" 
                    name="submit"> Update </button>
                    <a href="index.php" class="btn btn-danger"> Cancel </a>
                </div>
            </form>    
        </div>
    </div>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
    
</body>
</html>