<section>
    @foreach ($users as $user)
        <div>
            <h1>Je suis {{ $user->nom }}</h1>
            <p>J'ai {{$user->age}}</p>
            <p>Mon email est {{$user->email}}</p>
            <p>Mon id {{$user->id}}</p>
        </div>
    @endforeach
</section>
