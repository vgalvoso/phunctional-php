<?php
include "section/header.php";
?>
<nav class="none mobile-show">
    <div><a href="#top"><button>PHunctional PHP</button></a></div>
</nav>
<div class="row">
    <div class="w-25 center col sticky-top mobile-hide">
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
            <a class="w-100" href="#database" class="white"><button class="w-100 mar-0">Database Setup</button></a>
            <a class="w-100" href="#api" class="white"><button class="w-100 mar-0">Creating an API</button></a>
        </div>
    </div>
    <div class="w-75 pad col bg-white mobile-grow">
        <div class="pad-section col w-100 center" id="top">
            <h1 class="text-banner">PHunctional PHP</h1>
            <h2 class="text-subheader">Functional PHP Framework</h2>
        </div>
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
            <p class=" ml-2 i">Here is the basic directory structure of PHunctional PHP.</p>
            <ul class="mt-2 mb-2">
                <li>> api</li>
                <li>> lib</li>
                <li>
                    <ul class="col">
                        <li>- Database.php</li>
                        <li>- DotEnv.php</li>
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
                <li>> routes</li>
                <li>
                    <ul class="col">
                        <li>- api.php</li>
                        <li>- view.php</li>
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
                <li>- .env</li>
                <li>- .htaccess</li>
                <li>- index.php</li>
                <li>- README.md</li>
            </ul>
        </div>
        <div class="pad-section col w-100" id="install">
            <h1 class="text-header mar-big">Installation</h1>
            <p>Download the <a href="https://github.com/vgalvoso/phunctional-php/releases" class="info u" target="_blank">latest version</a> and extract it on your web server's root folder.</p>
            <p class="mt-1">Then rename the extracted root folder into your project's name.</p>
            <p class="mt-1">Or use composer:</p>
            <div class="ml-2 bg-dark-gray pad-big mt-1 mb-2">
                <p class="white">
                    <code>
                        composer create-project vgalvoso/phunctional your_project_name
                    </code>
                </p>
            </div>
            <p class="mt-1">After extracting or creating your project, open a terminal in your project directory and run:</p>
            <div class="ml-2 bg-dark-gray pad-big mt-1 mb-2">
                <p class="white">
                    <code>
                        composer install
                    </code>
                </p>
            </div>
            <p class="mt-1">This will initialize Composer to let you add dependencies when needed.</p>
        </div>
        <div class="pad-section col w-100" id="first_app">
            <h1 class="text-header mar-big">Build Your First App</h1>
            <p class="mb-2">Hello World! Yes let's create your first hello world using PHunctional PHP.</p>
            <p class="mb-1">After you download and extract the latest version <a href="#install" class="info u">(see installation)</a>, create a php file inside view folder and name it hello_world.php</p>
            <p>Let's assume you named your root folder "helloworld", this is what your project directory might look like:</p>
            <div class="center w-25 mt-2 mb-2 mobile-grow">
                <img src="public/res/img/hello_world.png" width="100%" class="mobile-grow" alt="">
            </div>
            <p>Copy and paste this code inside hello_world.php</p>
            <div class="ml-2 bg-dark-gray pad-big mt-1 mb-2">
                <p class="white">
                    <code id="helloWorldCode" style="cursor:pointer;">
                        &lt;?php include <span class="string">"section/header.php";</span> ?&gt;
                        <br>
                        <span class="info">&lt;h1&gt;Hello World!&lt;/h1&gt;</span>
                        <br>
                        &lt;?php include <span class="string">"section/footer.php";</span>
                    </code>
                </p>
                <button id="copyHelloWorldBtn" class="mt-1">Copy to Clipboard</button>
                <span id="copyHelloWorldMsg" style="display:none; color:limegreen; margin-left:10px;">Copied!</span>
            </div>
            <script>
                document.getElementById('copyHelloWorldBtn').onclick = function() {
                    // Get the code HTML and convert to plain text
                    var codeHtml = document.getElementById('helloWorldCode').innerHTML;
                    // Remove HTML tags and decode entities
                    var tempDiv = document.createElement('div');
                    tempDiv.innerHTML = codeHtml
                        .replace(/<br\s*\/?>/gi, '\n')
                        .replace(/<span[^>]*>/gi, '')
                        .replace(/<\/span>/gi, '');
                    var codeText = tempDiv.textContent || tempDiv.innerText || "";
                    // Copy to clipboard
                    navigator.clipboard.writeText(codeText).then(function() {
                        var msg = document.getElementById('copyHelloWorldMsg');
                        msg.style.display = 'inline';
                        setTimeout(function(){ msg.style.display = 'none'; }, 1200);
                    });
                };
            </script>
            <p>Open routes/web.php and add a new view route. Your routes/web.php should look something like this:</p>
            <div class="ml-2 bg-dark-gray mt-1 mb-2 pad-big">
                <p class="white">
                    <code>
                        &lt;?php
                        <br>
                        <span class="warning">view(<span class="string">""</span>,<span class="string">"home"</span>);</span>
                        <br>
                        <span class="warning">view(<span class="string">"hello"</span>,<span class="string">"hello_world"</span>);</span>
                        <br>
                        <span class="warning">notFound();</span>
                    </code></p>
            </div>
            <p class="mb-1">Now try to access this on your browser <a href="http://localhost/helloworld/hello" class="info u" target="_blank">http://localhost/helloworld/hello</a></p>
            <p>It should look like this:</p>
            <div class="w-100 center mt-1 mb-2 mobile-grow">
                <img src="public/res/img/hello_page.png" width="100%" alt="">
            </div>
            <p>Congratulations! You created your first hello world using PHunctional PHP.</p>
        </div>
        <div class="pad-section col" id="routing">
            <h1 class="text-header mar-big">Routing</h1>
            <p class="ml-2 mb-2 i">Define your routes inside <code>routes/web.php</code> for views and <code>routes/api.php</code> for API endpoints.</p>
            <p class="mb-1">There are 4 functions for creating routes:</p>
            <p>1. <b>view(routeName, fileName)</b></p>
            <p class="ml-2 mb-1 mt-1">Use this function to show views.</p>
            <p class="ml-2">[routeName] - Custom named route.</p>
            <p class="ml-2 mb-2">[fileName] - File to call inside <code>view</code> folder.</p>
            <p>2. <b>post(routeName, fileName)</b></p>
            <p class="ml-2 mb-1 mt-1">Use this function for POST requests.</p>
            <p class="ml-2">[routeName] - Custom named route.</p>
            <p class="ml-2 mb-2">[fileName] - File to call inside <code>api</code> folder.</p>
            <p>3. <b>get(routeName, fileName)</b></p>
            <p class="ml-2 mb-1 mt-1">Use this function for GET requests.</p>
            <p class="ml-2">[routeName] - Custom named route.</p>
            <p class="ml-2 mb-2">[fileName] - File to call inside <code>api</code> folder.</p>
            <p>4. <b>put(routeName, fileName)</b></p>
            <p class="ml-2 mb-1 mt-1">Use this function for PUT requests.</p>
            <p class="ml-2">[routeName] - Custom named route.</p>
            <p class="ml-2 mb-2">[fileName] - File to call inside <code>api</code> folder.</p>
            <p class="mb-1 mt-2">Sample <code>routes/web.php</code>:</p>
            <div class="ml-2 bg-dark-gray pad-big">
            <p class="white">
                <code>
                &lt;?php
                <br>
                <span class="warning">view(<span class="string">""</span>, <span class="string">"home"</span>);</span>
                <br>
                <span class="warning">view(<span class="string">"hello"</span>, <span class="string">"hello_world"</span>);</span>
                <br>
                <span class="warning">notFound();</span>
                </code>
            </p>
            </div>
            <p class="mb-1 mt-2">Sample <code>routes/api.php</code>:</p>
            <div class="ml-2 bg-dark-gray pad-big">
            <p class="white">
                <code>
                &lt;?php
                <br>
                <span class="warning">post(<span class="string">"validateLogin"</span>, <span class="string">"login"</span>);</span>
                <br>
                <span class="warning">get(<span class="string">"getUsers"</span>, <span class="string">"users/all"</span>);</span>
                <br>
                <span class="warning">notFound();</span>
                </code>
            </p>
            </div>
            <p class="mt-2">The <code>notFound()</code> function should be placed at the end to handle unmatched routes.</p>
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
        <div class="pad-section col w-100" id="database">
            <h1 class="text-header mar-big">Database Setup</h1>
            <p class="ml-2 mb-2 i">PHunctional PHP uses a simple <code>Database.php</code> file for database connections. Configuration is managed via the <code>.env</code> file.</p>
            <h2 class="text-subheader mt-1 mb-1">1. Configure <code>.env</code></h2>
            <p>Add your database credentials to the <code>.env</code> file in your project root:</p>
            <div class="ml-2 bg-dark-gray pad-big mt-1 mb-2">
                <p class="white">
                    <code>
