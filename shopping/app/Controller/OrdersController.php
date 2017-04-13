<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail','Network/Email');
/**
 * Orders Controller
 *
 * @property Order $Order
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class OrdersController extends AppController {
	var $uses = 'Order';



public function checkout(){
		$this->set('title_for_layout','Dat hang - Hai Yen');
		if($this->request->is('post')){
			$info = $this->request->data['Order'];
			if($this->Session->check('user')){
				$user = $this->Session->read('user');
				$user_id = $user['id'];
			}else{
				$user_id = '';
			}
			$data = array(
				'user_id' => $user_id,
				'buyer_name' => $info['buyer_name'],
				'buyer_email' => $info['buyer_email'],
				'buyer_phone' => $info['buyer_phone'],
				'buyer_address' => $info['buyer_address'],
				'receiver_name' => $info['receiver_name'],
				'receiver_address' => $info['receiver_address'],
				'receiver_phone' => $info['receiver_phone'],
				'payment_info' => json_encode($this->Session->read('payment')),
				'cart_infomation' => json_encode($this->Session->read('cart')),
				'customer_info' => json_encode($this->request->data['Order']),
				'status' => 0,
				);
			
			if($this->Order->saveAll($data)){
				$this->Session->delete('cart');
				$this->Session->delete('payment');
				$this->Session->setFlash(__('Đơn hàng của bạn đã được chuyển đi.'),'default','order');
			}else{
				$this->Session->setFlash(__('Đặt hàng không thành công'),'default','order');
			}
			
		}

	}
	public function count(){
		if($this->request->is('requested')){
			$i = 0;
			$new_order = $this->Order->find('all',array('conditions' => array('Order.status' => 0)));
			foreach ($new_order as $new_order) {
				$i += 1;
			}
			return $i;
		}
	}
	public function admin_new_order(){
		$new_orders = $this->Order->find('all',array('conditions' => array('Order.status' => 0)));
		$this->set('new_orders',$new_orders);
	}
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
	public function index() {
		$this->Order->recursive = 0;
		$this->set('orders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->set('title_for_layout','Don hang - Hai Yen');
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		}
		$users = $this->Order->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$users = $this->Order->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('The order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$orders = $this->Order->find('all',array('order' => array('Order.created' => 'desc')));
		$this->set('orders', $orders);
	}

	//Don hang chua thanh toan
	public function admin_don_hang_chua_thanh_toan() {
		$this->set('title_for_layout','Tat ca hoa don chua giao- Hai Yen');
		$this->Order->recursive = 0;
		$this->set('orders', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		}
		$users = $this->Order->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The order could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
		$users = $this->Order->User->find('list');
		$this->set(compact('users'));
	}


public function admin_done($id = null) {
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Invalid order'));
		}else{
			$data = $this->Order->find('first',array('conditions' => array('Order.id' => $id)));
			$data['Order']['status'] = 1;
			$data['Order']['buyer_name'] = 'danh';
			$new_order = $data['Order'];
			$this->Order->id = $id;
			if($this->Order->saveField('status',$data['Order']['status'])){
				$this->Session->setFlash(__('Đơn hàng đã được xử lý'));
			}$this->redirect($this->referer());
			
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
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Invalid order'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('The order has been deleted.'));
		} else {
			$this->Session->setFlash(__('The order could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	
}
