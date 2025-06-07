<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
</head>

<body>
  @extends('layouts.app')

  @section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Dashboard') }}</div>

          <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif

            <h1>Добро пожаловать в Dashboard!</h1>
            <h2>Ваше имя: {{ $user->name }}</h2>
            <h2>Ваш email: {{ $user->email }}</h2>
            <h2>Ваш id: {{ $user->id }}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
</body>

</html>