
<div class="contaier">
	<div class="row">
		<div class="col-xs-12">
			<div class="col-xs-1">
				
				<div class="actions">
					<h3><?php echo __('Actions'); ?></h3>
					<ul>
						<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
						<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
						<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
					</ul>
				</div>
			</div>
			<div class="col-xs-11">
				<div class="orders index">
						<h2><?php echo __('Orders'); ?></h2>
						<table cellpadding="0" cellspacing="0" class="table table-hover">
						<thead>
						<tr>
								<th><?php echo $this->Paginator->sort('id'); ?></th>
								<th><?php echo $this->Paginator->sort('buyer_name'); ?></th>
								<th><?php echo $this->Paginator->sort('user_id'); ?></th>
								<th><?php echo $this->Paginator->sort('buyer_email'); ?></th>
								<th><?php echo $this->Paginator->sort('buyer_phone'); ?></th>
								<th><?php echo $this->Paginator->sort('buyer_address'); ?></th>
								<th><?php echo $this->Paginator->sort('receiver_name'); ?></th>
								<th><?php echo $this->Paginator->sort('receiver_address'); ?></th>
								<th><?php echo $this->Paginator->sort('receiver_phone'); ?></th>
								<th><?php echo $this->Paginator->sort('cart_infomation'); ?></th>
								<th><?php echo $this->Paginator->sort('payment_info'); ?></th>
								<th><?php echo $this->Paginator->sort('created'); ?></th>
								<th><?php echo $this->Paginator->sort('status'); ?></th>
								<th><?php echo $this->Paginator->sort('modified'); ?></th>
								<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
						</thead>
						<tbody>
						<?php foreach ($orders as $order): ?>
						<tr>
							<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['buyer_name']); ?>&nbsp;</td>
							<td>
								<?php echo $this->Html->link($order['User']['id'], array('controller' => 'users', 'action' => 'view', $order['User']['id'])); ?>
							</td>
							<td><?php echo h($order['Order']['buyer_email']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['buyer_phone']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['buyer_address']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['receiver_name']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['receiver_address']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['receiver_phone']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['cart_infomation']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['payment_info']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
							<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id'])); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array(), __('Are you sure you want to delete # %s?', $order['Order']['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
						</tbody>
						</table>
					</div>
			</div>
		</div>
	</div>
</div>
