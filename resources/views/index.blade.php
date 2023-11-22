<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Población total: {{$poblacion_total}}</h1>

    @foreach($human as $lista)
        <h2>Nombre: {{$human->nombre}}</h2>
        <h2>Tipo: {{$human->type}}</h2>
        <h2>Velocidad: {{$human->speed}}</h2>
        <h2>Fuerza: {{$human->$strength}}</h2>
        <h2>Vida: {{$human->life}}</h2>
        @if ($human->type === "Ciborg")
            <h2>Partes mecánicas: {{$human->$mechanical_parts[0]}}</h2> 
        @endif
        @if ($human->type === "Biological")
            <h2>Género: {{$human->$gender}}</h2>
        @endif
        @if ($human->type === "Machine")
            <h2>Autonomia: {{$human->$autonomy}}</h2>
        @endif
    @endforeach
    
        <ul>
            <li><a href="./create.blade.php?Tipo=Biological">Nuevo humano biológico</a></li>
            <li><a href="./create.blade.php?Tipo=">Nuevo humano ciborg</a></li>
            <li><a href="./create.blade.php?Tipo=Biological">Nuevo humano maquina</a></li>
        </ul>
   
</body>
</html>