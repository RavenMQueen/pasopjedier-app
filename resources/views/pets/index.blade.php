<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Pets</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <h1>Available Pets</h1>
    </header>
    <main>
        <section class="filter-container">
            <form method="GET" action="{{ route('pets.filter') }}">
                <select name="kind">
                    <option value="">Kind</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
                <input type="text" name="location" placeholder="Location">
                <input type="date" name="date">
                <button type="submit">Filter</button>
            </form>
        </section>
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