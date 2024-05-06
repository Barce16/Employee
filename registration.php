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
    </div>
    
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
        
                <div class="wrapper">
                <div class="card-header" style="text-align : center;">Register Now !!!</div>
                <br>
                
                    

                  
                    <div class="col-md-4">
                        <label>Complete Name : <b class="text-danger">*</b></label>
                        <input name="Complete_Name" required type="text" placeholder="Your Complete Name here..."
                            class="form-control mt-2">
                    </div>

                    <br>

                    
                    <div class="col-md-4">
                        <label>Gmail : <b class="text-danger"></b></label>
                        <input name="Gmail" required type="email" placeholder="Ex.Employee@gmail.com..."
                            class="form-control mt-2">
                    </div>

                    <br>
                    <div class="row">
             
                    <div class="col-md-2">
                        <label>Age :<b class="text-danger">*</b></label>
                        <input name="Age" required type="number" placeholder="How old are you?"
                            class="form-control mt-2">
                    </div>
                    

                    <br>

    
                    <div class="col-md-2 ">
                        <label>Gender :<b class="text-danger">*</b></label>
                        <select name="Gender" required class="form-control mt-2">
                            <option value="" disabled selected>--SELECT GENDER--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                  

                    <br>

                    <div class="row">
                    <div class="col-md-2 ">
                        <label>Contact Number :<b class="text-danger">*</b></label>
                        <input name="Contact" required type="text" placeholder="Your Contact Number "
                            class="form-control mt-2 ">
                    </div>
                

                    <br>

                    
                    <div class="col-md-2">
                        <label>Birth date :<b class="text-danger">*</b> </label>
                        <input name="Birth_date" required type="date" placeholder="Birthday"
                            class="form-control mt-2">
                    </div>
                    </div>

                    <br>
                    <div class="row">
                    <div class="col-md-2">
                        <label>status :<b class="text-danger">*</b></label>
                        <select name="Status" required class="form-control mt-2">
                            <option value="" disabled selected>--SELECT GENDER--</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                    
                    <br>

                     <div class="col-md-2">
                        <label>Birth Place <b class="text-danger">*</b></label>
                        <input name="birth_place" required type="text" placeholder="place of born"
                            class="form-control mt-2">
                    </div>
                    </div>

                    <br>

                    
                    <div class="col-md-4">
                        <label>Crete Password : <b class="text-danger"></b></label>
                        <input name="Password" required type="Password" placeholder="Create Your Password"
                            class="form-control mt-2">
                    </div>
                   

                

       
                <div class="card-footer">
                    <button class="btn btn-success">
                        Register Now
                    </button>

                </div>
                <div class="register_link">
                <p>Already have Account <a href="./registration.php" >Signin</a></p>
                </div>
            </div>
            </div>

</body>
<!-- jquery -->
<script src="/assets/js/jquery.js"></script>
<!-- jquery -->

</html>