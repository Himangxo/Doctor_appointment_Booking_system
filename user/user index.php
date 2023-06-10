<!DOCTYPE html>
<html>
<head>
  <title>Doctor Appointment Booking</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Doctor Appointment Booking</h1>
    <form action="book_appointment.php" method="post">
      <label for="username">User Name:</label>
      <input type="text" id="username" name="username" required>

      <label for="userid">User ID:</label>
      <input type="text" id="userid" name="userid" required>

      <label for="useremail">User Email:</label>
      <input type="email" id="useremail" name="useremail" required>

      <label for="useraddress">User Address:</label>
      <textarea id="useraddress" name="useraddress" required></textarea>

      <input type="submit" value="Book Appointment">
    </form>
  </div>
</body>
</html>
