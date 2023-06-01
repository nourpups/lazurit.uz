Заказ № {{ $order->id }}
	Время оформления: {{ $order->created_at->timezone('Asia/Tashkent')->format('H:i d/m/Y') }}

	Имя заказчика: {{ $order->user->name }}
	Телефон заказчика: {{ $order->user->phone }}

	Заказано:
	@foreach ($order->products as $product)
		{{ $product->name }} ✖️ {{ $product->count }} 🟰 {{ $product->amount }} sum
	@endforeach

	Общая сумма: {{ $order->sum }}