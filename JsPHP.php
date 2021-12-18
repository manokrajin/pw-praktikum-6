<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #939dda;
        }

        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("twicepotong.jpg");
            height: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .hero-text img {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 10px 25px;
            color: black;
            text-align: center;
        }

        .hero-text button:hover {
            background-color: #555;
            color: white;
        }

        input[type=text] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #7181e3;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        label {
            display: inline-block;
        }

        .container {
            border-radius: 5px;
            background-color: #bdc6ff;
            padding: 20px;
        }
    </style>
</head>
<script>
    function validateForm() {
        let x = document.forms["myForm"]["fnama"].value;
        let y = document.forms["myForm"]["fhari"].value;

        if (x == "") {
            alert("Name must be filled out");
            return false;
        } else {
            alert("scroll kebawah untuk detail biaya");
        }
    }
</script>

<body>
    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">PT.Once Sejahtera</h1>
            <p>Untuk Indonesia yang lebih maju</p>
            <img src="twicelogo.png" height="20%" width="20%">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #27298d;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar scroll</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <form name="myForm" onsubmit="return validateForm()" method="post">
            Nama: <input type="text" name="fnama" id="fnama">
            <br>
            Hari: <input type="text" name="fhari" id="fhari">
            <br>
            Silahkan pilih kategori:
            <br>
            <input type="radio" name="kategori" value="0" id="kategori">
            <label for="sosial">Sosial</label>

            <br>
            <input type="radio" name="kategori" value="1" id="kategori">
            <label for="rumah">Rumah</label>

            <br>
            <input type="radio" name="kategori" value="2" id="kategori">
            <label for="apartemem">Apartemen</label>

            <br>
            <input type="radio" name="kategori" value="3" id="kategori">
            <label for="industri">Industri</label>

            <br>
            <input type="radio" name="kategori" value="4" id="kategori">
            <label for="ville">Villa</label>
            <!-- 
        0 = sosial
        1 = rumah
        2 = apartemen
        3 = industri
        4 = villa
        -->
            <br>
            <input type="submit" value="submit"><br>
        </form>

    </div>
    <p id="text">Coba</p>

    <script>
        var nama = document.getElementById("fnama").value;
        var hari = document.getElementById("fhari").value;
        var kategori = document.getElementById("kategori").value;
        document.getElementById("text").innerHTML = nama;
    </script>

</body>




</html>