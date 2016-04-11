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
        <style type="text/css">
            *
            {
                margin:0;
                padding:0;
            }
            #header
            {
                background:rgb(122,122,122);
                height:100px;
                position:relative;
            }
            #header ul
            { 
                background:#eee;
                font-size:12px; 
                padding:3px; 
                position:absolute;
                margin:0;
                padding:0;
                bottom:0;
            }
            #header ul li
            {
                display:inline-block;
                margin-right:50px;
                padding:5px;
                margin:0;
                border-right:5px rgb(122,122,122) solid;
            } 
            body
            {
                background:rgb(204,204,204); 
            }
            input[type=text]
            {
                padding:3px;
            }
            form
            {
                padding:5px;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <ul>
                <li>Add Classes</li>
                <li>Add Student Link</li>
                <li>Logout</li>
            </ul>
        </div>
        <div id="content">
            <form>
                <table>
                    <tr>
                        <td>Enter MajorID:</td> <td><input type="text" name="majorid" placeholder="Enter Major ID..."/></td>
                    </tr>
                    <tr>
                        <td>Class Name:</td> <td><input type="text" name="className" placeholder="Enter Class name here"/></td>
                    </tr>
                    <tr>
                        <td>Time:</td> <td><input type="text" name="time" placeholder="Enter Time slot here"/></td>
                    </tr>  
                </table>
            </form>
        </div>
    </body>
</html>
