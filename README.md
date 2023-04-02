# Team-19

### Project Name: EventTick

---

### Project Description:

EventTick is an ecommerce site that provides tickets to popular concerts across the UK. Our target demographic is young adults ranging from 18-25, and maybe a smidge over for those wild cards, ensuring we get them back out on the music scene. We were influenced by other ticket selling websites like Ticketmaster but differ by our focus on delivering on a user-friendly minimalistic interface that allows for easier and more fluid interactions for our users.​ Our project also come with a java inventory management system that allows for the streamlined addition of new producuts, updating status of orders and generating reports for everything related to the site.

---

### Contributors:

* Muniib Ali
* Zeeshan Mohammed
* Jenson James-Ross 
* Humera Muhammad
* Faryal Mansoor
* Damien Eshimu
* Haseeb Ahmed

### Prerequisites:

* Laravel Version 9
* PHP version 8.1.4
* JDK 17
* Visual Studio Code
* Gitbash

---

### How to set up EventTick

#### Step 1

Install Xampp and Composer

#### Step 2

Clone the repository

#### Step 3

Run the Apache server and Mysql through xampp

#### Step 4

Press admin on mySQL through xampp and access phpmyadmin. Create a new database called "websitedb19" and import the websitedb19.sql file stored within the mySQL Database folder.

#### Step 5

Within the htdocs folder of xampp use gitbash and run the command "composer create-project laravel/laravel example-app"

#### Step 6

Open the Website folder in visual studio code and copy the ".env.example" file. Rename it to ".env". Set "DB_DATABASE="  to "DB_DATABASE=websitedb19"

#### Step 7

Copy and paste the "vendor" folder from example-app into the "Website" folder.

#### Step 8

Through gitbash run the command 'php artisan serve'. Access url 127.0.0.1:8000 and generate the application key. 

#### Step 9

You show now be able to use the EventTick website

---

### How to set up the inventory management system(This guide uses Visual studio code)

#### Step 1

Ensure you have followed the steps to set up EventTick. Open visual studio code and install the extension "Extension Pack for Java"

#### Step 2

On the visual studio code explorer press "Open Folder" and open the "javabackend" folder within the cloned repository.

#### Step 3

Wait for the maven dependencies to be pulled in

#### Step 4

Navigate through javabackend > src > main > java > javabackend > example > javabackend > JavabackendApplication.java

#### Step 5

With the apache server and mysql running through xampp. Run the JavabackendApplication.java file

#### Step 6

Access the url 127.0.0.1:8080 and type in the username and password specified within 'application.properties'

#### Step 7

You should now have access to inventory management system.







