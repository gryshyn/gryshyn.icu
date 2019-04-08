���\<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:2:"77";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2018-12-06 11:57:10";s:13:"post_date_gmt";s:19:"2018-12-06 11:57:10";s:12:"post_content";s:12614:"<!-- wp:paragraph -->
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
https://www.ubertheme.com/magento2/magento-2-3-new-features/";s:13:"post_modified";s:19:"2018-12-06 11:58:55";s:17:"post_modified_gmt";s:19:"2018-12-06 11:58:55";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://www.gryshyn.icu/?p=77";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}