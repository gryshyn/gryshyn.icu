���\<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:2:"64";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2018-11-30 17:08:16";s:13:"post_date_gmt";s:19:"2018-11-30 17:08:16";s:12:"post_content";s:14170:"<!-- wp:paragraph -->
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
<!-- /wp:paragraph -->";s:10:"post_title";s:60:"How to Install Magento 2.2.6 via Composer | Full instruction";s:12:"post_excerpt";s:42:"How to install Magento 2 and environment. ";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:58:"how-to-install-magento-2-2-6-via-composer-full-instruction";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2018-12-06 11:59:26";s:17:"post_modified_gmt";s:19:"2018-12-06 11:59:26";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://www.gryshyn.icu/?p=64";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}