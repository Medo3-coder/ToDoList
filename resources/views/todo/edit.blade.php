@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo | Create</title>
</head>
<body style="text-align:center">

    <h1> Edit Your ToDo </h1>

     {{-- message component --}}


      <h3>
          <x-alert />
       </h3>
    <form  action="/update" method="post">
        @method('patch')
        <input type="text" name="title" value="{{ $todo->title }}" />
        <input  style="display:none" type="mumber" name="id" value="{{ $todo->id }}" />


        <button class="btn btn-primary" type="submit">Edit</button>

    @csrf


    </form>
    <br>

                <a href="/index">
        <button class="btn btn-primary" type="submit">  Back   </button>

                </a>

</body>
</html>
