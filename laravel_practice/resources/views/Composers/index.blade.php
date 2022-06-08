<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Composer</title>
</head>
<body>

    <h1>The name is {{ $globalName }}</h1>
    <h1>The name is {{ $name }}</h1>
    <h1>The roll is {{ $roll }}</h1>
    <p>@customUpperCase('biplob')</p>

    <hr>
    @php
        $name = 'Korim mia';
        $students = ['biplob', 'korim', 'najim', 'babul'];
    @endphp
    <x-alert :name="$name" :students="$students" title="This is alert components" >
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis, voluptatum quas optio iste quisquam nisi sunt exercitationem ipsa quae obcaecati!
    </x-alert>


</body>
</html>
