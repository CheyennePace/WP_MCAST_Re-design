<h2>Welcome!</h2> 
This theme is designed to provide users with the flexibility to customize and adapt the template for their educational websites. With comprehensive accessibility features and robust customization options, this theme can be tailored to meet the unique needs of clients.

<h2>Link to Import</h2>
 mcastredesign.local-20240117-215314-d9rso1.wpress

<h2>VsCode</h2>
 footer.php  -> On this page you will find the entire footer. You will find two sets of footers 'footer-top' and 'footer-bottom'.
 This page uses variables such as 'get-theme-mod'  which can be found on the custimize.php page. Everything that is set on this page is set to default in the WordPress customizer. 
 <br>
 <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/ab4647c6-9461-480f-833b-0d2d160f1b33" >

<br>
 <br>
<br> front-page.php  -> This page is used to add to more things which are found on the homepage. Over here is where the carousel is defined so the client can benefit from customizing the images from the customizer page on WordPress. 
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/7ca93741-0071-4863-afc0-944e130d235f" >
The same customizer tags/variables that were used in the 'footer.php' are used here, the only difference being that the footer customizers were used for font and background colour, whilst this is set for images. 
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/4450c71a-bbf8-4179-ae37-f76c4c7c1bc5" >
Beneath this section a loop is called  inside of a container, this is to display the things that are set from the client in the homepage. Therefore, if the client wishes to add anything else to this page apart from the carousel, they can fully do so by editing the page on WordPress. 

<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/15d55c95-f993-4b25-9b37-b93e0deb1051" >
<br>
 <br> functions.php  -> In this page one can find the functions, which are being used for 'enqueue-assests.php', 'navigation.php', 'sidebars.php' and 'customize.php'. So far, in this page titles, filters, theme footer  colours, and order type posts
 <br>
 <br> header.php  -> This page is where the header for each page is set.
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/3d5246b2-ad26-4907-a2f8-6ad4251dce0a" >
 The first thing that one can find is similar to the 'footer.php' page, where variables were set, which were retrieved from 'customize.php'. These were given a default colour as a recommendation to the user, however, they are fully customizable in the WordPress Customizer.
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/8ca97aff-ae8e-4cec-86a3-7d3788394c89" >
 In the top-bar, the user can set a few links. Then there is the second header, which is the main header, where the user has the option to add an image, through the WordPress customizer. The user can also add menus and sub-menu. Finally, the search. The search form is the very last in the php file, this page gets data from 'search.php'.
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/f014cc80-59aa-4b93-b480-e33197c42ae8" >
 <br>
 <br> page-library.php  -> This page was created primarily for the banner, as the rest including the search were used through a plugin. Details about the plugin can be found further down.
 <br> 
 <br> page.php  -> This page is where the  body is set, including a php tag with an array calling title to show and the loop. Loop meaning the content set by the client.
 
 <br> 
 <br> search.php  -> This page is where the search results are going to be dumped. 
 <br>
 <br> sidebar-first-footer.php  -> This page gives the user accessibility to add more things to the footer (i.e icons, text, sub-links etc). Anything in footer 1 will be displayed in the first column of the footer. This is set through code and added to widgets in WP.

<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/810da337-ccb9-45bd-870b-410dac836ca2" >
 <br>
 <br> sidebar-fourth-footer.php  ->This page gives the user accessibility to add more things to the footer (i.e icons, text, sub-links etc). Anything in footer 4 will be displayed in the fourth column of the footer.
 <br>
 <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/fa6900ef-a2f4-4c93-be3c-af656ddbf75e" >
 <br>
 <br> sidebar-second-footer.php  ->This page gives the user accessibility to add more things to the footer (i.e icons, text, sub-links etc). Anything in footer 2 will be displayed in the second column of the footer.
 <br>
 <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/745c972b-0798-447f-826e-1899bc86ae20" >
 <br>
 <br> sidebar-second.php  -> This page is there in case the user would like to make use of a sidebar. (Set more for future improvements)
 <br>
 <br> sidebar-third-footer.php  ->This page gives the user accessibility to add more things to the footer (i.e icons, text, sub-links etc). Anything in footer 3 will be displayed in the first third of the footer.
 <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/d809bcfb-dab5-43ba-bfba-e1f9b357c68c" >
 <br>
 <br>
 <br> sidebar.php  -> This page is there in case the user would like to make use of a sidebar. (Set more for future improvements)
