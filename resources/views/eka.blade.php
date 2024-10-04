<div>
    @foreach ($c as $eka)
        <div>
            <p>{{ $eka->id }}</p>
            {{ $eka->email }}
            {{ $eka->password }}
        </div>
    @endforeach
</div>