# Simple PHP REST API

This is a simple PHP-based REST API that allows you to perform CRUD operations (`Create`, `Read`, `Update`, and `Delete`) on a `users` table in a MySQL database. This is designed for learning purposes and tested using **Postman**.

---

## 🛠 Requirements

- PHP (>=7.x)
- MySQL
- Apache/Nginx server (e.g., XAMPP, WAMP, or LAMP)
- Postman for API testing

---

## 📁 File Structure

```
.
├── index.php          # Main REST API logic
└── conn.php           # Database connection config
```

---

## 🧰 Database Setup

1. Create a MySQL database named `rest`.
2. Create a table called `users`:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    age INT
);
```

---

## 🚀 How to Run

1. Place the project files (`index.php` and `conn.php`) in your web server directory (e.g., `htdocs` in XAMPP).
2. Start your Apache and MySQL services.
3. Make sure the database connection in `conn.php` is correct.
4. Access the API via browser or Postman using:

```
http://localhost/your-folder/index.php
```

---

## 📬 How to Test with Postman

### 1. **GET all users**

- **Method:** `GET`
- **URL:** `http://localhost/your-folder/index.php`

---

### 2. **GET user by ID**

- **Method:** `GET`
- **URL:** `http://localhost/your-folder/index.php?id=1`

---

### 3. **POST (Create a new user)**

- **Method:** `POST`
- **URL:** `http://localhost/your-folder/index.php`
- **Headers:**
  - `Content-Type: application/json`
- **Body (raw JSON):**

```json
{
  "name": "John Doe",
  "email": "john@example.com",
  "age": 30
}
```

---

### 4. **PUT (Update a user by ID)**

- **Method:** `PUT`
- **URL:** `http://localhost/your-folder/index.php?id=1`
- **Headers:**
  - `Content-Type: application/json`
- **Body (raw JSON):**

```json
{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "age": 25
}
```

---

### 5. **DELETE (Remove a user by ID)**

- **Method:** `DELETE`
- **URL:** `http://localhost/your-folder/index.php?id=1`

---

## ⚠️ Notes

- This is a basic learning project and **does not** include input validation or security practices (e.g., prepared statements). Do not use this in production.
- To secure your API: use `mysqli_prepare`, add token-based authentication, and sanitize all input.

 
