<!-- File: /app/View/Posts/view.ctp -->

<h1><b><?php echo h($user['User']['username']); ?></b></h1>

<p><?php echo h($user['User']['role']); ?></p>

<p><small>Created: <?php echo $user['User']['created']; ?></small></p>

<p><?php echo h($user['User']['modified']); ?></p>

