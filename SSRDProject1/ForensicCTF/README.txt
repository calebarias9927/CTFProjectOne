## Forensic CTF Challenge ###

### **Description**
The real challenge is locked inside a ZIP file, but the key to unlocking it is hidden elsewhere. Your first step is to **investigate the metadata of the provided image**.

**Files Provided:**
- `3d-sunset-landscape.jpg` (contains the password)
- `secret_file.zip` (locked ZIP file)

### **Objective**
1. **Extract the password** hidden inside `3d-sunset-landscape.jpg`.
2. **Use the password** to unlock `secret_file.zip`.
3. **Analyze** the extracted file (`tropical-scene.jpg`) to find the flag.

### **Hints**
- The password is hidden **inside the image metadata**.
- Use **PowerShell** or a **metadata tool** to find it.
- The flag format is `flag{...}`.

### **Step 1: Extract the Password**
Run the following command:
```powershell
exiftool 3d-sunset-landscape.jpg
```
Look for the **Comment** or **Title** field containing the password.

(If you don’t have ExifTool, you can check the metadata manually:
- Right-click `3d-sunset-landscape.jpg`
- Select **Properties** → **Details** tab
- Look for **Comments** or **Title**.)

### **Step 2: Extract the ZIP**
Use the retrieved password to extract `secret_file.zip`.

#### **Using Windows File Explorer**:
1. Double-click `secret_file.zip`
2. Enter the password when prompted: `password123`
3. Extract the contents.

### **Step 3: Find the Flag**
Analyze `tropical-scene.jpg`in powershell using:
```
Get-Content tropical-scene.jpg -Tail 10 | Select-String "flag"
```

### **Good Luck! 🔍**

