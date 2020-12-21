getMySurveys();

var theme = {
    "sport": "<img src=\"img/volleyball-ball-solid.svg\">",
    "kfc" : "<img src=\"img/drumstick-bite-solid.svg\">",
    "musique" : "<img src=\"img/music-solid.svg\">",
    "tele" : "<img src=\"img/tv-solid.svg\">"
}

function pluriel(answer) {
    if (answer > 1){
        return "s"
    }
    else {
        return ""
    }
}

function getMySurveys() {
    $.ajax({
        url: "?action=get-my-surveys",
        dataType: 'json',
        success: function (response) {
            $("#my-surveys").empty();
            response.forEach(survey => {
                $("#my-surveys").append(`
                    <div class="sondage">
                        <a href="?page=survey&survey=${survey.survey_id}"><h3>${survey.survey_title}</h3></a>
                        <div class="categorie">
                            ${theme[survey.survey_topic]}
                        </div>
                        <div class="info">
                            <p>1 question</p>
                            <p>${survey.nb_answers} réponse${pluriel(survey.nb_answers)}</p>
                            <p>crée par ${survey.user_username}</p>
                        </div>
                        <div class="pouce">
                            <a href="#"><img src="img/thumbs-down-regular.svg"></a>
                            <a href="#"><img src="img/thumbs-up-regular.svg"></a>
                        </div>
                    </div>             
                `)
            });
        }
    })
}

$('#button-logout').click(function(){
    $.ajax({
        url: "?action=log-out",
        dataType: 'json',
        success: function (response) {
            window.location.href = '?page=login';
        }
    })
})


{/* <a href="?page=survey&survey=${survey.survey_id}">${survey.survey_title}</a> fait par ${survey.friend_username} */}