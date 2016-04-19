<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Student Schedular</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <style>
            #scheduleWindow {
                border:solid black thin;
                padding: 15px;
                min-height:400px;
            }
            form {
                margin-top:100px;
            }
        </style>
    </head>
    <body class="container">
        <div class="jumbotron">
            <h1>Student Scheduler</h1>
            <form method="post" action="getSchedule.php" class="form">
                <fieldset class="form-group">
                    <label for="studentId">Please enter your Student ID: </label>
                    <input class="form-control" name="studentId" type="text" /> 
                    <input type="submit" value="Submit">
                </fieldset>
            </form>
            <!--<div id="scheduleWindow">
                <h2>Generated Schedules</h2>
                <table>
                    <thead>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>-->
        </div>
    </body>
</html>
