@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Todo </title>
</head>
<body>


    <h1>All Your To Doss ... </h1>

    <h3>
        <a href="/create"> Create </a>
    </h3>


    <h3>
        <x-alert />
    </h3>







        <table class="table">
            <thead>
              <tr>
                <th scope="col">Tasks</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">Completed</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($todos as $todo)
              <tr>

                <th scope="row"> {{  $todo->title }}</th>





                <td>
                    <button type="button" class="btn btn-dark">
                        <a href="{{ asset('/' . $todo->id . '/edit') }}">Edit</a>
                    </button>

                </td>

                <td>
                    <button type="button" class="btn btn-danger">
                    <a href="{{ asset('/' . $todo->id . '/delete') }}">Delete</a>
                </button>
                </td>

                <td>
                    <button type="button" class="btn btn-success">
                    <a href="{{ asset('/' . $todo->id . '/completed') }}">InComplete</a>
                </button>

                </td>

              </tr>

              @if($todo->completed)
              <tr>

                <th style="text-decoration: line-through">{{  $todo->title }}</th>




                <td>
                    <button type="button" class="btn btn-dark">
                        <a href="{{ asset('/' . $todo->id . '/edit') }}">Edit</a>
                    </button>

                </td>

                <td>
                    <button type="button" class="btn btn-danger">
                    <a href="{{ asset('/' . $todo->id . '/delete') }}">Delete</a>
                </button>
                </td>

                <td>
                    <button type="button" class="btn btn-success">
                    <a href="{{ asset('/' . $todo->id . '/completed') }}">Completed</a>
                </button>

                </td>
              </tr>
              @endif

            </tbody>
            @endforeach
          </table>




















</body>


</html>
