<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }


  .mainContainer {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    padding: 100px 20px 50px;
  }

  .card {
    width: 400px;
    display: flex;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
  }

  .cardLeft {
    flex-shrink: 0;
    width: 200px;
    overflow: hidden;
  }

  .cardLeft img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  .cardLeft img:hover {
    transform: scale(1.05);
    cursor: pointer;
  }

  .cardRight {
    padding: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
  }

  .cardRight .title h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 10px;
  }

  .discription {
    font-size: 14px;
    color: #555;
    margin-bottom: 15px;
    line-height: 1.4;
  }

  .pricing {
    font-size: 15px;
    color: #007bff;
    font-weight: bold;
    margin-bottom: 15px;
  }

  .button button {
    width: 120px;
    padding: 10px;
    border: none;
    background-color: #007bff;
    color: white;
    font-weight: 600;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.2s ease;
  }

  .button button:hover {
    background-color: #0056b3;
  }

  a {
    text-decoration: none;
  }

  @media (max-width: 768px) {
    .card {
      flex-direction: column-reverse;
      width: 90%;
      align-items: center;
    }

    .cardLeft,
    .cardLeft img {
      width: 100%;
      height: 200px;
    }

    .cardRight {
      width: 100%;
      padding: 20px;
    }
  }
</style>

<div class="mainContainer">
    <div class="card">
        <div class="cardRight">
            <div class="title">
                <h3>Apartments</h3>
            </div>
            <div class="discription">
                <span id="discription">
                    Explore cozy spaces
                    <br />perfect for urban living.</span>
            </div>
            <div class="pricing">
                <span id="pricing">Starting from Nrs.7000/month.</span>
            </div>
            <div class="button">
                <a href="../Searched/Search.php"><button>View Your Listings</button></a>
            </div>
        </div>
        <div class="cardLeft">
            <img src="../assets/apt.png" alt="apartment image" />
        </div>
    </div>

    <div class="card">
        <div class="cardRight">
            <div class="title">
                <h3>Clothes</h3>
            </div>
            <div class="discription">
                <span id="discription">
                    Explore clothes
                    <br />perfect for School cultural program.</span>
            </div>
            <div class="pricing">
                <span id="pricing">Starting from Nrs.800/day.</span>
            </div>
            <div class="button">
                <button>View Your Listings</button>
            </div>
        </div>
        <div class="cardLeft">
            <img src="../assets/cloth.png" alt="apartment image" />
        </div>
    </div>

    <div class="card">
        <div class="cardRight">
            <div class="title">
                <h3>Cars</h3>
            </div>
            <div class="discription">
                <span id="discription">
                    Explore cars
                    <br />perfect for Traveling.</span>
            </div>
            <div class="pricing">
                <span id="pricing">Starting from Nrs.8000/day.</span>
            </div>
            <div class="button">
                <button>View Your Listings</button>
            </div>
        </div>
        <div class="cardLeft">
            <img src="../assets/car.png" alt="apartment image" />
        </div>
    </div>
</div>