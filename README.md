
#Proof of Concept
### Authors: Scott Metcalf

## Introduction
Proof of Concept is meant to be a super simple project for creating small reusable and functional pieces of code. The idea is that when you encounter a task in a project, you would break it down to its simplest functional form and get all the bugs out before integrating it into a complex project. This allows you to save time by not having to weed through bugs with new code while trying debug while integrating it with existing, more complex, code.

Another advantage of this approach is that it quickly creates a library that can be reused in new projects. It helps to reduce the amount of time spent on having to recreate past solutions.

## Description

To create a new proof of concept create a new folder under the webroot folder and copy/paste a premade file from the templates directory.

If there is any sensitive info in your project, create a config.php file in your project's root directory and assign the sensitive data to variables there.

The config file will automatically be included in your project.