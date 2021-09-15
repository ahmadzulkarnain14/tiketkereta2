<html>
 <head>
  <title>ketentuan</title>
 </head>
 <body>
<style>


/*untuk teks heading di tag <body>*/
h2
{
    background-color: white;
    color: crimson;
    font-family: sans-serif;
    text-align: center;
    width: 45%;
    margin:auto;
    padding: 20px;
}
 
body

{
    background-image: url('https://pbs.twimg.com/media/EwIAKQoWQAE-MLS.jpg:large');
    background-repeat: no-repeat;
    background-size: cover;
}

$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
?>
<a href="<?=$url?>">Go Back PHP</a>

 

</body>
</html>