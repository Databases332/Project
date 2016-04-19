<html>
<body>
<head>
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2016.1.412/styles/kendo.common.min.css">
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2016.1.412/styles/kendo.rtl.min.css">
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2016.1.412/styles/kendo.default.min.css">
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2016.1.412/styles/kendo.mobile.all.min.css">

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://kendo.cdn.telerik.com/2016.1.412/js/angular.min.js"></script>
    <script src="http://kendo.cdn.telerik.com/2016.1.412/js/jszip.min.js"></script>
    <script src="http://kendo.cdn.telerik.com/2016.1.412/js/kendo.all.min.js"></script></head>
</head>
<?php 
    include 'classes/Student.php';
    $student = new Student($_POST["studentId"]);
    $schedules = $student->getSchedules();
    #print_r($schedules);
?>
<div id="scheduleWindow">
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
            <?php
                foreach($schedules as &$sched)
                {
                    echo "<tr>";

                        echo "<td>";
                            echo "$sched[0]";
                        echo "</td>";

                        echo "<td>";
                            echo $sched[1];
                        echo "</td>";

                        echo "<td>";
                            echo $sched[2];
                        echo "</td>";

                        echo "<td>";
                            echo $sched[3];
                        echo "</td>";

                        echo "<td>";
                            echo $sched[4];
                        echo "</td>";

                        echo "<td>";
                            echo $sched[5];
                        echo "</td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
   $("table").kendoGrid(); 
</script>
</body>
</html>
