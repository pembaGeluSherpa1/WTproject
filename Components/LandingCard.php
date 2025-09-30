<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .main-container {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 40px;
    margin-top: 70px;
    padding: 40px 20px;
  }

  .container {
    flex: 1 1 300px;
    max-width: 320px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease;
  }


  .container h2 {
    font-weight: 500;
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
  }

  .image {
    width: 100%;
    height: 200px;
    overflow: hidden;
    border-radius: 10px;
    margin-bottom: 15px;
  }

  .product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
    cursor: pointer;
  }

  .product-image:hover {
    transform: scale(1.1);
  }

  .container p {
    font-size: 14px;
    color: #555;
    line-height: 1.5;
    margin-bottom: 15px;
  }

  #view-more {
    border: none;
    background-color: #007bff;
    color: white;
    padding: 8px 16px;
    font-size: 13px;
    font-weight: 500;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }

  #view-more:hover {
    background-color: #0056b3;
  }

  @media (max-width: 768px) {
    .container {
      max-width: 90%;
    }
  }
</style>
        <div class="main-container">
        <!-- ********************** -->
        <div class="container">
            <h2 style="font-weight: 200; margin-bottom: 10px">
                Featured Rentals:<br />Vehicles
            </h2>
            <div class="image">
                <img class="product-image" src="../assets/car.png" alt="vehicle img" />
            </div>
            <p>
                Explore our diverse range of vehicle rentals, from cars to trucks,
                catering to every travel need.
            </p>
            <input id="view-more" type="button" value="view-more" />
        </div>
        <!-- ************************************** -->
        <div class="container">
            <h2 style="font-weight: 200; margin-bottom: 10px">
                Featured Rentals:<br />Rooms
            </h2>
            <div class="image">
                <img class="product-image" src="../assets/room.png" alt="vehicle img" />
            </div>
            <p>
                Find the perfect room rental that matches your preferences and budget
                for a comfortable stay.
            </p>
            <input id="view-more" type="button" value="view-more" />
        </div>
        <!-- ************************************ -->
        <div class="container">
            <h2 style="font-weight: 200; margin-bottom: 10px">
                Featured Rentals:<br />Clothes
            </h2>
            <div class="image">
                <img class="product-image" src="../assets/cloth.jpg" alt="vehicle img" />
            </div>
            <p>
                Browse our collection of stylish and affordable clothing rentals for
                your special occasions.
            </p>
            <input id="view-more" type="button" value="view-more" />
        </div>
    </div>