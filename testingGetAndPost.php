<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="testingGetAndPost.php" method="post">
    <label>username testing:</label><br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
//Testing Get and Post
    /*
    $_GET, $_POST = special variables used to collect data from an HTML form
    data is sent to the file in the action attribute of <form>
    <form action="some_file.php" method="get">

    **Get>> Data is appended to the url
    Not Secure/ URL address မှာ parameter value တွေ ပါတာ
    char limit
    Bookmark  is possible w/ values ပြောချင်တာ data pass ပေးတာ parameter value ကို
    Cache ဖြစ်တယ်
    Better for a search page

    **Post>> HTTP request ရဲ့ body ထဲမှာ data တွေကို ပို့လိုက်တာ
    Secure ပိုဖြစ် / URL address မှာ parameter value တွေ မပါတော့ဖူး 
    No data limit
    Cannot bookmark
    not cached
    Better for submitting credentials
    */
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>