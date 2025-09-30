<?php
$conn = mysqli_connect("localhost", "root", "", "Rentli");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM apartment WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $apartment = mysqli_fetch_assoc($result);
    } else {
        echo "No apartment found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<style>
  .detailCard {
    width: 100%;
    min-height: 100vh;
    background-color: #f8f9fa;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px 20px;
    margin-top:70px;
  }

  #detailForm {
    width: 100%;
    max-width: 600px;
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    padding: 30px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
    text-align: center;
  }

  #detailForm h1 {
    font-size: 28px;
    color: #007bff;
    margin-bottom: 10px;
  }

  #detailForm img {
    width: 100%;
    max-width: 500px;
    height: auto;
    border-radius: 10px;
    object-fit: cover;
  }

  #detailForm p {
    font-size: 16px;
    color: #444;
    margin: 5px 0;
    width: 100%;
    text-align: left;
  }

  #detailForm p strong {
    color: #000;
  }

  @media (max-width: 600px) {
    #detailForm {
      padding: 20px;
    }

    #detailForm h1 {
      font-size: 24px;
    }

    #detailForm img {
      max-width: 100%;
    }

    #detailForm p {
      font-size: 15px;
    }
  }
</style>

    <?php include '../Components/HeroNav.php' ?>
    <div class="detailCard">
    <form id="detailForm" action="">
    <h1><?= $apartment['title']; ?></h1>
    <img src="<?= $apartment['image']; ?>" width="400">
    <p><strong>Location:</strong> <?= $apartment['address']; ?></p>
    <p><strong>Price:</strong> <?= $apartment['pricing']; ?></p>
    <p><strong>Description:</strong> <?= $apartment['discription']; ?></p>
</form>
</div>