<style>

  .mainSearchContainer {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    padding: 40px 20px;
  }

  .searchCard {
    width: 300px;
    display: flex;
    flex-direction: column;
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    transition: transform 0.2s;
  }


  .topCard img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .topCard img:hover {
    transform: scale(1.05);
    cursor:pointer;
  }

  .buttomCard {
    padding: 15px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    font-size: 14px;
    color: #333;
  }

  .title {
    font-size: 18px;
    font-weight: bold;
    color: #222;
  }

  .pricing {
    font-size: 16px;
    color: #007bff;
    font-weight: bold;
  }

  .searchButton {
    display: flex;
    flex-direction: column;
  }

  .crud {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    gap: 10px;
  }

  .edit,
  .delete,
  .detail {
    flex: 1;
    padding: 10px;
    font-size: 14px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }

  .edit {
    background-color: #ffc107;
    color: #000;
  }

  .edit:hover {
    background-color: #e0a800;
  }

  .delete {
    background-color: #dc3545;
    color: white;
  }

  .delete:hover {
    background-color: #c82333;
  }

  .detail {
    width: 100%;
    background-color: #007bff;
    color: white;
    border-radius: 0 0 12px 12px;
    padding: 12px;
  }

  .detail:hover {
    background-color: #0056b3;
  }

  h3 {
    text-align: center;
    margin-top: 20px;
  }

  h3 a {
    background-color: #28a745;
    padding: 10px 20px;
    font-size: 18px;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    transition: background-color 0.2s ease;
  }

  h3 a:hover {
    background-color: #218838;
  }

  .add-button-container {
    width: 100%;
    text-align: center;
    margin: 30px 0 10px 0;
}

.add-button {
    background-color: #28a745;
    color: white;
    padding: 12px 30px;
    font-size: 18px;
    font-weight: 600;
    border-radius: 8px;
    text-decoration: none;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease, transform 0.2s ease;
    display: inline-block;
}

.add-button:hover {
    background-color: #218838;
    transform: translateY(-2px);
}
</style>

<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "Rentli");

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM apartment WHERE user_id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>

<h3 class="add-button-container">
    <a href="../post/post.php" class="add-button">+ Add New Apartment</a>
</h3>

<div class="mainSearchContainer">
    <?php 
    while($row = mysqli_fetch_assoc($result)){
    ?>

    <div class="searchCard">
        <div class="topCard">
            <img src="<?= $row['image']?>" alt="">
        </div>
        <div class="buttomCard">
            <div class="title">
                <b><?php echo $row['title']; ?></b>
            </div>
            <div class="location">
                <b>Location:</b> <?php echo $row['address'];?>
            </div>
            <div class="pricing">
                Rs.<?php echo $row['pricing'];?>
            </div>
        </div>
<div class="searchButton">
    <div class="crud">
    <a href="../delete/delete.php?id=<?= $row['id']; ?>">
    <button class="delete">Delete</button>
</a>
<a href="../edit/edit.php?id=<?= $row['id']; ?>">
    <button class="edit">Edit</button>
</a>
    </div>
    <a href="../post/details.php?id=<?= $row['id']; ?>">
        <button class="detail">View Details</button>
    </a>
</div>
    </div>

    <?php
    }?>
    
</div>
