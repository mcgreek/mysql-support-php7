<?php

$dbConnectionLink = null;

/**
 * Fake mysql_connect method
 * 
 * @global type $dbConnectionLink
 * @param string $host
 * @param string $user
 * @param string $password
 * @param string $db
 */
function mysql_connect($host, $user, $password, $db)
{
    global $dbConnectionLink;
    
    $dbConnectionLink = mysqli_connect($host, $user, $password, $db);
}

/**
 * Fake mysql_select_db method
 * 
 * @global type $dbConnectionLink
 * @param string $db
 * @return type
 */
function mysql_select_db($db)
{
    global $dbConnectionLink;
    
    return mysqli_select_db($dbConnectionLink, $db);
}

/**
 * Fake mysql_error function
 * 
 * @global type $dbConnectionLink
 * @return string
 */
function mysql_error()
{
    global $dbConnectionLink;
    
    return mysqli_error($dbConnectionLink);
}

/**
 * Fake mysql_query function
 * 
 * @global type $dbConnectionLink
 * @param string $query
 * @param type $link
 * @return mixed
 */
function mysql_query($query, $link = null)
{
    global $dbConnectionLink;
    
    return mysqli_query($dbConnectionLink, $query);
}

/**
 * Fake mysql_fetch_array function
 * 
 * @param mysqli_result $res
 * @return mixed
 */
function mysql_fetch_array($res)
{
    return mysqli_fetch_array($res);
}

/**
 * Fake mysql_num_rows function
 * 
 * @param mysqli_result $resource
 * @return int
 */
function mysql_num_rows($resource)
{
    return mysqli_num_rows($resource);
}
