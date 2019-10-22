<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Form control</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!----- Theme CSS file------>
    <link rel="stylesheet" href="style.css">

</head>
<body>

  
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h1>Administration Login</h1>
                        <form action="thankyou.php" method="POST">

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" autocomplete="off" required="required">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" autocomplete="off"required="required">
                            </div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="contact-btn" >submit</button>
                            </div>

                        </form>
                      
                    </div>
                </div>
            </div>
        </section>
    
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"><script>
</body>
</html>