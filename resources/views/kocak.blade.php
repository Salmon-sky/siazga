<div>
    @foreach ($d as $kocak)
        <div>
            <p>{{ $kocak->name }}</p>
            {{ $kocak->email }}
            {{ $kocak->email_verified_at }}
            {{ $kocak->password }}
            {{ $kocak->remember_token }}
        </div>
    @endforeach
</div>