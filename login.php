
<html lang="en" wtx-context="BA6BDC06-EFBB-4E21-9049-14605E10A65F">

<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--font awesome-->
  <link rel="stylesheet" href="css/all.css">
  <script src="js/all.js"></script>

  <link
    href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@200;400;600&display=swap"
    rel="stylesheet">

    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,700">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        body {
            background: #e35869;
            font-family: "Rubik", sans-serif;
        }

        .login-form {
            background: #fff;
            width: 500px;
            margin: 65px auto;
            display: flex;
            flex-direction: column;
            border-radius: 4px;
            box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
        }

        .login-form h1 {
            padding: 35px 35px 0 35px;
            font-weight: 300;
        }

        .login-form .content {
            padding: 35px;
            text-align: center;
        }

        .login-form .input-field {
            padding: 12px 5px;
        }

        .login-form .input-field input {
            font-size: 16px;
            display: block;
            font-family: "Rubik", sans-serif;
            width: 100%;
            padding: 10px 1px;
            border: 0;
            border-bottom: 1px solid #747474;
            outline: none;
            transition: all 0.2s;
        }

        .login-form .input-field input::-moz-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input:-ms-input-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input::placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input:focus {
            border-color: #222;
        }

        .login-form a.link {
            text-decoration: none;
            color: #747474;
            letter-spacing: 0.2px;
            text-transform: uppercase;
            display: inline-block;
            margin-top: 20px;
        }

        .login-form .action {
            display: flex;
            flex-direction: row;
        }

        .login-form .action button {
            width: 100%;
            border: none;
            padding: 18px;
            font-family: "Rubik", sans-serif;
            cursor: pointer;
            text-transform: uppercase;
            background: #e8e9ec;
            color: #777;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 0;
            letter-spacing: 0.2px;
            outline: 0;
            transition: all 0.3s;
        }

        .login-form .action button:hover {
            background: #d8d8d8;
        }

        .login-form .action button:nth-child(2) {
            background: #2d3b55;
            color: #fff;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 4px;
        }

        .login-form .action button:nth-child(2):hover {
            background: #3c4d6d;
        }
        a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: green;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
    </style>

    <script>
        window.console = window.console || function (t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">
    <div class="login-form">
      <a class="navbar-brand" href="index">
        <center><img src="img/logodk.png" alt="CV.DEAS" style="width: 80px" /></center>
      </a>
        <form action="cek.php" method="post">
            <h1 align="center">Login <a href="index.php">CV. Deas Karya</a></h1>
            <div class="content">
                <div class="input-field">
                    <input name="username" type="text" placeholder="Username" required />
                </div>
                <div class="input-field">
                    <input name="password" type="password" placeholder="Password" id="password" required />
                </div>
            </div>
            <div class="action">
                <button type="button" onclick="myFunction()">Show Password</button>
                <button type="submit">Sign in</button>
            </div>
        </form>
    </div>
    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js">
    </script>


    <script id="rendered-js">
        let form = document.querySelecter('form');

        form.addEventListener('submit', e => {
            e.preventDefault();
            return false;
        });
    function myFunction() {
      var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>
</html>