
<p>
    @foreach ($a as $item)
        <li>{{ $item->name }}</li>
        <li>{{ $item->description }}</li>
    @endforeach
</p>