Заказ № <b>{{$order->id}}</b>

	Время оформления: <b>{{$order->createdAt()}}</b>

	Имя заказчика: <b>{{$order->user->name}}</b>
	Телефон заказчика: <code>{{$order->user->phone}}</code>

	Заказано:
	{!! $orderProducts !!}
	Общая сумма: <b>{{$order->formattedSum()}}</b> sum