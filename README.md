# TimeLogix, an HR Time Tracking System

## Description

TimeLogix is a web-based application designed to streamline employee attendance management, time tracking, and HR-related tasks. This project offers a user-friendly interface for employees to log their work hours accurately, allowing for precise record-keeping of attendance, departures, and absence tracking. Administrators can manage employee data securely, making HR processes more efficient.

## Key Features

* **Time Tracking**: Employees can easily clock in and out, providing accurate work hour records for precise payroll processing.

* **Attendance Management**: Detailed attendance logs help HR personnel monitor and analyze employee attendance, including tardiness and absences.

* **Departure Records**: The system maintains records of employee departures, both voluntary resignations and involuntary terminations.

* **Admin Privileges**: Administrators can add, edit, or remove employee profiles, simplifying onboarding and personnel management.

* **Secure Login**: A robust login system with validated credentials ensures data security and maintains confidentiality.

## Getting Started

Follow these instructions to set up and run the HR Time Tracking System locally on your machine. 

### Prerequisites

* MAMP (Macintosh, Apache, MySQL, and PHP)
* PHP 7.4
* Database SQL file: `extras/db.sql`

### Installation

1. **Configure MAMP:**
   - Download and install MAMP from the official website: [MAMP](https://www.mamp.info/).
   - Launch MAMP after installation.
   - In MAMP, go to "Preferences" > "Ports" and ensure that the Apache port is set to the default `8888`.

2. **Create a New Host in MAMP:**
   - In MAMP, go to the "Hosts" tab.
   - Click on the "+ Add New Virtual Host" button.
   - Set the "Document Root" to the path of your project's "public" directory.
   - Save the virtual host configuration.

3. **Import the Database:**
   - Open phpMyAdmin by clicking on `Tools` in MAMP.
   - Create a new database.
   - Import the database schema from the `extras/db.sql` file.

4. **Log in as Admin or Employee:**
   - To log in as the admin (Michael Scott):
     - Email: admin@dundermif.com
     - Password: a
   - To log in as an employee (Jim Halpert, Pam Beesly, Dwight Schrute, or Stanley Hudson):
     - Email: user1 (2, 3, or 4)@dundermif.com
     - Password: a

5. **Run the Application:**
   - Start the MAMP servers.
   - Access the HR Time Tracking System by navigating to `http://localhost:8888` in your web browser.

### Usage

1. **Log In:**
   - When you open the application, you will be greeted by the login system. You can log in with the following credentials provided in point 4:
     - **Admin Login:**
       - Email: admin@dundermif.com
       - Password: a
     - **Employee Login (Jim Halpert, Pam Beesly, Dwight Schrute, or Stanley Hudson):**
       - Email: user1 (2, 3, or 4)@dundermif.com
       - Password: a

   ![Login Screen](https://github.com/jfiliprc/TimeLogix/assets/109008096/59309c2b-eb38-4688-ae9d-3f4b7e920ac5)

2. **Admin Dashboard:**
   - When logged in as an admin, you have access to various features, including:
     - Registering entry and exit times.
     - Managing monthly and daily reports of employees.
     - Registering and terminating employee contracts.

   ![Admin Dashboard](https://github.com/jfiliprc/TimeLogix/assets/109008096/1ac0c0cb-c563-4224-ba4b-bcd56cdf11db)

   ![Monthly Reports](https://github.com/jfiliprc/TimeLogix/assets/109008096/bada474b-8f89-4bc7-a425-aa025388a160)

   ![Daily Reports](https://github.com/jfiliprc/TimeLogix/assets/109008096/6c0e14ae-4f73-4466-ab48-f9d6de9be265)

   ![Employee Contracts](https://github.com/jfiliprc/TimeLogix/assets/109008096/04e0b659-02c6-4edb-8f7f-e9b38b4ef176)

   ![Terminate Contracts](https://github.com/jfiliprc/TimeLogix/assets/109008096/d431ea82-40a0-4876-9a33-c831250f03a2)
   
## Acknowledgments

This project incorporates characters from the TV show "The Office," where Michael Scott is the boss and has all access privileges, while employees do not.
