Заказ № <b><?php echo e($order->id); ?></b>

	Время оформления: <b><?php echo e($order->created_at); ?></b>

	Имя заказчика: <b><?php echo e($order->user->name); ?></b>
	Телефон заказчика: <code><?php echo e($order->user->phone); ?></code>

	Заказано:
	<?php echo $orderProducts; ?>

	Общая сумма: <b><?php echo e($order->formattedSum()); ?></b> sum<?php /**PATH /var/www/resources/views/telegram/order-message.blade.php ENDPATH**/ ?>