<!DOCTYPE html>
<html>
	
<head>
	<title>
		HTML DOM Input Hidden value Property
	</title>
</head>

<body style="text-align:center;">

	<h1 style="color:green;">
		GeeksForGeeks
	</h1>
	
	<h2>DOM Input Hidden value Property</h2>
	
	<input type="hidden" id="GFG"
				value="GeeksForGeeks">
	
	
	<button onclick="myGeeks()">
		Submit
	</button>
	
	<p id="sudo" style="color:green;font-size:35px;"></p>

	
	<!-- Script to return the hidden value -->
	<script>
		function myGeeks() {
			var x = document.getElementById("GFG").value;
			document.getElementById("sudo").innerHTML = x;
		}
	</script>
</body>

</html>				
