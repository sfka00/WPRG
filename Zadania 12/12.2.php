<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "zadanie12";

$pdo = new PDO("mysql:host=$dbhost", $dbuser, $dbpass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("Create DATABASE IF NOT EXISTS $dbname");
echo "Database created successfully (or already existed).<br>";
$pdo->exec("USE $dbname");

try{
    $createtablePERSON = "CREATE TABLE IF NOT EXISTS Person (
    Person_id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    Person_firstname VARCHAR(255) NOT NULL,
    Person_secondname VARCHAR(255) NOT NULL
)";

    $createtableCARS = "CREATE TABLE IF NOT EXISTS Cars (
   Cars_id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Cars_model VARCHAR(255) NOT NULL,
    Cars_price FLOAT NOT NULL,
    Cars_day_of_buy DATETIME NOT NULL,
    Person_id INT,
    FOREIGN KEY(Person_id) REFERENCES Person(Person_id)
)";
    $pdo->exec($createtablePERSON);
    echo"Table Person created successfully (or already existed).<br>";
    $pdo->exec($createtableCARS);
    echo"Table Cars created successfully (or already existed).<br>";
}catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['Addperson'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        if($firstname && $lastname){
            $insert = $pdo->prepare("INSERT INTO Person (Person_firstname, Person_secondname) VALUES (:firstname, :lastname)");
            $insert->execute(['firstname' => $firstname, 'lastname' => $lastname]);
            echo "Person added successfully.<br>";
        }
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['Addcar'])){
        $model = $_POST['model'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $person_id = $_POST['person_id'];
        if($model && $price && $person_id){
            $insert = $pdo->prepare("INSERT INTO Cars (Cars_model, Cars_price, Cars_day_of_buy,Person_id) VALUES (:model, :price, :date, :person_id)");
            $insert->execute(['model' => $model, 'price' => $price,'date'=>$date, 'person_id' => $person_id]);
            echo "Car added successfully.<br>";
        }
    }
}
if (isset($_POST['Delete_person_id']) && isset($_POST['Delete_person_submit'])) {
    $id = $_POST['Delete_person_id'];
    $deletefrom = $pdo->prepare("DELETE FROM Person WHERE Person_id = :id");
    $deletefrom->execute(['id' => $id]);
    echo "Person deleted.<br>";
}
if (isset($_POST['Delete_car_id'])&& isset($_POST['Delete_car_submit'])) {
    $id = $_POST['Delete_car_id'];
    $stmt = $pdo->prepare("DELETE FROM Cars WHERE Cars_id = :id");
    $stmt->execute(['id' => $id]);
    echo "Car deleted.<br>";
}
if (isset($_POST['Edit_person_id']) && isset($_POST['Edit_person_submit'])) {
    $id = $_POST['Edit_person_id'];
    $deletefrom = $pdo->prepare();
    $deletefrom->execute(['id' => $id]);
    echo "<br>";
}
if (isset($_POST['Edit_car_id'])&& isset($_POST['Edit_car_submit'])) {
    $id = $_POST['Edit_car_id'];
    $stmt = $pdo->prepare();
    $stmt->execute(['id' => $id]);
    echo "<br>";
}

$persons = $pdo->query("SELECT Person_id, Person_firstname, Person_secondname FROM Person")->fetchAll(PDO::FETCH_ASSOC);
$cars = $pdo->query("SELECT * FROM Cars")->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zad12.2</title>
    <style>
        form{
            display:block;
            max-width: 500px;
            padding: 20px;
        }
        label{
            display: block;
            margin-bottom:10px;
        }
        input, select{
            display:block;
            width:100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button{
            display:block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border-radius: 5px;
            border:none;
        }
        span{
            display:inline-block;
            width:30px;
            text-align:center;
        }
        table, th, td{
            border:1px solid black;
            border-collapse: collapse;
            width:400px;
            height:50px;
        }
    </style>

</head>
<body>
<br><br>


<h2>Add Person</h2>
<form method="POST">
    <span></span>
    <label>
        <input type="text" name="firstname" placeholder="First Name" required>
    </label>
    <label>
        <input type="text" name="lastname" placeholder="Last Name" required>
    </label>

    <label>
        <button type="submit" name="Addperson">Add Person</button>
    </label>
</form>


<h2>Add Car</h2>
<form method="POST">
    <span></span>
    <label>
        <input type="text" name="model" placeholder="Model" required>
    </label>
    <label>
        <input type="number" name="price" placeholder="Price" required>
    </label>
    <label>
        <input type="date" name="date" placeholder="Date of Purchase" required>
    </label>
    <label>
        <select name="person_id" required>
            <option value="">Select Person</option>
            <?php
            foreach ($persons as $p) {
                echo '<option value="' . $p['Person_id'] . '">';
                echo $p['Person_firstname'] . ' ' . $p['Person_secondname'];
                echo '</option>';
            }
            ?>

        </select>

    </label>
    <label>
        <button type="submit" name="Addcar">Add Car</button>
    </label>
</form>

<h2>Persons</h2>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Action</th>
    </tr>
    <?php foreach($persons as $p): ?>
        <tr>
            <td><?=$p['Person_id'] ?></td>
            <td><?=$p['Person_firstname'] ?></td>
            <td><?=$p['Person_secondname'] ?></td>
            <td>
                <form method="POST"><input type="hidden" name="Delete_person_id" value="<?=$p['Person_id'] ?>" >
                    <button type="submit" name="Delete_person_submit">Delete</button>
                </input>
                </form>
                <button type="submit" name="Edit">Edit</button></td>

        </tr>
    <?php endforeach; ?>
</table>



<h2>Cars</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Model</th>
        <th>Price</th>
        <th>Date</th>
        <th>Person ID</th>
        <th>Action</th>
    </tr>
    <?php foreach($cars as $c): ?>
    <tr>
        <td><?=$c['Cars_id'] ?></td>
        <td><?=$c['Cars_model'] ?></td>
        <td><?=$c['Cars_price'] ?></td>
        <td><?=$c['Cars_day_of_buy'] ?></td>
        <td><?=$c['Person_id'] ?></td>
        <td>
            <form method="POST"><input type="hidden" name="Delete_car_id" value="<?=$c['Cars_id'] ?>" >
                <button type="submit" name="Delete_car_submit">Delete</button>
                </input>
            </form>
            <form method="POST">
                <button type="submit" name="Edit_car_submit">Edit</button></td>
            </form>

        </td>

    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>