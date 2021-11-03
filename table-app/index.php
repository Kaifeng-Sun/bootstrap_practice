<html>
<head>
    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>2 Tables</title>
    <!-- <script>
        var data = [[1,2],[2,3]]
        localStorage.setItem("myData", JSON.stringify(data));
    </script> -->
    <!-- <script src="./public/js/table1.js"></script> -->
    <?php
        include './application/models/origin.php';
    ?>
</head>

<body>
    <header>
        <!-- navigation bar/menu with dropdown page,menu -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a href="#" class="navbar-brand">Bootstrap</a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navmenu"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#learn" class="nav-link">What</a>
                        </li>
                        <li class="nav-item">
                            <a href="#question" class="nav-link">Questions</a>
                        </li>
                        <li class="nav-item">
                            <a href="#instructors" class="nav-link">Instructors</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- table1 for data display -->
    <table class="table table-success table-striped" id="table1">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Second</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="tbody1">
            
                <!-- // $data = array(
                //     1 => ["first"=>1, "second"=>2],
                //     2 => ["first"=>2, "second"=>3]
                // );
                // echo 'var data = localStorage.data0;';
                // $data = data
                
                // foreach ($data as $key => $value){
                //     echo '<tr>';
                //     echo '<th scope="row">'.$key.'</th>';
                //     foreach($value as $k => $v){
                //         echo '<td>'.$v.'</td>';
                //     }
                //     echo '<td><button type="button" class="btn btn-danger">Delete</button></td>';
                //     echo '</tr>';
                // } -->
                       
        </tbody>
    </table>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add new pair
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <div class="mb-3">
                    <label for="firstInput" class="form-label">First Number</label>
                    <input type="number" class="form-control" id="firstNum">
                </div>

                <div class="mb-3">
                    <label for="secondInput" class="form-label">Second number</label>
                    <input type="number" class="form-control" id="secondNum">
                </div>

                <button type="submit" class="btn btn-primary" id="addData">Submit</button>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
    </div>
    <!-- table2 for calculation result display -->
    <table class="table table-success table-striped" id="table2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sum</th>
                <th scope="col">Difference</th>
                <th scope="col">Product</th>
                <th scope="col">Quotient</th>
            </tr>
        </thead>
        <tbody id="tbody2"></tbody>
    </table> 
    

    <footer>

    </footer>
    <!-- <script src="node_modules/popper.js/dist/umd/popper.min.js"></script> -->
    <!-- <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
     <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>    </body>
    <script src="./public/js/addForm.js"></script>            
    <script src="./public/js/table1.js"></script>            
    <script src="./public/js/table2.js"></script>            
    <script src="./public/js/addButton.js"></script>            
    <script src="./public/js/subButton.js"></script>            
    <script src="./public/js/proButton.js"></script>            
    <script src="./public/js/divButton.js"></script>            
</html>