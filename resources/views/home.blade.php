<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>De perfecte match tussen mens & dier</h1>
        <nav>
            <a href="{{ route('pets.index') }}" class="button">Zoek huisdier</a>
        </nav>
    </header>
    <main>
        <section class="pets-grid">
            @foreach($pets as $pet)
            <article class="pet-card">
                <img src="{{ asset('storage/' . $pet->photo_path) }}" alt="{{ $pet->name }}">
                <h2>{{ $pet->name }}</h2>
                <p>{{ $pet->location }}</p>
            </article>
            @endforeach
        </section>
    </main>
</body>
</html>