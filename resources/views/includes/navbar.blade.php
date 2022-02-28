<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}" data-toggle="tooltip" data-original-title="{{ setting('company_name') }}">
                @if (setting('company_logo'))
                <img alt="{{ setting('company_name') }}"
                    height="45"
                    class="navbar-brand-img"
                    src="{{ asset(setting('company_logo')) }}">
                @else
                {{ substr(setting('company_name'), 0, 15) }}...
                @endif
            </a>
            <div class=" ml-auto ">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('admin/home*')) ? 'active' : '' }}" href="{{route('home')}}">
                            <i class="ni ni-shop text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    @can('update-settings')
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/settings*')) ? 'active' : '' }}" href="{{route('settings.index')}}">
                                <i class="ni ni-settings-gear-65 text-primary"></i>
                                <span class="nav-link-text">Manage Settings</span>
                            </a>
                        </li>
                    @endcan

                    @canany(['view-category', 'create-category'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/category*')) ? 'active' : '' }}" href="#navbar-category"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Manage Category</span>
                            </a>
                            <div class="collapse" id="navbar-category">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-category')
                                    <li class="nav-item">
                                        <a href="{{route('category.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Categories</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('category.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Category</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>

                    @endcan

                    @canany('manage-dnc')
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/dnc*')) ? 'active' : '' }}" href="#navbar-dnc"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Manage DNC</span>
                            </a>
                            <div class="collapse" id="navbar-dnc">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-category')
                                    <li class="nav-item">
                                        <a href="{{route('dnc.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All DNC</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('dnc.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New DNC</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>

                    @endcan
                    
                    
                    @canany('manage-zonalcord')
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/zones*')) ? 'active' : '' }}" href="#navbar-zonalcord"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="zonalcord">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Manage Zones</span>
                            </a>
                            <div class="collapse" id="navbar-zonalcord">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-category')
                                    <li class="nav-item">
                                        <a href="{{route('zones.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Zones</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('zones.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Zones</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endcan

                    @canany('manage-statecord')
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/statecord*')) ? 'active' : '' }}" href="#navbar-statecord"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="statecord">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Manage State Cord.</span>
                            </a>
                            <div class="collapse" id="navbar-statecord">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-category')
                                    <li class="nav-item">
                                        <a href="{{route('statecord.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All State Cord.</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('statecord.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New State Cord</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endcan

                    @canany(['view-category', 'create-category'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/gallery*')) ? 'active' : '' }}" href="#navbar-gallery"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Manage Gallery</span>
                            </a>
                            <div class="collapse" id="navbar-gallery">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-category')
                                    <li class="nav-item">
                                        <a href="{{route('gallery.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">DNC Gallery</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-category')
                                    <li class="nav-item">
                                        <a href="{{route('gallery.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Gallery</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>

                    @endcan

                    @canany(['view-state', 'create-state'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/state*')) ? 'active' : '' }}" href="#navbar-state"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-category">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Manage State</span>
                            </a>
                            <div class="collapse" id="navbar-state">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-state')
                                    <li class="nav-item">
                                        <a href="{{route('state.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All States</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-state')
                                    <li class="nav-item">
                                        <a href="{{route('state.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New State</span></a>
                                    </li>
                                    @endcan
                                    {{-- @can( 'create-state')
                                    <li class="nav-item">
                                        <a href="{{route('state.activity')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">State Activities</span></a>
                                    </li>
                                    @endcan --}}
                                </ul>
                            </div>
                        </li>

                    @endcan

                    @canany(['view-state', 'create-state'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/state-event*')) ? 'active' : '' }}" href="#navbar-state-activity"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-state-activity">
                                <i class="fas text-primary fa-list-alt"></i>
                                <span class="nav-link-text">Manage State Events</span>
                            </a>
                            <div class="collapse" id="navbar-state-activity">
                                <ul class="nav nav-sm flex-column">
                                 
                                    @can( 'view-state')
                                    <li class="nav-item">
                                        <a href="{{route('state-event.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">State Events</span></a>
                                    </li>
                                    @endcan
                                 
                                    @can( 'create-state')
                                    <li class="nav-item">
                                        <a href="{{route('state-event.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Create State Events</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>

                    @endcan

                    @canany(['view-post', 'create-post'])

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/post*')) ? 'active' : '' }}" href="#navbar-post"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-post">
                                <i class="fas text-primary fa-tasks"></i>
                                <span class="nav-link-text">Manage Posts</span>
                            </a>
                            <div class="collapse" id="navbar-post">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-post')
                                    <li class="nav-item">
                                        <a href="{{route('post.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Posts</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-post')
                                    <li class="nav-item">
                                        <a href="{{route('post.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Post</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endcan
                    @canany(['view-user', 'create-user'])

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/users*')) ? 'active' : '' }}" href="#navbar-users"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-users">
                                <i class="fas text-primary fa-tasks"></i>
                                <span class="nav-link-text">Manage Users</span>
                            </a>
                            <div class="collapse" id="navbar-users">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-user')
                                    <li class="nav-item">
                                        <a href="{{route('users.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Users</span></a>
                                    </li>
                                    @endcan

                                    @can( 'create-user')
                                    <li class="nav-item">
                                        <a href="{{route('users.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New User</span></a>
                                    </li>
                                    @endcan

                                    @can( 'create-user')
                                    <li class="nav-item">
                                        <a href="{{route('zonal_state_cord.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">New Zonal&State Cord</span></a>
                                    </li>
                                    @endcan
                                </ul>
                            </div>
                        </li>
                    @endcan

                       @canany(['view-user', 'create-user'])

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/desk*')) ? 'active' : '' }}" href="#navbar-desk"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-users">
                                <i class="fas text-primary fa-tasks"></i>
                                <span class="nav-link-text">Manage Desk</span>
                            </a>
                            <div class="collapse" id="navbar-desk">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-user')
                                    <li class="nav-item">
                                        <a href="{{route('desk.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Desks</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-user')
                                    <li class="nav-item">
                                        <a href="{{route('desk.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Desk</span></a>
                                    </li>
                                    @endcan

                                </ul>
                            </div>
                        </li>
                    @endcan
                       @canany(['view-user', 'create-user'])

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/slider*')) ? 'active' : '' }}" href="#navbar-slider"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-users">
                                <i class="fas text-primary fa-tasks"></i>
                                <span class="nav-link-text">Manage Slider</span>
                            </a>
                            <div class="collapse" id="navbar-slider">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-user')
                                    <li class="nav-item">
                                        <a href="{{route('slider.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Sliders</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-user')
                                    <li class="nav-item">
                                        <a href="{{route('slider.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Slider</span></a>
                                    </li>
                                    @endcan

                                </ul>
                            </div>
                        </li>
                    @endcan

                       @canany(['view-user', 'create-user'])

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/service*')) ? 'active' : '' }}" href="#navbar-service"  data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-services">
                                <i class="fas text-primary fa-tasks"></i>
                                <span class="nav-link-text">Manage Services</span>
                            </a>
                            <div class="collapse" id="navbar-service">
                                <ul class="nav nav-sm flex-column">
                                 @can('view-user')
                                    <li class="nav-item">
                                        <a href="{{route('service.index')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">All Services</span></a>
                                    </li>
                                    @endcan
                                    @can( 'create-user')
                                    <li class="nav-item">
                                        <a href="{{route('service.create')}}" class="nav-link"><span class="sidenav-mini-icon">D </span><span class="sidenav-normal">Add New Service</span></a>
                                    </li>
                                    @endcan

                                </ul>
                            </div>
                        </li>
                    @endcan

                    @canany(['view-permission', 'create-permission'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/permissions*')) ? 'active' : '' }}" href="{{route('permissions.index')}}">
                                <i class="fas fa-lock-open text-primary"></i>
                                <span class="nav-link-text">Manage Permissions</span>
                            </a>
                        </li>
                    @endcan
                    @canany(['view-role', 'create-role'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('roles*')) ? 'active' : '' }}" href="{{route('roles.index')}}">
                                <i class="fas fa-lock text-primary"></i>
                                <span class="nav-link-text">Manage Roles</span>
                            </a>
                        </li>
                    @endcan

                    @canany(['media'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/media*')) ? 'active' : '' }}" href="{{route('media.index')}}">
                                <i class="fas fa-images text-primary"></i>
                                <span class="nav-link-text">Manage Media</span>
                            </a>
                        </li>
                    @endcan
                    @canany(['view-activity-log'])
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('admin/activity-log*')) ? 'active' : '' }}" href="{{route('activity-log.index')}}">
                                <i class="fas fa-history text-primary"></i>
                                <span class="nav-link-text">Activity Log</span>
                            </a>
                        </li>
                    @endcan
                    <li class="nav-item">
                        <hr class="my-3">
                    </li>
                    <li class="nav-item">
                            <a class="nav-link active active-pro" href="{{route('components')}}">
                                <i class="ni ni-send text-primary"></i>
                                <span class="nav-link-text">Components</span>
                            </a>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
