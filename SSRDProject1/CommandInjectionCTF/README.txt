# DNS Lookup CTF Challenge

Welcome to the DNS Lookup CTF! This beginner-friendly challenge will test your understanding of command injection vulnerabilities in a web application.

---

## Challenge Overview

In this challenge, you are tasked with exploiting a vulnerability in a web-based DNS lookup tool. Your objective is to uncover the hidden flag stored on the server.

- **Category**: Web Exploitation
- **Difficulty**: Easy
- **Objective**: Use command injection to extract the hidden flag.

---

## Getting Started

### Prerequisites
1. Install **Docker Desktop** on your machine.
2. Ensure **Docker Compose** is installed and working.

### Files in this Repository
- `app/`:
  - `index.php`: The main PHP file for the web application.
  - `Dockerfile`: Used to build the Docker image.
- `docker-compose.yml`: Configuration file for Docker Compose.

---

## How to Set Up the Challenge

1. **Clone or Download** the repository to your local machine.
2. Navigate to the challenge directory:
   ```bash
   cd path/to/MyCTF

---
## STEPS ##
1. Build the Docker container: "docker-compose build"
2. Start the container: "docker-compose up -d"
3. Access the application in your browser at : http://localhost:8080

---
## HINTS ##
1. Think about how input is handled in the backend of the application
2. Try chaining Linux commands with a semicolon to execute additional commands.
3. Example: "google.com; cat /flag.txt"

---
## SOLUTION ##
flag{YouFoundMe}

--
## Stopping the Challenge ##
"docker-compose down"

OPTIONAL (Remove the Docker image to save space): "docker rmi myctf_app"

