<?php

namespace App\Views;

class Login {

	static function voidlogin(){
		return "<!DOCTYPE html>
                <html>
                <head>
                    <title>FrancoProject</title>
                    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
                    <link rel=\"stylesheet\" href=\"../../public/css/styleLogin.css\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                </head>
                <body>
                    <div class=\"login__bg\">
                        <img class=\"login__img\" src=\"../../public/images/129763.jpg\">
                        <div class=\"login__layer\">
                            <form action=\".\" method=\"post\" class=\"login__form\">
                                <div class=\"login__form__text\">
                                    <input class=\"login__input\" type=\"text\" name=\"name\" id=\"name\" placeholder=\"Username\">
                                </div>
                                <div class=\"login__form__text\">
                                    <input class=\"login__input\" type=\"Password\" name=\"Password\" id=\"Password\" placeholder=\"Password\">
                                </div>
                                <div class=\"login__form__submit\">
                                    <input class=\"login__button\" type=\"submit\" value=\"Subscribe!\">
                                </div>
                            </form>
                        </div>
                    </div>
                </body>
                </html>";
	}
}
