
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8da83a5fd6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <div class="main-content">
        <div class="img-fluid">
            <img src="images/450-removebg-preview (1).png" alt="a picture of a boy">
        </div>

        <h1>Welcome</h1>
        <button class="btn-primary">Continue</button>
        <a href="forms.php" class="btn-primary btn-sm">Continue</a>
    </div>

    <div class="overlay hide"></div>

    <div class="forms hide">
        <h1>Personal Details</h1>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="close-modal">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        <form class="form-details" action="insert.php" method="post">
            <div class="input-field">
                <span class="icon"><i class=" fa-solid fa-user"></i></span> <input type="text" name="fname" placeholder="Enter Firstname" class="form-text" maxlength="20"><br>
            </div>

            <div class="input-field">
                <span class="icon"><i class=" fa-solid fa-user"></i></span><input type="text" name="sname" placeholder=" Enter Surname" class="form-text" maxlength="20"><br>
            </div>

            <div class="input-field">
                <span class="icon"><i class="fa-solid fa-phone"></i></span><input type="tel" name="phone" placeholder="e.g. +233 000 000 0000" class="form-text"><br>
            </div>

            <div class="input-field">
                <span class="icon"><i class=" fa-solid fa-user"></i></span> <select name="gender" id="gender" class="form-text">
                    <option></option>
                    <option name="gender">Male</option>
                    <option  name="gender" >Female</option>
              </select><br>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>
