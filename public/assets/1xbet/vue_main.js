const { cookies, local,} = brownies;

String.prototype.isEmpty = function() {
    return (this.length === 0 || !this.trim());
};

function randInt(min=111, max=116) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

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
        

function makeid(length) {
	var result   = '';
	var characters = '0123456789';
	var charactersLength = characters.length;
	for ( var i = 0; i < length; i++ ) {
  	result += characters.charAt(Math.floor(Math.random() * charactersLength));
	}       
	return randInt(16,20)+""+result;
}


var app = new Vue({
  el: "#app", 
  data: {
    id: 12343617772, 
    stake: 100,
    currency: "CAD", 
    time: "17:45", 
    date: "30.12.2021", 
    date_fg: "30.12.2021 | 14:30",
    date_sg:"30.12.2021 | 17:33", 
    
    img_1: "./placed_files/1986.png", 
    img_2: "./placed_files/1986.png", 
    img_3: "./placed_files/1986.png", 
    img_4: "./placed_files/1986.png", 
    
    game_1_lig: "England. Premier League",
    team_1: "Grimsby United", 
    team_2: "York City",
    cs_1: "4-1",
    odd_1: 8,
    game_1_code: "345",
    
    game_2_lig: "England. Premier League",
    team_3: "Chelsea", 
    team_4: "Everton", 
    cs_2: "3-3", 
    odd_2: 19,
    game_2_code: "715", 
    
    ft_1: "0:0",
    ht_1: "1:1",
    
    ft_2: "1:3",
    ht_2: "1:1",
  
  },
  
  computed: {
    fg_ft(){
      var date = moment(this.date_fg, "DD.MM.YYYY | HH:mm")
        .add(randInt(), 'minutes')
        .format('DD.MM.YYYY (HH:mm)');
      return date
    },
    
    sg_ft(){
      var date = moment(this.date_sg, "DD.MM.YYYY | HH:mm")
        .add(randInt(), 'minutes')
        .format('DD.MM.YYYY (HH:mm)');
      return date
    }, 
    
    total_odds(){
      var odds = parseFloat(this.odd_1) * parseFloat(this.odd_2);
      //return number_format(odds, 2, ".", '') 
      var str = ""+odds;
      var dc = str.split(".")[1]
      if(dc == undefined){
        return odds;
      } 
      
      if (dc.length > 3 && dc.charAt(1) != '0') {
        return number_format(odds, 3, ".", '')  
      }else if (dc.length > 3 && dc.charAt(1) == '0') {
        return number_format(odds, 1, ".", '')  
      }
      return odds
    }, 
    
    winnings(){
      var cash = parseFloat(this.odd_1) * parseFloat(this.odd_2) * parseFloat(this.stake);
      var str = ""+cash;
      var dc = str.split(".")[1]
      if(dc == undefined){
        return cash;
      } 
       
      return number_format(cash, 2, ".", '')    
    }, 
    
    homescore(){
      return this.cs_2.split('-')[0]
    },
     
    awayscore(){
      return this.cs_2.split('-')[1]
    },
    
    awayslide(){
      var val = parseInt(this.cs_2.split('-')[1]) * 29.3333;
      return "transform: translateX("+val+");" 
    } 
  }, 
  
  methods: {
    onFileChange(e, txt) {
      const file = e.target.files[0];
      if(txt=="img_1")
        this.img_1 = URL.createObjectURL(file);
      else if(txt=="img_2")
        this.img_2 = URL.createObjectURL(file);
      else if(txt=="img_3")
        this.img_3 = URL.createObjectURL(file);
      else if(txt=="img_4"){
        this.img_4 = URL.createObjectURL(file);
      } 
      
    }, 
    
    winning(){
      var cash = parseFloat(this.odd_1) * parseFloat(this.odd_2) * parseFloat(this.stake);
      var str = ""+cash;
      var dc = str.split(".")[1]
      if(dc == undefined){
        return number_format(cash, 0, "", ' ');
      } 

      return number_format(cash, 2, ".", ' ') 
    }, 
    
    result_1(type = false){
      var home = parseInt(this.ht_1.split(':')[0]) + parseInt(this.ft_1.split(':')[0]) 
      var away = parseInt(this.ht_1.split(':')[1]) + parseInt(this.ft_1.split(':')[1]) 
      if (type) {
        return home+"-"+away;
      }
      return home+":"+away;
    }, 
    
    result_2(type = false){
      var home = parseInt(this.ht_2.split(':')[0]) + parseInt(this.ft_2.split(':')[0]) 
      var away = parseInt(this.ht_2.split(':')[1]) + parseInt(this.ft_2.split(':')[1]) 
      if (type) {
        return home+"-"+away;
      }
      return home+":"+away;
    },
    
    homeslide(){
      if (page == "betslip") {
        var val = parseInt(this.cs_2.split('-')[0]) * 29.3333;
        document.getElementById("homeslide").style["transform"] = "translateX("+val+"px)";
        val = parseInt(this.cs_2.split('-')[0]) * 10;
        document.getElementById("homefill").style["width"] = val+"%";
      }
    }, 
    
    awayslide(){
      if (page == "betslip") {
        var val = parseInt(this.cs_2.split('-')[1]) * 29.3333;
        document.getElementById("awayslide").style["transform"] = "translateX("+val+"px)";
        val = parseInt(this.cs_2.split('-')[1]) * 10;
        document.getElementById("awayfill").style["width"] = val+"%"
      } 
    },  
    
    edit: function(txt){
      var data = "";
      if(txt == "team_1"){
        data = prompt(this.team_1, this.team_1);
        if(!data.isEmpty()){
          this.team_1 = data
        }
      }
      else if(txt == "img_1"){
        data = prompt("Team logo Url", this.img_1);
        if(!data.isEmpty()){
          this.img_1 = data
        }
        //document.getElementById("img_1").click()
      }
      else if(txt == "img_2"){
        data = prompt("Team logo Url", this.img_2);
        if(!data.isEmpty()){
          this.img_2 = data
        }
        //document.getElementById("img_2").click()
      }
      else if(txt == "img_3"){
        data = prompt("Team logo Url", this.img_3);
        if(!data.isEmpty()){
          this.img_3 = data
        }
        //document.getElementById("img_3").click()
      }else if(txt == "img_4"){
        data = prompt("Team logo Url", this.img_4);
        if(!data.isEmpty()){
          this.img_4 = data
        }
        //document.getElementById("img_4").click()
      }
      else if(txt == "date_fg"){
        data = prompt(this.date_fg, this.date_fg);
        if(!data.isEmpty()){
          this.date_fg = data;
          var date;
          if(moment(this.date_fg, 'DD.MM.YYYY | HH:mm').isBefore(moment(this.date_sg, 'DD.MM.YYYY | HH:mm'))){
            date = moment(this.date_fg, 'DD.MM.YYYY | HH:mm')
                       .subtract(randInt(60, 300), 'minutes')
                       .format('DD.MM.YYYY | HH:mm');
          }else{
            date = moment(this.date_sg, 'DD.MM.YYYY | HH:mm')
                       .subtract(randInt(60, 300), 'minutes')
                       .format('DD.MM.YYYY | HH:mm'); 
          }
          this.date = date.split("|")[0]
          this.time = date.split("|")[1]
        }
      }
      else if(txt == "date_sg"){
        data = prompt(this.date_sg, this.date_sg);
        if(!data.isEmpty()){
          this.date_sg = data
        }
        var date;
          if(moment(this.date_fg, 'DD.MM.YYYY | HH:mm').isBefore(moment(this.date_sg, 'DD.MM.YYYY | HH:mm'))){
            date = moment(this.date_fg, 'DD.MM.YYYY | HH:mm')
                       .subtract(randInt(60, 300), 'minutes')
                       .format('DD.MM.YYYY | HH:mm');
          }else{
            date = moment(this.date_sg, 'DD.MM.YYYY | HH:mm')
                       .subtract(randInt(60, 300), 'minutes')
                       .format('DD.MM.YYYY | HH:mm'); 
          }
          this.date = date.split("|")[0]
          this.time = date.split("|")[1]
      }
      else if(txt == "date"){
        data = prompt("Bet time", this.date+" | "+this.time);
        if(!data.isEmpty()){
          this.date = data.split('|')[0]
          this.time = data.split('|')[1]
        }
      }
      else if(txt == "goals_2"){
        data = prompt('Correct Score', this.ht_2+","+this.ft_2);
        if(!data.isEmpty()){
          this.ht_2 = data.split(',')[0];
          this.ft_2 = data.split(',')[1];
        }
      }
      else if(txt == "goals_1"){
        data = prompt('Correct Score', this.ht_1+","+this.ft_1);
        if(!data.isEmpty()){
          this.ht_1 = data.split(',')[0];
          this.ft_1 = data.split(',')[1];
        }
      }
      else if(txt == "team_2"){
        data = prompt(this.team_2, this.team_2);
        if(!data.isEmpty()){
          this.team_2 = data
        }
      }
      else if(txt == "team_3"){
        data = prompt(this.team_3, this.team_3);
        if(!data.isEmpty()){
          this.team_3 = data
        }
      }
      else if(txt == "team_4"){
        data = prompt(this.team_4, this.team_4);
        if(!data.isEmpty()){
          this.team_4 = data
        }
      }
      else if(txt == "id"){
        this.id = makeid(9)
        data = prompt(this.id, this.id);
        if(!data.isEmpty()){
          this.id = data
        }
      }
      else if(txt == "game_1_lig"){
        data = prompt(this.game_1_lig, this.game_1_lig);
        if(!data.isEmpty()){
          this.game_1_lig = data
        }
      }
      else if(txt == "game_2_lig"){
        data = prompt(this.game_2_lig, this.game_2_lig);
        if(!data.isEmpty()){
          this.game_2_lig = data
        }
      }
      else if(txt == "cs_1"){
        data = prompt(this.cs_1, this.cs_1);
        if(!data.isEmpty()){
          this.cs_1 = data
          
        }
      }
      else if(txt == "cs_2"){
        data = prompt(this.cs_2, this.cs_2);
        if(!data.isEmpty()){
          this.cs_2 = data
          this.homeslide()
          this.awayslide()
        }
      }
      else if(txt == "odd_1"){
        data = prompt(this.odd_1, this.odd_1);
        if(!data.isEmpty()){
          this.odd_1 = data
        }
      }
      else if(txt == "odd_2"){
        data = prompt(this.odd_2, this.odd_2);
        if(!data.isEmpty()){
          this.odd_2 = data
        }
      }
      else if(txt == "game_1_code"){
        data = prompt(this.game_1_code, this.game_1_code);
        if(!data.isEmpty()){
          this.game_1_code = data
        }
      }
      else if(txt == "game_2_code"){
        data = prompt(this.game_2_code, this.game_2_code);
        if(!data.isEmpty()){
          this.game_2_code = data
        }
      }
      else if(txt == "currency"){
        data = prompt("currency", this.currency);
        if(!data.isEmpty()){
          this.currency = data
        }
      }
      else if(txt == "stake"){
        data = prompt("stake", this.stake);
        if(!data.isEmpty()){
          this.stake = parseFloat(data) 
        }
      }
      
      this.save();
      
    }, 
    
    save(){
      cookies.ht_1 = this.ht_1
      cookies.ht_2 = this.ht_2
      cookies.ft_1 = this.ft_1
      cookies.ft_2 = this.ft_2
      
      cookies.img_1 = this.img_1
      cookies.img_2 = this.img_2
      cookies.img_3 = this.img_3
      cookies.img_4 = this.img_4
      
      cookies.game_2_code = this.game_2_code
      cookies.odd_2 = this.odd_2
      cookies.cs_2 = this.cs_2
      cookies.team_4 = this.team_4
      cookies.team_3 = this.team_3
      cookies.game_2_lig = this.game_2_lig
      
      cookies.game_1_code = this.game_1_code
      cookies.odd_1 = this.odd_1
      cookies.cs_2 = this.cs_2
      cookies.team_2 = this.team_2
      cookies.team_1 = this.team_1
      cookies.game_1_lig = this.game_1_lig
      
      cookies.id = this.id
      cookies.currency = this.currency
      cookies.stake = this.stake
      cookies.date = this.date
      cookies.time = this.time
      cookies.date_fg = this.date_fg
      cookies.date_sg = this.date_sg
    }
  }, 
  
  mounted(){
     this.homeslide()
     this.awayslide()
  }, 
  
  beforeMount(){
    
    if(cookies.id){
      this.ht_1 = cookies.ht_1;
      this.ht_2 = cookies.ht_2;
      this.ft_1 = cookies.ft_1;
      this.ft_2 = cookies.ft_2;
      
      this.img_1 = cookies.img_1;
      this.img_2 = cookies.img_2;
      this.img_3 = cookies.img_3;
      this.img_4 = cookies.img_4;
      
      this.game_2_code = cookies.game_2_code
      this.odd_2 = cookies.odd_2
      this.cs_2 = cookies.cs_2
      this.team_4 = cookies.team_4
      this.team_3 = cookies.team_3
      this.game_2_lig = cookies.game_2_lig
      
      this.game_1_code = cookies.game_1_code
      this.odd_1 = cookies.odd_1
      this.cs_2 = cookies.cs_2
      this.team_2 = cookies.team_2
      this.team_1 = cookies.team_1
      this.game_1_lig = cookies.game_1_lig
      
      this.id = cookies.id
      this.currency = cookies.currency
      this.stake = cookies.stake
      this.date = cookies.date
      this.time = cookies.time
      this.date_fg = cookies.date_fg
      this.date_sg = cookies.date_sg
    }
  } 
})