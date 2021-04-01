
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=true">

    <title>Bwin</title>
    <style type="text/css">
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
            display:none;
        }
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
          
          width: 87%;
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
      <img style="width: 100%; margin-bottom: 5px;" src="../assets/bwin/bwinlg.png">
      <table class="customers">
        <tr class="">
          <td colspan="4"><span style="font-weight: bold;">Date:</span> <span class="edit" id="date" style="font-weight: lighter;">25.10.2020</span></td>
          <td align="center"  colspan="4"><span  style="font-weight: bold;">Time:</span> <span class="edit" id="time">10:49 AM</span></td>
          <td colspan="4" align="right" class="right" ><span style="font-weight: bold;" onclick="cal();">Code:</span> <span class="edit" id="code">JW6r9pQbn5</span></td>
        </tr>
      </table>
    </div>
    

    <div class="bordered">
      <table class="customers">
        <tr class="border-bottom-sm">
          <th class="ml">ID</th> <th>Day</th> <th>Time</th> <th colspan="3">Home</th>
          <th></th>
          <th colspan="3" style="text-align: center;">Away</th> <th style="text-align: center;">Tip</th> <th style="text-align: right;" class="mr">Odd</th>
        </tr>

        <!-- FIRST GAME  -->

        <tr class="">
          <td class="edit ml" id="id1">478</td> 
          <td class="edit" id="day1">Tue</td>
          <td class="edit" id="time1">20:45</td> 
          <td class="edit" id="team00" colspan="3">Chelsea</td>
          <td>-</td>
          <td class="edit" id="team01" colspan="3" style="text-align: center;">Bayern Munch</td> 
          <td class="edit" id="tip1" style="text-align: center;">4-1</td> 
          <td class="edit money mr" id="odd1" style="text-align: right;">53.12</td>
        </tr>

        <!-- SECOND GAME  -->

        <tr class="border-bottom-sm">
          <td class="edit ml" id="id2">321</td>
          <td class="edit" id="day2">Wed</td>
          <td class="edit" id="time2">10:45</td> 
          <td class="edit" id="team10" colspan="3">Liverpool</td>
          <td>-</td>
          <td class="edit" id="team11" colspan="3" style="text-align: center;">Beita Jerusalem</td> 
          <td class="edit" id="tip2" style="text-align: center;">5-1</td> 
          <td class="edit money mr" id="odd2" style="text-align: right;">13.12</td>
        </tr>


      </table>
      <table style="margin-top: 15px;" class="customers">
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
            <span class="border bcode" style="display: inline-block;">
              <span>Please double-check your ticket, we accept ticket </span><br>
              <span>changes within 5-10 minutes after the bet is placed.</span>
            </span>
          </td>
        </tr>
      </table>
    </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?= view('tickets/_footer') ?>
    
    <script type="text/javascript">
    var ticket = '<?php echo $_GET['ticket'] ?? 'Fallback value'; ?>'; 
    	function makeid(length) {
         var result           = '';
         var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvvxyz';
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

      (function(){
      	var date = moment();
      	
      	var store = {'date': date.format()};

      	function setDtime(){
      		$('#date').text(date.format('DD.MM.YYYY'))
          $('#time').text(date.format('hh:mm A'))
          $('#date2').text(date.format('MMM D, YYYY'))
          $('#date3').text(date.format('MMM D, YYYY'))
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
          localStorage.setItem('bwin', JSON.stringify(store));
        }

        function retrieve(){
if (localStorage.getItem('bwin') !== null) {
            var stored = JSON.parse(localStorage.getItem('bwin'));
            var data = stored['data'];
            //data = null;
            for (var id in data) {
               $('#'+id).text(data[id]);
            }

            if (moment(date.format()).isSameOrBefore(stored.date)) {
              console.log('wrong date');
              alert("Set date correctly");
              return;
            }
            console.log(stored.date)            
          }

         
          
          setDtime();
        }
        retrieve();
        
      })();
    </script>
  </body>
</html>