<?php	function isLoggedIn()
{
    if (!isset($_SESSION['isloggedin']) || $_SESSION['isloggedin'] !== true)
    {
        return false;
    }
	
    return true;
}

function isAdmin()
{
    if (!isset($_SESSION['isadmin']) || $_SESSION['isadmin'] !== true)
    {
        return false;
    }
	
    return true;
}
	
	
	}