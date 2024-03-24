# PHP Forum

This project is a simple outline for a forum that allows users to to have accounts where they can make posts, comment, and like other posts. Each post may contain text and an image. 

We will see how using PHP, we can find a simple approach to storing user data, and post data. We will not need to use any databases such as SQL, or any javascript.

# Guide

In this document we will establish a guide for learners interested in this project. 

## What we will cover

### Why is this important/useful to learn?

### Required prior knowledge

### Learning materials

### Is this worth learning, and what are some similar alternatives?

## What will we cover?

- Handling sessions in PHP for each client.
- Storing data in terms of user data for accounts and being able to retrieve information for logging in, and making posts/comments.
- Handling HTML POST data to to store information allowing users to create posts with text and images.
- Handling further HTML POST data to store information as a list in a text file for comments on each post keeping track of the comment, user, and time.


## Why is this important/useful to learn?

Although PHP is commonly used as a backend to handle databases such as SQL, it also works excellently with full stack development so with some PHP, we can have an entire website/platform that can handle server-side coding as well as client-side by outputting to the client browser.

Using PHP as a language for web development allows us to handle user sessions easily and integrate it with any data stored on the server. This way we can have accounts for users. Thanks to PHP's vast language and tools, we can effectivley do this without relying on too many third party softwares.

## Required prior knowledge

This project is for programmers interested in full stack development, web development, and platform design. Useful for creating websites that require users to have accounts and interact with the website.

Since we are focusing on PHP sessions and storing data, certain aspects won't be covered such as the following:

### Apache webservers and configuration
You should know how to configure the webserver to run your website. You are not restricted to which websever you use, as long as it supports PHP and your operating system using PHP. I recommend an Unix based operating system.

Ubuntu / Debian VPS: [Guide](https://www.digitalocean.com/community/tutorials/how-to-configure-the-apache-web-server-on-an-ubuntu-or-debian-vps)
	
Mac OSX: [Guide](https://pimylifeup.com/install-apache-on-macos/)

More help: [Guide](https://opensource.com/article/18/2/apache-web-server-configuration)

### RegEx

RegEx in PHP: [Guide](https://www.w3schools.com/php/php_regex.asp)

I reccomend using [Stackoverflow](https://stackoverflow.com/) in case you run into any issues there is a good chance someone else has experienced it.

### Basic knowledge of programming and PHP syntax

Intro to PHP: [Guide](https://www.w3schools.com/php/php_intro.asp)

### Knowledge on HTML and CSS

Intro to HTML/CSS: [HTML Guide](https://www.w3schools.com/html/default.asp) [CSS Guide](https://www.w3schools.com/css/default.asp)

## Learning Materials

Here are some useful links to learn the core concepts we cover:

PHP Sessions: [Guide](https://www.w3schools.com/php/php_sessions.asp)

Reading/Writing files in PHP: [Guide](https://www.w3schools.com/php/php_file_open.asp)

Creating Folders in PHP: [Guide](https://help.scriptcase.net/portal/en/kb/articles/create-a-folder-using-php-code#:~:text=To%20create%20a%20folder%20on,read%20%2F%20write%20the%20new%20folder.)



## Is this worth learning, and what are some similar alternatives?

Using PHP for majority of development is a very useful tool and has several applications. First we must remember that PHP allows us to work with the backend as well as front end. Although we didn't use fundemental databses PHP is very useful for SQL. 

We also didn't use any javascript which is a very helpful tool. Although javascript is very common, it is important not to rely on this language. Using NodeJS and similar languages requires us to build a seperate pipeline to communicate with the front-end and back-end leading to problems with compatibility and efficiency. Javascript is also a very exploitive language leading to several security issues. PHP on the other hand, runs all it's code on the server and outputs the result to the user.

Javascript is outdated and athough we have newer versions such as NodeJS, Typescript, etc, we cannot rely on this too much. We must be more diverse and learning this skill in PHP we broaden our skillset.
