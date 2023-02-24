<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
 <!DOCTYPE html>
 <html lang="IR-fa" dir="rtl">
 
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
 
 <body class="navbar-fixed sidebar-nav fixed-nav">
    @include('dashboard.layouts.navbar')
    @include('dashboard.layouts.sidebar')


     @yield('main_content')

     <!-- Main content -->


 
     {{-- <main class="main"> --}}
     @include('dashboard.layouts.main_side_bar')


     @include('dashboard.layouts.footer')
     @include('dashboard.layouts.js')
 </body>
 
 </html>
 