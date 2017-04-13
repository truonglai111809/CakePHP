<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ProductsController extends AppController {
/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator', 'Session');
    var $helpers = array('Paginator','Html');

/**
 * index method
 *
 * @return void
 */
    
    public function index() {
        $this->layout = 'index';
        $this->set('title_for_layout','Hải Yến Shop');

        $this->paginate = array(
                                'limit' => 8,
                                'order' => array('name' => 'desc'),
                                'paramType' => 'querystring',
                             );
        $products = $this->paginate('Product');
        $this->set('products',$products);
    }

   public function all() {
        $this->paginate = array(
            'recursive' => -1,
            'order' => array('created' => 'desc'),
            'limit' => 20,
            );
        $data = $this->paginate('Product');
        $this->set('products', $data);
    }
    public function special(){
        if($this->request->is('requested')){
            $products = $this->Product->find('all',array('recursive' => -1));
            return $products;
        }
    }
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    /*public function view($id = null) {
        $this->layout = 'detail';
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $this->set('product', $this->Product->find('first', $options));
    }*/

    public function view($id = null) {
        $this->layout = 'detail';
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $product = $this->Product->find('first', $options);
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Không tìm thấy sản phẩm này'));
        }
        $this->set('product',$product);
        //$this->set('product', $this->Product->find('first', $options));
        $this->loadModel('Comment');
        $comments=$this->Comment->find('all',array(
                'conditions'=>array(
                        'product_id'=>$product['Product']['id']
                    ),
                'order'=>array('Comment.created'=>'asc'),
                'contain'=>array(
                        'User'=>array('first')
                    )
            ));
        //pr($comments);
        $this ->set('comments',$comments);
        //hiển thị sách liên quan
        $related_products=$this->Product->find('all',array(
            'fields'=>array('name','image','price','saleprice','slug'),
                'conditions'=>array(
                        'category_id'=>$product['Product']['category_id'],
                        'Product.id <>'=>$product['Product']['id']
                    ),
                'limit'=>5,
                'order'=>'rand()'
            ));
        //pr($related_books);
        $this->set('related_products',$related_products);
        //báo lỗi xác thự dữ liệu khi gởi comment
        if($this->Session->check('comment_errors')){
            $errors=$this->Session->read('comment_errors');
            $this->set('errors',$errors);
            $this->Session->delete('comment_errors');
        }
    }


