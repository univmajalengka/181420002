<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/login-css.css">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <!------ Include the above in your HEAD tag ---------->

</head>
<body>
    

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <div class="account-box">
                    <div class="logo ">
                        Perpustakaan
                    </div>
                    <form class="form-signin" action="<?php echo site_url('login/ceklogin') ?>" method="post">
                    <?php 
                        $info= $this->session->flashdata('info');
                        if(!empty($info)){
                            echo $info;
                        }
                    ?>
                    <div class="form-group">
                        <input name="username" type="text" class="form-control" placeholder="Username" required autofocus />
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" placeholder="Password" required />
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me" />
                        Keep me signed in
                    </label>
                    <button class="btn btn-lg btn-block purple-bg" type="submit" name="Submit">
                        Sign in</button>
                    </form>
                    
                    
                    <div class="or-box row-block">
                        <div class="row">
                            <div class="col-md-12 row-block">
                                <a href="<?php echo site_url('signup') ?>" class="btn btn-primary btn-block">Create New Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
