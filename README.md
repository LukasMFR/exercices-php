# exercices-php

This repository hosts a series of PHP programming exercises designed to enhance and practice PHP coding skills. These exercises cover a range of topics from basic programming concepts to more advanced challenges. Each exercise includes a detailed description along with instructions for completion.

## Introduction

This collection of PHP exercises aims to help users practice and strengthen their PHP programming skills. Each task is designed to address different aspects of PHP programming, from simple operations to more complex functions.

### Exercise 1: Simple Calculator

**Objective:** Create a simple calculator that can perform addition, subtraction, multiplication, and division.

**Instructions:**
- Create an HTML form with fields to input two numbers and a dropdown to select the operation.
- Use PHP to retrieve the data from the form and perform the selected operation.
- Display the operation result on the page.

### Exercise 2: Temperature Conversion

**Objective:** Develop a PHP program that can convert temperatures from Celsius to Fahrenheit and vice versa.

**Instructions:**
- Create an HTML form with a field to input the temperature and radio buttons to select the unit (Celsius or Fahrenheit).
- Use PHP to retrieve the input data and perform the appropriate conversion.
- Display the conversion result on the page.

### Exercise 3: Palindrome Checker

**Objective:** Write a PHP function to check if a string is a palindrome.

**Instructions:**
- Define a PHP function that takes a string as input and checks if it is a palindrome.
- Test the function with various strings and display the results on the page.

### Exercise 4: Prime Number Generator

**Objective:** Write a PHP function that generates and displays all prime numbers up to a specified number.

**Instructions:**
- Define a PHP function that takes an integer as input.
- Implement the algorithm to generate all prime numbers up to this integer.
- Display the prime numbers on the page.

### Exercise 5: Task Manager

**Objective:** Create a simple task manager in PHP that allows adding, deleting, and marking tasks as completed.

**Instructions:**
- Create an HTML form with fields to add a new task.
- Use PHP to handle adding, deleting, and marking tasks as completed.
- Display the list of tasks with buttons for delete and mark as completed actions.

### Exercise 6: Database Connection

**Objective:** Create a PHP page that connects to a MySQL database.

**Instructions:**
- Set up the connection settings to your MySQL database (host name, username, password, database name).
- Use the `mysqli_connect()` function in PHP to establish a connection.
- Check if the connection is successful and display an appropriate message.

### Exercise 7: Display Users from Database

**Objective:** Write a PHP script to fetch users from a database table and display them on the page.

**Instructions:**
- Ensure you have a table in your database containing users (with columns like 'id', 'name', 'email', etc.).
- Write a SQL query to select all users from the table. Use PHP to execute this query and fetch the results.
- Display the users in an HTML table or list.

### Exercise 8: User Pagination

**Objective:** Improve user display by implementing pagination to avoid displaying all users at once.

**Instructions:**
- Modify your SQL query to include a `LIMIT` clause to restrict the number of users fetched per page.
- Add pagination links to allow users to navigate between pages.
- Use GET or POST parameters to track the current page number and adjust the SQL query accordingly.
- Display the current page number and total number of pages.

## Database Setup

Before you start working on Exercises 6, 7, and 8, you need to import the SQL files into your phpMyAdmin:

- `exo6.sql`
- `exo7.sql`
- `exo8.sql`

These files contain the necessary database structures and initial data required for the exercises.

## Getting Started

To get started with these exercises, clone this repository using:

```bash
git clone https://github.com/LukasMFR/exercices-php.git
```

Navigate to the repository directory and start working on the exercises by following the instructions provided for each.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
