c14180116-paul
<!DOCTYPE html>
<html>
<body>
  <br>
  <input type="date" id="date">
  <input type="submit" onclick="count()"><br>
</body>
<script type= "text/javascript">
    function count() {
      var tgl = document.getElementById("date").value;
      dif = new Date(tgl.toString());
      var today = new Date("2021/02/16");
      if(dif.getTime() > today.getTime()){
        var diftime = dif.getTime() - today.getTime();
        var difday = diftime / (1000360024);
      }
      else{
        var diftime =  today.getTime() - dif.getTime();
        var difday = diftime / (1000360024);
      }
      document.getElementById("demo").innerHTML = difday + " Day";
    }
    </script>
</html>