APP_ENV=development<br>
DEFAULT_SERVER=localhost<br>
DEFAULT_USER=root<br>
DEFAULT_PASS=root<br>
DEFAULT_DBNAME=helloworld_db<br>
DEFAULT_DRIVER=mysql<br>
DEFAULT_PORT=3306
                    </code>
                </p>
            </div>
            <h2 class="text-subheader mt-1 mb-1">2. Using <code>Database.php</code></h2>
            <p>Here is a sample <code>lib/Database.php</code> file:</p>
            <div class="ml-2 bg-dark-gray pad-big mt-1 mb-2">
                <p class="white">
                    <code>
&lt;?php<br>
$db = array(<br>
&nbsp;&nbsp;"default" =&gt; array(<br>
&nbsp;&nbsp;&nbsp;&nbsp;"server" =&gt; getenv('DEFAULT_SERVER'),<br>
&nbsp;&nbsp;&nbsp;&nbsp;"user" =&gt; getenv('DEFAULT_USER'),<br>
&nbsp;&nbsp;&nbsp;&nbsp;"pass" =&gt; getenv('DEFAULT_PASS'),<br>
&nbsp;&nbsp;&nbsp;&nbsp;"dbname" =&gt; getenv('DEFAULT_DBNAME'),<br>
&nbsp;&nbsp;&nbsp;&nbsp;"driver" =&gt; getenv('DEFAULT_DRIVER'),<br>
&nbsp;&nbsp;&nbsp;&nbsp;"port" =&gt; getenv('DEFAULT_PORT')<br>
&nbsp;&nbsp;)<br>
);<br>
                    </code>
                </p>
            </div>
            <p class="mt-1">This file loads the database credentials from environment variables and stores them in the <code>$db</code> array.</p>
        </div>
        <div class="pad-section col w-100" id="api">
            <h1 class="text-header mar-big">Creating an API</h1>
            <p class="ml-2 mb-2 i">You can easily create API endpoints in PHunctional PHP by adding files inside the <code>api</code> folder and defining routes in <code>routes/api.php</code>.</p>
            <h2 class="text-subheader mt-1 mb-1">1. Create a Sample Database</h2>
            <p>First, create a sample database and a <code>users</code> table. You can run the following SQL queries in your MySQL client (such as phpMyAdmin or the MySQL command line):</p>
            <div class="ml-2 bg-dark-gray pad-big mt-1 mb-2">
                <p class="white">
                    <code>
            -- 1. Create the database<br>
            CREATE DATABASE IF NOT EXISTS myapp_db;<br><br>
            -- 2. Use the newly created database<br>
            USE myapp_db;<br><br>
            -- 3. Create the users table<br>
            CREATE TABLE users (<br>
            &nbsp;&nbsp;id INT AUTO_INCREMENT PRIMARY KEY,<br>
            &nbsp;&nbsp;username VARCHAR(50) NOT NULL UNIQUE,<br>
            &nbsp;&nbsp;email VARCHAR(100) NOT NULL UNIQUE,<br>
            &nbsp;&nbsp;password VARCHAR(255) NOT NULL,<br>
            &nbsp;&nbsp;created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,<br>
            &nbsp;&nbsp;updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP<br>
            );<br>
                    </code>
                </p>
            </div>
            <h2 class="text-subheader mt-1 mb-1">2. Create <code>api/add_user.php</code></h2>
            <p>Create a new file <code>api/add_user.php</code> with the following code to handle adding a user:</p>
            <div class="ml-2 bg-dark-gray pad-big mt-1 mb-2">
                <p class="white">
                    <code>
                        <span class="info">&lt;?php</span>
                        <br>
                        <span class="info">$query =</span> <span class="string">"INSERT INTO users (username, email, password) VALUES (:username, :email, :password)"</span>;
                        <br>
                        <span class="info">$inputs = [</span>
                        <br>
                        &nbsp;&nbsp;<span class="string">"username"</span> =&gt; <span class="string">$username</span>,
                        <br>
                        &nbsp;&nbsp;<span class="string">"email"</span> =&gt; <span class="string">$email</span>,
                        <br>
                        &nbsp;&nbsp;<span class="string">"password"</span> =&gt; password_hash(<span class="string">$password</span>, PASSWORD_DEFAULT),
                        <br>
                        <span class="info">];</span>
                        <br>
                        <span>if ($sql-&gt;exec($query, $inputs))</span>
                        <br>
                        &nbsp;&nbsp;<span class="info">echo</span> <span class="string">"User added successfully."</span>;
                        <br>
                        <span>else</span>
                        <br>
                        &nbsp;&nbsp;<span class="info">echo</span> <span class="string">"Error adding user: "</span> . $sql-&gt;getError();
                        <br>
                    </code>
                </p>
            </div>
        
            <p>
                <span class="bold">Note:</span> In PHunctional PHP, POST payload keys are automatically converted into variables,</p>
            <p>
                so you can use <span class="info">$username</span>, <span class="info">$email</span>, and <span class="info">$password</span> directly.
                No need to use <span class="info">$_POST</span> or <span class="info">$_GET</span>.
            </p>
            <p>
            <p class="mt-2">
                <b class="bold">Note:</b> The <code class="info">$sql</code> object is automatically available and uses the <code class="string">"default"</code> database configuration from <code>Database.php</code>. If you want to use a different configuration, you can initialize it with <code>$sql = new Sql('configname');</code>.
            </p>
            </p>
            <h2 class="text-subheader mt-1 mb-1">3. Add the Route in <code>routes/api.php</code></h2>
            <p>Open <code>routes/api.php</code> and add the following line:</p>
            <div class="ml-2 bg-dark-gray pad-big mt-1 mb-2">
                <p class="white">
                    <code>
            post(<span class="string">"users"</span>, <span class="string">"add_user"</span>);
                    </code>
                </p>
            </div>
            <p>Now you can send a POST request to <code>/users</code> with <code>username</code>, <code>email</code>, and <code>password</code> in the JSON body to add a new user.</p>
        </div>
    </div>
</div>
<?php
include "section/footer.php";