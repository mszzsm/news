<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">System.SMP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" onclick="ajax()">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>
	<ul>
		<small id="title1"></small> 
		<small id="title2"></small>
		<small id="title3"></small>
		<small id="title4"></small>
		<small id="title5"></small>
		<small id="title6"></small>
		<small id="title7"></small>
		<small id="title8"></small>
		<small id="title9"></small>
		<small id="title10"></small>
	</ul>
<script>	
			function ajax() {
              fetch('http://tstsrvsmp07.smp/wp-json/wp/v2/posts?filter%5Bposts_per_page%5D=10&page='+document.querySelector("#output-box").value+'&_embed')
              .then(function(response) {
                return response.json();
              })
              .then(function(myJson) {
                	document.getElementById("title1").innerHTML = myJson[0]['title']['rendered'] + 
						' / ' + myJson[0]._embedded['wp:term'][0][0].name;
					document.getElementById("title2").innerHTML = myJson[1]['title']['rendered'] + 
						' / ' + myJson[1]._embedded['wp:term'][0][0].name;
				  	document.getElementById("title3").innerHTML = myJson[2]['title']['rendered'] +
						' / ' + myJson[2]._embedded['wp:term'][0][0].name;
				  	document.getElementById("title4").innerHTML = myJson[3]['title']['rendered'] +
						' / ' + myJson[3]._embedded['wp:term'][0][0].name;
				  	document.getElementById("title5").innerHTML = myJson[4]['title']['rendered'] +
						' / ' + myJson[4]._embedded['wp:term'][0][0].name;
				  	document.getElementById("title6").innerHTML = myJson[5]['title']['rendered'] +
				  		' / ' + myJson[5]._embedded['wp:term'][0][0].name;
				  	document.getElementById("title7").innerHTML = myJson[6]['title']['rendered'] +
				  		' / ' + myJson[6]._embedded['wp:term'][0][0].name;
				  	document.getElementById("title8").innerHTML = myJson[7]['title']['rendered'] +
				  		' / ' + myJson[7]._embedded['wp:term'][0][0].name;
				  	document.getElementById("title9").innerHTML = myJson[8]['title']['rendered'] +
				  		' / ' + myJson[8]._embedded['wp:term'][0][0].name;
				    document.getElementById("title10").innerHTML = myJson[9]['title']['rendered'] +
				  		' / ' + myJson[9]._embedded['wp:term'][0][0].name;
              });
        }
	</script>