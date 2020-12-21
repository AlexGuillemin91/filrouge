let urlParams = new URLSearchParams(window.location.search);
let survey_id = urlParams.get('survey');
if(urlParams.has('survey')){
    getResult(survey_id);
}

function pluriel(answer) {
    if (answer > 1){
        return "s"
    }
    else {
        return ""
    }
}

function getResult(id) {
    $.ajax({
        url: `?action=get-result&survey=${id}`,
        dataType: 'json',
        success: function (response) {
            $('#survey-title').text(response.title);
            response.answers.forEach(answer => {
                $('#survey-answers').append(
                    `<div class="survey-answers-count">
                        <p>${answer.count} vote${pluriel(answer.count)} pour ${answer.text}</p>
                    </div>`
                )
            });
        }
    })
}