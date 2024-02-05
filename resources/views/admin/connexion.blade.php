<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Connexion Utilisateur</title>
</head>
<body>
    <h2>Connexion Utilisateur</h2>
<style>
     h2 {
            text-align: center;
            color: #007bff; 
            padding: 10;
        }
    body{
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; 
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555; 
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc; 
            border-radius: 4px;
        }

        /* button{
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        } */
        button {
            padding: 8px 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        
        }
        .stalle_button {
            background-color: #3498db;
            color: #fff;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .stalle_button:hover {
            background-color: #094f7d;
        }

        .error {
            color: #dc3545; 
            margin-top: -10px;
            margin-bottom: 10px;
        }
</style>

<form method="post" action="{{ route('loginadmin')}}">
    @csrf
    <div>

        <label for="email">Identifiant Utilisateur:</label>
        <input type="email" id="email" name="email" >
        @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>
    <div>
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" >
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="droite">daroit:</label>
        <input type="text" id="droite" name="droite">
        @error('droite')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="stalle_button">Se connecter</button>
    
</form>
</body>
</html>