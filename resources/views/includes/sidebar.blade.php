   <!--- Sidemenu -->
   <div id="sidebar-menu">
       <!-- Left Menu Start -->
       <ul class="metismenu" id="side-menu">

           <li>
               <a href="{{ route('home') }}" class="waves-effect">
                   <i class="eva eva-home"></i><span> Home
                   </span>
               </a>
           </li>

           <li>
               <a href="{{ route('users.index') }}" class="waves-effect"><i class="eva eva-people"></i></i><span>
                       Users
                       <span class="float-right menu-arrow"></a>

           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-file-text"></i> <span> Data
                       <span class="float-right menu-arrow"><i class="eva eva-arrow-ios-forward"></i></span> </span> </a>
               <ul class="submenu">
                   <li><a href="{{ route('items.index') }}">Items</a></li>
                   <li><a href="{{ route('suppliers.index') }}">Suppliers</a></li>
                   <li><a href="{{ route('customers.index') }}">Customers</a></li>
                   <li><a href="{{ route('shipments-types.index') }}">Shipments Types</a></li>
               </ul>
           </li>

           <li>
               <a href="{{ route('shipments.index') }}" class="waves-effect"><i class="eva eva-shopping-bag"></i> <span>
                       Shipments
                   </span>
               </a>
           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-clipboard"></i><span> Inventory
               </a>

           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-clipboard"></i><span> Reports
                       <span class="float-right menu-arrow"><i class="eva eva-arrow-ios-forward"></i></span> </span></a>
               <ul class="submenu">
                   <li><a href="javascript:void(0);">Activity Log</a></li>
               </ul>
           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-trash-2"></i><span> Trash
                       <span class="float-right menu-arrow"><i class="eva eva-arrow-ios-forward"></i></span> </span></a>
               <ul class="submenu">
                   <li><a href="javascript:void(0);">Users</a></li>
                   <li><a href="javascript:void(0);">Items</a></li>
                   <li><a href="javascript:void(0);">Suppliers</a></li>
                   <li><a href="javascript:void(0);">Customers</a></li>
                   <li><a href="javascript:void(0);">Shipments Types</a></li>
               </ul>
           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-settings-2"></i> <span> Settings
                       <span class="float-right menu-arrow"></a>
           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-question-mark-circle"></i><span>
                       Help
                   </span></a>
           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-alert-circle"></i><span> About
                       <span class="float-right menu-arrow"></a>
           </li>
       </ul>

   </div>
   <!-- Sidebar -->
   <div class="clearfix"></div>
