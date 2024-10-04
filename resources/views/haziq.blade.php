<div>
    @foreach ($b as $haziq)
        <div>
            <p>{{ $haziq->name }}</p>
            {{ $haziq->description }}
            <img src="{{ asset('assets/img/' . $haziq->image) }}" alt="">
        </div>
    @endforeach
</div>