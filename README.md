<h2>Welcome!</h2> 
This theme is designed to provide users with the flexibility to customize and adapt the template for their educational websites. With comprehensive accessibility features and robust customization options, this theme can be tailored to meet the unique needs of clients.

<h2>Pages</h2>
 footer.php  -> On this page you will find the entire footer. You will find two sets of footers 'footer-top' and 'footer-bottom'.
 This page uses variables such as 'get-theme-mod'  which can be found on the custimize.php page. Everything that is set on this page is set to default in the WordPress customizer. 
 <br>
<br> front-page.php  -> This page is used to add to more things which are found on the homepage. Over here is where the carousel is defined so the client can benefit from customizing the images from the customizer page on WordPress. The same customizer tags/variables that were used in the 'footer.php' are used here, the only difference being that the footer customizers were for font and background colour, whilst this is set for images. Beneath this section a loop is called  inside of a container, this is to display the things that are set from the client in the homepage. Therefore, if the client wishes to add anything else to this page apart from the carousel, they can fully do so by editing the page on WordPress. 
<br>
 <br> functions.php  -> In this page one can find the functions, which are being used for 'enqueue-assests.php', 'navigation.php', 'sidebars.php' and 'customize.php'. So far, in this page titles, filters, theme footer  colours, and order type posts
 <br>
 <br> header.php  -> This page is where the header for each page is set. The first thing that one can find is similar to the 'footer.php' page, where variables were set, which were retrieved from 'customize.php'. These were given a default colour as a recommendation to the user, however, they are fully customizable in the WordPress Customizer. In the top-bar, the user can set a few links. Then there is the second header, which is the main header, where the user has the option to add an image, through the WordPress customizer. The user can also add menus and sub-menu. Finally, the search. The search form is the very last in the php file, this page gets data from 'search.php'.
 <br>
 <br> page-library.php  -> This page was created primarily for the banner, as the rest including the search were used through a plugin. Details about the plugin can be found further down.
 <br> 
 <br> page.php  -> This page is where the  body is set, including a php tag with an array calling title to show and the loop. Loop meaning the content set by the client.
 <br> 
 <br> search.php  -> This page is where the search results are going to be dumped. 
 <br>
 <br> sidebar-first-footer.php  ->
 <br> sidebar-fourth-footer.php  ->
 <br> sidebar-second-footer.php  ->
 <br> sidebar-second.php  ->
 <br> sidebar-third-footer.php  ->
 <br> sidebar.php  ->
 <br> style.css
<br> 
 <br> Folder in template-parts
 <br> content-page.php  ->
 <br> content-search.php  ->
 <br> content.php  ->
 <br> loop-search.php  ->
 <br> loop.php  ->
<br> 
 <br> Folder in lib
 <br> customize.php  ->
 <br> enqueue-assests.php ->
 <br> naviagtion.php  ->
 <br> sidebars.php  ->
<br> 
 <br> Folders in assets
 <br> -Sub folder CSS
 <br> bootstrap.ss  ->
 <br> wpcore.css  ->
 <br> -Sub folder JS
 <br> bootstrap.js
<br> 

<h2>Posts</h2>

<h2>Plugins</h2>
