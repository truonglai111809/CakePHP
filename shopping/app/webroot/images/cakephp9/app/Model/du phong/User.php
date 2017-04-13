<?php
class User extends AppModel
{
	var $name = 'User';
	var $validate = array(
		'fullname' =>array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Họ và tên không được để trống.',
			)
		),
		
		'sex' => array(
			'notempty' => array(
			'rule' => array('notempty'),
			'message' => 'Giới tính chưa được chọn.',
			)	
		),
		
		'address' => array(
			'notempty' => array(
			'rule' => array('notempty'),
			'message' => 'Đia chỉ không được để trống.',
			)
		),
		
		'telephone' => array(
			'notempty' => array(
			'rule' => array('notempty'),
			'message' => 'Điệnkhông được để trống.',
			)
		),
		
		'username' => array(
			'minLength' => array(
			'rule' => array('minLength','8'),
			'message' =>'Tên đăng nhập phải có ít nhất 8 ký tự.',
			),
			'isUnique' => array(
			'rule' => 'isUnique',
			'message' => 'Tên đăng nhập đã tồn tại.',
			),
			'allowedCharacters' => array(
			'rule' => '|^[0-9a-z]*$|',
			'message' => 'Tên đăng nhập không được có dấu.',
			),
		),
		
		'pass' => array(
			'minLength' => array(
			'rule' => array('minLength','8'),
			'message' => 'Mật khẩu phải có ít nhất 8 ký tự.',
			),
		),
		
		'email' => array(
			'email' => array(
			'rule' => 'email',
			'message' => 'Email không hợp lệ.',
			),
			'isUnique' => array(
			'rule' => 'isUnique',
			'message'=>'Email đã tồn tại.',
			),
		),
	);
}
?>