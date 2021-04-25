async function myFetch() {
  var url = 'http://'+window.location.hostname+'/home/verify'
       
  let response = await fetch(url, {
    method: 'POST', 
    headers: {
      //"Content-Type": "application/json",
      "X-Requested-With": "XMLHttpRequest"
    }
  });
  if (!response.ok) {
    throw new Error(`HTTP error! status: ${response.status}`);
  }
  return await response.json();
}

$(function(){
 // 
    myFetch().then((json) => {
      if (json.verify) {
        //$('body').toggleClass('hide-all');
        $('.pre-box').addClass('hide-all');
      }else {$('body').addClass('hide-all');} 
    })
    .catch((e) =>{
      $('body').addClass('hide-all');
      alert(e)
     //alert("Please check your internet connection and retry.")
    });
})
       
       
       
       
       
       
       
       
        var number_format = function (number, decimals, dec_point, thousands_sep) {
          // *     example: number_format(1234.56, 2, ',', ' ');
          // *     return: '1 234,56'
          number = (number + '').replace(',', '').replace(' ', '');
          var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function(n, prec) {
              var k = Math.pow(10, prec);
              return '' + Math.round(n * k) / k;
            };
          // Fix for IE parseFloat(0.55).toFixed(0) = 0;
          s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
          if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
          }
          if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
          }
          return s.join(dec);
        }
        
        
