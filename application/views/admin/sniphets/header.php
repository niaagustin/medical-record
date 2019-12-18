<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rumah Sakit Budi Asih</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
var imgs1 = new Array("<?php echo base_url()?>assets/images/klinik/1.JPG","<?php echo base_url()?>assets/images/klinik/2.JPG","<?php echo base_url()?>assets/images/klinik/3.JPG","<?php echo base_url()?>assets/images/klinik/4.JPG","<?php echo base_url()?>assets/images/klinik/5.JPG");
var lnks1 = new Array("URL Tujuan-A","URL Tujuan-B","URL Tujuan-C","URL Tujuan-D");
var alt1 = new Array("Teks Iklan-A","Teks Iklan-B","Teks Iklan-C","Teks Iklan-D");
var currentAd1 = 0;
var imgCt1 = 7;
function cycle1() {
if (currentAd1 == imgCt1) {
currentAd1 = 0;
}
var banner1 = document.getElementById('adBanner1');
var link1 = document.getElementById('adLink1');
banner1.src=imgs1[currentAd1]
banner1.alt=alt1[currentAd1]
document.getElementById('adLink1').href=lnks1[currentAd1]
currentAd1++;
}
window.setInterval("cycle1()",500);
</script>
<style>
.slider{
	overflow: hidden;
  height: 768px;
  
  
}

.slider figure div{
	width: 20%;
	float: left;
}

.slider figure img{
	width: 100%;
	float: left;
}

.slider figure{
	position: relative;
	width: 500%;
	margin: 0;
	left: 0;
	animation: 20s slidy infinite;
}

@keyframes slidy{
	0%{
		left: 0%
	}

	10%{
		left: 0%;
	}

	12%{
		left: -100%;
	}

	22%{
		left: -100%;
	}

	24%{
		left: -200%;
	}

	34%{
		left: -200%;
	}

	36%{
		left: -300%;
	}

	46%{
		left: -300%;
	}

	48%{
		left: -400%;
	}

	58%{
		left: -400%;
	}

	60%{
		left: -300%;
	}

	70%{
		left: -300%;
	}

	72%{
		left: -200%;
	}

	82%{
		left: -200%;
	}

	84%{
		left: -100%;
	}

	94%{
		left: -100%;
	}

	96%{
		left: 0%;
	}

	100%{
		left: 0%;
	}
}
body{
    background-image: url('<?php echo base_url()?>assets/images/logo.jpeg');
    background-size: 100%;
}

footer{

	margin-top: 20px;
	padding-top: 20px;
}
.bg__card__navbar{
	background-color: #000000;
}
.bg__card__footer{
	background-color: #000000 !important;
}
#add__new__list{
    top: -38px;
    right: 0px;
}
</style>
</head>
