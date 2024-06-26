<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link -->
    <script src="./assets/js/search.js"> </script>
   
    <!-- link -->

    <!-- link for Bootstrap -->
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- link for Bootstrap -->
   
    <!-- backgournd -->
    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
    <!-- backgournd -->
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- image -->
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/handshake.png" height="50">
            </a>
            <!-- image -->

        <!-- buttons -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- buttons -->

            <!-- Navigation bars front -->
            <div class="collapse navbar-collapse" id="mynavbar">
                
                <strong>
                <span class="navbar-text col text-center">Welcome to Employee Application System</span>
                <form class="d-flex">
                    <input onkeyup="search(this.value)" class="form-control me-2" type="text"
                        placeholder="Search for vacant parking area">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
                </strong>
            </div>
            
            <!-- Navigation bars buttom-->
        </div>
    </nav>
    <!-- For Text/Typography Front -->
    <div class="container-fluid mb-5">
        <p class="h1 mt-2">Employee Application System</p>
        <p class="mt-2">You can view Employees information</p>
        <div class="card mt-2">
            <div class="card-header" style="text-align : center;">List of clients</div>
            <div class="card-body"> <strong> </strong>
                <table class="table table-bordered table-hover" ;>
                    <thead>
                        <tr>
                            <th width="100" style="text-align : center;">Employee Gmail</th>
                            <th style="text-align: left; padding-left: 10px">Complete Name</th>
                            <th width="130">Details</th>
                        </tr>
                        <div class="modal" id="show-details">
                        
                            <div class="modal-dialog">
                                <div class="modal-content">




                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Employee Details</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <!-- Modal body -->


                                    
                                    <div class="modal-body"  script src="./assets/js/login.js"> </script>
                                        
                                    

                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </thead>
                    <tbody id="results">
            </div>
        </div>
        <div style="display: none;">
            </tbody>
            </table>
        </div>
        <div 
         class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/handshake.png" height="50" 
                
                class="card-footer" >This are all the List of Employee </div>
        
                <?php
        include("./model/searchEngine.php");
        ?>
        <script>
            
        </script>

    </div>
    <!-- For Text/Typography Buttom-->

</body>
<!-- jquery -->
<script src="./assets/js/jquery.js"></script>
<!-- jquery -->

</html>