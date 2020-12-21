// penser a faire un si is connected = 1 c'est plus connexion mais genre espace perso ou profil
getUsername();

function getUsername() {
    $ajax({
        url: "?action=get-user-username",
        dataType: 'json',
        success: function (response) {
            $("#header-connexion").empty();
            if (user.is_connected == 1) {
                $("#header-connexion").append(`
                <a href="?page=profil" id="compte"><img src="img/user-solid.svg" alt="user">
                    <h2>Profil</h2>
                </a>`)
            }
            else {
                $("#header-connexion").append(`
                <a href="?page=login" id="compte"><img src="img/user-solid.svg" alt="user">
                    <h2>Connexion</h2>
                </a>`)
            }
        }
    })
}