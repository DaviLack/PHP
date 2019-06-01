		function adicionarprod(id,preco)
		{
			if (window.XMLHttpRequest){
			  // code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
		  	}
			else {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("notify").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","carrinho.php?id=" + id + "&preco=" + preco,true);
			xmlhttp.send();	
		}
		
		
		
		
		
		
		
		
		
		
		