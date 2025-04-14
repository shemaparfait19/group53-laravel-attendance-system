SIMPLE ATTENDANCE SYSTEM - USER GUIDE
====================================
GROUP 53 MEMBERS
-HARERIMANA Marcellin 
-SHEMA Parfait
BEFORE YOU START
---------------
To use this system, you need to install these first:
1. Composer (a tool for PHP)
   - Download from: https://getcomposer.org/download/
   - Follow the installation instructions for your computer
2. After installing Composer, run these commands in your project folder:
   * composer install
   * php artisan migrate
   * php artisan serve

Welcome to the Simple Attendance System! This guide will help you understand how to use the system.

WHAT IS THIS SYSTEM?
-------------------
This is a simple system to help teachers keep track of student attendance. You can:
- Create classes
- Add students to classes
- Record who is present or absent
- See attendance records

HOW TO USE THE SYSTEM
--------------------

1. FIRST TIME SETUP
   - Log in to the system using your email and password
   - If you don't have an account, ask your admin to create one

2. MANAGING CLASSES
   - Click on "Classes" in the menu
   - To add a new class:
     * Click "Add New Class"
     * Enter the class name
     * Add a description (optional)
     * Click "Create Class"

3. MANAGING STUDENTS
   - Click on "Students" in the menu
   - To add a new student:
     * Click "Add New Student"
     * Enter the student's first name
     * Enter the student's last name
     * Enter the student's email
     * Select which class they belong to
     * Click "Create Student"

4. RECORDING ATTENDANCE
   - Click on "Attendance" in the menu
   - Click "Record Attendance"
   - Select the date
   - You will see all students grouped by their classes
   - For each student, select their status:
     * Present (green) - Student is in class
     * Absent (red) - Student is not in class
     * Late (yellow) - Student came late
   - Click "Record Attendance" to save

5. VIEWING ATTENDANCE RECORDS
   - Click on "Attendance" in the menu
   - You will see a list of all attendance records
   - Each record shows:
     * Student name
     * Status (with color)
     * Date
   - You can:
     * View details
     * Edit records
     * Delete records

IMPORTANT NOTES
--------------
- Always make sure to select the correct date when recording attendance
- You can edit attendance records if you make a mistake
- The system shows attendance status with colors:
  * Green = Present
  * Red = Absent
  * Yellow = Late

