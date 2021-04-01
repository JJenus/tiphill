<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=true">

    <title>1XB</title>
    <style type="text/css">
      body{
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        padding-left: 5px;
        padding-right: 7.3px;
      }
      img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{
            display:none;
        }

      .d-none{
        display: none;
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
        margin: 0px;
        padding: 0px;
      }
      .bordered{
      	width: 90vw;
      	margin-left: auto;
      	margin-right: auto;
        border: 2px solid #000;
        margin-bottom: 6.5px;
      }
      @media (min-width: 768px) {
         .bordered{
             width: 50vw;
         }
      }
      .customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        margin: 1%;
        border-collapse: collapse;
        width: 98%;
      }

      .customers td, .customers th {
        padding: 3px;
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
        width: 82%;
        height: 100px;
        padding: 5px; 
        padding-top: 15px;
      }

      .head{
          font-size: .9em;
        }
        .bar{
          	display: inline-block;
          	height: 7px;
          	border: 1.2px solid #000;
          	background-color: #000;
          	margin-left: 0.4px;
          	margin-right: 0.4px;
          }

      @media print{
         .no-print{
             display: none;
         }
          .bar{
      		border-width: 1px;
	      	height: 5px;
	      	margin-left: 0.3px;
	      	margin-right: 0.3px;
	      }
        .bcode{
          height: 60px;
        }
      	.bordered{
      		width: 100%;
      	}
      	body {
      		font-size: .645em;
      	}

      	.head{
      		font-size: .8em;
      	}
      }
    </style>
  </head>
  <body id="cont" class="">

    <div class="bordered no-border" align="center" style=" margin-bottom: 0px;">
      <img style="width: 70%;" src="../assets/1xbet/1xbet.png">
    </div>
    <div class="bordered">
      <table class="customers">
        <tr class="border-bottom-sm">
          <th>BETSLIP CODE</th>
          <th class="right edit" id="code" onclick="cal();">12693422401</th>
        </tr>
        <tr class="border-bottom-sm">
          <th>DATE</th>
          <th class="right edit" id="date">Jun 25, 2020 - 10:31:03</th>
        </tr>
        <tr>
          <th>BETTING</th>
          <th class="right">#1379, SHOP 1 (CASHIER 1)</th>
        </tr>
        <tr>
          <th>SHOP</th>
          <th></th>
        </tr>
      </table>
    </div>

    <div class="bordered">
      <h5 align="center" style="padding: 5px;" class="border-bottom-sm">ACCUMULATOR</h5>
      <table class="customers">
        <tr class="head">
          <td class="edit" id="lig1">Football. England Premier League</td>
          <td class="edit right" id="date1">Jun 22, 2020</td>
        </tr>
        <tr>
          <td><span class="edit" id="team11">Chelsea</span> - <span class="edit" id="team12">Manchester City</span></td>
          <td class="right edit" id="t1">20:00</td>
        </tr>
        <tr class="border-bottom">
          <td>Correct Score <span class="edit" id="cs1">2-1</span></td>
          <td class="edit right money" id="odd1">13</td>
        </tr>

        <!-- SECOND GAME  -->
        
        <tr class="head">
          <td class="edit" id="lig2">Football. Seria A</td>
          <td class="edit right" id="date2">Jun 22, 2020</td>
        </tr>
        <tr>
          <td><span class="edit" id="team21">Juventus</span> - <span class="edit" id="team22">AC Milan</span></td>
          <td class="right edit" id="t2">22:00</td>
        </tr>
        <tr class="border-bottom">
          <td>Correct Score <span class="edit" id="cs2">3-2</span></td>
          <td class="edit right money" id="odd2">25</td>
        </tr>

        <!-- THIRD GAME  -->

        <tr class="head">
          <td class="edit" id="lig2">Football. Seria A</td>
          <td class="edit right" id="date3">Jun 22, 2020</td>
        </tr>
        <tr>
          <td><span class="edit" id="team21">Juventus</span> - <span class="edit" id="team22">AC Milan</span></td>
          <td class="right edit" id="t3">22:00</td>
        </tr>
        <tr class="border-bottom">
          <td>Correct Score <span class="edit" id="cs3">0-1</span></td>
          <td class="edit right money" id="odd3">5</td>
        </tr>

        <!-- BONUS SECTOR  -->

        <tr class="head">
          <td class="">Bonus. Bonuses</td>
          <td class="edit right" id="dateb">Dec 31, 2099</td>
        </tr>
        <tr>
          <td><span>Bonuses</span> - <span class="edit" id="acc">accumulator bonus</span></td>
          <td class="right edit">22:00</td>
        </tr>
        <tr class="border-bottom">
          <td>Bonus</td>
          <td class="edit right money" id="bodd">1.03</td>
        </tr>
      </table>
    </div>

    <div class="bordered">
      <table class="customers">
        
        <tr>
          <th>
            <h4 class="" style="display: inline;">
              STAKE 
            </h4>
          </th>
          <th style="text-align: center;">
            <h3 style="display: inline; ">..............................</h3>
          </th>
          <th style="text-align: right;">
            <h4 style="display: inline;">
              <span class="edit money" id="stake">400.03</span> <span  class="edit">EUR</span>
            </h4>
          </th>
        </tr>
      </table>
    	
    </div>

    <div class="bordered">
    	<h5 class="border-bottom-sm" style="padding: 5px;">OVERALL ODDS <span style="float: right;" class="edit" id="totalodd">400.03</span></h5>
    	<h5 align="center" style="padding: 5px;" class="border-bottom-sm">MAXIMUM WINNINGS</h5>
    	<h4 align="center" style="padding: 5px;" class="border-bottom-sm " >
    	    <div class="bar"></div> <div class="bar"></div> <div class="bar"></div>
    		<span style="margin-left: 1.3px; margin-right: 1.3px;" class=" edit" id="outcome">40,000.10</span> 
	    	<div class="bar"></div> <div class="bar"></div> <div class="bar"></div>
    	</h4>
    </div>

    <div class="bordered" align="center">
      <img class="bcode" src="../assets/1xbet/bar.png"> <br>
      <div style="padding-bottom: 10px;">
        <strong  id="barcode" class="edit">12693422401</strong>
      </div>
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
        var id = makeid(11);
      	document.getElementById('code').innerHTML = id;
        document.getElementById('barcode').innerHTML = id;
      }

      $(function(){
          
      	var date = moment();
      	
      	var store = {'date': date.format()};

      	function setDtime(){
      		$('#date').text(date.format('MMM D, YYYY - hh:mm:ss'))
          $('#date1').text(date.format('MMM D, YYYY'))
          $('#date2').text(date.format('MMM D, YYYY'))
          $('#date3').text(date.format('MMM D, YYYY'))
      	}
      	console.log(date.format('hh:mm a'))
        
        var edit;
        

        $('.edit').click(function(){
          edit = $(this);
            var input = prompt(edit.text(), edit.text());
            if (input !== null && input !="" && input !=" ") {
              edit.text(input)
            }
            if (edit.hasClass('money')) {
              var todd = Number($('#odd1').text()) * Number($('#odd2').text()) * Number($('#odd3').text()) * Number($('#bodd').text());
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
          localStorage.setItem('xbet', JSON.stringify(store));
        }

        function retrieve(){
          if (localStorage.getItem('xbet') !== null) {
            var stored = JSON.parse(localStorage.getItem('xbet'));
            var data = stored['data'];
            //data = null;
            for (var id in data) {
               $('#'+id).text(data[id]);
            }
          }

         
          setDtime()
        }
        retrieve();
        
      });
    </script>
  </body>
</html>