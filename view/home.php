<?php
include "section/header.php";
?>
<div class="row">
    <div class="w-25 center col sticky-top">
        <div class="w-100 col mt-2 center">
            <h1 class="text-banner">PHunctional PHP</h1>
            <h2 class="text-subheader">Functional PHP Framework</h2>
        </div>
        <div class="w-100 mt-2 col">
            <a class="w-100" href="#intro" class="white"><button class="w-100 mar-0">Introduction</button></a>
            <a class="w-100" href="#structure" class="white"><button class="w-100 mar-0">Structure</button></a>
            <a class="w-100" href="#install" class="white"><button class="w-100 mar-0">Installation</button></a>
            <a class="w-100" href="#first_app" class="white"><button class="w-100 mar-0">Build Your First App</button></a>
            <a class="w-100" href="#routing" class="white"><button class="w-100 mar-0">Routing</button></a>
            <a class="w-100" href="#views" class="white"><button class="w-100 mar-0">Views</button></a>
        </div>
    </div>
    <div class="w-75 pad col bg-white">
        <div class="pad-section col w-100" id="intro">
            <h1 class="text-header mar-big">Introduction</h1>
            <p>PHunctional PHP is a functional PHP framework.</p>
            <p class=" ml-2 mb-2 mt-2 i">Today's development uses complicated or too much abstraction of codes, it doesn't have to be that way.</p>
            <p>Doesn't it cool to easily know what the code does in one look?</p>
            <p>Doesn't it cool to focus on the output rather than wasting your time on technical stuffs?</p>
            <p>Doesn't it cool to use a framework imediately without overwhelming configurations and dependencies?</p>
            <p class="mt-2 mb-1">This is what PHuncional PHP is all about.</p>
        </div>
        <div class="pad-section col w-100" id="structure">
            <h1 class="text-header mar-big">Structure</h1>
            <p class=" ml-2 i">Here is the basic directory structure of PHTMX.</p>
            <ul class="mt-2 mb-2">
                <li>> api</li>
                <li>> lib</li>
                <li>
                    <ul class="col">
                        <li>- Database.php</li>
                        <li>- Helper.php</li>
                        <li>- Sql.php</li>
                    </ul>
                </li>
                <li>> public</li>
                <li>
                    <ul class="col">
                        <li>>css</li>
                        <li>>js</li>
                        <li>>res</li>
                    </ul>
                </li>
                <li>> view</li>
                <li>
                    <ul class="col">
                        <li>>section</li>
                        <li>
                            <ul class="col">
                                <li>- header.php</li>
                                <li>- footer.php</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>- .htaccess</li>
                <li>- index.php</li>
                <li>- README.md</li>
                <li>- routes.php</li>
            </ul>
        </div>
        <div class="pad-section col" id="routing">
            <h1 class="text-header mar-big">Routing</h1>
            <p class=" ml-2 mb-2 i">Place your routes inside routes.php.</p>
            <p class="mb-1">There are only 3 functions for creating routes.</p>
            <p>1. view(routeName,fileName)</p>
            <p class="ml-2 mb-1 mt-1">Use this function to show views.</p>
            <p class="ml-2">[routeName] - Custom named route.</p>
            <p class="ml-2 mb-2">[fileName] - File to call inside view folder.</p>
            <p>2. post(routeName,fileName)</p>
            <p class="ml-2 mb-1 mt-1">Use this function for POST requests.</p>
            <p class="ml-2">[routeName] - Custom named route.</p>
            <p class="ml-2 mb-2">[fileName] - File to call inside api folder.</p>
            <p>3. get(routeName,fileName)</p>
            <p class="ml-2 mb-1 mt-1">Use this function for GET requests.</p>
            <p class="ml-2">[routeName] - Custom named route.</p>
            <p class="ml-2">[fileName] - File to call inside api folder.</p>
            <p class="mb-1 mt-2">Sample routes.php</p>
            <div class="ml-2 bg-dark-gray pad-big">
                <p class="white">
                    <code>
                        &lt;?php
                        <br><br>
                        <span class="success">//api routes</span>
                        <br>
                        <span class="warning">post(<span class="string">"validateLogin"</span>,<span class="string">"login"</span>);</span>
                        <br>
                        <span class="warning">get(<span class="string">"getUsers"</span>,<span class="string">"users/all"</span>);</span>
                        <br><br>
                        <span class="success">//views routes</span>
                        <br>
                        <span class="warning">view(<span class="string">""</span>,<span class="string">"home"</span>);</span>
                        <br><br>
                        <span class="success">//show not found message if route not found</span>
                        <br>
                        <span class="warning">notFound();</span>
                    </code></p>
            </div>
        </div>
        <div class="pad-section col" id="views">
            <h1 class="text-header mar-big">Views</h1>
            <p class=" ml-2 mb-2 i">Place your views inside view folder.</p>
            <p class="mb-1">Let's create a view for our default route.</p>
            <p>view/home.php</p>
            <div class="ml-2 bg-dark-gray pad-big">
                <p class="white">
                    <code>
                        &lt;?php include <span class="string">"section/header.php";</span>?&gt;
                        <br><br>
                        <span class="info">&lt;h1&gt; Hello World! &lt;/h1&gt;</span>
                        <br><br>
                        &lt;?php include <span class="string">"section/footer.php";</span>?&gt;
                        <br>
                    </code></p>
            </div>
        </div>
    </div>
</div>
<?php
include "section/footer.php";