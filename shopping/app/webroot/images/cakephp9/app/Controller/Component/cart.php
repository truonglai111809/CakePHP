<?php
class CartComponent extends Object {
//var $components = array('Session');
public function initialize(Controller $controller) // Khởi tạo 1 component
{
//$this->Existing->foo();
}
public function startup(Controller $controller)// sd component
{
//$this->Existing->foo();
}
//Thêm gio hàng
function add($data) {
//$data = array('id' => 1, 'name' => 'product 1', 'amount' => 1);
$carts = (array) CakeSession::read('Cart');
//$data = array_merge(array('id' => '', 'name' => '', 'amount' => 1),$data);
/*if($data = 1 )*//* kiem tra xem validate chua *///{
if(isset ($carts[$data['id']])){
// Update so luog cua don hang neu da ton tai trong gio hang
$data['amount']=$carts[$data['id']]['amount']+(int)$data['amount'];
}
$carts[$data['id']]=$data;
CakeSession::write('Cart', $carts);
/*}*/
return $carts;
}
//Cập nhật gio hàng
function update($id,$qty) {
//$data = array('id' => 1, 'name' => 'product 1', 'amount' => 1);
$carts = (array) CakeSession::read('Cart');
$carts[$id]['amount'] = $qty;
CakeSession::write('Cart', $carts);
return $carts;
}
}
?>