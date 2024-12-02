<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter Note</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }

        div {
        background-color: #fff;
        padding: 20px 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        }

        label {
        display: block;
        margin-bottom: 5px;
        color: #555;
        font-size: 14px;
        }

        input,select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        transition: border-color 0.3s;
        }

        select,input:focus {
        border-color: #007bff;
        outline: none;
        }

        #btn {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
        }

        #btn:hover {
        background-color: #0056b3;
        }
        a{
            text-decoration: none;
            border: #0056b3 2px solid;
            border-radius: 3px;
            color: #0056b3;
            font-size: 15px;
        }
        a:hover{
            background-color: #89b0da;
            color: black;
            border: black 2px solid;
            border-radius: 3px;
        }
        #back{
            text-decoration: none;
            border: #0056b3 1px solid;
            border-radius: 3px;
            color: #000000;
            font-size: 15px;
            padding: 5px;
        }
        #back:hover{
            background-color: #000000;
            color: #0056b3;
            border: black 2px solid;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div>
        <form action="ajouterNote" method="post">
            @csrf
            <label>Etudiant</label>
            <select name="id_etu">
                @foreach ($etudiants as $etudiant)
                    <option value="{{$etudiant->id}}">{{$etudiant->id}} :{{$etudiant->nom}}</option>
                @endforeach
            </select>
            <br><br>
            <label>Matiere</label>
            <select name="id_mat">
                @foreach ($matieres as $matiere)
                    <option value="{{$matiere->id}}">{{$matiere->id}} :{{$matiere->nom}}</option>
                @endforeach
            </select>    
            <br><br>
            <label>Note</label>
            <input type="text" name="note"> <br><br>
            <label>Observation</label>
            <input type="text" name="observation"><br><br>
            <input type="submit" value="Ajouter">
            <input type="reset" value="Annuler">
        </form>
    </div>
    <br><br>
    <a href="acc" id="back">Back to Home page</a>
</body>
</html>