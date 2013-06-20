
</div>
<footer>
	<div class="engloba">
	<p>
		
		<div id="google">	
			<a href="http://www.google.com">
			 <img src="assets/images/pequenas/google.jpg"></a>
			<a href="http://www.facebook.com/">
			 <img src="assets/images/pequenas/face.jpg"></a>
			<a href="http://twitter.com/">
			 <img src="assets/images/pequenas/twitter.png"></a>
		</div>
		<div id="data">
			<script>
			var mydate=new Date()
			var year=mydate.getYear()
			if (year < 1000)
			year+=1900
			var day=mydate.getDay()
			var month=mydate.getMonth()
			var daym=mydate.getDate()
			if (daym<10)
			daym="0"+daym
			var dayarray=new Array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado")
			var montharray=new
			Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro")
			document.write("<small><font color='white' face='Arial' size='2'><b>"+dayarray[day]+", "+daym+" de "+montharray[month]+" , "+year+"</b></font></small>")
			</script>
		</div>
		<div id="template">
			<center>
			&copy;G&A Informática <?php echo date('Y')?>
		</div>
	</p>
</div>
</footer>

</body>
</html>