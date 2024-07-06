# Robot Control Panel

This project is a simple robot control panel built using PHP and HTML, which allows users to send directional commands (up, down, left, right) and view the last stored direction. The control panel communicates with a  database to store and retrieve directions, and it only stores the last two directions sent.

## Usage
1. upload database provided inside the file into xampp
2. set conn.php  to connect with the database 
3. Start your local server (Xampp)
4. Open `Cpanel.html` in your browser to access the control panel. e.g(localhost/folder_name/Cpanel.html)
5. Use the buttons to send directional commands.
6. Open `last_direction.php` in your browser to view the last stored direction. e.g(localhost/folder_name/last_direction.php)

## Files

- **conn.php**: Contains the database connection details.
  
- **Cpanel.html**:  user interface for sending directional commands.
  
- **last_direction.php**: Displays the last stored direction.
  
- **save_direction.php**: Handles storing the directions in the database and ensures only the last two directions are stored.

## Screenshots

### Control Panel

![Control Panel](Control_Panel_for_robot/directionsImage.png)

### Last Stored Direction

![Last Stored Direction](Control_Panel_for_robot/LastDirectionsImage.png)
