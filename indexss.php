<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .jumbotron {
            background-color: #f8f8f8;
            padding: 20px;
            margin-bottom: 20px;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
        }

        .col-md-6 {
            width: 50%;
            float: left;
        }

        .jumbotron h2 {
            margin-top: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            height: 40px;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-success {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
        }

        .btn-success:hover {
            background-color: #45a049;
        }

        .text-center {
            text-align: center;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .btn-success:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>

</head>
<body>
<div class="">
    <div class="container" >
        <div class="row">
            <div class="col-md-6 col-md-offset-3 jumbotron">
                <h2>إنشاء حساب جديد</h2>
                <form action="register.php" method="post">
                    <div class="form-group">
                        الاسم:<input type="text" class="form-control" name="user" placeholder=" ادخل الاسم" required>
                    </div>
                    <div class="form-group">
                        البريد الإلكتروني:<input type="email" class="form-control" name="email" placeholder="ادخل البريد الإلكتروني" required>
                    </div>
                    <div class="form-group">
                        كلمة المرور:<input type="password" class="form-control" name="password" placeholder="ادخل كلمة المرور" required>
                    </div>
                    
                    <div class="form_group">
                        <div class="g-recaptcha" data-sitekey="6LdxO3MpAAAAACM-Jyd5BHKHKdk4nKjOsT7cd30R"></div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="register" value="إنشاء الحساب" class="btn btn-success btn-block text-center">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

