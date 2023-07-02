@extends('layout')

@section('main_content')
<div class='w-50 p-2 m-2'>
    <h1 class='display-4 fw-bold text-body-emphasis text-white'>Form</h1>
    <form method='post' class="col-3" action='form/check'>
        @csrf
        @method('post')
        <input class='mb-2' type="email" name='email' id='email' placeholder='You E-mail'>
        <input class='mb-2' type="text" name='heading' id='heading' placeholder='You heading'>
        <textarea class='mb-2' name='message' id='message' class='form-control w-50' plasholder='Your message'></textarea>
        <button class='btn btn-primary' type='submit'>Submit</button>
    </form>

    @if($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error}}
                    </li>
                @endforeach
            </ul>

        </div>
    @endif
</div>
@endsection