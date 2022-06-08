<div>
    <h1>This is alert form alert components</h1>
    <p>{{ $name }}</p>
    @foreach ($students as $student)
        <p> {{ $student }} </p>
    @endforeach
    <h1>{{ $title }}</h1>

    <hr>
    <p>{{ $slot }}</p>
</div>
