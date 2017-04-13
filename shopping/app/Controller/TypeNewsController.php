<?php
App::uses('AppController', 'Controller');
/**
 * TypeNews Controller
 *
 * @property TypeNews $TypeNews
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TypeNewsController extends AppController {

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
		$this->TypeNews->recursive = 0;
		$this->set('typeNews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TypeNews->exists($id)) {
			throw new NotFoundException(__('Invalid type news'));
		}
		$options = array('conditions' => array('TypeNews.' . $this->TypeNews->primaryKey => $id));
		$this->set('typeNews', $this->TypeNews->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TypeNews->create();
			if ($this->TypeNews->save($this->request->data)) {
				$this->Session->setFlash(__('The type news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type news could not be saved. Please, try again.'));
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
		if (!$this->TypeNews->exists($id)) {
			throw new NotFoundException(__('Invalid type news'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypeNews->save($this->request->data)) {
				$this->Session->setFlash(__('The type news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type news could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypeNews.' . $this->TypeNews->primaryKey => $id));
			$this->request->data = $this->TypeNews->find('first', $options);
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
		$this->TypeNews->id = $id;
		if (!$this->TypeNews->exists()) {
			throw new NotFoundException(__('Invalid type news'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TypeNews->delete()) {
			$this->Session->setFlash(__('The type news has been deleted.'));
		} else {
			$this->Session->setFlash(__('The type news could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TypeNews->recursive = 0;
		$this->set('typeNews', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TypeNews->exists($id)) {
			throw new NotFoundException(__('Invalid type news'));
		}
		$options = array('conditions' => array('TypeNews.' . $this->TypeNews->primaryKey => $id));
		$this->set('typeNews', $this->TypeNews->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TypeNews->create();
			if ($this->TypeNews->save($this->request->data)) {
				$this->Session->setFlash(__('The type news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type news could not be saved. Please, try again.'));
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
		if (!$this->TypeNews->exists($id)) {
			throw new NotFoundException(__('Invalid type news'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TypeNews->save($this->request->data)) {
				$this->Session->setFlash(__('The type news has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The type news could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TypeNews.' . $this->TypeNews->primaryKey => $id));
			$this->request->data = $this->TypeNews->find('first', $options);
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
		$this->TypeNews->id = $id;
		if (!$this->TypeNews->exists()) {
			throw new NotFoundException(__('Invalid type news'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TypeNews->delete()) {
			$this->Session->setFlash(__('The type news has been deleted.'));
		} else {
			$this->Session->setFlash(__('The type news could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
