<head>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .navbar{
            background-color: #91D1DD;
            display: flex;
            align-items: center;
            font-family: 'Arial Black';
        }

        .cont{
            align-items: center;
            margin-top: 0;
        }

        img{
            align-items: center;
            width: 110px;
            height: 60px;
        }

        a{
            text-decoration: none;
            color: white;
        }

        .container-fluid{
            display: flex;
            align-items: center;
        }
        
        .menu{
            padding: 25px;
        }

        .d-flex{
            padding: 25px;
        }


    </style>
</head>
<body>
    <nav class="navbar">
    <div class="cont">
      <img src="logoeasy.png" alt="Logo Easy Estoque">
    </div>
    <div class="container-fluid">
        <div class="menu">
        <a class="navbar-brand" href="index.php">HOME</a>
        </div>
        <div class="menu">
        <a class="navbar-brand" href="listarproduto.php">PRODUTOS</a>
        </div>
        <div class="menu">
        <a class="navbar-brand" href="cadastroproduto.php">CADASTRAR PRODUTOS</a>
        </div>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">SAIR</a>
    </div>
    </nav>
</body>
