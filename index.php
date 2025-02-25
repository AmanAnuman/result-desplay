<style>
    table {
        margin-top: 50px;
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }

    body {
        animation: colorchange 5s ease-in-out alternate-reverse infinite;
        font-size: 2rem;
    }

    @keyframes colorchange {
    0% {
        background-color: orange;
    }

    20% {
        background-color: tomato;
    }

    49% {
        background-color: gray;
    }

    60% {
        background-color: yellow;
    }

    80% {
        background-color: green;
    }

    100% {
        background-color: #f0f0f0;
    }
}
</style>
<?php
$servername = "sql201.infinityfree.com";
$username = "if0_38396745";
$password = "enock600";
$database = "if0_38396745_personal_information";

$conn = new mysqli ($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("connection failed:".$conn->connect_error);
}

$sql = "SELECT * FROM informaation";
$result = $conn->query($sql);

if ($result->num_rows>0){
    echo "<table border=1>
            <tr>
              <th>Email_address</th>
              <th>Ussername</th>
              <th>Password</th>
            </tr>";

while ($row = $result->fetch_assoc()){
    echo "<tr>
            <td>" .$row['Email_address']."</td>
            <td>" .$row['Ussername']."</td>
            <td>" .$row['Password']."</td>
        <tr>";
}
} else {
    echo "No record found / No any saved information<br><br><br>❌❌❌";
}

$conn->close();

?>