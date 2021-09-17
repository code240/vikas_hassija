function custom_alert_danger_one(heading,message){
    
	document.body.innerHTML += `
      <div class="ninja-body-black-alert" id="ninjaalert">
		<div class="ninja-alert-one" >
		   <div class="top_of_ninja_alert_one ninja-danger-alert">
		     <span class="ninja-alert-heading text-truncate" id="ninja-danger-alert-content-heading">
		       __ 
		     </span>
		   </div>
		   <div class="content-container-in-ninja-alert-one ninja-danger-alert-border">
		      <p class="alert-one-content-design-ninja" id="ninja-danger-alert-content-id">
		        __
		      </p>
		   </div>
		   <div class="ninja-alert-one-okay-btn-main-div">
		      <button class="alert-one-okay-btn ninja-alert-danger-btn" onclick="dismissalert()">OK</button>
		   </div>
		</div>
       </div>
	`;
	document.getElementById('ninja-danger-alert-content-heading').innerHTML = heading;
	document.getElementById('ninja-danger-alert-content-id').innerHTML = message;
}

function custom_alert_danger_one_speical_for_delete(heading,message){
    
	document.body.innerHTML += `
      <div class="ninja-body-black-alert" id="ninjaalert">
		<div class="ninja-alert-one" >
		   <div class="top_of_ninja_alert_one ninja-danger-alert">
		     <span class="ninja-alert-heading text-truncate" id="ninja-danger-alert-content-heading">
		       __ 
		     </span>
		   </div>
		   <div class="content-container-in-ninja-alert-one ninja-danger-alert-border">
		      <p class="alert-one-content-design-ninja" id="ninja-danger-alert-content-id">
		        __
		      </p>
		   </div>
		   <div class="ninja-alert-one-okay-btn-main-div">
		      <button class="alert-one-okay-btn ninja-alert-danger-btn" onclick="dismissalertwithredirect()">OK</button>
		   </div>
		</div>
       </div>
	`;
	document.getElementById('ninja-danger-alert-content-heading').innerHTML = heading;
	document.getElementById('ninja-danger-alert-content-id').innerHTML = message;
}

function dismissalertwithredirect(){
	document.getElementById('ninjaalert').remove();
	window.setTimeout(function(){
        window.location.href = "../access.php";
		// history.go(-2);
    }, 2000);
}

function custom_alert_warning_one(heading,message){
    
	document.body.innerHTML += `
      <div class="ninja-body-black-alert" id="ninjaalert">
		<div class="ninja-alert-one" >
		   <div class="top_of_ninja_alert_one ninja-warning-alert">
		     <span class="ninja-alert-heading text-truncate" id="ninja-warning-alert-content-heading">
		       __ 
		     </span>
		   </div>
		   <div class="content-container-in-ninja-alert-one ninja-warning-alert-border">
		      <p class="alert-one-content-design-ninja" id="ninja-warning-alert-content-id">
		        __
		      </p>
		   </div>
		   <div class="ninja-alert-one-okay-btn-main-div">
		      <button class="alert-one-okay-btn ninja-alert-warning-btn" onclick="dismissalert()">OK</button>
		   </div>
		</div>
       </div>
	`;
	document.getElementById('ninja-warning-alert-content-heading').innerHTML = heading;
	document.getElementById('ninja-warning-alert-content-id').innerHTML = message;
}




function custom_alert_success_one(heading,message){
    
	document.body.innerHTML += `
      <div class="ninja-body-black-alert" id="ninjaalert">
		<div class="ninja-alert-one" >
		   <div class="top_of_ninja_alert_one ninja-success-alert">
		     <span class="ninja-alert-heading text-truncate" id="ninja-success-alert-content-heading">
		       __ 
		     </span>
		   </div>
		   <div class="content-container-in-ninja-alert-one ninja-success-alert-border">
		      <p class="alert-one-content-design-ninja" id="ninja-success-alert-content-id">
		        __
		      </p>
		   </div>
		   <div class="ninja-alert-one-okay-btn-main-div">
		      <button class="alert-one-okay-btn ninja-alert-success-btn" onclick="dismissalert()">OK</button>
		   </div>
		</div>
       </div>
	`;
	document.getElementById('ninja-success-alert-content-heading').innerHTML = heading;
	document.getElementById('ninja-success-alert-content-id').innerHTML = message;
}




