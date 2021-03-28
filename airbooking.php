<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    <link rel="stylesheet" href="style.css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container"><!--container-->

        <form class="form-group"><!--form-->
          <form action="air.php" method="post">

            <h1 class="text-center">Airline Booking Form</h1>

            <div id="form"><!--form-->
                <h3 class="text-white">Booking Details</h3>

            <div id="input"><!--input-->
                <input type="text" id="input-group" placeholder="From" name="afrom">
                <input type="text" id="input-group" placeholder="To" name="ato">
                <input type="text" id="input-group" placeholder="Departure Date"  name="addate">
                <input type="text" id="input-group" placeholder="Departure Time" name="adtime">
                <select  name="apline" id="input-group" style="background: black;">
                    <option value="">Preferred Airline</option>
                    <option value="">IndiGo</option>
                    <option value="">AirIndia</option>
                    <option value="">Jet Airways</option>
                </select>
                <select name="apseating" id="input-group" style="background: black;">
                    <option value="">Preferred Seating</option>
                    <option value="">Economy Class</option>
                    <option value="">Business Class</option>
                    <option value="">First Class</option>
                </select>
                </div><!--input-->

                <div id="input2"><!--input2-->
                    <input type="number" id="input-group" placeholder="Adult" name="aadult">
                    <input type="number" id="input-group" placeholder="Children(2-11years)" name="achildren">

                </div><!--input2-->

                <div id="input3"><!--input3-->
                    <span id="input-group" class="text-primary">Select Your Fare</span>
                    <input type="radio" id="input-group" name="r">
                    <label class="text-white" for="input-group">One Way</label>
                    <input type="radio" id="input-group" name="r">
                    <label class="text-white" for="input-group">Round Trip</label>
                </div><!--input3-->

                <div id="input4"><!--input4-->
                    <input type="text" id="input-group" placeholder="Return Date" name="ardate">
                    <input type="text" id="input-group" placeholder="Return time" name="artime">
                    <input type="text" id="input-group1" placeholder="Any Message" name="amassage">
                </div><!--input4-->

                <div id="input5"><!--input5-->
                    <h3 class="text-white">Personal Details</h3>
                </div><!--input5-->

                <div id="input6"><!--input6-->
                    <input type="text" id="input-group" placeholder="Full name" name="aname">
                    <input type="number" id="input-group" placeholder="Phone Number" name="anumber">
                    <input type="email" id="input-group1" placeholder="Email" name="aemail">
                </div><!--input6-->
                <button type="submit" class="btn btn-primary">Submit Form</button>
                <button type="reset" class="btn btn-primary">Clear Form</button>
            </div><!--form-->

        </form><!--form-->
      </form>

    </div><!--container-->
</body>
</html>
