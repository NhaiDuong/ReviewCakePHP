<?php
/**
 * Created by PhpStorm.
 * User: Duong Nhai
 * Date: 3/17/2017
 * Time: 9:31 AM
 */
App::uses('Model', 'AppModel');

class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
}

?>