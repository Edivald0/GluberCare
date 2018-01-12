jQuery('.enlace').on({
	click : function(e){
		//Bloquear el comportamiento del enlace (el # que tiene el enlace)
		e.preventDefault()
		/*alert('Se ha preveindo la acción por defecto del enlace')*/
	}
})

$(document).ready(function(){
	var modal = document.getElementById('myModal-01');
	var img = document.getElementById('myImg-01');
	var modalImg = document.getElementById("img01");
	img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}

	var span = document.getElementsByClassName("close")[0];
	span.onclick = function() { 
		modal.style.display = "none";
	}
});
$(document).ready(function(){
	var modal = document.getElementById('myModal-02');
	var img = document.getElementById('myImg-02');
	var modalImg = document.getElementById("img02");
	img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}

	var span = document.getElementsByClassName("close-02")[0];
	span.onclick = function() { 
		modal.style.display = "none";
	}
});
$(document).ready(function(){
	var modal = document.getElementById('myModal-03');
	var img = document.getElementById('myImg-03');
	var modalImg = document.getElementById("img03");
	img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}

	var span = document.getElementsByClassName("close-03")[0];
	span.onclick = function() { 
		modal.style.display = "none";
	}
});