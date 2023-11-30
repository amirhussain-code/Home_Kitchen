<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
        body {
            display: flex;
        }

        .slidebar-container {
            width: 180px;
            height: 100vh;
            background-color: currentcolor;
            float: inline-start;
            position: relative;
        }

        .slidebar-container ul {
            margin: 30px 0;
        }

        .slidebar-container ul li {
            padding: 4px 0;
        }

        .slidebar-container ul a {
            text-decoration: none;
            color: white;
        }

        .slidebar-container ul li:hover {
            border: 1px solid white;
            border-radius: 10px;
            padding-left: 10px;
        }

        .main {
            display: flex;
        }

        .header {
            display: flex;
            justify-content: flex-end;
            padding: 1rem;
        }
    </style>
</head>

<body>

    <div class="container-fluid slidebar-container">
        <div>
            <ul type="none">
                <a href="#">
                    <li>
                        Dashboard
                    </li>
                </a>
                <a href="user.php">
                    <li>
                        User
                    </li>
                </a>
                <a href="#">
                    <li>
                        Product
                    </li>
                </a>
                <a href="#">
                    <li>
                        Order
                    </li>
                </a>
                <a href="reg.php">
                    <li>
                        add user
                    </li>
                </a>

            </ul>
        </div>
    </div>






    <!-- 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> -->
</body>

</html>