<br> 

 <br> style.css  -> This is where most of the styling options are taking place. most of the code is titled accordingly followed by comments. At the end of the document, one can find hard-coded values of some of the elements that look disproportionate in mobile view. The name of the class can be used on the page of WordPress under CSS attributes. Upon writing the name of that class, the user should see the hard-coded styling added. 
 
  <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/c133d785-f09f-49d5-a917-6934c18060f5" >
   <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/eae269e5-ce3a-43cc-bd5b-5687e59a6b1b" >
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
 <br> customize.php  -> On this page, one can come across functions, that are set to ease the life of a client. This is where the footer, header and any posts/pages that require personalization are set. Starting with the footer, the client can customize through WordPress Customizer the background colour,  the font colour,the number of columns and the number of rows.
   <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/cd73d692-eb2c-4b7b-a0a0-466c6f3cbdf0" >
   
 These can also be amended in the widget section of WordPress. The header has the same functionality, without the option of personalising rows and columns. Images are set similarly. and can also be customizable in the Customizer page of WordPress.
 
 <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/e0eccf7a-2ea1-4b9e-9e0a-d20dd81dbd8d" >

 <br> 
 <br> enqueue-assests.php -> This is the page where the css and js files were set to a specific location.
 <br>
 <br> naviagtion.php  -> This is the page where two menus were registered (i.e. Main menu which is the header and the footer menu)
 <br>
 <br> sidebars.php  -> This is the page where all the sidebars are declared and shown in the widgets section on WordPress.
  <img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/eb4f8be4-4d19-4f83-8991-36206b29fae2" >
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
Over here, one can add more courses and link them accordingly in either the 'Full-time', 'Part-time' or the 'Masters' courses found on WP pages. The rest of the posts are news templates, that are shown on the the news page (found in the footer) and there is also the possibility of having  a snippet of the latest news on the homepage. The shortcode seen below was used,

<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/f90a2ee8-e28a-40a6-9ef0-28e957f3b7db" >
to display the below.
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/ce6fa079-85ff-4c86-a744-74cac6e8c206" >
<br>
<h2>Plugins</h2>
As for the plugins section, there are numerous plugins used such as;
<br>
Wp Dummy Content Generator -> This plugin was only used to create dummy posts to reduce the effort of having to create them one by one. However, the posts were later reviewed and amended accordingly, therefore the content that is currently shown is relevant to the website.
<br>
<br>
Wordpress Books Library -> This library was set as a database for the library system. Books were added using this plugin and styled properly through the plugin's CSS. The plugin also had an in-built search which displays the books inside the same page.

<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/1e936da5-7b76-4fd2-bed7-ca41077f9f08" >

<br>
<br>
The Icon Block -> This icon was used to better handle iconography is some pages.
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/e897dd76-93bf-4e13-8154-313df0c22580
" >
<br>
<br>
The Events Calendar -> This plugin enabled me to display a well-formatted calendar giving the user the option to display, list, daily and monthly as well as search specific events.

<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/8f6a603a-6d89-467f-b20c-ed77d2b9ef26" >

<br>
<br>
Responsive Accordion And Collapse -> This plugin enables the functionality of Frequently Asked Questions (FAQS) accordion. Therefore, this plugin is being used in some pages to display the FAQs to the user.
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/c99a64c1-2dc7-476a-8f94-7325b728e452" >
<br>
<br>
Featured Image from URL (FIFU) -> This plugin was briefly used to display thumbnails of the pages/posts. This was primarily used to enable easy recognition amongst a chuck of text, due to having a small image on the side.
<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/c9a31da7-ce81-47b4-9056-48bf6d065513" >
<br>
<br>
Elementor -> This plugin was tested, however barely used. I decided to leave this only on one page, in case the user is already accustomed to it, they will know that they have the possibility of using it.
<br>
<br>
Copy&Delete Posts -> This plugin was used to enable page duplication

<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/5e974378-322f-4577-8505-e79b7735e196" >
<br><br>
Cards for Beaver alongside Beaver Builder -> These two plugins were used in conjunction to add cards to the courses page. However, the user can also make use of this plugin similarly to the Elementor plugin.


<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/880dcc85-aa0c-46ee-9112-69d64eb37b3f" >

<br>
<br>
Blog Designer Pack -> This plugin was used to create the news grid, style it and add the shortcode to the page on which you would like the news to be displayed.

<img width="1141" alt="image" src="https://github.com/CheyennePace/WP_MCAST_Re-design/assets/56068119/6994ad22-d616-4530-9522-711cbd03acb5" >
<br>
<br>
All-in-one WP Migration -> WAs used for export & import
<br>
