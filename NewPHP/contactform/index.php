<?php
//msg var
$msg='';
$msgClass='';

//check for submit
if(filter_has_var(INPUT_POST,'submit')){
    //get form data
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $message=htmlspecialchars($_POST['message']);
    //check required fields
    if(!empty($email) && !empty($name) && !empty($message)){
        //passed
        //check email
        if(filter_var($email,FILTER_VALIDATE_EMAIL)=== false){
            //failed
            $msg="please use a valid email";
            $msgClass='alert-danger';
        }else{
            //passed
        }
        // echo 'passed';
    }else{
        //failed
        $msg='please fill in all fields';
        $msgClass='alert-danger';
    }
}

?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>Contant us</title>
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
  </head>

  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">my website</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <?php if($msg !=''): ?>
        <div class="alert <?php echo $msgClass; ?>">
          <?php echo $msg?>
        </div>
        <?php endif; ?>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name:''; ?>">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email:''; ?>">
            </div>
            <div class="form-group">
              <label>Message</label>
              <input type="text" name="message" class="form-control" value="<?php echo isset($_POST['message']) ? $message:''; ?>">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </body>

  </html>