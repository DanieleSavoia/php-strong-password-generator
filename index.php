<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="text-center">
    <h1 class="text-center mt-3">
        Strong Password Generator
    </h1>
    <h2 class="text-center">
        Genera una password sicura
    </h2>
    <?php
    if (isset($_GET['password_length'])) {
        $password_length = $_GET['password_length'];
        // Esegui le operazioni desiderate con la lunghezza della password
        echo generateRandomString($password_length);
    } else {
        echo "Lunghezza password non specificata.";
    }
    ?>
    <?php
    function generateRandomString($password_length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $password_length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    ?>
    <form class="text-center mt-4" action="" method="GET">
        <label for="password_length">Lunghezza password:</label>
        <input type="number" name="password_length" id="password_length" min="1" required>
        <input type="submit" value="Invia">
        <input type="reset" value="Reset">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>

</html>