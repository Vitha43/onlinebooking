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
      <form action="car.php" method="post">

        <div class="signup-form bg-dark">

            <div class="Signup-head bg-warning">
                <h1>car Booking</h1>
            </div>

            <div class="signup-content">
                <input type="radio" class="radio" name="r">
                <label class="text-white">One Way</label>
                <input type="radio" class="radio" name="r">
                <label class="text-white">Return</label>
            </div>

            <div class="signup-content2">
                <input type="text" placeholder="From" name="cfrom" class="input bg-dark">

                <input type="text" placeholder="To" name="cto" class="input bg-dark"><br>


            <label class="text-white" style="margin-left:10px;">Depart</label>
            <input type="date"  name="cddate" class="tarikh bg-dark text-white">
            <label class="text-white" style="margin-left:10px;">Return</label>
            <input type="date"  name="crdate" class="tarikh bg-dark">

            <input type="number" class="bg-dark person" placeholder="Adults" name="cadult">
            <input type="number" class="bg-dark person" placeholder="Children" name="cchildren"><br>

            <label class="text-white travel">Travel Class </label>
            <select  name="ctclass" class="bg-dark text-white travel2">
                <option></option>
                <option>Jeep</option>
                <option>Renault BMW</option>
                <option>Audi</option>
                <option>Skoda</option>
                <option>Ford</option>
                <option>Suzuki</option>
                <option>Hyundai</option>
            </select>
            <div id="input4"><!--input4-->
                <input type="text" id="input-group" placeholder="Return time" name="crtime">
                <input type="text" id="input-group1" placeholder="Any Message" name="cmessage">
            </div><!--input4-->


            <div id="input5"><!--input5-->
                <h3 class="text-white">Personal Details</h3>
            </div><!--input5-->

            <div id="input6"><!--input6-->
                <input type="text" id="input-group" placeholder="Full name" name="cname">
                <input type="number" id="input-group" placeholder="Phone Number" name="cnumber">
                <input type="email" id="input-group1" placeholder="Email"name=" cemail">
            </div><!--input6-->
            <button type="submit" class="btn btn-primary">Submit Form</button>
            <button type="reset" class="btn btn-primary">Clear Form</button>
        </div><!--form-->



        </div>
        </div>
      </form>
    </form>
</body>
</html>
