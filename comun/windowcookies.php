<script>
    window.cookieconsent.initialise({
      "palette": {
      "popup": {
        "background": "#000000"
      },
      "button": {
        "background": "#fd9d10"
      }
    },
    "content": {
      "message": "Nuestra página, igual que muchas otras, utiliza cookies para mejorar tu experiencia de navegación.\n\nPor favor, revisa nuestra política de privacidad para obtener más información sobre el uso que hacemos de las cookies.",
      "dismiss": "Aceptar y cerrar",
      "link": "Política de privacidad",
      "href": "/privacidad.php"
    },
    "onPopupClose": function() {
      setGoogleCookies();
    }
  });
  </script>