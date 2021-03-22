@extends('layouts.main')

@section('content')

<h1> Create page here</h1>

<div class="container">

<!-- Default form register -->
<form class="text-center border border-light p-5" method="POST" action="{{route('store')}}">

  {{ csrf_field() }}

    <p class="h4 mb-4">Add Students</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstname" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastname" placeholder="Last name">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail"  name="email" class="form-control mb-4" placeholder="E-mail">

    

    <!-- Phone number -->
    <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
    <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
    </small>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

   
</form>
<!-- Default form register -->

</div>



@endsection