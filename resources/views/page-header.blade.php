
	<!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">{{ Str::upper(Str::plural(str_replace('-', ' ', request()->segment(3)))) }}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <a href="{{ route('users.create') }}" class="btn add-btn" data-toggle1="modal" data-target1="#add_user"><i class="fa fa-plus"></i> Add User</a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
