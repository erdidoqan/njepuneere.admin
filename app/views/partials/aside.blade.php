

<aside id="left-panel" style="position:fixed;">
	<div class="login-info">
		<span>
			<a href="#">
				<img class="online" alt="me" src="/img/logo.png">
				<span>Erdi Dogan</span><i class="fa fa-angle-down"></i>
			</a>
		</span>
	</div>
	<nav>
		<ul style="">
			<li class="{{Request::path() == 'dashboard' ? 'active' : ''}}">
				<a title="Dashboard" href="dashboard">
					<i class="fa fa-lg fa-fw fa-home"></i> 
					<span class="menu-item-parent">Dashboard</span>
				</a>
			</li>
			<li class="{{Request::path() == 'create-job' ? 'active' : ''}}">
				<a title="create-job" href="create-job">
					<i class="fa fa-lg fa-fw fa-edit"></i> 
					<span class="menu-item-parent">Create JOB</span>
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
				</ul>
			</li>
			<li>
				<a title="Graphs" href="#">
					<i class="fa fa-lg fa-fw fa-institution"></i> 
					<span class="menu-item-parent">Institution</span>
						<b class="collapse-sign"><em class="fa fa-plus-square-o"></em></b>
				</a>
				<ul style="display: none;">
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
		</ul>

	</nav>
</aside>


