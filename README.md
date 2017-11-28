# PHP_Wizardry

This web applciation utilizes a combination of html, css and php. 

- The index.html and Reservable_Rooms.html were built from the ground up but were based loosely upon the esri calcite template      
          (https://esri.github.io/calcite-web/).
    - I employed a series of parallax and flex box effects and custom wrote the stylesheets to be used in conjunction with 
          the framework.

- The .php files were derivatives of the Murach Chapter 24 guitar shop application.
    - These files have been edited heavily to reflect the use case presented here.
    
Site Map:

- index.html -> Home landing page from which all sit navigation begins. General Information and Links to other parts of the site
    are found here.
- Reservable_Rooms.html -> Room reservation information including descirptions and the ability to navigate to the account
    creation pages.
    
    
- index and home_view.php -> Essentially the landing pages for the room reservation system. These pages provide a common link
    framework for navigation to the reservable rooms. From here an existing user can log in or register for a new account.
- 1. Account folder->index and account_register.php -> Capture form data and use a series of insert SQL logic to post to the 
    database. 
- 2. Model folder -> Misc. DB.php -> These are the connection files used to connect to the database as well as post data to the db.
- 3. View folder -> These are the aside, footer, and header elements that are crucial for the application to work when querying 
    data.
- 4. Cart folder -> Cart_View.php -> Uses a series of SQL queries to check the validity of the user login credentials and to 
    provide feedback on what reservations have been made by that respective user by querying the database.
