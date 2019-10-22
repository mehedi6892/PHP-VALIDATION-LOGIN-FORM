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

    <?php 
         $message = "";
         $welcome = "";
         $max = 12;
         $min = 4;
         //Let's think abut that this are the admin users who are already registered in our array
         $users = array ('admin', 'mehedi', 'hasan', 'shuvo', 'nishat', 'mahbuba');
        if(isset($_POST['contact-btn']) ){

            $username = $_POST['username'];
            $password    = $_POST['password'];

            if (strlen($username)< $min){
                $message =  '<div class=" alert alert-danger">Username is too Small</div>';
            }
            if (strlen($username)> $max){
                $message =  '<div class=" alert alert-danger">Username is too big</div>';
            }

            if (!in_array( $username, $users)) {
                $welcome = '<div class=" alert alert-danger">user does not exit '.$username.'</div>';
            }

            else {
                $welcome = '<div class=" alert alert-success">Welcome to the Dashboard '.$username. '</div>';
            }
        }

    ?>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" class="text-center">
                        
                        <?php 
                            echo $message;
                            echo $welcome;
                        ?>
                      
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