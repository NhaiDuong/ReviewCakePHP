<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index($keyword = null) {
        if (strrchr($this->here,'vie')){
            $lang = 'vie';
        }
        elseif (strrchr($this->here,'eng')){
            $lang = 'eng';
        }
        $this->Session->write('Config.language', $lang);
//
//       if ($this->request->is('post')){
//           $keyword = $this->request->data['Post']['keyword'];
//           var_dump($keyword);die;
//           $posts = $this->Post->find('all', array('conditions' => array('title like' => '%'.$keyword.'%')));
//           if (empty($posts)){
//               $this->set('posts', $posts);
//           }
//
//
////           pr($posts);
//       }
        $this->Paginator->settings = array(
            'Post' => array(
                'paramType' => 'querystring',
                'limit' => 10,
                'order' => array('Post.created' => 'desc'
                )
            )
        );

		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

    public function view($slug = null) {
        if (!$slug) {
            throw new NotFoundException('Invalid post');
        }
        $post = $this->Post->findBySlug($slug);
        if (!$post) {
            throw new NotFoundException('Invalid post');
        }
        $this->Post->updateAll(
            array('Post.viewCount' => 'Post.viewCount + 1'),
            array('Post.slug' => $slug)

        );
        $this->set(compact('post'));
    }


/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Flash->success(__('The post has been deleted.'));
		} else {
			$this->Flash->error(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

//    public function search()
//    {
//        if ($this->request->is('post')) {
//            $post = $this->request->data['Post']['title'];
//            $posts = $this->Post->search($post);
//            if(count($posts) > 0) {
//                $this->set('foods', $posts);
//            }
//            else
//            {
//                $this->Flash->set('Không tìm thấy kết quả nào!', array('key'=>'noresult'));
//            }
//        }
//    }

    public function search()
    {
        if ($this->request->is('post')) {
            $post = $this->request->data['Post']['title'];
            $posts = $this->Post->search($post);
            if(count($posts) > 0) {
                $this->set('foods', $posts);
            }
            else
            {
                $this->Flash->set('Không tìm thấy kết quả nào!', array('key'=>'noresult'));
            }
        }
        $this->render('index');
    }
}
