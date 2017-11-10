<!DOCTYPE html>
<html>
<head>
    <title><?= $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script
  src="http://code.jquery.com/jquery-3.2.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.js"></script>


    <style>
    .header {
        font-family: 'Oswald', sans-serif;
        background-color: gray;
        color: white;
        padding: 50px 5px 10px 5px;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="row header">
            <div class="col">
                <h1><?= $data['header']; ?></h1>
            </div>
        </div>
        <div class="row">
            <pre>
                <?php print_r($data); ?>
            </pre>
            <div class="row">
               <div class="col">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            <div class="col">
                <canvas id="mChart" width="400" height="400"></canvas>
            </div>
        </div>
    </table>
</div>
</div>
<script src="/Edvinas/gameMVC/app/views/assets/js/stats.js"></script>
</body>
</html>