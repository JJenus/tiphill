<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=true">

    <title>BETFRED</title>
    <style type="text/css">
     body{
        foont-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        padding: 3px;
        font-size: .845em;
        color: #3a3a3a;
      }
     .leag{
        font-weight: bold;
        font-size: 1.13em;
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
        border-bottom: 2px dashed #3a3a3a;
        width: 100%;
      }
      
     .border-solid{
       border-bottom: 2px solid #000;
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
        padding: 2px;
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
          font-size: .87em;
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
      	.ibody {
      		font-size: .645em;
      	}

      	.ihead{
      		font-size: .8em;
      	}
      }
    </style>
  </head>
  <body id="cont" class="">

    <div class="bordered no-border" align="center" style=" margin-bottom: 0px;">
      <img style="width: 90%;" src="../assets/betfred/betfred_dark_1.png">
    </div>
    

    <div class="bordered no-border">
      <table class="customers">
        <tr class="">
          <td colspan="8">Ticket No: <span onclick="cal()" class="edit" id="code">5636225432</span></td>
          <td colspan="3" id="date"  class="edit center" >12/03/2021</td>
          <td colspan="1" id="time"  class="edit right " style="font-size:.89em">99:23 AM</td>
        </tr>
        
        <tr class="">
          <td colspan="12">
            <div class="border-bottom"></div>
          </td>
        </tr>
        
        <tr class="">
         <td colspan="12" class="edit center " style="font-size:1.1em; font-weight: bold;">
           ACCUMULATOR
         </td>
        </tr>
        <tr class="">
          <td colspan="12">
            <div class="border-bottom"></div>
          </td>
        </tr>
        
        <!-- FIRST GAME --> 
        <tr class="head">
          <td colspan="8"  class="edit leag" id="lig1">England: Premier League</td>
          <td colspan="3"  class="edit center" id="gametype1">Correct Score</td>
          <td colspan="1"  class=" right" id="">Odds</td>
        </tr>
        
        <tr>
          <td colspan="8" class="edit" id="match1">Chelsea - Manchester City</td>
          <td colspan="3"  class="edit center" id="cs1">2-1</td>
          <td  colspan="1"  class="edit right money" id="odd1">17.91</td>
        </tr>
        <tr class="" >
          <td colspan="12">Date: <span class="edit" id="matchdate1">12/03/2021</span> Time: <span id="matchtime1" class="edit">17:09</span></td>                                    
        </tr>
        
        <tr class="">
          <td colspan="12">
            <div class="border-bottom"></div>
          </td>
        </tr>

        <!-- SECOND GAME  -->
       <tr class="head">
          <td colspan="8"  class="edit leag" id="lig2">England: Premier League</td>
          <td colspan="3"  class="edit center" id="gametype2">Correct Score</td>
          <td colspan="1"  class=" right" id="">Odds</td>
        </tr>
        <tr>
          <td colspan="8" class="edit" id="match2">Chelsea City - Manchester City</td>
          <td colspan="3"  class="edit center" id="cs2">2-1</td>
          <td  colspan="1"  class="edit right money" id="odd2">17.91</td>
        </tr>
        <tr class="" >
          <td colspan="12">Date: <span class="edit" id="matchdate2">12/03/2021</span> Time: <span id="matchtime2" class="edit">17:09</span></td>                                    
        </tr>
        
        <tr class="">
          <td colspan="12">
            <div class="border-bottom"></div>
          </td>
        </tr>

        <!-- THIRD GAME  -->
        <tr class="head">
          <td colspan="8"  class="edit leag" id="lig3">England: Premier League</td>
          <td colspan="3"  class="edit center" id="gametype3">Correct Score</td>
          <td colspan="1"  class=" right" id="">Odds</td>
        </tr>
        <tr>
          <td colspan="8" class="edit" id="match3">Chelsea - Manchester City</td>
          <td colspan="3"  class="edit center" id="cs3">2-1</td>
          <td  colspan="1"  class="edit right money" id="odd3">17.91</td>
        </tr>
        <tr class="" >
          <td colspan="12">Date: <span class="edit" id="matchdate3">12/03/2021</span> Time: <span id="matchtime3" class="edit">17:09</span></td>                                    
        </tr>
        
        <tr class="">
          <td colspan="12">
            <div class="border-bottom"></div>
          </td>
        </tr>

        <!-- BONUS SECTOR  -->
        <tr>
          <th style="padding-top: 30px;" class="" colspan="8">Stake</th> 
          <th style="padding-top: 30px;" colspan="4"  class="right"><span id="stake" class="edit money right">930.00</span> USD</th>
        </tr>
        <tr>
          <th  class="" colspan="8">Total odds</th> 
          <th  colspan="4" id="totalodd"   class="right edit">130.00</th>
        </tr>
        <tr>
          <th  class="" colspan="8">Possible winnings</th> 
          <th  colspan="4" class="right"><span id="outcome" class="edit right">19,930.00</span> USD</th>
        </tr>
        <tr class="">
          <td colspan="12">
            <div class="border-solid"></div>
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
        //document.getElementById('barcode').innerHTML = id;
      }

      $(function(){
          
      	var date = moment();
      	
      	var store = {'date': date.format()};

      	function setDtime(){
      		$('#date').text(date.format('DD/MM/YYYY'))
      		$('#time').text(date.format('hh:mm A'))
         }
      	console.log(date.format('hh:mm a'))
        
        var edit;
        
        setDtime()
        
        $('.edit').click(function(){
          edit = $(this);
            var input = prompt(edit.text(), edit.text());
            if (input !== null && input !="" && input !=" ") {
              edit.text(input)
            }
            if (edit.hasClass('money')) {
              var todd = Number($('#odd1').text()) * Number($('#odd2').text()) * Number($('#odd3').text());
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
          localStorage.setItem('betfred', JSON.stringify(store));
        }

        function retrieve(){
          if (localStorage.getItem('betfred') !== null) {
            var stored = JSON.parse(localStorage.getItem('betfred'));
            var data = stored['data'];
            //data = null;
            for (var id in data) {
               $('#'+id).text(data[id]);
            }
          }

        }
        retrieve();
        
      });
    </script>
 
  </body>
</html>