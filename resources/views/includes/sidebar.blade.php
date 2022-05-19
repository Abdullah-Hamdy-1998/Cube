   <!--- Sidemenu -->
   <div id="sidebar-menu">
       <!-- Left Menu Start -->
       <ul class="metismenu" id="side-menu">

           <li>
               <a href="{{ route('home') }}" class="waves-effect mt-5 ">
                   <i class="eva eva-home"></i><span> Home
                   </span>
               </a>
           </li>

           <li>
               <a href="{{ route('users.index') }}" class="waves-effect sidebar-tab"
                   data-route="{{ route('users.index') }}"><i class="eva eva-people"></i></i><span>
                       Users
                       <span class="float-right menu-arrow"></a>

           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-file-text"></i> <span> Data
                       <span class="float-right menu-arrow"><i class="eva eva-arrow-ios-forward"></i></span> </span> </a>
               <ul class="submenu">
                   <li><a href="{{ route('items.index') }}" class="sidebar-tab"
                           data-route="{{ route('items.index') }}">Items</a></li>
                   <li><a href="{{ route('suppliers.index') }}" class="sidebar-tab"
                           data-route="{{ route('suppliers.index') }}">Suppliers</a></li>
                   <li><a href="{{ route('customers.index') }}" class="sidebar-tab"
                           data-route="{{ route('customers.index') }}">Customers</a></li>
                   <li><a href="{{ route('infos.index') }}" class="sidebar-tab"
                           data-route="{{ route('infos.index') }}">Shipments Types</a></li>
               </ul>
           </li>

           <li>
               <a href="{{ route('shipments.index') }}" class="waves-effect sidebar-tab"
                   data-route="{{ route('shipments.index') }}"><i class="eva eva-shopping-bag"></i>
                   <span>
                       Shipments
                   </span>
               </a>
           </li>

           <li>
               <a href="{{ route('inventory') }}" class="waves-effect sidebar-tab"
                   data-route="{{ route('inventory') }}"><i class="eva eva-clipboard"></i><span>
                       Inventory
               </a>

           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-clipboard"></i><span> Reports
                       <span class="float-right menu-arrow"><i class="eva eva-arrow-ios-forward"></i></span> </span></a>
               <ul class="submenu">
                   <li><a href="{{ route('reports') }}" class="sidebar-tab"
                           data-route="{{ route('reports') }}">Activity Log</a></li>
               </ul>
           </li>

           <li>
               <a href="javascript:void(0);" class="waves-effect"><i class="eva eva-trash-2"></i><span> Trash
                       <span class="float-right menu-arrow"><i class="eva eva-arrow-ios-forward"></i></span> </span></a>
               <ul class="submenu">
                   <li><a href="{{ route('trash.users') }}" class="sidebar-tab"
                           data-route="{{ route('trash.users') }}">Users</a></li>
                   <li><a href="{{ route('trash.items') }}" class="sidebar-tab"
                           data-route="{{ route('trash.items') }}">Items</a></li>
                   <li><a href="{{ route('trash.suppliers') }}" class="sidebar-tab"
                           data-route="{{ route('trash.suppliers') }}">Suppliers</a></li>
                   <li><a href="{{ route('trash.customers') }}" class="sidebar-tab"
                           data-route="{{ route('trash.customers') }}">Customers</a></li>
                   <li><a href="{{ route('trash.shipments-types') }}" class="sidebar-tab"
                           data-route="{{ route('trash.shipments-types') }}">Shipments Types</a></li>
               </ul>
           </li>

           <li>
               <a href="{{ route('settings') }}" class="waves-effect sidebar-tab"
                   data-route="{{ route('settings') }}"><i class="eva eva-settings-2"></i>
                   <span>
                       Settings
                       <span class="float-right menu-arrow"></a>
           </li>

           <li>
               <a href="{{ route('about') }}" class="waves-effect"><i class="eva eva-alert-circle"></i><span> About
                       <span class="float-right menu-arrow"></a>
           </li>
       </ul>

   </div>

   <!-- Sidebar -->
   <div class="clearfix"></div>



   <script>
       $(document).on('click', '.sidebar-tab', function(e) {
           e.preventDefault();
           var route = $(this).data("route");
           console.log(route);
           $.ajax({
               type: "GET",
               url: route,
               success: function() {
                   window.location = route;
               },
               error: function() {
                   alert('This action is unauthorized');
               }

           });
       });
   </script>
