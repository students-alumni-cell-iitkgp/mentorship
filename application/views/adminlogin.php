<h3>LOG IN</h3>
<div align="center">
    <?php
    $this->load->helper('form');
    $for=array('class' => 'form-horizontal',

        'method' => 'post',
        'role' => 'form',
    );
    echo form_open('/index.php/adminlogin/login',$for);
    ?>
</div>

<div>
    <?php
    $email1 = array('name' => 'eid' ,
        'class' => 'form-control',
        'placeholder' => 'Enter Your Email',
        'required' => 'required' );
    echo form_input($email1);
    ?>
</div>

<div >
    <?php
    $pwd = array('name' => 'pass' ,
        'type' => 'password',
        'class' => 'form-control',
        'placeholder' => 'Enter Your Password',
        'required' => 'required' );
    echo form_input($pwd);
    ?>
</div>

<hr>

    <input type="submit" name="submit" value="login">
    </form>
<?php


/**
 * Created by PhpStorm.
 * User: naoh
 * Date: 3/9/2017
 * Time: 7:44 AM
 */