<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Posts</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div class="container d-block">
    <h1 class="justify-text-center">Ecrire un article</h1>
    <form action="/posts" method="post">
        @csrf
        <div class="form-group">
            <label for="titlePost">Titre de l'article</label>
            <input type="text" class="form-control" id="titlePost" name="title" placeholder="Saisir le titre de l'article">
        </div>
        <div class="form-group">
            <label for="contentPost">Contenu de l'article</label>
            <textarea class="form-control" id="contentPost" name="content" rows="3">Saisir le contenu de l'article...</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>