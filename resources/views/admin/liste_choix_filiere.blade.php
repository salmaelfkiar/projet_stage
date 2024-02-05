<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            text-decoration: none;
            color: blue;
            cursor: pointer;
        }
    </style>
    <h2>Liste de Choix de Filière</h2>
    <form action="get" action="{{ route('liste_choix_filiere')}}">

        <table border="1">
             <thead>
                <tr>
                    <th>numero a poger</th>
                    <th>Nom </th>
                    <th>moyenne</th>
                    <th>Choix1</th>
                    <th>Choix2</th>
                    <th>Choix3</th>
                    <th>Choix4</th>
                    <th>Choix5</th>
                    <th>Choix6</th>
                    <th>Choix7</th>
                    <th>Choix8</th>
                    <th>Choix9</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($etudiantfiliere))
                @foreach($etudiantfiliere as $filiere)
                    <tr>
                        <td>{{ $filiere->numeropoger }}</td>
                        <td>{{ $filiere->nom }}</td>
                        <td>{{ $filiere->moyenne }}</td>
                        <td>{{ $filiere->Choix1}}</td>
                        <td>{{ $filiere->Choix2}}</td>
                        <td>{{ $filiere->Choix3}}</td>
                        <td>{{ $filiere->Choix4}}</td>
                        <td>{{ $filiere->Choix5}}</td>
                        <td>{{ $filiere->Choix6}}</td>
                        <td>{{ $filiere->Choix7}}</td>
                        <td>{{ $filiere->Choix8}}</td>
                        <td>{{ $filiere->Choix9}}</td>
<                  
                    </tr>
   
                    @endforeach
                    @endif
            </tbody>
        </table>
    </form>
</body>
</html>