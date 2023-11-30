<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pink Library Table</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fdeff2; /* Background color */
      margin: 0;
      padding: 0;
    }

    .container {
      width: 80%;
      margin: 20px auto;
    }

    h1 {
      text-align: center;
      color: #ff5278; /* Heading color */
    }

    .add-book {
      text-align: center;
      margin-bottom: 20px;
    }

    .add-book button {
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      color: #fff;
      background-color: #ff5278;
    }

    .pink-library-table {
      width: 100%;
      border-collapse: collapse;
    }

    .pink-library-table th,
    .pink-library-table td {
      padding: 12px 15px;
      text-align: left;
      border: 1px solid #ff91a4; /* Table border color */
    }

    .pink-library-table th {
      background-color: #ff5278; /* Header background color */
      color: white; /* Header text color */
      border-top-left-radius: 8px; /* Melengkungkan sudut atas kiri header */
      border-top-right-radius: 8px; /* Melengkungkan sudut atas kanan header */
    }

    .pink-library-table td:first-child {
      border-left: 1px solid #ff91a4; /* Garis kiri untuk sel pertama */
    }

    .pink-library-table td:last-child {
      border-right: 1px solid #ff91a4; /* Garis kanan untuk sel terakhir */
    }

    .pink-library-table tr:last-child td {
      border-bottom: 1px solid #ff91a4; /* Garis bawah untuk baris terakhir */
    }

    .button-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .button-container button {
      margin: 5px;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      color: #fff;
      background-color: #ff5278;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Pink Library Table</h1>
  <div class="add-book">
    <button type="button">Add Book</button>
  </div>
  <table class="pink-library-table">
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>The Secret Garden</td>
        <td>Frances Hodgson Burnett</td>
        <td>Children's literature</td>
        <td class="button-container">
          <button type="button">delete</button>
          <button type="button">edit</button>
        </td>
      </tr>
      <tr>
        <td>Pride and Prejudice</td>
        <td>Jane Austen</td>
        <td>Classic literature</td>
        <td class="button-container">
          <button type="button">delete</button>
          <button type="button">edit</button>
        </td>
      </tr>
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</div>

</body>
</html>
