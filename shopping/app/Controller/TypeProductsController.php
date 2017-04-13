<?php
App::uses('AppController', 'Controller');
/**
 * TypeProducts Controller
 *
 * @property TypeProduct $TypeProduct
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TypeProductsController extends AppController {

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
		$this->TypeProduct->recursive = 0;
		$this->set('typeProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeProduct->exists($id)) {
			throw new NotFoundException(__('Invalid type product'));
		}
		$options = array('conditions' => array('TypeProduct.' . $this->TypeProduct->primaryKey => $id));
		$this->set('typeProduct', $this->TypeProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeProduct->create();
			if ($this->TypeProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The type product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type product could not be saved. Please, try again.'));
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
		if (!$this->TypeProduct->exists($id)) {
			throw new NotFoundException(__('Invalid type product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypeProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The type product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypeProduct.' . $this->TypeProduct->primaryKey => $id));
			$this->request->data = $this->TypeProduct->find('first', $options);
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
		$this->TypeProduct->id = $id;
		if (!$this->TypeProduct->exists()) {
			throw new NotFoundException(__('Invalid type product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TypeProduct->delete()) {
			$this->Session->setFlash(__('The type product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The type product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TypeProduct->recursive = 0;
		$this->set('typeProducts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TypeProduct->exists($id)) {
			throw new NotFoundException(__('Invalid type product'));
		}
		$options = array('conditions' => array('TypeProduct.' . $this->TypeProduct->primaryKey => $id));
		$this->set('typeProduct', $this->TypeProduct->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TypeProduct->create();
			if ($this->TypeProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The type product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type product could not be saved. Please, try again.'));
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
		if (!$this->TypeProduct->exists($id)) {
			throw new NotFoundException(__('Invalid type product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypeProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The type product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypeProduct.' . $this->TypeProduct->primaryKey => $id));
			$this->request->data = $this->TypeProduct->find('first', $options);
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
		$this->TypeProduct->id = $id;
		if (!$this->TypeProduct->exists()) {
			throw new NotFoundException(__('Invalid type product'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TypeProduct->delete()) {
			$this->Session->setFlash(__('The type product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The type product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
