
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=true">

    <title>EuroLive</title>
    <style type="text/css">
      .d-none{
        display: none;
      }
      body{
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      }

      .d-block{
        display: block;
      }

      .border-bottom{
        border-bottom: 2px solid #000;
        font-weight: bold;
        margin-bottom: 50px;
      }

      .border-bottom-sm{
        border-bottom: 1px solid #000;
      }
      .border{
        border: 1px solid #000;
        margin: 0px;
        padding: 0px;
      }
      .bordered{
      	width: 90vw;
      	margin-left: auto;
      	margin-right: auto;
        margin-bottom: 6.5px;
      }
      @media (min-width: 768px) {
         .bordered{
             width: 50vw;
         }
      }
      .customers {
        margin: 1%;
        border-collapse: collapse;
        width: 98%;
      }
      .customers td.ml, .customers th.ml{
        padding-left: 7px;
      }

      .customers td.mr, .customers th.mr{
        padding-right: 7px;
      }

      .customers td, .customers th {
        padding: 5px;
      }

      .customers tr:hover {background-color: #ddd;}

      .customers th {
        text-align: left;
      }

      .customers .center {
        text-align: center;
      }

      .customers .right {
        text-align: right;
      }
      .no-border{
        border: none;
      }
      .bcode{
        width: 75%;
        padding: 5px;
        text-align: left;
      }

      @media print{
        .customers td, .customers th {
          padding: 2px;
        }
        .bcode{
          width: 65%;
        }
      	.bordered{
      		width: 100%;
      	}
      	body {
      		font-size: .5459em;
      	}

      	.head{
      		font-size: .8em;
      	}
      }
    </style>
  </head>
  <body id="cont" class="">
    <div class="bordered no-border" align="center" style=" margin-bottom: 25px;">
      <img style="width: 100%; margin-bottom: 5px;" src="../assets/euro/eurlogo.png">
      <table class="customers">
        <tr class="">
          <td colspan="4"><span style="font-weight: bold;">Date:</span> <span class="edit" id="date" style="font-weight: lighter;">25.10.2020</span></td>
          <td align="center"  colspan="4"><span  style="font-weight: bold;">Time:</span> <span class="edit" id="time">10:49 AM</span></td>
          <td colspan="4" align="right" class="right" ><span style="font-weight: bold;" onclick="getTicket();">Ticket:</span> <span class="edit" onclick="getTicket();" id="ticket">643</span></td>
        </tr>
      </table>
    </div>
    

    <div class="bordered">
      <table class="customers">
        <tr class="">
          <th class="">Code</th> <th>Day</th> <th>Time</th> <th colspan="3">Home</th>
          <th></th>
          <th colspan="3" style="text-align: center;">Away</th> <th style="text-align: center;">Tip</th> <th style="text-align: right;" class="">Odd</th>
        </tr>

        <!-- FIRST GAME  -->

        <tr class="border">
          <td class="edit " id="id1">478</td> 
          <td class="edit" id="day1">TU</td>
          <td class="edit" id="time1">20:45</td> 
          <td class="edit" id="team00" colspan="3">Chelsea</td>
          <td>-</td>
          <td class="edit" id="team01" colspan="3" style="text-align: center;">Bayern Munch</td> 
          <td class="edit" id="tip1" style="text-align: center;">4-1 cs</td> 
          <td class="edit money " id="odd1" style="text-align: right;">53.12</td>
        </tr>

        <!-- SECOND GAME  -->

        <tr class="border">
          <td class="edit " id="id2">321</td>
          <td class="edit" id="day2">WE</td>
          <td class="edit" id="time2">10:45</td> 
          <td class="edit" id="team10" colspan="3">Liverpool</td>
          <td>-</td>
          <td class="edit" id="team11" colspan="3" style="text-align: center;">Beita Jerusalem</td> 
          <td class="edit" id="tip2" style="text-align: center;">5-1 cs</td> 
          <td class="edit money " id="odd2" style="text-align: right;">13.12</td>
        </tr>


      </table>
      <table style="margin-top: 5px;" class="customers">
        <tr>
          <th colspan="4" style="">Payment:</th>
          <th colspan="4" style="text-align: right;"><span id="stake" class="edit money">50</span> <span class="edit">EUR</span></th>
        </tr>

        <tr>
          <th colspan="6" style="">Total odd</th>
          <th colspan="6" class="edit money" style="text-align: right; " id="totalodd">132.50</th>
        </tr>
        <tr class="">
          <th colspan="4" style="">Posible profit:</th>
          <th colspan="4" style="text-align: right; "><span id="outcome" class="edit money">6625</span> <span class="edit">EUR</span></th>
        </tr>
      </table>

      <table class="customers" style="margin-top: 5px;">
        
        <tr>
          <td colspan="8" style="text-align: center;">
            <img class="bcode" src="../assets/euro/bar.png">
          </td>
        </tr>
        <tr>
          <th colspan="8" style="text-align: center;">Code: <span class="edit" id="code" onclick="cal()">1234567874</span></th>
        </tr>
      </table>
    </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <?= view('tickets/_footer') ?>
    <script type="text/javascript">
    var ticket = '<?php echo $_GET['ticket'] ?? 'Fallback value'; ?>'; 
    	function makeid(length) {
         var result           = '';
         var characters       = '0123456789';
         var charactersLength = characters.length;
         for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
         }
         return result;
      }

      function cal(){
        var id = makeid(10);
      	document.getElementById('code').innerHTML = id;
      }

      function getTicket(){
        var length = Math.floor(Math.random()*4+1)
        console.log(length)
        var id = makeid(length);
        document.getElementById('ticket').innerHTML = id;
      }

      (function(){
      	var date = moment();
      	
      	var store = {'date': date.format()};

      	function setDtime(){
      		$('#date').text(date.format('DD/MM/YYYY'))
          $('#time').text(date.format('HH:mm:ss'))
          $('#day1, #day2').text(date.format('dd'))
      	}
      	
        var edit;

        $('.edit').click(function(){
          edit = $(this);
          
            var input = prompt(edit.text(), edit.text());
            if (input !== null && input !="" && input !=" ") {
              edit.text(input)
            }
            if (edit.hasClass('money')) {
              var todd = Number($('#odd1').text()) * Number($('#odd2').text());
              $('#totalodd').text( number_format(todd, 2, '.', '') );
              var outcome = Number($('#stake').text()) * todd;
              $('#outcome').text(number_format(outcome, 2, ".", ','));
            }
            save();
        })

        function save(){
          var data = {};
          $('.edit').each(function(){
            data[$(this).attr('id')] = $(this).text();
          });
          store['data'] = data;
          localStorage.setItem('euro', JSON.stringify(store));
        }

        function retrieve(){
            if (localStorage.getItem('euro') !== null) {
            var stored = JSON.parse(localStorage.getItem('euro'));
            var data = stored['data'];
            //data = null;
            for (var id in data) {
               $('#'+id).text(data[id]);
            }

                   
          }
          
          setDtime()
        } 
        retrieve();
      })();
    </script>
  </body>
</html>