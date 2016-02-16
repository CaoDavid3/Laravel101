<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EPL Library</title>
    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div id="header">
    <img src="/public/EPL_logo.jpg" style="width:100%;height:125px;">
</div>

<div id="nav">
    <ul class="menu">
        <li><a @yield('currentHome') href="home">Home</a></li>
        <li><a @yield('currentGoal') href="goal">Goals</a></li>
        <li><a @yield('currentGroup') href="group">Team/Department</a></li>
        <ul class="info">
            <li><a @yield('currentAbout') href="about">About</a></li>
            <li><a @yield('currentLogin') href="login">Login</a></li>
        </ul>
    </ul>
    <div id="tableContainer">
        <div id="tableRow">
            <div id="profile">
                @yield('profile')
            </div>
            <div id="main">
                @yield('main')
            </div>
            <div id="sidebar">
                @yield('sidebar')
            </div>
        </div>
    </div>
</div>

<div id="footer">
    Edmonton Public Library
</div>

</body>
</html>
