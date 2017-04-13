<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {
/**
 * Components
 *
 * @var array
 */
public $components = array('Paginator', 'Session');
	var $uses = array('User','Order');
 public $actsAs = array(
        'Upload.Upload' => array(
            'image' => array(
               'thumbnailSizes' => array(
                    'thumb' => '80x80'
                )
            )
        )
    );

 	public function count(){
 		
 		$today = date('Y-m-d');
		 
		// Cộng thêm 1 tuần
		$date = strtotime(date("Y-m-d", strtotime($today)) . " -5 day");
		$date = strftime("%Y-%m-%d", $date);
		$users = $this->User->find('all');
		$i = 0;
		foreach ($users as $user) {
			$date_user = strtotime(date("Y-m-d", strtotime($user['User']['created'])));
			$date_user = strftime("%Y-%m-%d", $date_user);
			if($date <= $date_user){
				$i += 1;
			}
		}
		return $i;
 	}
 	

	function login(){
    	if($this->request->is('post')){	
      		$user = $this->request->data('User');
      		$email = $user['email'];
      		$password = $user['password'];
		       	if($this->User->checkLogin($email,$password)){
		       		$user = $this->User->find('first',array('conditions' => array('email' => $email,'password' => $password)));
		        $this->Session->write("user",$user['User']); //ghi session
		        //$this->redirect("/");//đăn
		        $this->set('user',$user);
		       	}else{
		        $error = "Email và mật khẩu không đúng";
		       }
      		
    }
    $this->redirect($this->referer()); 
   }

    function logout(){
      $this->Session->delete('user'); //xóa session
      $this->redirect($this->referer()); //chuyển trang login
    }


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'register';
		$this->set('title_for_layout','Dang ky - Hai Yen');
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				$this->redirect($this->referer('/'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		$this->redirect('/');
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$users = $this->User->find('all',array('order' => array('User.created' => 'desc')));
		$this->set('users', $users);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));

		$this->set('user', $this->User->find('first', $options));
		$options2 = array(
				'conditions' => array('Order.user_id' => $id),
				'order' => array('Order.created' => 'desc'),
			);
		$orders = $this->Order->find('all',$options2);
		$this->set('orders',$orders);
	}

	public function myorder(){
		$this->set('title_for_layout','Don hang cua ban - Hai Yen');

		if($this->Session->check('user')){
			$user = $this->Session->read('user');
			$this->set('user',$this->User->find('first',array('conditions' => array('User.id' => $user['id']))));
			$options2 = array(
				'conditions' => array('Order.user_id' => $user['id']),
				'order' => array('Order.created' => 'desc'),
			);
		$orders = $this->Order->find('all',$options2);
		$this->set('orders',$orders);
		}
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function home() {
		$this->layout = 'admin_home';
	}

}
