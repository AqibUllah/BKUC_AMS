var loader=function(e){
	let file = e.target.files;
	let show = "<span>your image : </span>"+file[0].name;
	let output=document.getElementById("lec_selector_profile");

	//if file is image
	if(file[0].type.match("image")){
		let reader = new FileReader();
		reader.addEventListener("load",function(e){
			let data=e.target.result;
			let image = document.createElement("img");
			image.src=data;
			output.innerHTML="";
			output.insertBefore(image,null);
			output.classList.add("image");

		});
		reader.readAsDataURL(file[0]);
	}else{
		//if file isn't image
		let show = "<span>selected file : </span>";
		show = show+file[0].name;
		output.innerHTML=show;
		output.classList.add("active");
		if(output.classList.contains("image")){
			output.classList.remove("image");
		}
	}
	;

	output.innerHTML=show;
	output.classList.add("active");

};

//add event listner for input
let fileinput = document.getElementById("edit_file");
fileinput.addEventListener("change",loader);