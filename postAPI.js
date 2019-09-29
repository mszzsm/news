<script>
			
	function ajax() {
              fetch('http://tstsrvsmp07.smp/wp-json/wp/v2/posts?filter%5Bposts_per_page%5D=10&page='+document.querySelector("#output-box").value+'&_embed')
              .then(function(response) {
              	return response.json();
              })
              .then(function(myJson) {
               	document.getElementById("title1").innerHTML = myJson[0]['title']['rendered'] + ' / ' + myJson[0]._embedded['wp:term'][0][0].name;
		document.getElementById("title2").innerHTML = myJson[1]['title']['rendered'] + ' / ' + myJson[1]._embedded['wp:term'][0][0].name;
		document.getElementById("title3").innerHTML = myJson[2]['title']['rendered'] + ' / ' + myJson[2]._embedded['wp:term'][0][0].name;
		document.getElementById("title4").innerHTML = myJson[3]['title']['rendered'] + ' / ' + myJson[3]._embedded['wp:term'][0][0].name;
		document.getElementById("title5").innerHTML = myJson[4]['title']['rendered'] + ' / ' + myJson[4]._embedded['wp:term'][0][0].name;
		document.getElementById("title6").innerHTML = myJson[5]['title']['rendered'] + ' / ' + myJson[5]._embedded['wp:term'][0][0].name;
		document.getElementById("title7").innerHTML = myJson[6]['title']['rendered'] + ' / ' + myJson[6]._embedded['wp:term'][0][0].name;
		document.getElementById("title8").innerHTML = myJson[7]['title']['rendered'] + ' / ' + myJson[7]._embedded['wp:term'][0][0].name;
		document.getElementById("title9").innerHTML = myJson[8]['title']['rendered'] + ' / ' + myJson[8]._embedded['wp:term'][0][0].name;
		document.getElementById("title10").innerHTML = myJson[9]['title']['rendered'] + ' / ' + myJson[9]._embedded['wp:term'][0][0].name;
              });
        }
	</script>
