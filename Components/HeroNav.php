<style>
    /* Reset some default styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    header {
        width: 100%;
        height: 80px;
        position: fixed;
        top: 0;
        background-color: white;
        border-bottom: 1px solid #ddd;
        z-index: 1000;
    }

    nav {
        max-width: 1200px;
        margin: auto;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }

    #logos {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: bold;
        color: #333;
        cursor: pointer;
    }

    #logos img {
        width: 30px;
        height: 30px;
        margin-right: 10px;
    }

    ul {
        display: flex;
        list-style: none;
        gap: 20px;
    }

    ul li {
        font-size: 18px;
        padding: 10px 15px;
        transition: background 0.3s ease;
        position: relative; /* Needed for dropdown positioning */
    }

    ul li:hover {
        background-color: #f0f0f0;
        border-radius: 5px;
    }

    a {
        text-decoration: none;
        color: black;
    }

    #btn,
    #btn-signUp {
        border: 1px solid black;
        border-radius: 5px;
        transition: all 0.3s ease;
        height: 40px;
        text-align: center;
    }

    #btn:hover {
        background-color: #f5f5f5;
    }

    #btn-signUp {
        background-color: #007BFF;
        color: white;
        margin-right: 20px;
    }

    #btn li,
    #btn-signUp li {
        padding: 8px 20px;
    }

    #profileIcon {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
        margin-left: 15px;
        cursor: pointer;
        display: block;
    }

    /* Dropdown styles */
    .dropdown {
        display: none; /* Hidden by default */
        position: absolute;
        top: 100%; /* Position below parent <li> */
        right: 0;
        background-color: white;
        border: 1px solid #ddd;
        box-shadow: 0 2px 8pax rgba(0, 0, 0, 0.1);
        z-index: 1001;
        min-width: 160px;
        border-radius: 5px;
        overflow: hidden;
    }

    .dropdown ul {
        flex-direction: column; /* Stack items vertically */
        display: flex;
        padding: 0;
        margin: 0;
    }

    .dropdown ul li {
        padding: 12px 20px;
        white-space: nowrap; /* Prevent text wrapping */
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .dropdown ul li:hover {
        background-color: #f0f0f0;
    }

    ul > li:hover > .dropdown {
        display: block;
    }
</style>
<header>
    <nav>
        <!-- Left Side -->
        <div style="display: flex; align-items: center; gap: 30px;">
            <div id="logos">
                <img src="../assets/logo.png" alt="Logo" />
                Rentलि
            </div>
            <ul>
                <li><a href="../HeroPage/Hero.php">Home</a></li>
                <li><a href="../Searched/Search.php">Add Rentals</a></li>
            </ul>
        </div>

        <!-- Right Side -->
        <div style="display: flex; align-items: center;">
            <ul>
                <li>
                    <img id="profileIcon" src="../assets/profileNew.png" alt="Profile Icon" />
                    <div class="dropdown">
                        <ul>
                            <li><a href="#profile">Profile</a></li>
                            <li><a href="#settings">Settings</a></li>
                            <li><a href="../Auth/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