/**
 * add method
 *
 * @return void
 */
    public function add() {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Product->Category->find('list');
        $this->set(compact('categories'));
    }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
            $this->request->data = $this->Product->find('first', $options);
        }
        $categories = $this->Product->Category->find('list');
        $this->set(compact('categories'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function delete($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Product->delete()) {
            $this->Session->setFlash(__('The product has been deleted.'));
        } else {
            $this->Session->setFlash(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

/**
 * admin_index method
 *
 * @return void
 */
    public function admin_index() {
        $this->Product->recursive = 0;
        $this->set('products', $this->Paginator->paginate());
    }

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_view($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
        $this->set('product', $this->Product->find('first', $options));
    }

/**
 * admin_add method
 *
 * @return void
 */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Product->Category->find('list');
        $this->set(compact('categories'));
    }

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_edit($id = null) {
        if (!$this->Product->exists($id)) {
            throw new NotFoundException(__('Invalid product'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('The product has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The product could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
            $this->request->data = $this->Product->find('first', $options);
        }
        $categories = $this->Product->Category->find('list');
        $this->set(compact('categories'));
    }

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_delete($id = null) {
        $this->Product->id = $id;
        if (!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Product->delete()) {
            $this->Session->setFlash(__('The product has been deleted.'));
        } else {
            $this->Session->setFlash(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
    public function view_cart() {
        $this->layout = 'cart';
        $this->set('title_for_layout','Gio hang cua ban - Hai Yen');
        $cart = $this->Session->read('cart');
        $payment = $this->Session->read('payment');
        $this->set(compact('cart', 'payment'));
        $this->set('title_for_layout', 'Gio hang - Smartphone');
    }

    public function empty_cart() {
        if ($this->request->is('post')) {
            $this->Session->delete('cart');
            $this->Session->delete('payment');
            $this->redirect($this->referer());
        }
    }

    public function delete_cart($id = null) {
        if ($this->request->is('post')) {
            $this->Session->delete('cart.' . $id);
            $cart = $this->Session->read('cart');
            if (empty($cart)) {
                $this->empty_cart();
            } else {
                $total = $this->sum($cart);
                $this->Session->write('payment.total', $total);
                if($this->Session->check('payment.coupon')){
                    $pay = $total - $this->Session->read('payment.discount')/100*$total;
                    $this->Session->write('payment.pay',$pay);
                }}
                $this->redirect($this->referer());
            }$this->redirect($this->referer());
        }
    

    public function update_cart() {


        if ($this->request->is('post')) {
            $data = $this->request->data;
            $cart = $this->Session->read('cart.' . $data['Product']['id']);

            if (empty($cart)) {
                $this->empty_cart();
                
            } else {
                    $cart['quantity'] = $data['Product']['quantity'];
                    $this->Session->write('cart.' . $data['Product']['id'], $cart);
                    $cart = $this->Session->read('cart');
                    $total = $this->sum($cart);
                    $this->Session->write('payment.total', $total);
                    if($this->Session->check('payment.coupon')){
                        $pay = $total - $this->Session->read('payment.discount')/100*$total;
                        $this->Session->write('payment.pay',$pay);
                    }
                    $this->redirect($this->referer());
                
                
            }
            $this->redirect($this->referer());
        }
    }

    public function add_to_cart($id = null) {
            
            $product = $this->request->data;
            //tim thong tin san pham    
           /* $product = $this->Product->find('first', array(
                'recursive' => -1,
                'conditions' => array('Product.id' => $id),
            ));*/
            if ($this->Session->check('cart.' . $id)) {
                $item = $this->Session->read('cart.' . $id);
                $item['quantity'] += $product['quantity'];
            } else {
                $item = array(
                    'id' => $product['Product']['id'],
                    'name' => $product['Product']['name'],
                    'image' => $product['Product']['image'],
                    'category' => $product['Product']['category'],
                    'sale_price' => $product['Product']['saleprice'],
                    'quantity' => $product['quantity'],
                    'color' => $product['color'],
                    'material' => $product['material'],
                    'size' => $product['size'],
                );
            }

            //tao gio hang va them san pham vao gio hang
            $this->Session->write('cart.' . $id, $item);
            // cart la ten gio hang, .id tuc la luu vi tri cua not
            // $item la gia tri dua vao
            //tinh tong gio hang
            if($this->Session->check('cart.images')){
                $this->Session->delete('cart.images');
            }

            $cart = $this->Session->read('cart');
            $total = $this->sum($cart);
            $this->Session->write('payment.total', $total);
            if($this->Session->check('payment.coupon')){
                    $pay = $total - $this->Session->read('payment.discount')/100*$total;
                    $this->Session->write('payment.pay',$pay);
                }
            $this->Session->setFlash('Đã thêm sản phẩm vào trong giỏ hàng!', 'default', array('class' => 'alert alert-info'), 'cart');
            $this->redirect($this->referer());
           }


           public function get_keyword(){
        if($this ->request->is('post')){
            $this->Product->set($this->request->data);
            $keyword = $this->request->data['Product']['keyword'];
            $this->redirect(array('action'=>'search','keyword'=>$keyword));

        }
    }

    public function search() {
        $this->set('title_for_layout','Sản phẩm - Hải Yến');
        $notfound = false;
        //pr($this->request->params);
        //pr($this->passedArgs); 
        if(!empty($this->request->params['named']['keyword'])){
            $keyword = $this->request->params['named']['keyword'];
            $this->paginate = array(
                'fields' => array('id','name', 'image', 'saleprice','created'),
                'order' => array('Product.created' => 'Desc'),
                'conditions' => array(
                    'or' => array(
                    'Product.name like' => '%'.$keyword.'%',
                    'Category.name like' => '%'.$keyword.'%'
                    )
                    ),
                'limit' => 15,
                'paramType' => 'querystring',
                );
            $products = $this->paginate('Product');

            if (!empty($products)) {
                $this->set('results', $products);
            } else {
                $notfound = true;
            }
            $this->set('keyword',$keyword);
        }  
            
        
        $this->set('notfound', $notfound);
    }
}
