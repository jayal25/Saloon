# 💇‍♀️ Beauty Parlour Management System (BPMS)

A web-based application developed using PHP and MySQL to help manage beauty parlour operations like booking appointments, managing services, and tracking users and staff.

---

## 📁 Project Structure

The BPMS project contains:

- Admin Panel (manage services, appointments, users, and reports)
- User Frontend (view services, book appointments, login/register)
- MySQL Database (`bpmsdb`)
- SQL file for database setup

---

## 🚀 How to Run This Project

Follow the steps below to get BPMS running on your local machine:

### 1. **Download & Extract**
- Download the ZIP file of this project.
- Extract it and copy the `bpms` folder.

### 2. **Move to Server Root**
Paste the `bpms` folder inside your server's root directory:

- For **XAMPP**: `C:/xampp/htdocs/`
- For **WAMP**: `C:/wamp/www/`
- For **LAMP** (Linux): `/var/www/html/`

### 3. **Set Up the Database**
- Open [phpMyAdmin](http://localhost/phpmyadmin)
- Create a new database named: `bpmsdb`
- Import the SQL file:  
  - File: `bpmsdb.sql`  
  - Location: Inside the downloaded project's `/SQL file/` folder

### 4. **Run the Application**
- Open your browser and navigate to:  
  [http://localhost/bpms](http://localhost/bpms)

---

## 🔐 Login Credentials

### Admin Panel
- **URL**: [http://localhost/bpms/admin](http://localhost/bpms/admin)
- **Username**: `admin`  
- **Password**: `Test@123`

### User Panel
- **Sample User**:  
  - **Email**: `johndoe@gmail.com`  
  - **Password**: `Test@123`
- Or register a new user from the [frontend](http://localhost/bpms)

---

## 🛠 Tech Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache (via XAMPP, WAMP, or LAMP)

---

## 📌 Features

- User registration and login
- Admin dashboard to manage:
  - Services
  - Appointments
  - Users
  - Reports
- Appointment booking system
- Email notifications (optional integration)
- Responsive design

---

## 📎 License

This project is for educational purposes. Modify and use it as needed.

---

## 🤝 Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you’d like to change.

---

## 📧 Contact

For any queries, feel free to reach out or open an issue in this repository.

