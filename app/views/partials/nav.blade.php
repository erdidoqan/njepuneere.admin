
<header id="header" style="position:fixed;width:100%;margin-top:-72px;">
	<div id="logo-group">
		<span id="logo"> <img alt="njepuneere" style="margin-top:-15px;" src="/img/logo.png"> </span>
	</div>
	<div class="project-context hidden-xs">
		<span class="label">Projects:</span>
		<span data-toggle="dropdown" class="popover-trigger-element dropdown-toggle" id="project-selector">Recent projects <i class="fa fa-angle-down"></i></span>
		<ul class="dropdown-menu">
			<li>
				<a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
			</li>
			<li>
				<a href="javascript:void(0);">Notes on pipeline upgradee</a>
			</li>
			<li>
				<a href="javascript:void(0);">Assesment Report for merchant account</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
			</li>
		</ul>
	</div>
	<div class="pull-right">
		<div class="btn-header pull-right" id="hide-menu">
			<span> <a data-action="toggleMenu" title="Collapse Menu" href="javascript:void(0);"><i class="fa fa-reorder"></i></a> </span>
		</div>
		<div class="btn-header transparent pull-right" id="logout">
			<span> <a data-logout-msg="You can improve your security further after logging out by closing this opened browser" data-action="userLogout" title="Sign Out" href="logout"><i class="fa fa-sign-out"></i></a> </span>
		</div>
		<div class="pull-right" style="margin-top:18px;">
			<span>IP Address: <code>({{Auth::user()->admin_ip}})</code></span>
		</div>
	</div>
</header>
