<!doctype html>
<html lang="en" dir="rtl">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
@include('panel.layout.head')
<body class="ltr app sidebar-mini">
<div class="page">
    <div class="page-main">
        <div class="app-content main-content mt-0">
            <div class="side-app">
                <div class="main-container container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@include('panel.layout.foot')
</body>
</html>
