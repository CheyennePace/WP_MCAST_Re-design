<h2>Welcome!</h2> 
This theme is designed to provide users with the flexibility to customize and adapt the template for their educational websites. With comprehensive accessibility features and robust customization options, this theme can be tailored to meet the unique needs of clients.

<h2>Link to Import</h2>
 mcastredesign.local-20240117-215314-d9rso1.wpress

<h2>VsCode</h2>
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
 <br> sidebar-first-footer.php  -> This page gives the user accessibility to add more things to the footer (i.e icons, text, sub-links etc). Anything in footer 1 will be displayed in the first column of the footer.
 <br>
 <br> sidebar-fourth-footer.php  ->This page gives the user accessibility to add more things to the footer (i.e icons, text, sub-links etc). Anything in footer 4 will be displayed in the fourth column of the footer.
 <br>
 <br> sidebar-second-footer.php  ->This page gives the user accessibility to add more things to the footer (i.e icons, text, sub-links etc). Anything in footer 2 will be displayed in the second column of the footer.
 <br>
 <br> sidebar-second.php  -> This page is there in case the user would like to make use of a sidebar. (Set more for future improvements)
 <br>
 <br> sidebar-third-footer.php  ->This page gives the user accessibility to add more things to the footer (i.e icons, text, sub-links etc). Anything in footer 3 will be displayed in the first third of the footer.
 <br>
 <br> sidebar.php  -> This page is there in case the user would like to make use of a sidebar. (Set more for future improvements)
<br> 

 <br> style.css  -> This is where most of the styling options are taking place. most of the code is titled accordingly. At the end of the document, one can find hard-coded values of some of the elements that look disproportionate in mobile view. The name of the class can be used on the page of WordPress under CSS attributes. Upon writing the name of that class, the user should see the hard-coded styling added. 
<br> 
 <br> Folder in template-parts
 <br> content-page.php  -> This page holds the entire content
 <br> 
 <br> content-search.php  -> This page holds the style in which the search page is going to display them. therefore certain styling has to be through this page.
 <br> 
 <br> content.php  -> This page holds the same behaviour as the 'content-search.php' page. However, this page does not have the same styling options.
 <br>
 <br> loop-search.php  -> This page is where the 'content-search' page is going to be retrieved inside of a loop. This page is called out in the 'search.php' page. Pagination is also included in case there are a lot of results. If, no posts/results were found a p tag saying 'sorry, no posts found' will be displayed to the user.
 <br> 
 <br> loop.php  -> This page holds the same behaviour as the 'loop-search.php'. The only difference is that this will load from 'content.php'. Therefore, this will load any required posts on top of the hard-coded ones.
<br> 
 <br> Folder in lib
 <br> customize.php  -> On this page, one can come across functions, that are set to ease the life of a client. This is where the footer, header and any posts/pages that require images are set. Starting with the footer, the client can customize through WordPress Customizer the background colour, the font colour, the number of columns and the number of rows. These can also be amended in the widget section of WordPress. The header has the same functionality, without the option of personalising rows and columns. Images are set similarly. and can also be customizable in the Customizer page of WordPress.
 <br> 
 <br> enqueue-assests.php -> This is the page where the css and js files were set to a specific location.
 <br>
 <br> naviagtion.php  -> This is the page where 2 menus were registered (i.e. Main menu which is the header and the footer menu)
 <br>
 <br> sidebars.php  -> This is the page were all the sidebars are declared and shown in the widgets section on WordPress.
<br> 
 <br> Folders in assets
 <br> -Sub folder CSS
 <br> bootstrap.ss  -> Original bootstrap file with minor alterations to shape the template better.
 <br> wpcore.css  -> Default WP css
 <br> -Sub folder JS
 <br> bootstrap.js  -> Original bootstrap file
<br> 

<h2>WP Posts</h2>
<br>
Over here, one can add more courses and link them accordingly in either the 'Full-time', 'Part-time' or the 'Masters' courses found on WP pages. The rest of the posts are news templates, that are shown on the the news page (found in the footer) and there is also the possibility of having  a snippet of the latest news on the homepage. 
<br>
<h2>Plugins</h2>
As for the plugins section, there are numerous plugins used such as;
<br>
Wp Dummy Content Generator -> This plugin was only used to create dummy posts to reduce the effort of having to create them one by one. However, the posts were later reviewed and amended accordingly, therefore the content that is currently shown is relevant to the website.
<br>
<br>
Wordpress Books Library -> This library was set as a database for the library system. Books were added using this plugin and styled properly through the plugin's CSS. The plugin also had an in-built search which displays the books inside the same page.
<br>
<br>
The Icon Block -> This icon was used to better handle iconography is some pages.
<br>
<br>
The Events Calendar -> This plugin enabled me to display a well-formatted calendar giving the user the option to display, list, daily and monthly as well as search specific events.
<br>
<br>
Responsive Accordion And Collapse -> This plugin enables the functionality of Frequently Asked Questions (FAQS) accordion. Therefore, this plugin is being used in some pages to display the FAQs to the user.
<br>
<br>
Featured Image from URL (FIFU) -> This plugin was briefly used to display thumbnails of the pages/posts. This was primarily used to enable easy recognition amongst a chuck of text, due to having a small image on the side.
<br>
<br>
Elementor -> This plugin was tested, however barely used. I decided to leave this only on one page, in case the user is already accustomed to it, they will know that they have the possibility of using it.
<br>
<br>
Copy&Delete Posts -> This plugin was used to enable page duplication
<br><br>
Cards for Beaver alongside Beaver Builder -> These two plugins were used in conjunction to add cards to the courses page. However, the user can also make use of this plugin similarly to the Elementor plugin.
<br>
<br>
Blog Designer Pack -> This plugin was used to create the news grid, style it and add the shortcode to the page on which you would like the news to be displayed.
<br>
<br>
All-in-one WP Migration -> WAs used for export & import
<br>
