<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" width="50" height="50"
                             src="<?php echo $this->request->webroot; ?>img/admin.jpeg" />
                    </span>
                    <span class="clear"> 
                        <span class="block m-t-xs"> 
                            <strong class="font-bold" style="color: #fff;">
                                <?php 
                                $session = $this->request->session();
                                echo $session->read('Auth.User.first_name').
                                        ' '.$session->read('Auth.User.last_name'); 
                                ?>
                            </strong>
                    </span> 
                </div>
            </li>
            <li class="<?php echo $this->request->controller == 'Users' ? 'active' : ''; ?>">
                <a href="<?php echo $this->Url->build([
                    'controller' => 'Users',
                    'action' => 'index'
                    ]); ?>">
                    <i class="fa fa-users"></i> 
                    <span class="nav-label">Users</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse
                    <?php echo $this->request->controller == 'Users' ? 'in' : ''; ?>
                    ">
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'Users',
                            'action' => 'add'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'Users' 
                                    && $this->request->action == 'add'? 'active' : ''; ?>"
                            >
                            Add New
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'Users',
                            'action' => 'index'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'Users' 
                                    && $this->request->action == 'index'? 'active' : ''; ?>"
                            >Users List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $this->request->controller == 'ServiceFacilities' ? 'active' : ''; ?>">
                <a href="<?php echo $this->Url->build([
                    'controller' => 'ServiceFacilities',
                    'action' => 'index'
                    ]); ?>">
                    <i class="fa fa-gears"></i> 
                    <span class="nav-label">Service Facilities</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse
                    <?php echo $this->request->controller == 'ServiceFacilities' ? 'in' : ''; ?>
                    ">
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'ServiceFacilities',
                            'action' => 'add'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'ServiceFacilities' 
                                    && $this->request->action == 'add'? 'active' : ''; ?>"
                            >
                            Add New
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'ServiceFacilities',
                            'action' => 'index'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'ServiceFacilities' 
                                    && $this->request->action == 'index'? 'active' : ''; ?>"
                            >Service Facilities List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $this->request->controller == 'Types' ? 'active' : ''; ?>">
                <a href="<?php echo $this->Url->build([
                    'controller' => 'Types',
                    'action' => 'index'
                    ]); ?>">
                    <i class="fa fa-plane"></i> 
                    <span class="nav-label">Types</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse
                    <?php echo $this->request->controller == 'Types' ? 'in' : ''; ?>
                    ">
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'Types',
                            'action' => 'add'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'Types' 
                                    && $this->request->action == 'add'? 'active' : ''; ?>"
                            >
                            Add New
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'Types',
                            'action' => 'index'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'Types' 
                                    && $this->request->action == 'index'? 'active' : ''; ?>"
                            >Types List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $this->request->controller == 'Families' ? 'active' : ''; ?>">
                <a href="<?php echo $this->Url->build([
                    'controller' => 'Families',
                    'action' => 'index'
                    ]); ?>">
                    <i class="fa fa-paper-plane-o"></i> 
                    <span class="nav-label">Families</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse
                    <?php echo $this->request->controller == 'Families' ? 'in' : ''; ?>
                    ">
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'Families',
                            'action' => 'add'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'Families' 
                                    && $this->request->action == 'add'? 'active' : ''; ?>"
                            >
                            Add New
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'Families',
                            'action' => 'index'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'Families' 
                                    && $this->request->action == 'index'? 'active' : ''; ?>"
                            >Families List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $this->request->controller == 'Regions' ? 'active' : ''; ?>">
                <a href="<?php echo $this->Url->build([
                    'controller' => 'Regions',
                    'action' => 'index'
                    ]); ?>">
                    <i class="fa fa-map-marker"></i> 
                    <span class="nav-label">Regions</span> 
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse
                    <?php echo $this->request->controller == 'Regions' ? 'in' : ''; ?>
                    ">
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'Regions',
                            'action' => 'add'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'Regions' 
                                    && $this->request->action == 'add'? 'active' : ''; ?>"
                            >
                            Add New
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Url->build([
                            'controller' => 'Regions',
                            'action' => 'index'
                            ]); ?>"
                            class="<?php echo $this->request->controller == 'Regions' 
                                    && $this->request->action == 'index'? 'active' : ''; ?>"
                            >Regions List
                        </a>
                    </li>
                </ul>
            </li>
            
            
            
        </ul>

    </div>
</nav>