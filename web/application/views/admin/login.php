<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login Form</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/login_style.css">
        <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body>
        <section class="container">
            <div class="login">
                <h1>Login to Web App</h1>
                <form method="post" action="<?php echo base_url(); ?>admin_login/check_login">
                    <h4 style="color:red">
                        <?php
                        $message_inv=$this->session->userdata('message_inv');
                        if(isset($message_inv)){
                            echo $message_inv;
                            $this->session->unset_userdata('message_inv');
                            //$this->session->sess_destroy();
                        }
                        
                        
                        ?>
                    </h4>
                    <h4 style="color:green">
                        <?php
                        $message_success=$this->session->userdata('message_success');
                        if(isset($message_success)){
                            echo $message_success;
                            $this->session->unset_userdata('message_success');
                            //$this->session->sess_destroy();
                        }
                        
                        
                        ?>
                    </h4>

                    <p><input type="text" name="user_email" value="" placeholder="Username or Email"></p>
                    <p><input type="password" name="user_password" value="" placeholder="Password"></p>
                    <p class="remember_me">
                        <label>
                            <input type="checkbox" name="remember_me" id="remember_me">
                            Remember me on this computer
                        </label>
                    </p>
                    <p class="submit"><input type="submit" name="commit" value="Login"></p>
                </form>
            </div>

            <div class="login-help">
                <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
            </div>
        </section>

    </body>
</html>
