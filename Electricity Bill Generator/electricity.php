<!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </head>
  <body>
    <div style="margin:40px">
        <input type="text" id="units" placeholder="Enter units">
        <button class="btn btn-warning" id="calc">Calculate</button>
        <br>
        <label for="bill">Total Bill : </label>
        <input style="margin-top:10px" id="bill" type="text" disabled="true">
    </div>
  </body>
  <script>
    $('#calc').click(function(){
        value=$('#units').val();
        // alert(value);
        $('#bill').disabled="false";

        if(value<=50)
            value=value*3.50;
        else if(value>50&&value<=150)
            value=value*4.00;
        else if(value>150&&value<=250)
            value=value*5.20;
        else 
            value=value*6.50;

        $('#bill').val(value);
    });
  </script>
  </html>

  <?php
    
  ?>