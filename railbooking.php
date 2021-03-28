<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="style.css">
    <!--BOOTSTRAP LINK-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <form>
         <form action="rail.php" method="post">


        <div class="signup-form bg-dark">

            <div class="Signup-head bg-warning">
                <h1>Railway Booking</h1>
            </div>

            <div class="signup-content">
                <input type="radio" class="radio" name="r">
                <label class="text-white">One Way</label>
                <input type="radio" class="radio" name="r">
                <label class="text-white">Return</label>
            </div>

            <div class="signup-content2">
                <input type="text" placeholder="From" name="rfrom" class="input bg-dark">

                <input type="text" placeholder="To" name="rto" class="input bg-dark"><br>


            <label class="text-white" style="margin-left:10px;">Depart</label>
            <input type="date" name="rddate"class="tarikh bg-dark text-white">
            <label class="text-white" style="margin-left:10px;">Return date</label>
            <input type="date" name="rrdate" class="tarikh bg-dark">

            <input type="number" class="bg-dark person" placeholder="Adults" name="radult">
            <input type="number" class="bg-dark person" placeholder="Children" name="rchildren"><br>

            <label class="text-white travel">Travel Class</label>
            <select  name="rtclass"class="bg-dark text-white travel2">
                <option></option>
                <option>First Class/1A</option>
                <option>AC 2tier/2A</option>
                <option>AC 3tier/3A</option>
                <option>Executive class chair car/Economy Class</option>
                <option>AC Chair Car</option>
                <option>Sleeper Class</option>
                <option>Second Class</option>
                <option>General</option>
            </select>

            <div id="input4"><!--input4-->
                <input type="text" id="input-group" placeholder="Return time" name="rrtime">
                <input type="text" id="input-group1" placeholder="Any Massage" name="rmassage">
            </div><!--input4-->



                        <div id="input5"><!--input5-->
                            <h3 class="text-white">Personal Details</h3>
                        </div><!--input5-->

                        <div id="input6"><!--input6-->
                            <input type="text" id="input-group" placeholder="Full name" name="rname">
                            <input type="number" id="input-group" placeholder="Phone Number" name="rnumber">
                            <input type="email" id="input-group1" placeholder="Email" name="remail">
                        </div><!--input6-->

            <button type="submit" class="btn btn-primary">Submit Form</button>
            <button type="reset" class="btn btn-primary">Clear Form</button>
        </div>
        </div>
      </form>
    </form>
</body>
</html>
