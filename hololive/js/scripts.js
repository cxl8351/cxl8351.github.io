var watson_button = document.getElementById("watson_more")
var watson_info = document.getElementById("watson_result")

watson_info.style.display = 'none'

function toggleMore(watson_info){
    if (watson_info.style.display == 'block') {
        watson_info.style.display = 'none'
    }
    else{
        watson_info.style.display = 'block'
    }
};

watson_button.addEventListener('click', function(){
    toggleMore(watson_info)
});