<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="{{url('/')}}"><img src="{{asset('bootshop/themes/images/logo.png')}}" alt="Bootsshop"/></a>
		
    @if(Auth::guest())
    <ul id="topMenu" class="nav pull-right">
	 <li class="">
	 <a href="../login" role="button" data-toggle="modal" style="padding-right:0"><span style="width:100px;" class="btn btn-large btn-success">Login</span></a>
	 <a href="../register" role="button" data-toggle="modal" style="padding-right:0"><span style="width:100px;" class="btn btn-large btn-success">Register</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}
			  <div class="control-group">								
				<input type="text" id="inputEmail" name="email" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" name="password" placeholder="Password">
			  </div>
			<button type="submit" class="btn btn-success">Sign in</button>
			</form>		
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
    @else
    <ul id="topMenu" class="nav pull-right">

    <li class=""><a href="{{ url('invoice/list') }}">My Invoices</a></li>
    <li class=""><a href="{{ url('confirmations') }}">Payment</a></li>
	    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Logout</span></a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
	</ul>
    @endif
  </div>