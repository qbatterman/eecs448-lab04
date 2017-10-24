// QUINTEN BATTERMAN
//EECS 488

let current = 0;
let itemCount = 2; // 0 would mean one item
let loggedIn = false;

function createAccount()
{
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;

	let sub = "";
	sub = username.substring(username.length - 4,username.length);

	if(sub == ".com" && username.length > 6)
	{
		for(let i = 1; i < username.length-5; i++)
		{
			if (username.charAt(i)== '@')
			{
				if(password.length >= 8)
				{
					//this is where we create your account, don't think we actually have to save info though
					window.alert("Account created, you are logged in!")
					loggedIn = true;
				}
				else
				{
					window.alert("Your password must be at least 8 characters.")
				}

				break;
			}
			else if (i == username.length-6)
				window.alert("Your username must be an email.");
		}
	}
	else
		window.alert("Your username must be an email.");



}

function login()
{
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;

	let sub = "";
	sub = username.substring(username.length - 4,username.length);

	//Placeholder logic for pretend login, check against database in reality.
	if(sub == ".com" && username.length > 6)
	{
		for(let i = 1; i < username.length-5; i++)
		{
			if (username.charAt(i)== '@')
			{
				if(password.length >= 8)
				{
					//this is where we create your account, don't think we actually have to save info though
					window.alert("Logged in!")
					loggedIn = true;
				}
				else
				{
					window.alert("Password or username did not match, please try agin.")
				}

				break;
			}
			else if(i == username.length-6)
				window.alert("Your username must be an email.");
		}
	}
	else
		window.alert("Your username must be an email.");

}

//going to prvious item in inventory
function previous()
{
	let item = document.getElementById("pictures");
	if (current == 0)
	{
		current = itemCount;
	}
	else
	{
		current--;
	}

	item.src = "item" + current.toString() + ".jpg";
}

//going to next item in inventory
function next()
{
	let item = document.getElementById("pictures");
	if (current == itemCount)
	{
		current = 0;
	}

	else
	{
		current++;
	}

	item.src = "item" + current.toString() + ".jpg";

}

//checking everything filled out before submitting
function checkForm()
{
	if(loggedIn == false)
	{
		window.alert("You cannnot checkout until you are logged in");
		return false;
	}


let radios = document.getElementsByName('shipping');
let selected = false;
for (let i = 0, length = radios.length; i < length; i++)
{
    if (radios[i].checked)
		{
			selected = true;
      break;
    }
}

if (selected == false)
{
	window.alert("You must have a shipping option selected!")
	return false;
}

let g = document.getElementById("guitar").checked
let p = document.getElementById("picks").checked
let j = document.getElementById("jacket").checked
if(g == false && p == false && j == false)
{
		window.alert("You must select at least one item")
		return false;
}

	return true;
}

function reset()
{
	loggedIn = false;
	/*
	document.getElementsById("loginFields").reset();

	let radio = document.getElementsByName("shipping");
	for(let i = 0; i < radio.length; i++)
		radio[i].checked = false; */
}
