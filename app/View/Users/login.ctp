<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Animated login form</title>

</head>

<body>
<div class="wrapper">
    <?php echo $this->Flash->render('auth'); ?>
    <?php echo $this->Form->create('User', array('class' => 'login')); ?>
        <p class="title">Log in</p>
        <p><i class="fa fa-user"></i> Username</p>
            <?php
                echo $this->Form->input('username',array('placeholder' => ''));
            ?>
        <p><i class="fa fa-key"></i> Password</p>
        <?php echo $this->Form->input('password'); ?>
        <a href="#">Forgot your password?</a>
        <button>
            <i class="spinner"></i>
            <?php echo $this->Form->button(__('Login', array('class' => 'state'))); ?>
        </button>
    </form>

    </p>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

</body>
</html>
