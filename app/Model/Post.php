<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {

    public function before($event = array()) {
        $posts = ClassRegistry::init('Posts', array(
            'ds' => $this->connection
        ));
        // Do things with $posts.
    }
}
