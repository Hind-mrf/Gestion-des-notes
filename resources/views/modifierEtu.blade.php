<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nouveau Etudiant</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
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

        input{
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        transition: border-color 0.3s;
        }

        input:focus {
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
        section{
            display: flex;
            flex-direction: row
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
        <form action="modifierEtu" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$etudiant->id}}">
            <label>Nom </label>
            <input type="text" name="nom" value="{{$etudiant->nom}}"> <br><br>
            <label>Prenom </label>
            <input type="text" name="prenom" value="{{$etudiant->prenom}}"><br><br>
            <label>Date de naissance</label>
            <input type="date" name="dateNaiss" value="{{$etudiant->dateNaiss}}"><br><br>
            <label>Sexe </label>
            <section>
                <label>Femme</label>
                <input type="radio" name="sexe"  value="femme" @if ($etudiant->sexe =='femme') checked @endif>
                <label>Homme</label>
                <input type="radio" name="sexe"  value="homme" @if ($etudiant->sexe =='homme') checked @endif>
            </section>
            <br><br>
            <input type="submit" value="Modifier" id="btn">
        </form>
    </div>
    <br><br>
    <a href="acc" id="back">Back to Home page</a>
</body>
</html>