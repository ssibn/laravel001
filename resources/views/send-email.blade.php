<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send E-mail</title>
</head>
<body>
    <div class='container'>
        <div class='row'>
            <form action="" method='post'>
                @csrf
                @if(Session::has('message'))
                    <p class="alert {{ Session:get('alert-class', 'alert-info') }}">
                        {{ Session::get('message') }}
                    </p>
                @endif
                <div class='form-group'>
                    <input type="text" id='message' class='form-controll' name='message' required />
                </div>
                <div class='form-group'>
                    <button type='submit' class='btn btn-primary'>
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src='js/app.js'></script>
</body>
</html>