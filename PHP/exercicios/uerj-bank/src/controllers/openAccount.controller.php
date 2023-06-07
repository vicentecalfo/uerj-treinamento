<?php
class OpenAccountController
{
    function init()
    {
        router(
            'GET',
            '^/abrir-conta',
            fn () => render(
                template: "openAccount",
                data: array('title' => 'Dashboard'),
                noWrapper:true
            )
        );

        router(
            'POST',
            '^/abrir-conta',
            function(){
                render(
                    template: "accountOpened",
                    data: array(
                        'firstName' => $_POST["firstName"],
                        'lastName' => $_POST["lastName"],
                    ),
                    noWrapper:true
                );
            }
        );
    }
}

(new OpenAccountController())->init();
