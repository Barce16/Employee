<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link -->
    <script src="./assets/js/search.js"> </script>
    <!-- link -->

    <link rel="stylesheet" href="registration.css">
    <!-- link for Bootstrap -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- link for Bootstrap -->


    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>

</head>

<body>

    <div class="container-fluid mb-5">
    
        <form action="./model/save.php/" method="POST">

            <div class="card-body">


                 <?php
                if (isset($_GET { 'success'})){
                    ?>
                    
                        <div class="alert alert-success">
                            <b>Successfully Registered : </b>Congrats !!!.. Thank You!!!
                        </div>
                        
                        <hr>
                        <?php
                } elseif (isset($_GET { 'invalid'})) {
                    ?>
                        <div class="alert alert-danger">
                            <b>Existed ID </b>. please try another ID ...Thank You!!
                        </div>
                        <hr>
                        <?php
                }
                ?> 
       
                    <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Registration Form</h3>
                </div>
                <div class="card-body">
                  

                        <div class="form-group">
                            <label for="Complete_Name">Complete Name: <span class="text-danger">*</span></label>
                            <input id="Complete_Name" name="Complete_Name" required type="text" placeholder="Your Complete Name here..." class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Gmail">Gmail:</label>
                            <input id="Gmail" name="Gmail" required type="email" placeholder="Ex.Employee@gmail.com..." class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Age">Age: <span class="text-danger">*</span></label>
                                <input id="Age" name="Age" required type="number" placeholder="How old are you?" class="form-control">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="Gender">Gender: <span class="text-danger">*</span></label>
                                <select id="Gender" name="Gender" required class="form-control">
                                    <option value="" disabled selected>--SELECT GENDER--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Contact">Contact Number: <span class="text-danger">*</span></label>
                            <input id="Contact" name="Contact" required type="text" placeholder="Your Contact Number" class="form-control">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Birth_date">Birth date: <span class="text-danger">*</span></label>
                                <input id="Birth_date" name="Birth_date" required type="date" placeholder="Birthday" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="Status">Status: <span class="text-danger">*</span></label>
                                <select id="Status" name="Status" required class="form-control">
                                    <option value="" disabled selected>--SELECT STATUS--</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Birth_place">Birth Place: <span class="text-danger">*</span></label>
                            <input id="Birth_place" name="Birth_place" required type="text" placeholder="Place of born" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Password">Create Password: <span class="text-danger">*</span></label>
                            <input id="Password" name="Password" required type="password" placeholder="Create Your Password" class="form-control">
                        </div>

                        <?php
                include "./config/database.php";

                ?>
                    <!-- Address -->
                    <div class="row mt-3">
                    <div class="col-md-12">
                    <hr>
                    </div>
                    <div class="col-md-6">
                        <label>Region :<b class="text-danger">*</b></label>
                        <select name="inp_region" id="inp_region" onchange="display_province(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT REGION--</option>
                    <?php
                     $sql = "SELECT * FROM ph_region";
                     $result = $conn->query($sql);

                     if ($result->num_rows > 0) {
                 // output data of each row
                     while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?= $row["regCode"] ?>"><?= $row ["regDesc"] ?></option>
                    <?php
                  }
                     } else {
                     echo "0 results";
                     }
                     $conn->close();
                     ?>   
                    </select>

                    </div>
                    <div class="col-md-6">
                        <label>PROVINCE : <b class="text-danger">*</b></label>
                        <select name="inp_province" id="inp_province" onchange="display_citymun(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT PROVINCE--</option>
                    </select>

                    </div>
                    <div class="col-md-6">
                        <label>Municipality : <b class="text-danger">*</b></label>
                        <select name="inp_citymun" id="inp_citymun" onchange="display_brgy(this.value)" required class="form-control mt-2">
                        <option value="" disabled selected >--SELECT MUNICIPALITY--</option>
                    </select>

                    </div>
                    <div class="col-md-6">
                        <label>Postal Code : <b class="text-danger">*</b></label>
                        <input type="number" name="inp_postalcode" class="form-control mt-2" placeholder="Postal Code here..">
                    </div>
                </div>
                <br>
                <br>
               
                    <div class="text-center">
                            <button type="submit" class="btn btn-success">Register Now</button>
                        </div>
                        <br>

                <div class="card-footer">
                    <p class="text-center">Already have an account? <a href="./index.php">Sign in</a></p>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>

        
        

</body>
<script>
    function display_province(regCode){

    $.ajax({

    url: './model/address.php', 
    type: 'POST', 
    data: { 'type' : 'region', 'past_Code' : regCode }, 
    success: function(response){
        $('#inp_province').html(response); 
    }
    });
    }

    function display_citymun(provCode){

    $.ajax({

    url: './model/address.php', 
    type: 'POST', 
    data: { 'type' : 'province', 'past_Code' : provCode }, 
    success: function(response){
        $('#inp_citymun').html(response); 
    }
    });
    }

    function display_brgy(citymunCode){

$.ajax({

url: './model/address.php', 
type: 'POST', 
data: { 'type' : 'citymun', 'past_Code' : citymunCode }, 
success: function(response){
    $('#inp_brgy').html(response); 
}
});
}

</script>
<!-- jquery -->
<script src="./assets/js/jquery.js"></script>
<!-- jquery -->

</html>