@if(config('cryspy-template-pkg.DEV'))
    <?php $cryspy_template_pkg_prefix = '/packages/abs/cryspy-template-pkg/src/';?>
@else
    <?php $cryspy_template_pkg_prefix = '';?>
@endif
<header>
    <nav id="nav" class="navbar navbar-default navbar-light navbar-expand-lg">
		<a class="navbar-brand"><img class="img-responsive" src="{{ asset($cryspy_template_pkg_prefix.'public/themes/'.$theme.'/img/logo.svg') }}" alt="Logo"/></a>
		<button type="button" id="toggle-btn" class="navbar-toggler navbar-toggle-icon collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left mr-auto">
				<li class="active"><a class="">Dashboard</a></li>
				<li class="dropdown down-arrow master_link">
					<i class="fas fa-angle-down"></i>
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Masters</a>
					<ul class="dropdown-menu divider-menu">
						<li><a>Companies (ng)</a></li>
						<li><a>Roles</a></li>
						<li><a>Roles</a></li>
						<li><a>Roles</a></li>
						<li><a>Roles</a></li>
						<li><a>Roles</a></li>
						<li class="dropdown normal-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Virtual Account Master</a>
							<ul class="dropdown-menu subdropdown-menu">
								<li>
									<a>Virtual Codes</a>
								</li>
							</ul>
						</li>
					</ul>

				</li>
				<li class="dropdown down-arrow dashboard_link">
					<i class="fas fa-angle-down"></i>
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="cancetrue" aria-expanded="false">Single</a>
					<ul class="dropdown-menu single-menu">
						<li><a>Summary</a></li>
						<li><a>Day wise Split-up</a></li>
					</ul>
				</li>
				<li class="import_data"><a>Import Data</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- enable after implementation -->
				<li class="select-biz dropdown normal-dropdown">
					<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="menu-label">Business</span>
						<span class="manu-label-value">DAL</span>
						<i class="down-arrow fas fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a class="card-inner">BPAS</a>
						</li>
						<li>
							<a class="card-inner">BPAS</a>
						</li>
						<li>
							<a class="card-inner">BPAS</a>
						</li>
						<li>
							<a class="card-inner">BPAS</a>
						</li>
					</ul>
				</li>
				<li class="profile dropdown normal-dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span>
							Radha Krishnan
							<small>Administrator</small>
							<small>TVS Auto Assist</small>
						</span>
						<img class="img-responsive" alt="User Avatar" src="{{ asset($cryspy_template_pkg_prefix.'public/themes/'.$theme.'/img/avatar.jpg') }}"/>
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item">Profile</a></li>
						<li><a class="dropdown-item">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
    </nav>
</header><!-- Header -->
