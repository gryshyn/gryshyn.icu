���\<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:51:"SELECT wp_posts.* FROM wp_posts WHERE ID IN (77,64)";s:11:"last_result";a:2:{i:0;O:8:"stdClass":23:{s:2:"ID";s:2:"64";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2018-11-30 17:08:16";s:13:"post_date_gmt";s:19:"2018-11-30 17:08:16";s:12:"post_content";s:14170:"<!-- wp:paragraph -->
<p>Hello everyone! <br>
I thinked, first article we need to dicquss about install Magento 2. It's first step for all developers. <br>
Full manual you can take from official magento DevDocs (https://devdocs.magento.com/guides/v2.2/install-gde/composer.html)</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>But, I'm try to reproduce my steps with full steps, like check requirements, install php extensions and etc. <br>Let's do it!</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>First of all, we need to check all system requirements. </li></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2>Operating systems (Linux x86-64)</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>A Linux distribution such as RedHat Enterprise Linux (RHEL), CentOS, Ubuntu, Debian, and so on.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>I'm using Ubuntu 18.04. If you currently don't use Linux distribution, you can view some related ways with virtualization (Vagrant, VM's) or maybe Docker. In this article I don't tell about that, but I think we will write about that in the future.</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>2GB of RAM minimum.</li><li>Composer (latest stable version)</li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>If you don't have Composer on your machine or maybe you setup new development environment, instruction for setup composer:<br>Step 1 — Installing the Dependencies<br>First, update the package manager cache by running:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>sudo apt update</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Now, let's install the dependencies. We'll need curl in order to download Composer and php-cli for installing and running it. The php-mbstring package is necessary to provide functions for a library we'll be using. git is used by Composer for downloading project dependencies, and unzip for extracting zipped packages. Everything can be installed with the following command:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>sudo apt install curl php-cli php-mbstring git unzip</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Step 2 — Downloading and Installing Composer</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>cd ~
curl -sS https://getcomposer.org/installer -o composer-setup.php</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Next, verify that the installer matches the SHA-384 hash for the latest installer found on the Composer Public Keys / Signatures page. Copy the hash from that page and store it as a shell variable:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>HASH=544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Make sure that you substitute the latest hash for the highlighted value.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Now execute the following PHP script to verify that the installation script is safe to run:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>And after you need to see:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>Installer verified</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>If you see Installer corrupt, then you'll need to redownload the installation script again and double check that you're using the correct hash. Then run the command to verify the installer again. Once you have a verified installer, you can continue.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>To install composer globally, use the following command which will download and install Composer as a system-wide command named composer, under /usr/local/bin:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>You'll see the following output:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>Output
All settings correct for using Composer
Downloading...

Composer (version 1.6.5) successfully installed to: /usr/local/bin/composer
Use it: php /usr/local/bin/composer
To test your installation, run:

composer</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>And you'll see this output displaying Composer's version and arguments.</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>   ______
  / ____/___  ____ ___  ____  ____  ________  _____
 / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
/ /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
\____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                    /_/
Composer version 1.6.5 2018-05-04 11:44:59

Usage:
  command [options] [arguments]
</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Before continuing, make sure you have all the prerequisites, required for running Magento 2.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>I set up one virtual host, to rule them all! That way all my Magento 2 installations will be found by this local link&nbsp;<em>http://m2.loc/2.07/</em>&nbsp;for you to follow along.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>As you may, or may not already know, there are a few ways to install it. I will go through each installation, with and without sample data.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Install from archive file</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>First and easiest way is to download it from Magento download page<br><a href="https://www.magentocommerce.com/download" target="_blank" rel="noreferrer noopener">https://www.magentocommerce.com/download</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>You can choose from few different archive types (zip, tar.gz, tar.bz2) , with and without sample data.<br>Magento was kind enough to pack with all composer dependencies in the archive, so you don’t have to run Composer.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In this installation Magento core code is stored under&nbsp;<strong>/vendor</strong>&nbsp;directory and updating is possible through Magento admin.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>So next steps are easy, just visit&nbsp;<em>http://m2.loc//2.07/magento-website/</em>&nbsp;(in my case) and follow Setup Wizard.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Install via Composer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Second, but not the last, is installing Magento via composer. Composer is a tool for dependency management in PHP. To learn more visit this link&nbsp;<a href="https://getcomposer.org/doc/00-intro.md" target="_blank" rel="noreferrer noopener">https://getcomposer.org/doc/00-intro.md</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In this installation, Magento core code is also stored under&nbsp;<strong>/vendor</strong>&nbsp;directory and updating is possible through Magento admin.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>First you need authentication keys which can be obtained&nbsp;<a href="https://marketplace.magento.com/customer/account/" target="_blank" rel="noreferrer noopener">here</a>, and you will need Magento account to login.<br>Once logged in, go to “My Access Keys”, enter some descriptive “Name” and generate new set of keys. Magento uses this approach because, in future, extensions you buy from marketplace, will be available to you, through Magento admin interface.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Enter this command in terminal:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>composer create-project --repository-url=https://repo.magento.com/ magento/project-community-edition</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>When prompted, your public key is username, and private key is password.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>After that, Magento is ready for installation. Go through Setup Wizard and install it.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This was&nbsp;<strong>without sample data.</strong>&nbsp;So to install sample data, navigate to your Magento 2 root directory through terminal, and run the following command:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>php bin/magento sampledata:deploy
php bin/magento setup:upgrade</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>These two commands will update your composer.json file and install sample data. If you get this message, after installing sample data – “Please re-run Magento compile command”, enter the following in terminal:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>php bin/magento setup:di:compile</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>This command will take some time to complete.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3>Install via GitHub</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Third, and the last one, is cloning or downloading release from GitHub repository.<br>In this installation, I will show you how to avoid setup wizard and install Magento through terminal. But, it is important to mention that in this installation Magento core code is stored under&nbsp;<strong>app/code</strong>&nbsp;not in&nbsp;<strong>vendor/</strong>&nbsp;like in previous two examples.<br>When you try to update Magento through Admin interface, you will get error that this is a GitHub version and it’s not possible to update. GitHub releases are intended to be used by contributors/developers.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>First we must clone Magento repo from here:&nbsp;<a href="https://github.com/magento/magento2" target="_blank" rel="noreferrer noopener">https://github.com/magento/magento2</a>&nbsp;or you can download releases on&nbsp;<a href="https://github.com/magento/magento2/releases" target="_blank" rel="noreferrer noopener">https://github.com/magento/magento2/releases</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Create empty directory and run:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>git clone git@github.com:magento/magento2.git .</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>After deploying has been finished, run:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>composer install</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Now it’s time to install Magento 2. My setup looks like this:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>php -f bin/magento setup:install –base-url=http://m2.loc/2.07/github/ --backend-frontname=admin
--db-host=localhost --db-name=m2git --db-user=root --db-password=inchoo --admin-firstname=Magento
--admin-lastname=User --admin-email=ivan.veres@inchoo.net --admin-user=admin --admin-password=magento123
--language=en_US --currency=USD --timezone=America/Chicago –use-rewrites=1</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Change your base-url, db-name, db-password, admin-email, admin-password to match your local setup.<br>If your visit you local link through browser (http://m2.loc/2.07/github/), Magento 2 should be installed.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If you need sample data, follow along.<br>In your web root (not magento2) run:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>git clone git@github.com:magento/magento2-sample-data.git</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Navigate into cloned directory and execute:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>php -f dev/tools/build-sample-data.php -- --ce-source="your Magento CE install dir"</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>This will create symlinks to your Magento 2 installation.<br>Set ownership and permissions if you are on Linux machine:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>chown -R :your web server group name
find . -type d -exec chmod g+ws {} \;</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>Then you need to clear static files (cache).<br>Navigate to Magento 2 var/ folder and enter following:</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>rm -rf cache/* page_cache/* generation/*</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>In Magento 2 documentation there are no further instructions. However you need to install sample data.</p>
<!-- /wp:paragraph -->

<!-- wp:code -->
<pre class="wp-block-code"><code>php bin/magento setup:upgrade
php bin/magento setup:di:compile</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph -->
<p>After that you should have sample data installed.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If you have some problems reference at:&nbsp;<a href="http://devdocs.magento.com/guides/v2.0/install-gde/bk-install-guide.html" target="_blank" rel="noreferrer noopener">http://devdocs.magento.com/guides/v2.0/install-gde/bk-install-guide.html</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>If this or anything else regarding Magento development confuses you, we will gladly check out your site and&nbsp;<a href="http://inchoo.net/services/technical-audit/">offer technical insights on what to improve based on our detailed custom report</a>. Feel free to get in touch!</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Source:</p>
<!-- /wp:paragraph -->

<p><a href="https://devdocs.magento.com/guides/v2.2/#/individual-contributors">Magento DevDocs</a></p>
<p><a href="https://inchoo.net/magento-2/how-to-install-magento-2/">Inchoo</a></p>

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->";s:10:"post_title";s:60:"How to Install Magento 2.2.6 via Composer | Full instruction";s:12:"post_excerpt";s:42:"How to install Magento 2 and environment. ";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:58:"how-to-install-magento-2-2-6-via-composer-full-instruction";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2018-12-06 11:59:26";s:17:"post_modified_gmt";s:19:"2018-12-06 11:59:26";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://www.gryshyn.icu/?p=64";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}i:1;O:8:"stdClass":23:{s:2:"ID";s:2:"77";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2018-12-06 11:57:10";s:13:"post_date_gmt";s:19:"2018-12-06 11:57:10";s:12:"post_content";s:12614:"<!-- wp:paragraph -->
<p>Back in April this year, Magento announced at the Magento Imagine conference about the next major release on the platform: Magento 2.3. Unlike its predecessor, this release packs significant and impactful new functionality and improvements.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This article will outline the most exciting features which this major release, scheduled later this year, will bring:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>Progressive Web App (PWA)</li><li>GraphQL support</li><li>Declarative DB Schema</li><li>Asynchronous and Bulk Web API</li><li>Elasticsearch Updates (Moved to Magento Open Source)</li><li>Complete PHP 7.2 Support</li><li>Multi Source Inventory (MSI)</li><li>WYSIWYG Upgrade</li><li>Page Builder</li><li>Cache-Management ACL</li><li>Google reCAPTCHA and Two Factor Authentication</li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>Let’s have a closer look at them.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>1 -- Progressive Web App (PWA)</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Magento has been forging ahead with the development of PWA Studio -- a suite of tools that allow you to develop, deploy and maintain a PWA storefront on top of Magento 2.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>PWA is a new frontend technology which combines the advantages of native apps and websites. PWAs are usually built on a JavaScript framework like React, Vue.js or AngularJS for handling data and displaying it; and communicate with a backend via (Magento 2) REST API. This approach is also known as Headless Magento.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>At the moment, the beta is out already, and you can work around with following Magento PWA guide&nbsp;<a href="https://magento-research.github.io/pwa-studio/">here</a>. Once Magento PWA solution is stable, it is going to be the go-for-option for merchants over native apps. It allows to build fast and simple front-end with app-like experiences on mobile devices.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Core features of Magento’s PWA Studio include:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><li>Tools to personalize content and add local preferences;</li><li>Build and manage all channels and experiences via one code base, one deployment and app;</li><li>Intuitive user experience with innovative commerce and CMS theming;</li><li>Modularized component architecture to help drive opportunities for extension resellers;</li><li>Purpose-built developer tools for fast prototyping, helpful debugging, rich feedback, and increased productivity</li></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p>Please note PWA Studio requires GraphQL capabilities which is only available in Magento 2.3 releases. For more information, you can read about Magento PWA Studio here.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>2 -- GraphQL support</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Introducing the new GraphQL API language is one of the biggest moves in Magento 2.3.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>GraphQL is a data query language developed by Facebook and publicly released in 2015. Magento 2.3 implements GraphQL as an alternative API endpoint in addition to REST and SOAP.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>GraphQL opens up data retrieval possibilities for PWAs by allowing to request exactly the data that you need and also giving the ability to join data in a single request. To put it another way, you can efficiently get smaller amounts of data and to make fewer API requests. This is an advantage over a traditional SOAP / REST request which always returns all data associated with an endpoint, and needs at least one request per resource.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>So, using GraphQL allows a Magento PWA to be quick even on slow mobile network connections. You can take a closer look into a whole host of other GraphQL’s benefits on&nbsp;<a href="https://community.magento.com/t5/Magento-DevBlog/Why-GraphQL-Is-Interesting-for-Magento-2/ba-p/71539">this post</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>3 -- Declarative DB Schema</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Magento 2.3 introduces a new approach -- declarative database schema, allowing developers to define database structures and changes in XML files, instead of defining with install scripts. Magento will convert the XML schema files into SQL statements and perform them.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The new declarative schema provides a big advantage: rollback support. This means you can roll back database changes you implement on a module or functionality to a previous version. It also simplifies the Magento installation and upgrade processes.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>4 -- Asynchronous and Bulk Web API</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Asynchronous API in Magento 2.3 is an important community contribution by @comwrap, @balanceinternet and @buskamuza. It enables to process a large number of API requests asynchronously without waiting for the response from the server.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In the traditional API approach, Magento may take a while to process the response and the client will be waiting a significant amount of time for a response. And the bigger the number of changes and products are, the longer it takes.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>In contrary, the asynchronous API in Magento 2.3 works over message queue (previously, reserved for Magento Commerce only) that allows to execute Web API asynchronously and complete tasks in the background. It gives you the ability to make batch processing with ease which is a huge advantage for big sites with daily bulk API requests i.e. inventory import, order status updated from ERP system etc.,</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This video will explain in more details about how asynchronous API in Magento 2.3 helps to ease strain on your application.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<figure><iframe src="https://www.youtube.com/embed/i2iVMP0QzII" width="800" height="315" allowfullscreen="allowfullscreen"></iframe></figure>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p><strong>5 -- Elasticsearch Updates (Moved to Magento Open Source)</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Finally, ElasticSearch will be made available to Magento Open Source users while previously reserved for Magento Commerce only. This gives merchants the opportunity to integrate a powerful search capabilities in their shops, including faceted search -- filtering by attributes.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Elasticsearch may become a default search engine in the future. For now, Magento 2.3 will support the latest Elasticsearch v5.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>6 -- Complete PHP 7.2 Support</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Support for PHP 7.2 will be added in Magento 2.3. This allows Magento 2 stores to stay on top of the latest supported technologies.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>PHP 7.2 will bring new development features, enhance performance and security. Especially, since PHP 7.2 ultimately removes PHP encryption module ‘mcrypt’, Magento 2.3.x will migrate from mcrypt to libsodium for password hashing.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>7 -- Multi Source Inventory (MSI)</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Another vital improvement introduced in Magento 2.3 is Multi Source Inventory (MSI).</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>MSI allows merchant to manage all inventory sources without any third-party extensions or platforms. This functionality enables stock management in multiple locations so that merchants can properly reflect their physical warehouses in Magento system for fulfillment.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Additionally, MSI helps to improve checkout performance by incorporating a reservation system.<br>Reservation refers to a mechanism that reserves some product quantity in stock instead of automatically decrementing inventory when the order is placed. This keeps inventory amount (product quantity) up-to-date without locking at the time of checkout and eliminates re-indexing and performance issues during peak order times.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<figure><iframe src="https://www.slideshare.net/slideshow/embed_code/key/rmRIt7HhNoiOGa" width="800" height="485" allowfullscreen=""></iframe></figure>
<!-- /wp:html -->

<!-- wp:paragraph -->
<p>Besides, it also introduces better import/export process for inventory to speed up integration with an external ERP system.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>8 -- WYSIWYG Upgrade</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The WYSIWYG editor -- TinyMCE -- is upgraded from version 3 to version 4 in Magento 2.3. It brings new enhancements for a highly customizable WYSIWYG: Widgets, variables and media gallery are implemented as plugins and can be defined globally or on per shop instance.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>TinyMCE 3 will be deprecated and planned for removal in Magento 2.4.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>9 -- Page Builder</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>A much requested addition to the Magento core is the Page Builder functionality that enables merchants to create customized pages without having to write code. The tool uses a simple drag-and-drop interface based on the revised Bluefoot CMS extension which Magento bought a long time ago. You can check out&nbsp;<a href="https://community.magento.com/t5/Magento-DevBlog/Bluefoot-Integration-Vision/ba-p/66943">this post</a>&nbsp;from Alan Kent for a detailed look at the technical side of the Bluefoot integration.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The Page Builder will be a part of core code in the Magento Commerce. For Magento Open Source, there will be an option to purchase, however the price is not known yet.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>10 -- Cache-Management ACL</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Another useful improvement in Magento 2.3 is a granular cache management ACL. You can control exactly which user roles can view and delete the Magento caches.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>This feature is handy when you have new team members who might need time to fully interact with the system cache. Under this circumstance, you can control what level of Cache management a given team member can perform.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>11 -- Google reCAPTCHA and Two Factor Authentication</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Magento 2.3 incorporates reCAPTCHA, a free Google service that protects your website -- login, register, contact form pages, for example -- from spam and abuse. Google reCAPTCHA doesn’t solely prompts shoppers to check a box to prove that they’re not a robot before they complete a task. Rather it uses advanced risk analysis techniques, evaluates a broad range of cues that distinguish humans from bots.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Magento 2.3 also adds two-factor authentication to protect against malicious attempts to access your Magento admin panel. This additional layer of security has become standard practice among many web applications.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Try Magento 2.3 beta</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Now that we know what’s included in Magento 2.3’s release, to try Magento 2.3 beta, you can download it from&nbsp;<a href="https://devdocs.magento.com/guides/v2.3/release-notes/2.3.0-install.html">HERE</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>That’s it. There can be other great features and improvements, please feel free to share in the comment below.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Source: <a href="https://www.ubertheme.com/magento2/magento-2-3-new-features/">Ubertheme</a></p>
<!-- /wp:paragraph -->";s:10:"post_title";s:39:"Magento 2.3 release – 11 new features";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:35:"magento-2-3-release-11-new-features";s:7:"to_ping";s:0:"";s:6:"pinged";s:61:"
https://www.ubertheme.com/magento2/magento-2-3-new-features/";s:13:"post_modified";s:19:"2018-12-06 11:58:55";s:17:"post_modified_gmt";s:19:"2018-12-06 11:58:55";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://www.gryshyn.icu/?p=77";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}s:8:"col_info";a:23:{i:0;O:8:"stdClass":13:{s:4:"name";s:2:"ID";s:7:"orgname";s:2:"ID";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:11:"post_author";s:7:"orgname";s:11:"post_author";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:9:"post_date";s:7:"orgname";s:9:"post_date";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:16513;s:4:"type";i:12;s:8:"decimals";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:13:"post_date_gmt";s:7:"orgname";s:13:"post_date_gmt";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:12:"post_content";s:7:"orgname";s:12:"post_content";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:14170;s:6:"length";i:4294967295;s:9:"charsetnr";i:246;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:10:"post_title";s:7:"orgname";s:10:"post_title";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:60;s:6:"length";i:262140;s:9:"charsetnr";i:246;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:6;O:8:"stdClass":13:{s:4:"name";s:12:"post_excerpt";s:7:"orgname";s:12:"post_excerpt";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:42;s:6:"length";i:262140;s:9:"charsetnr";i:246;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:7;O:8:"stdClass":13:{s:4:"name";s:11:"post_status";s:7:"orgname";s:11:"post_status";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:7;s:6:"length";i:80;s:9:"charsetnr";i:246;s:5:"flags";i:16385;s:4:"type";i:253;s:8:"decimals";i:0;}i:8;O:8:"stdClass":13:{s:4:"name";s:14:"comment_status";s:7:"orgname";s:14:"comment_status";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:9;O:8:"stdClass":13:{s:4:"name";s:11:"ping_status";s:7:"orgname";s:11:"ping_status";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:10;O:8:"stdClass":13:{s:4:"name";s:13:"post_password";s:7:"orgname";s:13:"post_password";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:1020;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:11;O:8:"stdClass":13:{s:4:"name";s:9:"post_name";s:7:"orgname";s:9:"post_name";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:58;s:6:"length";i:800;s:9:"charsetnr";i:246;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:12;O:8:"stdClass":13:{s:4:"name";s:7:"to_ping";s:7:"orgname";s:7:"to_ping";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:262140;s:9:"charsetnr";i:246;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:13;O:8:"stdClass":13:{s:4:"name";s:6:"pinged";s:7:"orgname";s:6:"pinged";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:61;s:6:"length";i:262140;s:9:"charsetnr";i:246;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:14;O:8:"stdClass":13:{s:4:"name";s:13:"post_modified";s:7:"orgname";s:13:"post_modified";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:15;O:8:"stdClass":13:{s:4:"name";s:17:"post_modified_gmt";s:7:"orgname";s:17:"post_modified_gmt";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:19;s:6:"length";i:19;s:9:"charsetnr";i:63;s:5:"flags";i:129;s:4:"type";i:12;s:8:"decimals";i:0;}i:16;O:8:"stdClass":13:{s:4:"name";s:21:"post_content_filtered";s:7:"orgname";s:21:"post_content_filtered";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:4294967295;s:9:"charsetnr";i:246;s:5:"flags";i:4113;s:4:"type";i:252;s:8:"decimals";i:0;}i:17;O:8:"stdClass":13:{s:4:"name";s:11:"post_parent";s:7:"orgname";s:11:"post_parent";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49193;s:4:"type";i:8;s:8:"decimals";i:0;}i:18;O:8:"stdClass":13:{s:4:"name";s:4:"guid";s:7:"orgname";s:4:"guid";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:28;s:6:"length";i:1020;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:19;O:8:"stdClass":13:{s:4:"name";s:10:"menu_order";s:7:"orgname";s:10:"menu_order";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:11;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:3;s:8:"decimals";i:0;}i:20;O:8:"stdClass":13:{s:4:"name";s:9:"post_type";s:7:"orgname";s:9:"post_type";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:4;s:6:"length";i:80;s:9:"charsetnr";i:246;s:5:"flags";i:16393;s:4:"type";i:253;s:8:"decimals";i:0;}i:21;O:8:"stdClass":13:{s:4:"name";s:14:"post_mime_type";s:7:"orgname";s:14:"post_mime_type";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:400;s:9:"charsetnr";i:246;s:5:"flags";i:1;s:4:"type";i:253;s:8:"decimals";i:0;}i:22;O:8:"stdClass":13:{s:4:"name";s:13:"comment_count";s:7:"orgname";s:13:"comment_count";s:5:"table";s:8:"wp_posts";s:8:"orgtable";s:8:"wp_posts";s:3:"def";s:0:"";s:2:"db";s:10:"gryshyn_db";s:7:"catalog";s:3:"def";s:10:"max_length";i:1;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:32769;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:2;s:10:"return_val";i:2;}