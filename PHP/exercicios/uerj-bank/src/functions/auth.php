<?php

function hasUserLogged()
{
    return isset($_SESSION[APP_CONFIG["userSessionKey"]]);
}

function setUserSession($user)
{
    $_SESSION[APP_CONFIG["userSessionKey"]] = $user;
}

function unsetUserSession(){
    session_destroy();
    redirect(APP_CONFIG['authFailEndpoint']);
}

function authGuard($guard)
{

    if (!hasUserLogged() && $guard) {
        redirect(APP_CONFIG['authFailEndpoint']);
    }
}
