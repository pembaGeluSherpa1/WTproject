    <style>
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
        margin-right:20px;
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
    </style>
    
    <header style="background-color: white; width: 100%">
        <nav style="display: flex; justify-content: space-between;
        ">
            <div style="display: flex;
            justify-content: center;
            align-items: center;
            ">
                <div id="logos"
                ><img src="../assets/logo.png"/>Rentलि</div>
            </div>
            <div style="display: flex;
            justify-content: center;
            align-items: center;
            ">
                <ul>
                    <a href="../Auth/login.php" id="btn">
                        <li>Sign-in</li>
                    </a>
                    <a href="../Auth/sign-up.php" id="btn-signUp">
                        <li>Sign-up</li>
                    </a>
                </ul>
            </div>
        </nav>
    </header>