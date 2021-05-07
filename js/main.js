function ajax(){
   // XMLHttpRequest soporta tanto comunicaciones síncronas como asíncronas.
   var req = new XMLHttpRequest();
   // onreadystatechange esta propiedad define una función que se ejecutará cuando cambie readyState.
   req.onreadystatechange = function(){
      // readyState esta propiedad tiene el estado de XMLHttpRequest.
      // 4: request finished and response is ready
      // 200: "OK"
      if(req.readyState == 4 && req.status == 200){
         // al usar responseText se obtiene la representación en texto plano de la respuesta.
         document.getElementById('chat').innerHTML = req.responseText;

      }
   }
   // Mediante GET paso los valores a consultar en la base de datos
   req.open('GET', 'BD/chat_consulta.php', true);
   req.send();
}

//Función Ajax que hace que se refresque la página cada segundo o el tiempo indicado
// $(document).ready(function(){
//    setInterval(function(){
//       $('#chat').load('BD/chat_consulta.php');}, 1000);

// });
setInterval(function(){
   ajax();}, 1000);


   function enviar_mensaje(){
      document.form_chat.submit();
      // window.location.href='principal.php';
   }

   //slider en mi aside
      var i = 0;
      var images = [];
      var time = 3000; //para el tiempo de transición

      //Array de imágenes, las que quieras meter
      images[0] = 'img/slider/1.jpg';
      images[1] = 'img/slider/2.jpg';
      images[2] = 'img/slider/3.jpg';
      images[3] = 'img/slider/4.jpg';
      images[4] = 'img/slider/5.jpg';
      images[5] = 'img/slider/6.jpg';
      images[6] = 'img/slider/7.jpg';

      // Change Image
	function changeImg(){
		document.slider.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}
      //Cuando se cargue la página
      window.onload = changeImg;