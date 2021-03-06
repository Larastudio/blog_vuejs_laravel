 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <router-link to="/admints"><i class="menu-icon fa fa-laptop"></i>Dashboard </router-link>
                    </li>
                    <li class="menu-title">UI elements</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Post</a>
                        <ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-plus-square-o"></i>
                            <router-link to="/admints/posts/create">New Post</router-link>
                        </li>
                            <li><i class="fa fa-table"></i>
                                <router-link to="/admints/posts">All Posts</router-link>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Category</a>
                        <ul class="sub-menu children dropdown-menu">                            
                            <li><i class="fa fa-plus-square-o"></i>
                                <router-link to="/admints/categories/create" >New Category</router-link>
                            </li>
                            <li><i class="fa fa-plus-square-o"></i>
                                <router-link to="/admints/categories" >All Categories</router-link>
                            </li>
                         </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Users</a>
                        <ul class="sub-menu children dropdown-menu">                            
                        <li><i class="fa fa-table"></i><router-link to="/admints/users/create" >New User</router-link></li>
                        <li><i class="fa fa-table"></i><router-link to="/admints/users" >All Users</router-link></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown show">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="menu-icon fa fa-cogs"></i>Setting</a>
                        <ul class="sub-menu children dropdown-menu show"><li class="subtitle"> <i class="menu-icon fa fa-cogs"></i>Setting</li>                            
                            <li><i class="fa fa-puzzle-piece"></i><router-link t0="/admints/information">Bussiness Information</router-link></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>