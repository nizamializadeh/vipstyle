<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{asset('admin/images/user.png')}}" width="48" height="48" alt="User" />
        </div>
        {{--<div class="info-container">--}}
            {{--<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->name }}</div>--}}
            {{--<div class="email">{{auth()->user()->email}}</div>--}}
            {{--<div class="btn-group user-helper-dropdown">--}}
                {{--<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>--}}
                {{--<ul class="dropdown-menu pull-right">--}}
                    {{--<li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>--}}
                    {{--<li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>--}}
                    {{--<li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>--}}
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    {{--<div class="menu">--}}
        {{--<ul class="list">--}}
            {{--<li class="header">MAIN NAVIGATION</li>--}}
            {{--<li class="{{request()->routeIs('dashboard') ? 'active' : ''}}">--}}
                {{--<a href="{{route('dashboard')}}">--}}
                    {{--<i class="material-icons">dashboard</i>--}}
                    {{--<span>Dashboard</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="{{(request()->routeIs('author.index') || request()->routeIs('tag.index') || request()->routeIs('category.index')) ? 'active' : ''}}">--}}
                {{--<a href="javascript:void(0);" class="menu-toggle ">--}}
                    {{--<i class="material-icons">fiber_new</i>--}}
                    {{--<span>News managment</span>--}}
                {{--</a>--}}
                {{--<ul class="ml-menu">--}}
                    {{--<li class="{{request()->routeIs('post.index') ? 'active' : ''}}">--}}
                        {{--<a href="{{route('post.index')}}">Post</a>--}}
                    {{--</li>--}}
                    {{--<li class="{{request()->routeIs('author.index') ? 'active' : ''}}">--}}
                        {{--<a href="{{route('author.index')}}">Authors</a>--}}
                    {{--</li>--}}
                    {{--<li class="{{request()->routeIs('tag.index') ? 'active' : ''}}">--}}
                        {{--<a href="{{route('tag.index')}}">Tags</a>--}}
                    {{--</li>--}}
                    {{--<li class="{{request()->routeIs('category.index') ? 'active' : ''}}">--}}
                        {{--<a href="{{route('category.index')}}">Categories</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="{{request()->routeIs('team.index') ? 'active' : ''}}">--}}
                {{--<a href="{{route('team.index')}}">--}}
                    {{--<i class="material-icons">group</i>--}}
                    {{--<span>Teams</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2018 <a href="javascript:void(0);">Kodera</a>.
        </div>
    </div>
    <!-- #Footer -->
</aside>