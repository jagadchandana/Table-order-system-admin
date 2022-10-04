<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
 <x-libraries.meta/>
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
 <x-libraries.styles/>
</head>

<body class="g-sidenav-show  bg-gray-100">
 <x-components.side-bar/>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <x-components.nav-bar/>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        {{ $content }}
    <x-components.footer/>
    </div>
  </main>
  <x-components.settings-button/>
  <!--   Core JS Files   -->
  <x-libraries.scripts/>
</body>

</html>
