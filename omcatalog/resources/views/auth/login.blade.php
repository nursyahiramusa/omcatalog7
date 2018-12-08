@extends('layouts.master')

@section('content')

<div class="span9">
    <ul class="breadcrumb">
        <li><a href="../">Home</a> <span class="divider">/</span></li>
        <li class="active">Login</li>
    </ul>
    <h3>Login to continue</h3>  
    <div class="well">
    <!--
    <div class="alert alert-info fade in">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
     </div>
    <div class="alert fade in">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
     </div>
     <div class="alert alert-block alert-error fade in">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
     </div> -->
    <form class="form-horizontal" action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}

        <div class="control-group">
            <label class="control-label" for="inputFname">Email Address <sup>*</sup></label>
            <div class="controls">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="aditionalInfo">Password</label>
            <div class="controls">
              <input id="password" type="password" class="form-control" name="password" required>
              @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    
    <div class="control-group">
            <div class="controls">
                <input type="hidden" name="email_create" value="1">
                <input type="hidden" name="is_new_customer" value="1">
                <input class="btn btn-large btn-success" type="submit" value="Login">
            </div>
        </div>      
    </form>
</div>

</div>

@endsection