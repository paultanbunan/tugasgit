c14180116-paul
<<<<<<< HEAD
<!DOCTYPE html>
<html>
<body>
  <br>
  <input type="date" id="date">
  <input type="date" id="day"><br>
  <input type="submit" onclick="count()"><br>
</body>
<script type= "text/javascript">
    function count() {
      var tgl = document.getElementById("birthday").value;
      date = new Date(tgl.toString());
      var toda = document.getElementById("dayday").value;
      today = new Date(toda.toString());
      if(date.getTime() > today.getTime()){
        var diftime = date.getTime() - today.getTime();
        var difday = diftime / (1000360024);
      }
      else{
        var diftime =  today.getTime() - date.getTime();
        var difday = diftime / (1000360024);
      }
      document.getElementById("demo").innerHTML = difday + " Day";
    }
    </script>
</html>
=======
tambahkan 2 buah (apel dan jeruk)
>>>>>>> c14180116-F
