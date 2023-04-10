<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #cccccc;
            padding: 5px;
        }
    </style>
</head>
<body>
<form name="frm">
    <input type="text" id="txtname" name="item" required>
    <button type="button" onclick="postData()">Send</button>
</form>
<br>
<table>
    <tr>
        <th>#ID</th>
        <th>Items</th>
        <th>Created Date</th>
        <th>Action</th>
    </tr>
    <tbody id="myData">
    </tbody>
</table>

<script src="inc/main.js"></script>
</body>
</html>