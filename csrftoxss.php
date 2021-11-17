<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
</head>
<body>

    <!-- form inputan -->
    <form method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Input String</label>
            <!-- attribute name untuk penamaan kolom inputan -->
            <input type="text" class="form-control" name="input"> 
            <button class="btn btn-primary mt-2">Submit</button>
        </div>
    </form>
</body>
</html>

<?php if (isset($_POST['input'])){ //jika ada kiriman dari form dengan name input maka proses if berjalan

    $input = $_POST['input']; //menangkap nilai kiriman dari form 

    echo htmlspecialchars($input); //melakukan konversi khusus dengan htmlspesialchars sehingga tidak akan di proses oleh web browser

}



?>
    


