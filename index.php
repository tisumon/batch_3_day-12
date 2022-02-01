<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/all.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li <a href="" class="nav-link">Calculator</a></li>
                <li <a href="" class="nav-link">Series</a></li>
            </ul>
        </div>
    </nav>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My Calculator</div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" required class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="second_number"required class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Select Action</label>
                                    <div class="col-md-9">
                                        <label><input type="radio"  name="operator" value="+"/> Addition </label>
                                        <label><input type="radio"  name="operator" value="-"/> subtraction </label>
                                        <label><input type="radio"  name="operator" value="*"/> Multiplication </label>
                                        <label><input type="radio"  name="operator" value="/"/> Division </label>
                                        <label><input type="radio"  name="operator" value="%"/> reminder </label
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="text" readonly value="<?php echo isset($result)? $result:''; ?>" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn-outline-success" value="submit"/>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>





<?php
//
//require_once 'vendor/autoload.php';
//USE App\classes\Calculator;
//
//$calculator = new Calculator("sumon");
//$calculator->index();






