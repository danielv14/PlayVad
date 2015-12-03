window.onload = function() {

  function toggle() {

  	var el = document.getElementById("open-links-id");

  	if ( el.style.display != 'flex' ) {

  		el.style.display = 'flex';

  	}

  	else {

  		el.style.display = '';

  	}

  }

  document.getElementById("hamburger").addEventListener("click", toggle);

}
