<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Booking Form HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" />


</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Book a Board Room</h1>
                        </div>
                        <form method="POST" action="/submit">
                        @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Name</span>
                                        <input class="form-control" type="text" name="user_name" placeholder="Enter your name" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Board Room</span>
                                        <select class="form-control" name="select_broom" laceholder="Enter your Department" required>
                                            <option>Board Room 01 - (33 Members)</option>
                                            <option>Board Room 02 - (30 Members)</option>
                                            <option>Board Room 03 - (70 Members)</option>
                                            <option>Board Room 04 - (08 Members)</option>
                                            <option>Senate Hall - (85 Members)</option>
                                            <option>Auditorium - (350 Members)</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Department</span>
                                        <input class="form-control" type="text" name="department" placeholder="Enter your Department" required>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">No. of Participants</span>
                                        <input class="form-control" type="text" name="no_of_members" placeholder="Number of members to attend" required>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Purpose</span>
                                <input class="form-control" type="text" name="purpose" placeholder="Reason for meeting" required>
                            </div>
                            <div class="form-group">
                                <span class="form-label">Refreshments</span>
                                <input class="form-control" type="text" name="Refreshments" placeholder="Meals expected to be provided">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <span class="form-label">Pickup Date</span>
                                                <input class="form-control" name="Pickup_Date" type="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <span class="form-label select-head">
                                            <center><u>Meeting Start Time</u></center>
                                        </span>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Hour</span>
                                                <select class="form-control" name="hour_start_time" required>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Min</span>
                                                <select class="form-control" name="min_start_time" required>
                                                    <option>00</option>
                                                    <option>05</option>
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>25</option>
                                                    <option>30</option>
                                                    <option>35</option>
                                                    <option>40</option>
                                                    <option>45</option>
                                                    <option>50</option>
                                                    <option>55</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>                                   
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">AM/PM</span>
                                                <select class="form-control" name="am_pm_start_time" required>
                                                    <option>am</option>
                                                    <option>pm</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <span class="form-label select-head">
                                            <center><u>Meeting End Time</u></center>
                                        </span>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Hour</span>
                                                <select class="form-control" name="hour_end_time" required>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Min</span>
                                                <select class="form-control" name="min_end_time" required>
                                                    <option>00</option>
                                                    <option>05</option>
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>25</option>
                                                    <option>30</option>
                                                    <option>35</option>
                                                    <option>40</option>
                                                    <option>45</option>
                                                    <option>50</option>
                                                    <option>55</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>                                
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">AM/PM</span>
                                                <select class="form-control" name="am_pm_end_time" required>
                                                    <option>am</option>
                                                    <option>pm</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <span class="form-label select-head">
                                            <center><u>Time required for serve meals</u></center>
                                        </span>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Hour</span>
                                                <select class="form-control" name="hour_serve_time" required>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">Min</span>
                                                <select class="form-control" name="min_serve_time" required>
                                                    <option>00</option>
                                                    <option>05</option>
                                                    <option>10</option>
                                                    <option>15</option>
                                                    <option>20</option>
                                                    <option>25</option>
                                                    <option>30</option>
                                                    <option>35</option>
                                                    <option>40</option>
                                                    <option>45</option>
                                                    <option>50</option>
                                                    <option>55</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>                   
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <span class="form-label">AM/PM</span>
                                                <select class="form-control" name="am_pm_serve_time" required>
                                                    <option>am</option>
                                                    <option>pm</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="submit-btn">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>