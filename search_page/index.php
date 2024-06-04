<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="styles.css" rel="stylesheet"> -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Search Page</title>
    <style>
    
  </style>
</head>
<body>
<div>
<nav :class="{ 'transform md:transform-none': !open, 'h-full': open }" class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="../index.html">Home</a>
                <!-- <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#">Careers</a> -->
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="../index.html">Blog</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#">About Us</a>
 
            </nav>
        </div>
        


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Search for NGOs</h4>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                    <thead>
                            <tr>
                                <th>SrNo</th>
                                <th>Name</th>
                                <th>RegistrationInfo</th>
                                <th>Address</th>
                                <th>Sectors</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $con = mysqli_connect("localhost","root","","ngos");

                                if(isset($_GET['search']))
                                {
                                    $filtervalues = $_GET['search'];
                                    $query = "SELECT * FROM ngo_info WHERE CONCAT(Name,Address) LIKE '%$filtervalues%' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $items)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $items['SrNo']; ?></td>
                                                <td><?= $items['Name']; ?></td>
                                                <td><?= $items['RegistrationInfo']; ?></td>
                                                <td><?= $items['Address']; ?></td>
                                                <td><?= $items['Sectors']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5">No Record Found</td>
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
