<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des étudiants</title>
    <style>
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
            background-color: orchid;
            color: white;
        }
        #back{
            text-decoration: none;
            border: orchid 1px solid;
            border-radius: 3px;
            color: #000000;
            font-size: 15px;
            padding: 5px;
        }
        #back:hover{
            background-color: #000000;
            color: orchid;
            border: black 2px solid;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Infomation</th>
            <th>Action</th>
        </tr>
        @foreach ($etudiants as $etu)
            <tr>
                <td>{{$etu->id}}</td>
                <td>{{$etu->nom}}</td>
                <td>{{$etu->prenom}}</td>
                <td>{{$etu->dateNaiss}}</td>
                <td>
                    @if ($etu->sexe=='femme')
                        Femme
                    @else
                        Homme
                    @endif
                </td>
                <td>
                    <a href="infoEtu?id={{$etu->id}}">Note & Observation</a>
                    <a href="resultat?id={{$etu->id}}">Résultat final</a>
                </td>
                <td>
                    <a href="modifEtu?id={{$etu->id}}">Modifier</a>
                    <a href="suppEtu?id={{$etu->id}}">Supprimer</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="acc" id="back">Back to Home page</a>
</body>
</html>