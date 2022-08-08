<?php  

//index.php

include("database_connection.php");
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection='utf8_general_ci'");
$query = "SELECT problemcategory FROM tinfo GROUP BY problemcategory";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>  
<!DOCTYPE html>  
<html>  
    <head>  
        <title>Create Dynamic Column Chart using PHP Ajax with Google Charts</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
    </head>  
    <body> 
        <br /><br />
        <div class="container">  
            <h3 align="center">Create Dynamic Column Chart using PHP Ajax with Google Charts</h3>  
            <br />  
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-9">
                            <h3 class="panel-title">Month Wise Profit Data</h3>
                        </div>
                        <div class="col-md-3">
                            <select name="problemcategory" class="form-control" id="problemcategory">
                                <option value="">Select Problem</option>
                            <?php
							
                            foreach($result as $row)
                            {
                                echo '<option value="'.$row["problemcategory"].'">'.$row["problemcategory"].'</option>';
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="chart_area" style="width: 1000px; height: 620px;"></div>
                </div>
            </div>
        </div>  
    </body>  
</html>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback();

function load_monthwise_data(problemcategory, title)
{
    var temp_title = title + ' '+problemcategory+'';
    $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{problemcategory:problemcategory},
        dataType:"JSON",
        success:function(data)
        {
            drawMonthwiseChart(data, temp_title);
        }
    });
}

function drawMonthwiseChart(chart_data, chart_main_title)
{
    var jsonData = chart_data;
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'dept');
    data.addColumn('number', 'name');
    $.each(jsonData, function(i, jsonData){
        var month = jsonData.month;
        var profit = parseFloat($.trim(jsonData.profit));
        data.addRows([[dept, name]]);
    });
    var options = {
        title:chart_main_title,
        hAxis: {
            title: "dept"
        },
        vAxis: {
            title: 'name'
        }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
    chart.draw(data, options);
}

</script>

<script>
    
$(document).ready(function(){

    $('#problemcategory').change(function(){
        var problemcategory = $(this).val();
        if(problemcategory != '')
        {
            load_monthwise_data(problemcategory, 'Month Wise Profit Data For');
        }
    });

});

</script>
