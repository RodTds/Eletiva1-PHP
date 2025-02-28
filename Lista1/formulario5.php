<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            height: 100vh;
        }

        .form-container {
            background-color: #dcdcdc;
            /* Fundo cinza claro */
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            /* Limita a largura do formulário */
            border: 1px solid #ccc;
            /* Borda reta sem curvas */
        }
        label{
            font-weight: bold;
        }
        
    </style>
</head>

<body class="d-flex justify-content-center align-items-center">

    <div class="form-container">
    <h2 class="text-left mb-4">Billing Addres</h2> 
        <form>
            <!-- 1 Linha -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="input1" class="form-label">First name</label>
                    <input type="text" class="form-control" id="input1" placeholder="Digite seu nome">
                </div>
                <div class="col-md-6">
                    <label for="input2" class="form-label">Last name</label>
                    <input type="email" class="form-control" id="input2" placeholder="Digite seu email">
                </div>
            </div>
            <div class="row mb-3"><!--2 Linha-->
                <div class="col-md-12 ">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text">@</span>
                        <input type="text" name="username" class="form-control" placeholder="fulanodasilva@gmail.com">
                        <div class="input-group-append">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3 Linha  -->
            <div class="col-md-12">
                <label for="input3" class="form-label">Email</label>
                <input type="text" class="form-control" id="input3" placeholder="">
            </div>
            <!-- 4 Linha  -->
            <div class="col-md-12">
                <label for="input4" class="form-label">Address</label>
                <input type="text" class="form-control" id="input4" placeholder="">
            </div>
            <!-- 5 Linha  -->
            <div class="col-md-12">
                <label for="input5" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="input5" placeholder="">
            </div>
            <!-- 6 Linha -->
            <div class="row"> <!-- 7 linha-->
                <div class="col-md-5">
                    <label for="" class="form-label">Country</label>
                    <select class="form-select " name="" id="">
                        <option value="">
                            -------
                        </option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="" class="form-label">State</label>
                    <select class="form-select " name="" id="">
                        <option value="">
                            -------
                        </option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="inputText6" class="form-label">Zip</label>
                    <input type="text" id="inputText6" class="form-control col-md-3" aria-describedby="passwordHelpBlock">
                </div>
            </div><!--Fim Row-->
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>