@extends('layout')

@section('main_content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <div class='w-100 d-flex flex-column align-items-center'>
            <h1 class="text-white font-weight-normal">Enter</h1>
        </div> 
        <form method='post' action='login' class='w-100 d-flex flex-column align-items-center'>
            @csrf
            <div class='mb-2'>
                <div class='text-white my-0 mr-md-auto font-weight-normal'>Email</div>
                <input name='email' type='email' id='email'/>
            </div>
            <div class='mb-2'>
                <div class='text-white my-0 mr-md-auto font-weight-normal'>Password</div>
                <input name='password' type='password' id='password'/>
            </div>
            <div class='mb-2 d-flex flex-row'>
                <div class='text-white my-0 mr-md-auto font-weight-normal pr-2'>Remember me:</div>
                <input type='checkbox' name='save' />
            </div>
            <button type='submit' class='btn btn-outline-light me-2'>Send</button>
        </form>
    </body>
    </html>
@endsection