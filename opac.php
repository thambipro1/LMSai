<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library OPAC</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .search-bar {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        .search-bar input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-bar button {
            padding: 10px 15px;
            background-color: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            margin-left: 10px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>

<header>
    <h1>Library OPAC</h1>
    <p>Your gateway to library resources</p>
</header>

<div class="container">
    <div class="search-bar">
        <input type="text" placeholder="Search for books, authors, subjects..." />
        <button type="button">Search</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Available Copies</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>The Great Gatsby</td>
                <td>F. Scott Fitzgerald</td>
                <td>9780743273565</td>
                <td>3</td>
            </tr>
            <tr>
                <td>1984</td>
                <td>George Orwell</td>
                <td>9780451524935</td>
                <td>5</td>
            </tr>
            <tr>
                <td>To Kill a Mockingbird</td>
                <td>Harper Lee</td>
                <td>9780061120084</td>
                <td>2</td>
            </tr>
            <tr>
                <td>The Catcher in the Rye</td>
                <td>J.D. Salinger</td>
                <td>9780316769488</td>
                <td>4</td>
            </tr>
            <tr>
                <td>Pride and Prejudice</td>
                <td>Jane Austen</td>
                <td>9781503290563</td>
                <td>6</td>
            </tr>
            <!-- Add more book entries as needed -->
        </tbody>
    </table>
</div>

<div class="footer">
    <p>&copy; 2024 Your Library Name. All Rights Reserved.</p>
</div>

</body>
</html>
