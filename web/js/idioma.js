var check=document.querySelector(".check");
check.addEventListener('click',idioma);

function idioma(){
	let id=check.checked;
	if (id==true) {
		location.href="Paginas/En/index.php";
	}else{
		location.href="../../index.php";
	}

}