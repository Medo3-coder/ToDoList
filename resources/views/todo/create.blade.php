@extends('layouts.app')
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo | Create</title>
</head>
<body style="text-align:center" >

    <h1> Create Your ToDo </h1>

     {{-- message component --}}

    <x-alert />



    <form  action="/upload" method="post">
        <input type="text" name="title" />
        <input type="submit" value="create" />
    @csrf


    </form>
    <br>

    <a href="/index">
        <button class="btn btn-primary" type="submit">  Back   </button>
    </a>


</body>


</html>
