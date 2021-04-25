<!doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=true">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Williamhill_pro</title>
    <style type="text/css">
     body{
        font-family: 'Roboto Slab', serif;
        padding: 0px;
        font-size: .8em;
        color: #000;
      }
     .msize{
       font-size: 0.9em;
     }
     .leag{
        font-weight: bold;
        font-size: 1.18em;
      }

      .d-none{
        display: none;
      }

      .d-block{
        display: block;
      }

      .border-bottom{
        border-bottom: 1px solid #3a3a3a;
        width: 100%;
        margin-bottom: 3.2px;
      }
      
     .bold{
       font-weight: bold;
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
        font-family: 'Roboto Slab', serif;
        margin: 0px;
        padding: 0px;
        border-collapse: collapse;
        width: 100%;
      }

      .customers td, .customers th {
        padding: 1.8px 0px;
      }

      .customers tr:hover {
        background-color: #ddd;
      }

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
      .bg-dark{
        background-color: #000;
        color: #fff;
       }
       
      .bg-dark.empty{
        padding: 8px;
      }
      
     td.pad{
       padding-top: 8px;
       padding-bottom: 8px;
     }
    </style>
  </head>
  <body id="cont" class="">

    <div class="bordered no-border" align="center" style=" margin-bottom: 0px;">
      <img style="width: 90%; margin-bottom:4px;" src="../assets/hill/download.png">
      <div style="margin-bottom: 20px;">
        THE HOME OF BETTING
      </div>
    </div>
    

    <div class="bordered no-border">
      <table class="customers">
        
        <tr class="">
          <td colspan="12">
            <div class="bg-dark msize bold" align="center">
              <span>385344</span> <span style="margin-left:10px;">WATFORD</span>
            </div>
          </td>
        </tr>
        
        <tr class="bold msize">
          <td colspan="4" class="pad"> <span onclick="cal()" class="edit" id="code">HRO8-8LTG-G3X4-7X</span></td>
          <td colspan="4" id="date"  class="edit center pad" >12/03/2021</td>
          <td colspan="4" id="time"  class="edit right pad" style="">99:23 AM</td>
        </tr>
        
        <tr class="">
          <td colspan="12">
            <div class="bg-dark empty"></div>
          </td>
        </tr>
        
        <!-- FIRST GAME --> 
        <tr class="head">
          <td colspan="8"  class="edit leag" id="lig1">
            Luton - Southend
          </td>
        </tr>
        
        <tr>
          <td colspan="12" class="edit" id="t1">
            21/08/2018, 19:45 PM
          </td>
        </tr>
        <tr class="" >
          <td colspan="11">
            Correct Score-<span id="lig11" class="edit">Krasonder/Atlanta</span> 
            <span id="cs1" class="edit">2:0</span>
          </td>                                    
          <td  colspan="1"  class="edit right money" id="odd1">12/1</td>
        </tr>
        
        <tr class="">
          <td colspan="12">
            <div class="border-bottom"></div>
          </td>
        </tr>

        <!-- SECOND GAME  -->
       <tr class="head">
          <td colspan="8"  class="edit leag" id="lig2">
            Krasonder - Atlanta 
          </td>
        </tr>
        
        <tr>
          <td colspan="12" class="edit" id="t1">
            21/08/2018, 11:45 AM
          </td>
        </tr>
        <tr class="" >
          <td colspan="11">
            Correct Score-<span id="lig22" class="edit">Krasonder/Atlanta</span> <span id="cs2" class="edit">2:0</span>                         
          </td>                                    
          <td  colspan="1"  class="edit right money" id="odd2">12/1</td>
        </tr>
        
        <tr class="">
          <td colspan="12">
            <div class="border-bottom"></div>
          </td>
        </tr>
        
        <tr class="">
          <td colspan="12">
            <div class="bg-dark empty"></div>
          </td>
        </tr>
        
        <tr>
          <th  class="" colspan="8">
            Total Odds
          </th> 
          <th  colspan="4" id="totalodd"   class="right money edit">130.00</th>
        </tr>
        
        <tr class="border-bottom-sm">
          <th style="padding-top: 0px;" class="" colspan="8">
            Total Stake:
          </th> 
          <th style="padding-top: 0px;" colspan="4"  class="right">
            GBP <span id="stake" class="edit money right">930.00</span>
          </th>
        </tr>
        <tr>
          <th  class="" colspan="8">
            Max Return:
          </th> 
          <th  colspan="4" class="right">
            GBP <span id="outcome" class="edit right">19,930.00</span>
          </th>
        </tr>
        
        <tr class="">
          <td align="center"  colspan="12"  style="padding-top: 20px;">
            <div class="border-solid">
              Good luck! 
            </div>
            <div colspan="8" style="text-align: center; padding-top: 5px; font-size: 0.93em;">
              <span>By takeover of this betslip the General Terms and</span><br>
              <span>conditions of William Hill become valid. Please gamble</span><br>
              <span>responsibly. www.gambleaware.com</span>
            </div>
            <div style="text-align: center;"><img class="bcode" src="../assets/hill/barcode.jpg"></div>
          </td>
        </tr>
      </table>
    </div>

 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?= view('tickets/_footer') ?>
    <script type="text/javascript">
    var ticket = '<?php echo $_GET['ticket'] ?? 'Fallback value'; ?>'; 
    	function makeid(lent) {
         var result           = '';
         var n = "0123456789"
         var characters       = 'ZC1BDH3FX2GE5IA4JK6ZY7SL8PM9WO0VQRTU';
         var clen = characters.length;
         
         for ( var i = 1; i <= lent; i++ ) {
           for(var v=0; v<4; v++)
             result += characters.charAt(
               Math.floor(Math.random() * clen)
             );
            if(i<lent)
             result += '-'
          }
         return result +'-'+ n.charAt(
           Math.floor(Math.random() * n.length )
         ); ;
      }

      function cal(){
        var id = makeid(3);
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
            
            if(edit.hasClass('leag')){
              
              try{
                var txt = input.split(" - ")
                var dip = txt[0]+'/'+txt[1]
                var id = edit.attr('id')
                var n = id.split('g')[1]
                id = '#'+id+n;
                alert(id)
                $(id).text(dip)
              }catch (e){
                alert(e)
              } 
            }
            
            if (edit.hasClass('money')) {
              var odd1 = $('#odd1').text()
              var o1 = parseFloat(odd1.split('/')[0]) / parseFloat(odd1.split('/')[1])
              
              var odd2 = $('#odd2').text()
              var o2 = parseFloat(odd2.split('/')[0]) / parseFloat(odd2.split('/')[1])
              
              
              var todd = Number(o1 * o2);
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
          localStorage.setItem('Williamhill_pro', JSON.stringify(store));
        }

        function retrieve(){
          if (localStorage.getItem('Williamhill_pro') !== null) {
            var stored = JSON.parse(localStorage.getItem('Williamhill_pro'));
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