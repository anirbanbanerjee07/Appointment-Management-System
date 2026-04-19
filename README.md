# Appointment-Management-System
A simple and efficient Appointment Management System built for managing doctor appointments, patients, and schedules smoothly. 🏥✨

--- 

## 🚀 Most Required
1. ✅ **Admin Site Visit**
```
Login email: admin@edoc.com
login password: 123
```
<img src="screenshot/Admin site/Administrator Home page.jpg" width="400">

2. ✅ **Doctor Site Visit**
```
Login email: doctor@edoc.com
login password: 123
```
<img src="screenshot/doctor site/doctor site home page.jpg" width="400">

3. ✅ **Patient Site Visit**
```
Login email: patient@edoc.com
login password: 123
```
<img src="screenshot/Patient site/Patient site home page.jpg" width="400">

---

### 🔐 Authentication
- User Registration
- Secure Login System
- Password hashing (bcrypt)
- JWT-based authentication (Not Applied)

### 📅 Appointment System
- Book appointments (Date + Time)
- View all user appointments
- Cancel appointments
- Prevent duplicate bookings for same slot

### 🎨 Frontend Features
- 🎯 Responsive UI (Tailwind CSS)
- ⚡ Vue 3 Composition API (modern & scalable)
- 🔗 Axios API integration
- 🔐 Protected routes (auth-based access)
- ⏳ Loading states & clear error handling

---

## 🛠️ Tech Stack

- **Backend:** PHP (Pure & PDO)
- **Database:** MySQL
- **Frontend:** HTML5, CSS3, JavaScript, Vue.js
- **Framework:** Git
- **APIs:** RESTful APIs

---

## 🚀 Installation & Setup

Follow these steps to run the project locally on your machine (using XAMPP/WAMP/MAMP)

**1. Clone the Repository**

git clone https://github.com/anirbanbanerjee07/Appointment-Management-System.git

**2. Move to Project Folder**

Navigate to the folder containing the project files.

**3. Database Configuration**

- Start Apache and MySQL from your XAMPP/WAMP control panel.
- Open `http://localhost/phpmyadmin` in your browser.
- Create a new database (e.g., edoc).
- Import the provided .sql file located in the root folder.

**4. Database Connection Setup**

Open connection.php (or your respective database configuration file).
Update the following credentials to match your local environment:
```php
$db_host = "localhost";
 $db_name = "edoc"; // Your database name
 $db_user = "root";       // Default XAMPP user
 $db_pass = "";           // Default XAMPP password is empty
```

---

## 👨‍💻 Developer
*Anirban Banerjee*

- 🌐 LinkedIn: <a href="https://www.linkedin.com/in/anirban-banerjee-495775357" target="_blank" style="color: #FF0054; text-decoration: none;">Connect with me on LinkedIn</a>

---

Code ☕ Coffee 🔁 Repeat
