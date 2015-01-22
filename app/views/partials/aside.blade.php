

<aside id="left-panel" style="position:fixed;">
	<div class="login-info">
		<span>
			<a href="#">
				<span>{{Auth::user()->name." ".Auth::user()->surname}}</span>
			</a>
		</span>
	</div>
	<nav>
		<ul style="">
			<li class="{{Request::path() == 'dashboard' ? 'active' : ''}}">
				<a title="Dashboard" href="/dashboard">
					<i class="fa fa-lg fa-fw fa-home"></i> 
					<span class="menu-item-parent">Dashboard</span>
				</a>
			</li>
			<li class="{{Request::path() == 'create-comp' ? 'active' : ''}}">
				<a title="create-comp" href="/create-comp">
					<i class="fa fa-lg fa-fw fa-edit"></i> 
					<span class="menu-item-parent">Create Institution</span>
				</a>
			</li>
			<li class="{{Request::path() == 'language' ? 'active' : ''}}">
				<a title="create-comp" href="/languages">
					<i class="fa fa-lg fa-fw fa-language"></i> 
					<span class="menu-item-parent">Languages</span>
				</a>
			</li>
			<li class="{{Request::path() == 'mailer' ? 'active' : ''}}">
				<a title="create-comp" href="/mailer">
					<i class="fa fa-lg fa-fw fa-inbox"></i> 
					<span class="menu-item-parent">Mailer</span>
				</a>
			</li>
			<li>
				<a title="Graphs" href="#">
					<i class="fa fa-lg fa-fw fa-user"></i> 
					<span class="menu-item-parent">Person</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b>
				</a>
				<ul style="display: none;">
					<li><a href="#"> Add Person</a></li>
					<li><a href="#"> Person Details</a></li>
					<li class="{{Request::path() == 'all_app' ? 'active' : ''}}"><a href="/all_app"> All Apply</a></li>
				</ul>
			</li>
			<li>
				<a title="Graphs" href="#">
					<i class="fa fa-lg fa-fw fa-institution"></i> 
					<span class="menu-item-parent">Institution</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b>
				</a>
				<ul style="display: none;">
					<li class="{{Request::path() == 'all_ins' ? 'active' : ''}}"><a href="/all_ins"> All Institution</a></li>
					<li><a href="#"> Add Institution</a></li>
					<li><a href="#"> Institution Details</a></li>
				</ul>
			</li>
			<li>
				<a title="Graphs" href="#">
					<i class="fa fa-lg fa-fw fa-cube"></i> 
					<span class="menu-item-parent">Job ADS</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b>
				</a>
				<ul style="display: none;">
					<li><a href="#"> Add Job</a></li>
					<li><a href="#"> Job Details</a></li>
				</ul>
			</li>				
			<li>
				<a title="Graphs" href="#">
					<i class="fa fa-lg fa-fw fa-user-md"></i> 
					<span class="menu-item-parent">Admin Profile</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b>
				</a>
				<ul style="display: none;">
					<li><a href="#"> Add Admin</a></li>
					<li><a href="#" class="text-info"> Notes</a></li>
					<li><a class="text-danger" href="/logout"> Exit</a></li>
				</ul>
			</li>						
		</ul>

	</nav>
</aside>


