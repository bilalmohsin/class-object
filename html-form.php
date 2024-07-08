<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" action="handle.php" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter Name" />
        <br/><br/>
        <input type="email" name="email" placeholder="Enter Valid Email" />
        <br /><br/>
        <input type="password" name="password" placeholder="Enter Password"/>
        <br/><br/>
        <input type="checkbox" name="skills[]" value="PHP"/>
        <span>PHP</span>
        <input type="checkbox" name="skills[]" value="JAVA"/>
        <span>JAVA</span>
        <input type="checkbox" name="skills[]" value="CPP"/>
        <span>CPP</span>
        <input type="checkbox" name="skills[]" value="PYTHON"/>
        <span>PYTHON</span>
        <input type="checkbox" name="skills[]" value="RUBY"/>
        <span>RUBY</span> 
        <br/><br/>
        <input type="radio" name="gender" value="male" />
        <span>Male</span>
        <input type="radio" name="gender" value="female" />
        <span>Female</span>
        <br /><br />
        <select name="city">
            <option>Lahore</option>
            <option>Multan</option>
            <option>Karachi</option>
            <option>Pindi</option>
        </select>
        <br/><br/>
        <textarea name="address"></textarea>
        <br/><br/>
        <button>Submit</button>
    </form>
</body>
</html>