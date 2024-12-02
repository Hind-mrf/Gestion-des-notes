<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes d'etudiant {{$etu->nom}}</title>
    <style>
        body{
            text-align: center
        }
        table{
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th,td{
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th{
            background-color: rgb(137, 218, 112);
            color: white;
        }
        #back{
            text-decoration: none;
            border: rgb(137, 218, 112) 1px solid;
            border-radius: 3px;
            color: #000000;
            font-size: 15px;
            padding: 5px;
        }
        #back:hover{
            background-color: #000000;
            color: rgb(137, 218, 112);
            border: black 2px solid;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h2>Note & Observation</h2>
    <p>L'étudiant(e) {{$etu->nom}} {{$etu->prenom}}</p>
    <p>Id: {{$etu->id}}</p>
    <table>
        <tr>
            <th>Matieres</th>
            <th>Notes</th>
            <th>Observations</th>
        </tr>
        @foreach ($info as $etudiant)
            @foreach ($etudiant->matieres as $matiere)
                <tr>
                    <td>{{$matiere->nom}}</td>
                    <td>{{$matiere->pivot->note}}</td>
                    <td>{{$matiere->pivot->observation}}</td>
                </tr>
            @endforeach
        @endforeach
    </table>
    <a href="acc" id="back">Back to Home page</a>
</body>
</html>