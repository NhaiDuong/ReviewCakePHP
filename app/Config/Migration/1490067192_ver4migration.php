<?php
class Ver4migration extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 */
	public $description = 'ver4migration';

/**
 * Actions to be performed
 *
 * @var array $migration
 */
	public $migration = array(
		'up' => array(
            'create_table' => array(
                'categories' => array(
                    'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
                    'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
                    'indexes' => array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                    'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM'),
                ),
            ),
            'create_field' => array(
                'recipes' => array(
                    'category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL)
                ),
            ),
		),
		'down' => array(
            'drop_table' => array(
                'categories'
            ),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction Direction of migration process (up or down)
 * @return bool Should process continue
 */
	public function after($direction) {
        if ($direction === 'up') {
            $Category = $this->generateModel('Category');
            $categories = array(
                array('name' => 'Starters'),
                array('name' => 'Main Dish'),
                array('name' => 'Desserts'));
            $Category->saveAll($categories);
        }
        return true;
	}
}
