@foreach($events as $event)
	<div>
		<h2>{{ $event->name }}</h2>
		<h2>Date: {{ $event->date }}</h2>
		<h2>Time: {{ $event->time }}</h2>
		<h2>Location: {{ $event->location }}</h2>
	</div>
@endforeach