function init_call_button (hash)
{
	if (!hash)
	{
		return;
	}

	insertJs_call_button(hash);
}

function insertJs_call_button (hash)
{
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src = `https://smartarget.online/loader.js?ver=${Math.random()}&u=${hash}&source=wordpress_call_button`;
	document.head.appendChild(script);
}

init_call_button(smartarget_call_button_params.hash);