function custom_alert_info_one(heading,message){
    
	document.body.innerHTML += `
      <div class="ninja-body-black-alert" id="ninjaalert">
		<div class="ninja-alert-one" >
		   <div class="top_of_ninja_alert_one ninja-info-alert">
		     <span class="ninja-alert-heading text-truncate" id="ninja-info-alert-content-heading">
		       __ 
		     </span>
		   </div>
		   <div class="content-container-in-ninja-alert-one ninja-info-alert-border">
		      <p class="alert-one-content-design-ninja" id="ninja-info-alert-content-id">
		        __
		      </p>
		   </div>
		   <div class="ninja-alert-one-okay-btn-main-div">
		      <button class="alert-one-okay-btn ninja-alert-info-btn" onclick="dismissalert()">OK</button>
		   </div>
		</div>
       </div>
	`;
	document.getElementById('ninja-info-alert-content-heading').innerHTML = heading;
	document.getElementById('ninja-info-alert-content-id').innerHTML = message;
}




function custom_alert_info_one_update(heading,message){
    
	document.body.innerHTML += `
      <div class="ninja-body-black-alert" id="ninjaalert">
		<div class="ninja-alert-one" >
		   <div class="top_of_ninja_alert_one ninja-info-alert">
		     <span class="ninja-alert-heading text-truncate" id="ninja-info-alert-content-heading">
		       __ 
		     </span>
		   </div>
		   <div class="content-container-in-ninja-alert-one ninja-info-alert-border">
		      <p class="alert-one-content-design-ninja" id="ninja-info-alert-content-id">
		        __
		      </p>
		   </div>
		   <div class="ninja-alert-one-okay-btn-main-div">
		      <button class="alert-one-okay-btn ninja-alert-info-btn" onclick="dismissalert_update()">OK</button>
		   </div>
		</div>
       </div>
	`;
	document.getElementById('ninja-info-alert-content-heading').innerHTML = heading;
	document.getElementById('ninja-info-alert-content-id').innerHTML = message;
}



function custom_alert_info_one_add_data_special(heading,message){
    
	document.body.innerHTML += `
      <div class="ninja-body-black-alert" id="ninjaalert">
		<div class="ninja-alert-one" >
		   <div class="top_of_ninja_alert_one ninja-info-alert">
		     <span class="ninja-alert-heading text-truncate" id="ninja-info-alert-content-heading">
		       __ 
		     </span>
		   </div>
		   <div class="content-container-in-ninja-alert-one ninja-info-alert-border">
		      <p class="alert-one-content-design-ninja" id="ninja-info-alert-content-id">
		        __
		      </p>
		   </div>
		   <div class="ninja-alert-one-okay-btn-main-div">
		      <button class="alert-one-okay-btn ninja-alert-info-btn" onclick="dismissalert_adddata()">OK</button>
		   </div>
		</div>
       </div>
	`;
	document.getElementById('ninja-info-alert-content-heading').innerHTML = heading;
	document.getElementById('ninja-info-alert-content-id').innerHTML = message;
}

function dismissalert_adddata(){
	document.getElementById('ninjaalert').remove();
	window.setTimeout(function(){
        window.location.href = "../access.php";
		// history.go(-2);
    }, 2000);
}

function dismissalert_update(){
	document.getElementById('ninjaalert').remove();
	window.setTimeout(function(){
        window.location.href = "../access.php";
		// history.go(-2);
    }, 2000);
}



function custom_confirm_danger_one(heading,message,one,zero){
    
	document.body.innerHTML += `
      <div class="ninja-body-black-alert" id="ninjaalert">
		<div class="ninja-alert-one" >
		   <div class="top_of_ninja_alert_one ninja-danger-alert">
		     <span class="ninja-alert-heading text-truncate" id="ninja-danger-alert-content-heading">
		       ${heading}
		     </span>
		   </div>
		   <div class="content-container-in-ninja-alert-one ninja-danger-alert-border">
		      <p class="alert-one-content-design-ninja" id="ninja-danger-alert-content-id">
		    	${message}
		      </p>
		   </div>
		   <div class="ninja-alert-one-okay-btn-main-div">
		      <button class="alert-one-okay-btn confirm-one-okay-btn ninja-alert-danger-btn" onclick="dismissconfirm(${one});">YES</button>
		      <button class="alert-one-okay-btn confirm-one-cancel-btn bg-white clr-black ninja-alert-danger-btn" onclick="dismissconfirm(${zero});">Cancel</button>
		   </div>
		</div>
       </div>
	`;
	// document.getElementById('ninja-danger-alert-content-heading').innerHTML = heading;
	// document.getElementById('ninja-danger-alert-content-id').innerHTML = message;
}

function dismissconfirm(x){
	document.getElementById('ninjaalert').remove();
	x();
}


function dismissalert(){
	document.getElementById('ninjaalert').remove();
}