
<!DOCTYPE html>
<html lang="en">
<head>

  <script>
    let seconds = 3;

    function displaySeconds()
      {
        seconds -= 1;
        document.getElementById("Redirecting").innerText="Redirecting in... "+seconds;
      }
      setInterval(displaySeconds,1000);

    function redirect_page()
    {
      window.location="../index.php";
    }
    setTimeout('redirect_page()',3000);
  </script>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="ProductSubmittedPage.css">

  <title>junior test.bojan.petrushevski</title>
  <link rel="stylesheet" href="../includes/font-awesome-4.7.0">


</head>
<body>

<hr class="top" id="top_line">
    <h1 class="message"><div class="messageDetail">Product was submitted successfully !</div>
      <hr class="top">

      <div id="secondsDisplay">
        <div id="Redirecting">
        </div>

        <div id="loading">
          <iframe  src="https://giphy.com/embed/3oEjI6SIIHBdRxXI40" width="175px" height="175px" frameBorder="0"></iframe>
        </div>

      </div>
    </h1>
<hr class="top">

</body>




</html>
