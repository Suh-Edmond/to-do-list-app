<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>To-Do List App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

   <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Welcome to To-Do List App</h1>
                <p>Plan all your Activities here and have them done on time!!!</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav justify-content-center nav-pills nav-fill nav-tabs" >
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tasks">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">Users</a>
                    </li>
                </ul>
            </div>
        </div>
            <h1>My Tasks</h1>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover table-md" style="text-align: center">
                        <thead class="thead-dark">
                        <tr>
                            <th>Owner</th>
                            <th>Task Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Venue</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($my_tasks as $tasks)
                            <tr>
                                <td> {{$tasks->user_id}}</td>
                                <td>{{$tasks->name}}</td>
                                <td>{{$tasks->task_date}}</td>
                                <td>{{$tasks->task_time}}</td>
                                <td>{{$tasks->venue}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
     </div>
</body>
</html>