//Only the mainProject supports the Summary tag.
var app = angular.module('myApp', [])
	.controller('myController', ['$scope', function ($scope) {
		$scope.projectList = {
			"mainProject": {
				"title": "Assignment 10",
				"desc": "Write summary for analysis of 'A Look at the Dynamics of theJavaScript Package Ecosystem'",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "https://docs.google.com/document/d/1MNVsXqagFxyxXrIYlAOPWbhjM6Ubyg0YBN0HlFyHE5I/edit?usp=sharing",
					"urlWords": "Google Doc"
				}]
			},
			"projects": [{
			"mainProject": {
				"title": "Assignment 9",
				"desc": "Form validation, using both JS and PHP",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "assignment9.php",
					"urlWords": "Assignment 9 Page"
				}, {
					"url": "https://github.com/Adondriel/CSC434",
					"urlWords": "Github Repository"
				}]
			}, {
				"title": "Assignment 8",
				"desc": "Displays different examples using JS",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "assignment8.php",
					"urlWords": "Assignment 8 Page"
				}, {
					"url": "https://github.com/Adondriel/CSC434",
					"urlWords": "Github Repository"
				}]
			}, {
				"title": "Assignment 7",
				"desc": "Uses PHP and MySQL to create a SECURE login form, logs out after 30 mins, and everything is hashed securely.",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "assignment7.php",
					"urlWords": "Assignment 7 Page"
				}, {
					"url": "https://github.com/Adondriel/CSC434",
					"urlWords": "Github Repository"
				}]
			}, {
				"title": "Assignment 6",
				"desc": "Uses forms to create tables, insert into tables, and update data from those tables.",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "assignment6.php",
					"urlWords": "Assignment 6 Page"
				}, {
					"url": "https://github.com/Adondriel/CSC434",
					"urlWords": "Github Repository"
				}]
			}, {
				"title": "Assignment 5",
				"desc": "This project creates the tables for TV and Computer from assignment3, and then randomly fills it with 10 items.",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "assignment5.php",
					"urlWords": "Assignment 5 Page"
				}, {
					"url": "https://github.com/Adondriel/CSC434",
					"urlWords": "Github Repository"
				}]
			}, {
				"title": "Assignment 4",
				"desc": "This project will read the assignment3.php file and print out the first 10 lines of text from the file.",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "assignment4.php",
					"urlWords": "Assignment 4 Page"
				}, {
					"url": "https://github.com/Adondriel/CSC434",
					"urlWords": "Github Repository"
				}]
			}, {
				"title": "Assignment 3",
				"desc": "This project required me to create a php page, with classes and different data types and way to manipulate that data.",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "assignment3.php",
					"urlWords": "Assignment 3 Page"
				}, {
					"url": "https://github.com/Adondriel/CSC434_Assignment3",
					"urlWords": "Github Repository"
				}]
			}, {
				"title": "Assignment 2",
				"desc": "This project required me to create a home page, that would index my further projects(this page), a page that contains examples of html, and a page that contains examples of different PHP code, with source code.",
				"img": "assets/images/html5.jpg",
				"links": [{
					"url": "html_examples.php",
					"urlWords": "HTML Examples"
				}, {
					"url": "php_examples.php",
					"urlWords": "PHP Examples"
				}, {
					"url": "https://github.com/Adondriel/CSC434_Assignment2",
					"urlWords": "Github Repository"
				}]

			}, {
				"title": "Assignment 1",
				"img": "assets/images/webserver.png",
				"desc": "This project required me to create a very simple web server, that accepted requests from a client, and then responded with a result.",
				"links": [{
					"url": "https://github.com/Adondriel/CSC434_Assignment1",
					"urlWords": "Github Repository"
				}]
			}]
		}

	}])
	.config([
		'$compileProvider',
		function ($compileProvider) {
			$compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|chrome-extension|mumble):/);
			// Angular before v1.2 uses $compileProvider.urlSanitizationWhitelist(...)
		}
	]);