<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PDO CRUD</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <!-- 網站標題 -->
    <div class="container">
        <div class="alert alert alert-primary" role="alert">
            <h4 class="text-primary text-center">PHP PDO CRUD</h4>
        </div>
        <div class="alert alert-success text-center message" role="alert"></div>

        <!-- 匯入元素 -->
        <?php
        include_once 'form.php';
        include_once 'profile.php';
        ?>

        <div class="row mb-3">

            <!-- 按鈕樣式 -->
            <div class="col-3">

                <!-- 新增按鈕 -->
                <!-- #userModal→form.php -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal" id="addnewbtn"><i class="fa fa-file-text-o"></i> 新增資料</button>
            </div>

            <!-- 搜尋列 -->
            <div class="col-9">
                <div class="input-group input-group-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="搜尋..." id="searchinput">
                </div>
            </div>
        </div>

        <!-- 匯入元素 -->
        <?php
        include_once 'eikentable.php';
        ?>

        <nav id="pagination"></nav>
        <input type="hidden" name="currentpage" id="currentpage" value="1">
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </div>

    <!-- 載入提示 -->
    <div id="overlay" style="display: none;">
        <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
        <br>
        載入中...
    </div>
</body>

</html>