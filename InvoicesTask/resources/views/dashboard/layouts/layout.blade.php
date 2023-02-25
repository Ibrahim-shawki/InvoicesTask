
 
 @include('dashboard.layouts.header')
 <!-- BODY options, add following classes to body to change options
         1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
         2. 'sidebar-nav'		  - Navigation on the left
             2.1. 'sidebar-off-canvas'	- Off-Canvas
                 2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
                 2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
         3. 'fixed-nav'			  - Fixed navigation
         4. 'navbar-fixed'		  - Fixed navbar
     -->
 

    @include('dashboard.layouts.navbar')
    @include('dashboard.layouts.sidebar')


     @yield('main_content')
    
     <!-- Main content -->



     @include('dashboard.layouts.footer')
     @include('dashboard.layouts.js')
 </body>
 
 </html>
 